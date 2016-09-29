# symfony_kint_extension
Easiest solution I could think of for using \Kint::dump() from twig templates in symfony projects.

## How to use
* Add the service in services.yml to your bundle services.yml file.
* Add the KintExtension.php file a proper folder and adjust the namespace if needed.
* In twig templates you can now use ```kint(any_variable)```
