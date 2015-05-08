
<?php

class UsersSeeder extends Seeder{
public function run(){

DB::table('users')->insert(array(
'type'=>1,
'username'=>'admin',
'password'=>Hash::make('SushiittO2014'),
'email'=>'admin@sushiitto.com.mx',
'first_name'=>'Administrador',
'last_name'=>'Sushiitto',
'created_at'=>date('Y-m-d H:i:s'),
'updated_at'=>date('Y-m-d H:i:s')
));
}
}