<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('admin/slider', [
            'sliders' => Slider::latest()->paginate(10),
        ]);
    }


  public function validateRequest()
    {
        return request()->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg|max:200',
        ]);
    }

  public function store()
  {
      // Validationform
    //   dd(request()->file('image'));
      $attr = $this->validateRequest();
      $alt = request('title');
      $slug = \Str::slug(request('title'));
      

      $image = request()->file('image');
      $imageUrl = $image->storeAs("images/sliders", "{$slug}.{$image->extension()}");
      $attr['slug'] = $slug;
      $attr['alt'] = $alt;
      $attr['image'] = $imageUrl;
      // Save the post
      sliders()->create($attr);
      session()->flash('success', 'Slider added successfully');
      return redirect( route('admin/slider') );
  }

  public function add()
    {
        return view('admin/slider/add', [
            'slider' => new Slider()
        ]);
    }
}
