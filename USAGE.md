<!-- Start SDK Example Usage [usage] -->
```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use php\petstore;
use php\petstore\Models\Shared;
use php\petstore\Models\Operations;

$security = new Shared\Security();
$security->key1 = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = petstore\Pb::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CreateAnimalRequestBody();
    $request->age = 239780;
    $request->color = 'maroon';
    $request->id = '<id>';
    $request->name = '<value>';

    $response = $sdk->animals->createAnimal($request);

    if ($response->animals !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->