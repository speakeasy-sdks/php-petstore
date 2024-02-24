# Birds


## Overview

Birds information.

### Available Operations

* [createLivingThings](#createlivingthings) - create a living thing
* [createNewBird](#createnewbird) - Create new Bird
* [getAllBirds](#getallbirds) - Get Birds
* [getAllLivingThings](#getalllivingthings) - Get All living things

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

    $response = $sdk->birds->createLivingThings($request);

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


## createNewBird

Create a new Bird

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
        $request = new Shared\NestedBird();
    $request->age = new Shared\Age();
    $request->age->amount = 5601.46;
    $request->age->unit = Shared\Unit::Years;
    $request->flight = new Shared\Flight();
    $request->flight->canFly = false;
    $request->flight->wings = new Shared\Wings();
    $request->flight->wings->count = 959530;
    $request->flight->wings->span = new Shared\Span();
    $request->flight->wings->span->amount = 7898.44;
    $request->flight->wings->span->unit = 'katal';
    $request->food = [
        '<value>',
    ];
    $request->id = '<id>';
    $request->location = [
        new Shared\Location(),
    ];
    $request->name = '<value>';;

    $response = $sdk->birds->createNewBird($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                   | Type                                                                        | Required                                                                    | Description                                                                 |
| --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- |
| `$request`                                                                  | [\php\petstore\Models\Shared\NestedBird](../../Models/Shared/NestedBird.md) | :heavy_check_mark:                                                          | The request object to use for the request.                                  |


### Response

**[?\php\petstore\Models\Operations\CreateNewBirdResponse](../../Models/Operations/CreateNewBirdResponse.md)**


## getAllBirds

Get All birds

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
        $request = [
        new Shared\Birds(),
    ];

    $response = $sdk->birds->getAllBirds($request);

    if ($response->classes !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                  | Type                                       | Required                                   | Description                                |
| ------------------------------------------ | ------------------------------------------ | ------------------------------------------ | ------------------------------------------ |
| `$request`                                 | [array](../../.md)                         | :heavy_check_mark:                         | The request object to use for the request. |


### Response

**[?\php\petstore\Models\Operations\GetAllBirdsResponse](../../Models/Operations/GetAllBirdsResponse.md)**


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

    $response = $sdk->birds->getAllLivingThings($request);

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

