# lorem [![Build Status](https://travis-ci.org/ecrmnn/lorem.svg?branch=master)](https://travis-ci.org/ecrmnn/lorem) [![Total Downloads](https://poser.pugx.org/ecrmnn/lorem/downloads)](https://packagist.org/packages/ecrmnn/lorem)

> Dummy text and images for Laravel

### Install
```bash
composer require ecrmnn/lorem
```

After you have installed open your Laravel config file ``config/app.php`` and add the following lines.
In the $providers array add the service providers for this package.
```php
Ecrmnn\Lorem\LoremServiceProvider::class
```

### Usage
Access ``Lorem`` by using the global helper ``lorem()``

#### Text
```html
<body>
    <div class="content">
        <!-- Returns one paragraph of lorem ipsum -->
        {!! lorem(1) !!}
    </div>
</body>
```
```html
<body>
    <div class="content">
        <!-- Returns 23 paragraphs of lorem ipsum -->
        {!! lorem(23) !!}
    </div>
</body>
```

#### Image
```html
<body>
    <div class="content">
        <!-- Returns an image (1024x1024) -->
        {!! lorem()->image() !!}
    </div>
</body>
```

```html
<body>
    <div class="content">
        <!-- Returns an image (1000x600) with class -->
        {!! lorem()->image(1000, 600, ['class' => 'img-responsive']) !!}
    </div>
</body>
```

### License
MIT © [Daniel Eckermann](http://danieleckermann.com)