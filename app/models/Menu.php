<?php

class Menu extends Eloquent{
    protected $table = 'menu';

    protected $fillable = array(
        'position',
        'image',
        'title',
        'created_at',
        'updated_at'
    );
}