<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\division;

class news extends Model
{
    protected $fillable=[
      'division_id',
      'image',
      'title',
      'short_des',
      'long_des',
      'status',
    ];


    public function division(){
      return $this->belongsTo(division::class);
    }
}
