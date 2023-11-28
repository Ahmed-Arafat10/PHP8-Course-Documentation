https://github.com/microsoftarchive/redis/releases/tag/win-3.0.504

- install package
```
composer require predis/predis
```

````php
<?php
require_once 'vendor/autoload.php';
composer require predis/predis
$redis = new Predis\Client();
echo  $redis->ping();
````
