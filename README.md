# PageKit

PageKit is a quick and easy way to replace the standard Laravel install page with a set of clean and modern Start page's for your application. Allowing you to deploy and launch a Laravel based marketing / promotional site in minutes. While you focus on the development. 



## Installation

```

composer require shawnsandy/pagekit

```

__Publish the pagekit assets__

```php

php artisan vendor:publish --provider="ShawnSandy\PageKit\PageKitServiceProvider"

```

__Publish tags__

You can publish individual pagekit tags using `--tags`, *please note* that the `--public` tag is required for page to display correctly.

```php

php artisan module:publish --provider="ShawnSandy\PageKit\PageKitServiceProvider" --tag=name

```


* `-tag=public` publishes your pagekit public assets / files to `/public/` 
* `-tag=views` publishes your views to `vendor\pagekit`
* `-tag=config` publishes `config\pagekit` to `config`

## Usage

Once installed correctly you should be able to goto  `http://yoursite.app/pagekit` 

### Default index page

You can set tpagekit to replace the default *welcome* page by modifying your `app/Http/route.php` 

```php
Route::get('/', function () {
    return view('welcome');
});
```
**TO**

```php
  Route::get('', function(){
        return view('page::index');
    });
```

### Custom Branding

You can custom brand pagekit by editing the values in the `config/pagekit.php` 

Turn branding on:

```php
'branding' => false,
``` 

Customize :

```php

'brand' => [
    'background-color' => '#FFFFFF',
    'header-background-color' => '#EEEEEE',
    'header-font-size' => '72px',
    'header-font-color' => '#FFFFFF',
    'text-color' => 'FFFFFF',
    'header-background-image' => none,
]

```

## TODO

- [ ] Contact form
- [ ] Social media links
- [ ] Add a static page editor
- [ ] Addon style selectors
- [ ] ...

## Contributing

Fork it!
Create your feature branch: git checkout -b my-new-feature
Commit your changes: git commit -am 'Add some feature'
Push to the branch: git push origin my-new-feature
Submit a pull request :D
History

## Change Log

V.1.3.4 BETA 

Adds a Branding feature

Customize fonts, color, background image etc from the config/pagekit.php file
Updates the readme

V.1.3.3

...

V.1.3.2 BETA

- Removes several composer packages


V.1.3.1 BETA

- Added package config file
- Updated the read-me
- Minor changes to layout/views 



## License

TODO: Modify [licence.md](LICENCE.md)


This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
