<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\division;
use App\district;
use App\User;
use App\notice;

class userGetTran extends Model
{
    protected $fillable=[
      'user_id',
      'post_id',
      'quantity',
      'status',
    ];

    public function user(){
      return $this->belongsTo(User::class);
    }


    public function notice(){
      return $this->belongsTo(notice::class);
    }


}
