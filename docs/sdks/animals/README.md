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

require 'vendor/autoload.php';

use \php\petstore;
use \php\petstore\Models\Shared;
use \php\petstore\Models\Operations;

$security = new Shared\Security();
$security->key1 = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = petstore\Pb::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateAnimalRequestBody();
    $request->age = 239780;
    $request->color = 'maroon';
    $request->id = '<id>';
    $request->name = '<value>';;

    $response = $sdk->animals->createAnimal($request);

    if ($response->animals !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\php\petstore\Models\Operations\CreateAnimalRequestBody](../../Models/Operations/CreateAnimalRequestBody.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\php\petstore\Models\Operations\CreateAnimalResponse](../../Models/Operations/CreateAnimalResponse.md)**


## createLivingThings

Create a living thing

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \php\petstore;
use \php\petstore\Models\Shared;

$security = new Shared\Security();
$security->key1 = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = petstore\Pb::builder()->setSecurity($security)->build();

try {
        $request = new Shared\ComplexObject();
    $request->data = new Shared\Data();
    $request->data->animal = [
        new Shared\Animals(),
    ];
    $request->data->birds = '<value>';
    $request->data->createdDate = '<value>';
    $request->data->updatedDate = '<value>';
    $request->meta = '<value>';
    $request->name = '<value>';;

    $response = $sdk->animals->createLivingThings($request);

    if ($response->complexObject !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                         | Type                                                                              | Required                                                                          | Description                                                                       |
| --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| `$request`                                                                        | [\php\petstore\Models\Shared\ComplexObject](../../Models/Shared/ComplexObject.md) | :heavy_check_mark:                                                                | The request object to use for the request.                                        |


### Response

**[?\php\petstore\Models\Operations\CreateLivingThingsResponse](../../Models/Operations/CreateLivingThingsResponse.md)**


## deleteAnimalsById

Delete the animal

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \php\petstore;
use \php\petstore\Models\Shared;
use \php\petstore\Models\Operations;

$security = new Shared\Security();
$security->key1 = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = petstore\Pb::builder()->setSecurity($security)->build();

try {
        $request = new Operations\DeleteAnimalsByIdRequest();
    $request->id = '<id>';;

    $response = $sdk->animals->deleteAnimalsById($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\php\petstore\Models\Operations\DeleteAnimalsByIdRequest](../../Models/Operations/DeleteAnimalsByIdRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\php\petstore\Models\Operations\DeleteAnimalsByIdResponse](../../Models/Operations/DeleteAnimalsByIdResponse.md)**


## getAllAnimals

Get Animals Description

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \php\petstore;
use \php\petstore\Models\Shared;
use \php\petstore\Models\Operations;

$security = new Shared\Security();
$security->key1 = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = petstore\Pb::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetAllAnimalsRequest();
    $request->age = '<value>';
    $request->color = 'pink';
    $request->id = '<id>';
    $request->name = '<value>';;

    $response = $sdk->animals->getAllAnimals($request);

    if ($response->classes !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\php\petstore\Models\Operations\GetAllAnimalsRequest](../../Models/Operations/GetAllAnimalsRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\php\petstore\Models\Operations\GetAllAnimalsResponse](../../Models/Operations/GetAllAnimalsResponse.md)**


## getAllLivingThings

get All living things data

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \php\petstore;
use \php\petstore\Models\Shared;
use \php\petstore\Models\Operations;

$security = new Shared\Security();
$security->key1 = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = petstore\Pb::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetAllLivingThingsRequest();
    $request->filter = [
        '<value>',
    ];;

    $response = $sdk->animals->getAllLivingThings($request);

    if ($response->oneOf !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\php\petstore\Models\Operations\GetAllLivingThingsRequest](../../Models/Operations/GetAllLivingThingsRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\php\petstore\Models\Operations\GetAllLivingThingsResponse](../../Models/Operations/GetAllLivingThingsResponse.md)**


## getAnimalsById

Get an animal

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \php\petstore;
use \php\petstore\Models\Shared;
use \php\petstore\Models\Operations;

$security = new Shared\Security();
$security->key1 = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = petstore\Pb::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetAnimalsByIdRequest();
    $request->animals = new Shared\Animals();
    $request->animals->age = 942154;
    $request->animals->color = 'plum';
    $request->animals->id = '<id>';
    $request->animals->name = '<value>';
    $request->id = '<id>';
    $request->perPage = 377760;;

    $response = $sdk->animals->getAnimalsById($request);

    if ($response->animals !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\php\petstore\Models\Operations\GetAnimalsByIdRequest](../../Models/Operations/GetAnimalsByIdRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\php\petstore\Models\Operations\GetAnimalsByIdResponse](../../Models/Operations/GetAnimalsByIdResponse.md)**


## updateAnimalsById

Update the animal object

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \php\petstore;
use \php\petstore\Models\Shared;
use \php\petstore\Models\Operations;

$security = new Shared\Security();
$security->key1 = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = petstore\Pb::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateAnimalsByIdRequest();
    $request->animals = new Shared\Animals();
    $request->animals->age = 15412;
    $request->animals->color = 'ivory';
    $request->animals->id = '<id>';
    $request->animals->name = '<value>';
    $request->id = '<id>';;

    $response = $sdk->animals->updateAnimalsById($request);

    if ($response->animals !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\php\petstore\Models\Operations\UpdateAnimalsByIdRequest](../../Models/Operations/UpdateAnimalsByIdRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\php\petstore\Models\Operations\UpdateAnimalsByIdResponse](../../Models/Operations/UpdateAnimalsByIdResponse.md)**

