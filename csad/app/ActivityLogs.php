<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityLogs extends Model
{
 	protected $fillable = ['activities', 'client_ip'];
}
