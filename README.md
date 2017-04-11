# Companies House PHP API Client

API Documentation: https://developer.companieshouse.gov.uk/api/docs/index.html

## Example

```php
require_once __DIR__ . '/vendor/autoload.php';

$apiKey = 'API KEY HERE';

/** @var \philwc\Call\Search\Name $nameSearch */
$nameSearch = \philwc\CompaniesHouseFactory::get('Search', 'Name', $apiKey);
/** @var \philwc\Call\Search\Number $numberSearch */
$numberSearch = \philwc\CompaniesHouseFactory::get('Search', 'Number', $apiKey);

$results = $nameSearch->search('cast uk');
/** @var \philwc\Entity\CompanySearch $result */
foreach ($results as $result) {
    /** @var \philwc\Entity\CompanyProfile $company */
    $company = $numberSearch->search($result->getCompanyNumber());

    // Do something with company...
}
```