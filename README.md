clear01/bootstrap-nette-widget-control
--------------------------------------

### Overview
This is implementation of widget managing control based on [**```clear01/nette-widgets```**](https://github.com/Clear01/NetteWidgets)
 using **Twitter Bootstrap** and **jQuery UI**.

See [**```clear01/nette-widgets```**](https://github.com/Clear01/NetteWidgets) documentation for more details about the widgets extension itself.

### Installation

- **Step 1**: This package is available on packagist. Run the following command to add the dependency.
```sh
$ composer require clear01/bootstrap-nette-widget-control
```

- **Step 2**: Add extension to config and configure it.
See [**```clear01/nette-widgets```**](https://github.com/Clear01/NetteWidgets) package documentation.
Make sure you have implemented (or used an existing) **persistence layer**.

- **Step 3**: Configure your asset manager to load Twitter Bootstrap and jQuery UI. **Include also ```assets/widgets.css```** from this package.

- **Step 4**: Feel free to use the ```\Clear01\Widgets\Nette\UI\TwitterBootstrap\BootstrapWidgetControl``` component. There is also ```\Clear01\Widgets\Nette\UI\TwitterBootstrap\IBootstrapWidgetControlFactory``` factory interface included. See example below:

config.neon
```yml
services:
    ...
    - \Clear01\Widgets\Nette\UI\TwitterBootstrap\IBootstrapWidgetControlFactory
    ...
```

YourPresenter.php
```php
class YourPresenter {

    /**
     * @var \Clear01\Widgets\Nette\UI\TwitterBootstrap\IBootstrapWidgetControlFactory
     * @inject
     */
    public $bootstrapWidgetControlFactory;

    protected function createComponentWidgetControl() {
        return $this->bootstrapWidgetControlFactory->create();
    }

}
```

template.latte
```twig
    {control widgetControl}
```
