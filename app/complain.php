<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class complain extends Model
{
    protected $fillable=[
      'user_id',
      'comment',
      'qun',
      'status',
    ];

    public function user(){
      return $this->belongsTo(User::class);
    }

    public static function total_complain(){

      $complain=complain::where('status',0)->get();
      $total=0;
      foreach ($complain as $v_cmp) {
        $total +=$v_cmp->qun;
      }
      return $total;
    }
}
