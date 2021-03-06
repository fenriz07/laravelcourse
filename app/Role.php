<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name','display_name'];
    public function user()
    {
      return $this->hasOne(User::class);
    }
}
