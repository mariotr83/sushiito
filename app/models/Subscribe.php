<?php

class Subscribe extends Eloquent{
    protected $table = 'subscription';

    protected $fillable = array(
        'email'

    );
}