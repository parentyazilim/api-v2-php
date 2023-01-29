# Parent Yazılım api-v2-php
Bulut tabanlı yazılım servislerinin php ile hazırlanmış örnek api kodları

## Authorize and get token
```php
<?php
use Parent;

require_once __DIR__ . '/vendor/autoload.php';

$client = new Client([
	"username"    => "user",
	"password"    => "pass"
]);

// get token and save src/token.ini
```

* Create a new Customer

```php
$customer = [
    'contact_type_code'   => 'person',
    'code'                => 'CH001',
    'email'               => 'info@parent.com.tr',
    'contact_type'        => 'person',
    'firstname'           => 'John',
    'lastname'            => 'Doe',
    'country'             => 'Türkiye',
    'state'               => 'Ankara',
    'city'                => 'Çankaya',
    'status_code'         => 'approved',
    'is_login_enabled'    => false
];

$customer = new Parent\Customer($client);
$customer->create($customer);
```
