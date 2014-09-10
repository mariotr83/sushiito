<?php

use Sushiitto\Forms\ContactForm;

class HomeController extends BaseController
{

    function __construct(ContactForm $contactForm)
    {
        $this->contactForm = $contactForm;

    }

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function showWelcome()
    {
        return View::make('hello');
    }

    public function contact()
    {

        $this->contactForm->validate(Input::all());


       Mail::send('emails.contacto', ['name' => Input::get('name'),'phone' => Input::get('phone'),'email' => Input::get('email'),'sucursal' => Input::get('sucursal'),'mensaje' => Input::get('mensaje')], function ($message) {
            $message->to('alvaro@maniak.com.mx', Input::get('firstname'))->subject('Contacto Sushiitto');
        });

        return Redirect::back()->withInput();
       /* return Input::get('name').Input::get('phone');*/


    }

}
