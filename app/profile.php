<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
	 protected $guarded =[];


// public function profileImage()
// {
// 	return '/storage/'.($this-image) ? $this-image:'http://127.0.0.1:8000/storage/upload/gFpnFq9DnQmAmrzVeILBOvwbnuSZUDiA3IYZ0v5X.png';
// }



    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
  