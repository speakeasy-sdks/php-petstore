# Animals

## Overview

Work with Animals.

### Available Operations

* [createAnimal](#createanimal) - create an animal
* [createLivingThings](#createlivingthings) - create a living thing
* [deleteAnimalsById](#deleteanimalsbyid) - Delete Animal Object
* [getAllAnimals](#getallanimals) - Your GET endpoint
* [getAllLivingThings](#getalllivingthings) - Get All living things
* [getAnimalsById](#getanimalsbyid) - Get Animal
* [updateAnimalsById](#updateanimalsbyid) - Update Animal

## createAnimal

Post animals description

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \php\petstore\Pb;
use \php\petstore\Models\Operations\CreateAnimalRequestBody;
use \php\petstore\Models\Operations\CreateAnimalSecurity;

$sdk = Pb::builder()
    ->build();

try {
    $request = new CreateAnimalRequestBody();
    $request->age = 870013;
    $request->color = 'at';
    $request->id = 'f7cc78ca-1ba9-428f-8816-742cb7392059';
    $request->name = 'Sheryl Fadel';

    $requestSecurity = new CreateAnimalSecurity();
    $requestSecurity->key1 = '';

    $response = $sdk->animals->createAnimal($request, $requestSecurity);

    if ($response->animals !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\php\petstore\Models\Operations\CreateAnimalRequestBody](../../models/operations/CreateAnimalRequestBody.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |
| `security`                                                                                                    | [\php\petstore\Models\Operations\CreateAnimalSecurity](../../models/operations/CreateAnimalSecurity.md)       | :heavy_check_mark:                                                                                            | The security requirements to use for the request.                                                             |


### Response

**[?\php\petstore\Models\Operations\CreateAnimalResponse](../../models/operations/CreateAnimalResponse.md)**


## createLivingThings

Create a living thing

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \php\petstore\Pb;
use \php\petstore\Models\Shared\ComplexObject;
use \php\petstore\Models\Shared\ComplexObjectData;
use \php\petstore\Models\Shared\Animals;
use \php\petstore\Models\Shared\ComplexObjectDataBirds;

$sdk = Pb::builder()
    ->build();

try {
    $request = new ComplexObject();
    $request->data = new ComplexObjectData();
    $request->data->animal = [
        new Animals(),
    ];
    $request->data->birds = new ComplexObjectDataBirds();
    $request->data->birds->food = [
        'hic',
    ];
    $request->data->birds->id = 'ea7596eb-10fa-4aa2-b52c-5955907aff1a';
    $request->data->birds->name = 'Cecilia Crooks';
    $request->data->createdDate = 'numquam';
    $request->data->updatedDate = 466311;
    $request->meta = new Pagination();
    $request->meta->hasMore = false;
    $request->meta->pageNumber = 244425;
    $request->name = 'Miss Eugene Hauck';

    $response = $sdk->animals->createLivingThings($request);

    if ($response->complexObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                         | Type                                                                              | Required                                                                          | Description                                                                       |
| --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| `$request`                                                                        | [\php\petstore\Models\Shared\ComplexObject](../../models/shared/ComplexObject.md) | :heavy_check_mark:                                                                | The request object to use for the request.                                        |


### Response

**[?\php\petstore\Models\Operations\CreateLivingThingsResponse](../../models/operations/CreateLivingThingsResponse.md)**


## deleteAnimalsById

Delete the animal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \php\petstore\Pb;
use \php\petstore\Models\Operations\DeleteAnimalsByIdRequest;

$sdk = Pb::builder()
    ->build();

try {
    $request = new DeleteAnimalsByIdRequest();
    $request->id = '52c3f5ad-019d-4a1f-be78-f097b0074f15';

    $response = $sdk->animals->deleteAnimalsById($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\php\petstore\Models\Operations\DeleteAnimalsByIdRequest](../../models/operations/DeleteAnimalsByIdRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\php\petstore\Models\Operations\DeleteAnimalsByIdResponse](../../models/operations/DeleteAnimalsByIdResponse.md)**


## getAllAnimals

Get Animals Description

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \php\petstore\Pb;
use \php\petstore\Models\Operations\GetAllAnimalsRequest;

$sdk = Pb::builder()
    ->build();

try {
    $request = new GetAllAnimalsRequest();
    $request->age = 'dolore';
    $request->color = 'iusto';
    $request->id = '1b5e6e13-b99d-4488-a1e9-1e450ad2abd4';
    $request->name = 'Tina Jacobi';

    $response = $sdk->animals->getAllAnimals($request);

    if ($response->animals !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\php\petstore\Models\Operations\GetAllAnimalsRequest](../../models/operations/GetAllAnimalsRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\php\petstore\Models\Operations\GetAllAnimalsResponse](../../models/operations/GetAllAnimalsResponse.md)**


## getAllLivingThings

get All living things data

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \php\petstore\Pb;
use \php\petstore\Models\Operations\GetAllLivingThingsRequest;

$sdk = Pb::builder()
    ->build();

try {
    $request = new GetAllLivingThingsRequest();
    $request->filter = [
        'perferendis',
    ];

    $response = $sdk->animals->getAllLivingThings($request);

    if ($response->getAllLivingThings200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\php\petstore\Models\Operations\GetAllLivingThingsRequest](../../models/operations/GetAllLivingThingsRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\php\petstore\Models\Operations\GetAllLivingThingsResponse](../../models/operations/GetAllLivingThingsResponse.md)**


## getAnimalsById

Get an animal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \php\petstore\Pb;
use \php\petstore\Models\Operations\GetAnimalsByIdRequest;
use \php\petstore\Models\Shared\Animals;
use \php\petstore\Models\Operations\GetAnimalsByIdSecurity;

$sdk = Pb::builder()
    ->build();

try {
    $request = new GetAnimalsByIdRequest();
    $request->animals = new Animals();
    $request->animals->age = 164940;
    $request->animals->color = 'assumenda';
    $request->animals->id = '502a94bb-4f63-4c96-9e9a-3efa77dfb14c';
    $request->animals->name = 'Nathaniel Hyatt';
    $request->id = '395efb9b-a88f-43a6-a997-074ba4469b6e';
    $request->perPage = 135474;

    $requestSecurity = new GetAnimalsByIdSecurity();
    $requestSecurity->key1 = '';

    $response = $sdk->animals->getAnimalsById($request, $requestSecurity);

    if ($response->animals !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\php\petstore\Models\Operations\GetAnimalsByIdRequest](../../models/operations/GetAnimalsByIdRequest.md)   | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |
| `security`                                                                                                  | [\php\petstore\Models\Operations\GetAnimalsByIdSecurity](../../models/operations/GetAnimalsByIdSecurity.md) | :heavy_check_mark:                                                                                          | The security requirements to use for the request.                                                           |


### Response

**[?\php\petstore\Models\Operations\GetAnimalsByIdResponse](../../models/operations/GetAnimalsByIdResponse.md)**


## updateAnimalsById

Update the animal object

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \php\petstore\Pb;
use \php\petstore\Models\Operations\UpdateAnimalsByIdRequest;
use \php\petstore\Models\Shared\Animals;
use \php\petstore\Models\Operations\UpdateAnimalsByIdSecurity;

$sdk = Pb::builder()
    ->build();

try {
    $request = new UpdateAnimalsByIdRequest();
    $request->animals = new Animals();
    $request->animals->age = 102863;
    $request->animals->color = 'magnam';
    $request->animals->id = '1959890a-fa56-43e2-916f-e4c8b711e5b7';
    $request->animals->name = 'Marty Cormier';
    $request->id = '028921cd-dc69-4260-9fb5-76b0d5f0d30c';

    $requestSecurity = new UpdateAnimalsByIdSecurity();
    $requestSecurity->key1 = '';

    $response = $sdk->animals->updateAnimalsById($request, $requestSecurity);

    if ($response->animals !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\php\petstore\Models\Operations\UpdateAnimalsByIdRequest](../../models/operations/UpdateAnimalsByIdRequest.md)   | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |
| `security`                                                                                                        | [\php\petstore\Models\Operations\UpdateAnimalsByIdSecurity](../../models/operations/UpdateAnimalsByIdSecurity.md) | :heavy_check_mark:                                                                                                | The security requirements to use for the request.                                                                 |


### Response

**[?\php\petstore\Models\Operations\UpdateAnimalsByIdResponse](../../models/operations/UpdateAnimalsByIdResponse.md)**

