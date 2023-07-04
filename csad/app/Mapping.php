<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapping extends Model
{
    protected $fillable = ['row_id', 'template_id', 'cscart_fields', 'adams_fields', 'default'];
}
