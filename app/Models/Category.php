<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table ='categries';
    protected $fillable =
    [
    'group_id',
    'name',
    'description',
    'category_image',
    'category_icon',
    'status'
   ];
  
  //belong to relationship
   public function group(){
   	return $this->belongsTo(Group::class,'group_id','id');
   }
}

