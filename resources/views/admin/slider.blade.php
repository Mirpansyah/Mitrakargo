@extends('admin/parts/app', ['title' => 'Slider'])
@section('content')
      <div class="mx-5">
        <div class="d-flex justify-content-between">
            <div><h1>Slider Manager</h1></div>
            <div class="pt-2"><a href="{{ route('add-slider') }}" class="btn btn-primary">Add Slider</a></div>
        </div>
        <div class="card p-3 pt-4">
          <div class="row">
            <div class="col-md-5">
              @forelse ($sliders as $slider)
                <img src="{{ $slider->image }}" alt="{{ $slider->alt }}">
                <form action="/admin/slider/{{ $slider->slug }}/delete" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger btn-sm" type="submit">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </form>
                </td>
              </tr>
              @empty
                <div class="col-md-6">
                  <div class="alert alert-info">
                    We have no posts at this moment.
                  </div>
                </div>
              @endforelse
            </div>
          </div>
        </div>
      </div>
@endsection