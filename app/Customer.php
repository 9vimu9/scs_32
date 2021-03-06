<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
  use SoftDeletes;

  protected $fillable = ['nic','name','tel','address','email'];
  protected $dates = ['deleted_at'];
}
