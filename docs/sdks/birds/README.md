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
        'corporis',
    ];
    $request->data->birds->id = 'fbb25870-5320-42c7-bd5f-e9b90c28909b';
    $request->data->birds->name = 'Ollie Watsica';
    $request->data->createdDate = 'deleniti';
    $request->data->updatedDate = 5899.1;
    $request->meta = new ComplexObjectMeta2();
    $request->meta->pageNumber = 'libero';
    $request->name = 'Alex Luettgen';

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
    $request->age->amount = 2098.43;
    $request->age->unit = NestedBirdAgeUnit::Months;
    $request->flight = new NestedBirdFlight();
    $request->flight->canFly = false;
    $request->flight->wings = new NestedBirdFlightWings();
    $request->flight->wings->count = 186193;
    $request->flight->wings->span = new NestedBirdFlightWingsSpan();
    $request->flight->wings->span->amount = 2187.49;
    $request->flight->wings->span->unit = 'hic';
    $request->food = [
        'excepturi',
    ];
    $request->id = 'b77f3a41-0067-44eb-b692-80d1ba77a89e';
    $request->location = [
        new NestedBirdLocation(),
    ];
    $request->name = 'Emmett Kovacek';

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
use \php\petstore\Models\Operations\GetAllLivingThingsRequest;

$sdk = Pb::builder()
    ->build();

try {
    $request = new GetAllLivingThingsRequest();
    $request->filter = [
        'id',
    ];

    $response = $sdk->birds->getAllLivingThings($request);

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

