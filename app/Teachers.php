<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    
    protected $fillable=[
        'teacher_name','address','phoneno','email','image','status'
      ];
    
    public function getFeaturedAttribute($teacher_image){
      // return $featured;
      return asset($teacher_image);
    
    }


}
