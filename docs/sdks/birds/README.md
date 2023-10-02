# Birds
(*birds*)

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
    $request->data->birds = [
        'input',
    ];
    $request->data->createdDate = 248447;
    $request->data->updatedDate = 6866.6;
    $request->meta = new Pagination();
    $request->meta->hasMore = false;
    $request->meta->pageNumber = 450603;
    $request->name = 'ruddy architect';

    $response = $sdk->birds->createLivingThings($request);

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


## createNewBird

Create a new Bird

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \php\petstore\Pb;
use \php\petstore\Models\Shared\Security;
use \php\petstore\Models\Shared\NestedBird;
use \php\petstore\Models\Shared\NestedBirdAge;
use \php\petstore\Models\Shared\NestedBirdAgeUnit;
use \php\petstore\Models\Shared\NestedBirdFlight;
use \php\petstore\Models\Shared\NestedBirdFlightWings;
use \php\petstore\Models\Shared\NestedBirdFlightWingsSpan;
use \php\petstore\Models\Shared\NestedBirdLocation;
use \php\petstore\Models\Shared\NestedBirdLocationGeography;

$sdk = Pb::builder()
    ->build();

try {
    $request = new NestedBird();
    $request->age = new NestedBirdAge();
    $request->age->amount = 5601.46;
    $request->age->unit = NestedBirdAgeUnit::Years;
    $request->flight = new NestedBirdFlight();
    $request->flight->canFly = false;
    $request->flight->wings = new NestedBirdFlightWings();
    $request->flight->wings->count = 959530;
    $request->flight->wings->span = new NestedBirdFlightWingsSpan();
    $request->flight->wings->span->amount = 7898.44;
    $request->flight->wings->span->unit = 'katal';
    $request->food = [
        'digital',
    ];
    $request->id = '<ID>';
    $request->location = [
        new NestedBirdLocation(),
    ];
    $request->name = 'Anguilla';

    $response = $sdk->birds->createNewBird($request);

    if ($response->createNewBird200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                   | Type                                                                        | Required                                                                    | Description                                                                 |
| --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- |
| `$request`                                                                  | [\php\petstore\Models\Shared\NestedBird](../../models/shared/NestedBird.md) | :heavy_check_mark:                                                          | The request object to use for the request.                                  |


### Response

**[?\php\petstore\Models\Operations\CreateNewBirdResponse](../../models/operations/CreateNewBirdResponse.md)**


## getAllBirds

Get All birds

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \php\petstore\Pb;
use \php\petstore\Models\Shared\Security;
use \php\petstore\Models\Shared\Birds;

$sdk = Pb::builder()
    ->build();

try {
    $request = [
        new Birds(),
    ]

    $response = $sdk->birds->getAllBirds($request);

    if ($response->birds !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                  | Type                                       | Required                                   | Description                                |
| ------------------------------------------ | ------------------------------------------ | ------------------------------------------ | ------------------------------------------ |
| `$request`                                 | [array](../../models//.md)                 | :heavy_check_mark:                         | The request object to use for the request. |


### Response

**[?\php\petstore\Models\Operations\GetAllBirdsResponse](../../models/operations/GetAllBirdsResponse.md)**


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

    $response = $sdk->birds->getAllLivingThings($request);

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

