task/phpspec
============

Example
=======

```php
use Task\Plugin\PhpSpecPlugin;

$project->inject(function ($container) {
    $container['phpspec'] = new PhpSpecPlugin;
});

$project->addTask('test', ['phpspec', function ($phpspec) {
    $phpspec->command('run')
        ->setConfig($this->getProperty('config', 'phpspec.yml'))
        ->setFormat('pretty')
        ->pipe($this->getOutput());
}]);
```

Installation
============

Add to your `composer.json`:
```json
...
"require-dev": {
    "task/phpspec": "~0.1"
}
...
```

Usage
=====
See [task/console](https://github.com/taskphp/console) for usage documentation.