<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    protected $fillable = ['api_type', 'api_url_prefix', 'username', 'api_key', 'status'];
}
