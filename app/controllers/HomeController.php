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

    public function home(){

        $link_pages = OnlineOrder::orderBy('id', 'ASC')->get();

        $slider_pages = Slider::orderBy('position', 'ASC')->get();

        $menu_sliders = Menu::orderBy('id', 'ASC')->get();

        $menu_pdf = Menupdf::orderBy('id', 'ASC')->get();

        return View::make('pages.index',[

            'slider_pages'=>$slider_pages,
            'link_pages'=>$link_pages,
            'menu_sliders'=>$menu_sliders,
            'menu_pdf'=>$menu_pdf

        ]);

    }

    public function showWelcome()
    {
        return View::make('hello');
    }

    public function subscribe()
    {
        $validation = Validator::make(
            array(
                'subscribe' => Input::get( 'subscribe' )
            ),
            array(

                'subscribe' => array( 'required', 'email' ),

            )
        );

        if ($validation->fails())
        {
            if (\Request::ajax())
            {
                $messages = $validation->messages();
                return \Response::JSON(array('messages' => $messages), 400);
            }
            return \Redirect::to(\Input::get('from'))->withInput()->withErrors($validation);
        }

        $subscribe = Subscribe::create(array(

            'email'=>Input::get('subscribe')

        ));

        $subscribe->save();

        return 'Te haz suscrito correctamente!';
    }

    public function contact()
    {

        $validation = Validator::make(
            array(
                'name' => Input::get( 'name' ),
                'phone' => Input::get( 'phone' ),
                'email' => Input::get( 'email' ),
                'sucursal' => Input::get( 'sucursal' ),
                'mensaje' => Input::get( 'mensaje' ),
            ),
            array(
                'name' => array( 'required'),
                'phone' => array( 'required'),
                'email' => array( 'required', 'email' ),
                'sucursal' => array( 'required'),
                'mensaje' => array( 'required'),
            )
        );

        if ($validation->fails())
        {
            if (\Request::ajax())
            {
                $messages = $validation->messages();
                return \Response::JSON(array('messages' => $messages), 400);
            }
            return \Redirect::to(\Input::get('from'))->withInput()->withErrors($validation);
        }

        $data = array('name' => Input::get('name'), 'phone' => Input::get('phone'), 'email' => Input::get('email'), 'sucursal' => Input::get('sucursal'), 'mensaje' => Input::get('enquiry'),);

      /*  $to = "mario@maniak.com.mx";
        $subject = "My subject";
        $headers = "From: webmaster@example.com" . "\r\n" .
            "CC: somebodyelse@example.com";

        mail($to, $subject, $data, $headers);*/

        Mail::send( 'emails.contacto', $data, function( $message ) use ($data)
        {
            $message->to('mario@maniak.com.mx')->from( $data['name'])->subject( 'Welcome!' );
        });

        return 'El Mensaje ha sido enviado, muchas gracias por enviarnos tus sugerencias!';



       /* $this->contactForm->validate(Input::all());

        $data = array( 'email' => 'mario@maniak.com.mx', 'name' => 'Lar', 'from' => 'sample@sample.comt', 'phone' => 'Vel', 'sucursal' => 'Vel', 'mensaje' => 'Vel' );

        Mail::send( 'emails.contacto', $data, function( $message ) use ($data)
        {
            $message->to( $data['email'] )->from( $data['from'])->subject( 'Welcome!' );
        });

        return Redirect::back()->withInput();
//       return Input::get('name').Input::get('phone');*/

    }

    public function showLogin()
    {
        // show the form
        return View::make('admin.login');
    }


    public function doLogin()
    {

        // validate the info, create rules for the inputs
        $rules = array(
            'email'    => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );

// run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

// if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('admin')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {

            // create our user data for the authentication
            $userdata = array(
                'email'     => Input::get('email'),
                'password'  => Input::get('password')
            );

            // attempt to do the login
            if (Auth::attempt($userdata)) {

                // validation successful!
                // redirect them to the secure section or whatever
                return Redirect::to('admin/home-slider');
                //return Redirect::route('admin_index');
                // for now we'll just echo success (even though echoing in a controller is bad)
                //echo 'SUCCESS!';

            } else {

                // validation not successful, send back to form
                return Redirect::to('admin');

            }

        }
    }

}
