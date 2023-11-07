# php/petstore

<!-- Start SDK Installation -->
## SDK Installation

### Composer

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/speakeasy-sdks/php-petstore.git"
        }
    ],
    "require": {
        "php/petstore": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation -->

## SDK Example Usage
<!-- Start SDK Example Usage -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use php\petstore;
use php\petstore\Models\Shared;
use php\petstore\Models\Operations;

$security = new Shared\Security();
$security->key1 = '';

$sdk = petstore\Pb::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CreateAnimalRequestBody();
    $request->age = 239780;
    $request->color = 'maroon';
    $request->id = '<ID>';
    $request->name = 'string';

    $response = $sdk->animals->createAnimal($request);

    if ($response->animals !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage -->

<!-- Start SDK Available Operations -->
## Available Resources and Operations


### [Animals](docs/sdks/animals/README.md)

* [createAnimal](docs/sdks/animals/README.md#createanimal) - create an animal
* [createLivingThings](docs/sdks/animals/README.md#createlivingthings) - create a living thing
* [deleteAnimalsById](docs/sdks/animals/README.md#deleteanimalsbyid) - Delete Animal Object
* [getAllAnimals](docs/sdks/animals/README.md#getallanimals) - Your GET endpoint
* [getAllLivingThings](docs/sdks/animals/README.md#getalllivingthings) - Get All living things
* [getAnimalsById](docs/sdks/animals/README.md#getanimalsbyid) - Get Animal
* [updateAnimalsById](docs/sdks/animals/README.md#updateanimalsbyid) - Update Animal

### [Birds](docs/sdks/birds/README.md)

* [createLivingThings](docs/sdks/birds/README.md#createlivingthings) - create a living thing
* [createNewBird](docs/sdks/birds/README.md#createnewbird) - Create new Bird
* [getAllBirds](docs/sdks/birds/README.md#getallbirds) - Get Birds
* [getAllLivingThings](docs/sdks/birds/README.md#getalllivingthings) - Get All living things
<!-- End SDK Available Operations -->



<!-- Start Dev Containers -->

<!-- End Dev Containers -->

<!-- Placeholder for Future Speakeasy SDK Sections -->



### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release!

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
