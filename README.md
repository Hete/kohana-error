kohana-error
============

Error manager for Kohana. This code is adapted from the official documentation.

## Usage

Override Controller\_Error to define your custom actions and rendering for your
error pages. You generally want to log important error code or mail webmaster
about crashes. The HTTP status will be updated in the Response object, so you
can test efficiently in production environment.

The HTTP_Exception object is providen, so you can do any kind of crash handling
possible.

    class Controller_Error extends Kohana_Controller_Error {

        public $template = 'template/custom'; // there is a default template

        public function action_404() {

            $code = $this->exception->getCode();
        }

    }
