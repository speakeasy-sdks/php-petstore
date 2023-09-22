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
use \php\petstore\Models\Shared\Security;
use \php\petstore\Models\Operations\CreateAnimalRequestBody;

$sdk = Pb::builder()
    ->build();

try {
    $request = new CreateAnimalRequestBody();
    $request->age = 943749;
    $request->color = 'saepe';
    $request->id = 'a7596eb1-0faa-4a23-92c5-955907aff1a3';
    $request->name = 'Carlos Ziemann';

    $response = $sdk->animals->createAnimal($request);

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
use \php\petstore\Models\Shared\Security;
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
        'numquam',
    ];
    $request->data->birds->id = '67739251-aa52-4c3f-9ad0-19da1ffe78f0';
    $request->data->birds->name = 'Mr. Jared Ritchie';
    $request->data->createdDate = 979587;
    $request->data->updatedDate = 359444;
    $request->meta = new Pagination();
    $request->meta->hasMore = false;
    $request->meta->pageNumber = 480894;
    $request->name = 'Maryann Hamill';

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
use \php\petstore\Models\Shared\Security;
use \php\petstore\Models\Operations\DeleteAnimalsByIdRequest;

$sdk = Pb::builder()
    ->build();

try {
    $request = new DeleteAnimalsByIdRequest();
    $request->id = 'e13b99d4-88e1-4e91-a450-ad2abd442698';

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
use \php\petstore\Models\Shared\Security;
use \php\petstore\Models\Operations\GetAllAnimalsRequest;

$sdk = Pb::builder()
    ->build();

try {
    $request = new GetAllAnimalsRequest();
    $request->age = 'perferendis';
    $request->color = 'magni';
    $request->id = 'd502a94b-b4f6-43c9-a9e9-a3efa77dfb14';
    $request->name = 'Irving Jenkins';

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
use \php\petstore\Models\Shared\Security;
use \php\petstore\Models\Operations\GetAllLivingThingsRequest;

$sdk = Pb::builder()
    ->build();

try {
    $request = new GetAllLivingThingsRequest();
    $request->filter = [
        'accusamus',
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
use \php\petstore\Models\Shared\Security;
use \php\petstore\Models\Operations\GetAnimalsByIdRequest;
use \php\petstore\Models\Shared\Animals;

$sdk = Pb::builder()
    ->build();

try {
    $request = new GetAnimalsByIdRequest();
    $request->animals = new Animals();
    $request->animals->age = 249796;
    $request->animals->color = 'occaecati';
    $request->animals->id = '5efb9ba8-8f3a-4669-9707-4ba4469b6e21';
    $request->animals->name = 'Frances Marks';
    $request->id = '890afa56-3e25-416f-a4c8-b711e5b7fd2e';
    $request->perPage = 868126;

    $response = $sdk->animals->getAnimalsById($request);

    if ($response->animals !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\php\petstore\Models\Operations\GetAnimalsByIdRequest](../../models/operations/GetAnimalsByIdRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


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
use \php\petstore\Models\Shared\Security;
use \php\petstore\Models\Operations\UpdateAnimalsByIdRequest;
use \php\petstore\Models\Shared\Animals;

$sdk = Pb::builder()
    ->build();

try {
    $request = new UpdateAnimalsByIdRequest();
    $request->animals = new Animals();
    $request->animals->age = 37559;
    $request->animals->color = 'consequuntur';
    $request->animals->id = '8921cddc-6926-401f-b576-b0d5f0d30c5f';
    $request->animals->name = 'Robin D'Amore';
    $request->id = '7053202c-73d5-4fe9-b90c-28909b3fe49a';

    $response = $sdk->animals->updateAnimalsById($request);

    if ($response->animals !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\php\petstore\Models\Operations\UpdateAnimalsByIdRequest](../../models/operations/UpdateAnimalsByIdRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\php\petstore\Models\Operations\UpdateAnimalsByIdResponse](../../models/operations/UpdateAnimalsByIdResponse.md)**

