<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table = 'menu';
    protected $fillable = [
    	'id',
    	'name',
    	'route',
    	'visible',
    	'isParent',
    	'parentId'
    ] ;
}
