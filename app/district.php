<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\division;

class district extends Model
{
    protected $fillable=[
      'division_id','district_name','district_status'
    ];

    public function division(){
      return $this->belongsTo(division::class);
    }
}
