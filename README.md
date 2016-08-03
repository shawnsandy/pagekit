# PageKit

PageKit is a quick and easy way to replace the standard Laravel install page with a set of clean and modern Start page's for your application. 

Allowing you to deploy and launch a Laravel based marketing / promotional site in minutes. While you focus on the development.


### Installation

```
composer require shawnsandy/pagekit
```




__Publish the pagekit assets__

```php

php artisan vendor:publish --provider="ShawnSandy\PageKit\PageKitServiceProvider"

```

__Publish tags__

You can publish individual pagekit tags using `--tags`

```php

php artisan module:publish --provider="ShawnSandy\PageKit\PageKitServiceProvider" --tag=name

```

* `-tag=public` publishes your pagekit public assets / files to `/public/`
* `-tag=views` publishes your views to `vendor\pagekit`
* `-tag=config` publishes `config\pagekit` to `config`

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
