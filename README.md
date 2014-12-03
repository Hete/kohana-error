kohana-error
============
This module provide a coding space for handling errors on production
environment. The code is adapted from the official documentation.

It handles error when Kohana is not doing it itself by showing the stack
trace like in production.

The only error handled are `HTTP_Exception` that your code should trigger 
whenever something unexpected happens. It would not handle a syntax error 
for example.

Usage
-----
The handler is used exclusively when `Kohana::$errors` is set to `FALSE`. 
Therefore, your `bootstrap.php` should have this line:
```php
Kohana::init(array(
    // ...
    'errors' => Kohana::$environment !== Kohana::PRODUCTION
));
```

Override `Controller_Error` to define your custom actions and rendering for 
your error pages. You generally want to log important error code or mail 
webmaster about crashes. The HTTP status will be updated in the `Response`
object.

The `HTTP_Exception` object is providen, so you can do any kind of crash 
handling possible.

```php
class Controller_Error extends Kohana_Controller_Error {

    public $template = 'template/custom'; // there is a default template

    public function action_404() 
    {
        mail('crash@example.com', 'Error '.$this->exection->getCode().' just occured.', $this->exception->getMessage());
    }

}
```
