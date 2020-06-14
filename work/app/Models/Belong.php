<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Belong extends Model
{
  protected $table = 'belongs';

  public $timestamps = false;

  protected $dates =
  [
    'created_at',
    'updated_at'
  ];

  protected $fillable =
  [
    'name',
    'name_kana',
  ];
}
