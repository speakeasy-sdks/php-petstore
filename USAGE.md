<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use php\petstore\Pb;
use php\petstore\Models\Shared\Security;
use php\petstore\Models\Operations\CreateAnimalRequestBody;

$security = new Security();
$security->key1 = '';

$sdk = Pb::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateAnimalRequestBody();
    $request->age = 239780;
    $request->color = 'maroon';
    $request->id = '<ID>';
    $request->name = 'string';

    $response = $sdk->animals->createAnimal($request);

    if ($response->animals !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage -->