Handlebars
==========

A CakePHP View class that renders Elements with `*.hbs` via [Lightncandy](https://github.com/zordius/lightncandy)
renderer

Usage
-----

```php
# bootstrap.php
CakePlugin::load(array(
	'Handlebars',
));
```

```php
# AppController.php

class AppController extends Controller {
	public $viewClass = 'Handlebars.Handlebars';
```

```php
# view.ctp
  echo $this->Element('element.hbs', $data);
```
