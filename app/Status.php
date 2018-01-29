<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'allowed'];
  protected $dates = ['created_at', 'updated_at'];
}
