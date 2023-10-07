# Animals
(*animals*)

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
    $request->age = 239780;
    $request->color = 'maroon';
    $request->id = '<ID>';
    $request->name = 'Buckinghamshire TLS';

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

$sdk = Pb::builder()
    ->build();

try {
    $request = new ComplexObject();
    $request->data = new ComplexObjectData();
    $request->data->animal = [
        new Animals(),
    ];
    $request->data->birds = 'Mesquite';
    $request->data->createdDate = 'joule';
    $request->data->updatedDate = 'Granite';
    $request->meta = 'Officer';
    $request->name = 'Tala female';

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
    $request->id = '<ID>';

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
    $request->age = 'Avon';
    $request->color = 'turquoise';
    $request->id = '<ID>';
    $request->name = 'plum';

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
        'qua',
    ];

    $response = $sdk->animals->getAllLivingThings($request);

    if ($response->getAllLivingThings200ApplicationJSONOneOf !== null) {
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
    $request->animals->age = 942154;
    $request->animals->color = 'plum';
    $request->animals->id = '<ID>';
    $request->animals->name = 'enhance product';
    $request->id = '<ID>';
    $request->perPage = 208636;

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
    $request->animals->age = 15412;
    $request->animals->color = 'ivory';
    $request->animals->id = '<ID>';
    $request->animals->name = 'index Elizabeth Fish';
    $request->id = '<ID>';

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

