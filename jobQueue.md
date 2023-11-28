https://github.com/resque/php-resque

- install package
```
composer require resque/php-resque
```

````php
<?php

use App\DB;

require_once 'vendor/autoload.php';

Resque::setBackend('localhost:6379');

$args = [
    'name' => 'Arafat'
];
$token = Resque::enqueue('default', '\App\MyJob', $args, true);
//$status = Resque_Job_Status::create($token);
//echo $status->status();


# Removes all jobs of queue 'default'
//Resque::dequeue('default');
# Removes job class 'My_Job' of queue 'default'
//Resque::dequeue('default', ['My_Job']);

// echo Resque::size('default');

$command = 'QUEUE=default php vendor/bin/resque';
$output = [];
$return_var = 0;

// Execute the command
exec($command, $output, $return_var);

// Output command execution status and output
echo "Command status: $return_var\n";
echo "Command output:\n";
echo implode("\n", $output);
````
> `exec()` not working on windows, type command in terminal instead
