<?php

namespace App\Models;
use App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    //
    protected $table ='subcategories';

    protected $fillable =[
   
   'category_id',
   'name',
   'description',
   'sucategory_image',
   'priority',
   'status'


    ];

      public function category(){
    return $this->belongsTo(Category::class,'category_id','id');
   }
}
