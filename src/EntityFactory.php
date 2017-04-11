<?php

declare(strict_types=1);

namespace philwc;

use philwc\Entity\EntityInterface;

/**
 * Class EntityFactory
 * @package CastUK\Bullhorn\Data
 */
class EntityFactory
{
    /**
     * @param string $entity
     * @param array $data
     *
     * @return EntityCollection
     * @throws \ReflectionException
     * @throws \RuntimeException
     */
    public static function getCollection(string $entity, array $data): EntityCollection
    {
        $instances = new EntityCollection();

        if (array_key_exists(0, $data)) {
            foreach ($data as $record) {
                $instances->add(self::getSingle($entity, $record));
            }
        } else {
            $instances->add(self::getSingle($entity, $data));
        }

        return $instances;
    }

    /**
     * @param string $entity
     * @param array $data
     *
     * @return EntityInterface
     * @throws \ReflectionException
     */
    public static function getSingle(string $entity, array $data): EntityInterface
    {
        $reflectionClass = new \ReflectionClass($entity);

        /**
         * Replace any null values with ''
         */
        $data = array_map(
            function ($item) {
                if ($item === null) {
                    return '';
                }

                return $item;
            },
            $data
        );

        $instance = $reflectionClass->newInstance();

        $methods = $reflectionClass->getMethods(\ReflectionMethod::IS_PUBLIC);
        foreach ($methods as $method) {
            $methodName = $method->name;
            if (strpos($methodName, 'set') !== 0) {
                continue;
            }

            $field = strtolower(preg_replace('/(?<!^)[A-Z0-9]/', '_$0', str_replace('set', '', $methodName)));

            if (!array_key_exists($field, $data)) {
                continue;
            }

            $params = $method->getParameters();
            if (array_key_exists(0, $params)) {
                $param = $params[0];

                $class = $param->getClass();

                if ($class && $class->name) {
                    if ($class->implementsInterface(EntityInterface::class)) {
                        $data[$field] = EntityFactory::getSingle($class->name, (array)$data[$field]);
                    }

                    if ($class->name === 'DateTime') {
                        if ($data[$field] !== '') {
                            try {
                                $data[$field] = new \DateTime($data[$field]);
                            } catch (\Exception $e) {
                                unset($data[$field]);
                            }
                        } else {
                            unset($data[$field]);
                        }
                    }
                }
                $type = (string)$param->getType();
                if ($type) {
                    if ($type === 'float') {
                        $data[$field] = (float)$data[$field];
                    }
                    if ($type === 'int') {
                        $data[$field] = (int)$data[$field];
                    }
                }
            }

            if (array_key_exists($field, $data)) {
                $instance->$methodName($data[$field]);
            }
        }

        /**
         * Finally, get an entity instance
         */

        /**
         * @var EntityInterface $instance
         */
        return $instance;
    }

    /**
     * @param EntityInterface $entity
     * @param array $filter
     *
     * @return array
     * @throws \ReflectionException
     */
    public static function toArray(EntityInterface $entity, array $filter = []): array
    {
        $data = [];

        $reflectionClass = new \ReflectionClass($entity);

        $methods = $reflectionClass->getMethods(\ReflectionMethod::IS_PUBLIC);
        foreach ($methods as $method) {
            $methodName = $method->name;

            if (strpos($methodName, 'get') === 0) {
                $field = lcfirst(str_replace('get', '', $methodName));

                if (empty($filter) || in_array($field, $filter, true)) {
                    $data[$field] = $entity->$methodName();

                    if ($data[$field] instanceof EntityInterface) {
                        $data[$field] = self::toArray($data[$field]);
                    }

                    if ($data[$field] instanceof \DateTime) {
                        $data[$field] = $data[$field]->format(\DateTime::ATOM);
                    }

                    if ($data[$field] === null) {
                        unset($data[$field]);
                        continue;
                    }
                }
            }
        }

        return $data;
    }
}
