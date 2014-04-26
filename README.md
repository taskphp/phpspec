task/phpspec
============

[![Build Status](https://travis-ci.org/taskphp/phpspec.svg?branch=master)](https://travis-ci.org/taskphp/phpspec)
[![Coverage Status](https://coveralls.io/repos/taskphp/phpspec/badge.png?branch=master)](https://coveralls.io/r/taskphp/phpspec?branch=master)

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