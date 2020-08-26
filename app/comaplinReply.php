<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comaplinReply extends Model //this is for complain reply and this model use user panel
{
  protected $fillable=[
    'user_id',
    'admin_id',
    'comment',
    'qun',
    'status',
  ];

  public function user(){
    return $this->belongsTo(User::class);
  }

  public static function all_complain(){
    $total=0;
    $complain=comaplinReply::where('status',0)->get();
    foreach ($complain as $v_cmp) {
      $total +=$v_cmp->qun;
    }
  }
}
