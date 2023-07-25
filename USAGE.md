<!-- Start SDK Example Usage -->


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
    $request->age = 548814;
    $request->color = 'provident';
    $request->id = 'bd9d8d69-a674-4e0f-867c-c8796ed151a0';
    $request->name = 'Estelle Will';

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
<!-- End SDK Example Usage -->