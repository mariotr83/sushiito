<?php
/**
 * Created by PhpStorm.
 * User: Maquina Sentadillas
 * Date: 9/10/14
 * Time: 3:38 AM
 */

namespace Sushiitto\Forms;

use Laracasts\Validation\FormValidator;


class ContactForm extends FormValidator{

    protected $rules = [
        'name' => 'required',
        'phone' => 'required|numeric',
        'email' => 'required|email',
        'sucursal' => 'required',
        'mensaje' => 'required',

    ];

}





