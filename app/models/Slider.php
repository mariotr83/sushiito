<?php

class Slider extends Eloquent{
    protected $table = 'home_slider';

    protected $fillable = array(
        'image',
        'title',
        'sub_title',
        'position',
        'link',
        'link_title',
        'link_type',
        'created_at',
        'updated_at'
    );
}