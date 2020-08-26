<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\division;
use App\district;

class notice extends Model
{
    protected $fillable=[
      'name',
      'email',
      'phone',
      'location',
      'image',
      'division_id',
      'district_id',
      'amount',
      'item',
      'status',
    ];

    public function division(){
      return $this->belongsTo(division::class);
    }


    public function district(){
      return $this->belongsTo(district::class);
    }
}
