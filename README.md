# PageKit

TODO: Write a project description

### Installation

composer require shawnsandy/pagekit

__Setup Laravel Modules__ https://github.com/nWidart/laravel-modules

Make sure to turn on auto scanning for modules, *you need to update the configuration file to allow that. Set `scan.enabled` value to true*

```php
// file config/modules.php

return [
  //...
  'scan' => [
    'enabled' => true
  ]
  //...
]
```

To verify that the module is installed use `module:list` artisan command.

```php

php artisan module:list

```

You should see the pagekit module in the results.

```

| Pagekit     | Enabled | 0     | /Users/shawnsandy/Code/interns-dev/laravel/modules/pagekit    

```

Publish the pagekit assets

```

php artisan module:publish pagekit

```

### Usage

Once install correctly you should be able to goto  `http://yoursite.app/pagekit`

### Contributing

Fork it!
Create your feature branch: git checkout -b my-new-feature
Commit your changes: git commit -am 'Add some feature'
Push to the branch: git push origin my-new-feature
Submit a pull request :D
History

### Change Log

- Add a built in page editor

### Credits

TODO: Write credits

### License

TODO: Modify license


This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
