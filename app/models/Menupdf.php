<?php

class Menupdf extends Eloquent{
    protected $table = 'menupdf';

    protected $fillable = array(
        'file',
        'title',
        'created_at',
        'updated_at'
    );
}