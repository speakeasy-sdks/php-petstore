# animals

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
        new Animals(),
        new Animals(),
        new Animals(),
    ];
    $request->data->birds = new ComplexObjectDataBirds();
    $request->data->birds->food = [
        'fuga',
        'in',
        'corporis',
        'iste',
    ];
    $request->data->birds->id = '6eb10faa-a235-42c5-9559-07aff1a3a2fa';
    $request->data->birds->name = 'Francis Jerde';
    $request->data->createdDate = 623510;
    $request->data->updatedDate = 338007;
    $request->meta = new Pagination();
    $request->meta->hasMore = false;
    $request->meta->pageNumber = 674752;
    $request->name = 'Bill Conn';

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
    $request->id = 'f5ad019d-a1ff-4e78-b097-b0074f15471b';

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
    $request->age = 'enim';
    $request->color = 'accusamus';
    $request->id = '6e13b99d-488e-41e9-9e45-0ad2abd44269';
    $request->name = 'Christopher Cummerata';

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
        'fugit',
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
    $request->animals->age = 677817;
    $request->animals->color = 'excepturi';
    $request->animals->id = '4bb4f63c-969e-49a3-afa7-7dfb14cd66ae';
    $request->animals->name = 'Toni Haley';
    $request->id = 'b9ba88f3-a669-4970-b4ba-4469b6e21419';
    $request->perPage = 354047;

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
    $request->animals->age = 590873;
    $request->animals->color = 'quos';
    $request->animals->id = '90afa563-e251-46fe-8c8b-711e5b7fd2ed';
    $request->animals->name = 'Kathryn Lang';
    $request->id = '1cddc692-601f-4b57-ab0d-5f0d30c5fbb2';

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

