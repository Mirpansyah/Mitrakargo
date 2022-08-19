<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $fillable = ['title', 'slug', 'body', 'category_id', 'thumbnail', 'm_description'];
   //    unsafe - bisa disusupi
   //    protected $guarded = [];

   public function takeImage()
   {
      return "/storage/" . $this->thumbnail;
   }

   public function category()
   {
      return $this->belongsTo(Category::class);
   }

   public function author()
   {
      return $this->belongsTo(User::class, 'user_id');
   }

}
