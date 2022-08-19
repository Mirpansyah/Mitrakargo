<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['image', 'alt', 'title', 'slug'];

    public function takeSlider()
   {
      return "/storage/" . $this->thumbnail;
   }
}
