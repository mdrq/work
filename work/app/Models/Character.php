<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $table = 'characters';

    public $timestamps = false;

    protected $dates =
    [
      'birth_date',
      'created_at',
      'updated_at'
    ];

    protected $fillable =
    [
      'name',
      'belong_id',
      'birth_date',
      'gender',
      'ability',
      'note'
    ];
}
