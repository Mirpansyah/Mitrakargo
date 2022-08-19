<div class="form-group">
  <input type="file" name="thumbnail" id="thumbnail" class="@error('thumbnail') is-invalid @enderror">
  @error('thumbnail')
    <div class="text-danger invalid-feedback text-micro">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="form-group">
  <label for="title">Title</label>
  <input type="text" name="title" value="{{ old('title') ?? $post->title }}" id="title" class="form-control @error('title') is-invalid @enderror">
  @error('title')
    <div class="text-danger invalid-feedback text-micro">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="form-group">
  <label for="title">Meta Description</label>
  <input type="text" name="m_description" value="{{ old('m_description') ?? $post->m_description }}" id="m_description" class="form-control @error('m_description') is-invalid @enderror">
  @error('m_description')
    <div class="text-danger invalid-feedback text-micro">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="form-group">
  <label for="category">Category</label>
  <select name="category" id="category" class="form-control @error('category') is-invalid @enderror">
    <option disabled selected>Pilih Kategori</option>
    @foreach ($categories as $category)
        <option {{ $category->id == $post->category_id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
  </select>
  @error('category')
    <div class="text-danger invalid-feedback text-micro">
      {{ $message }}
    </div>
  @enderror
</div>

<div class="form-group">
  <label for="body">Content</label>
      <textarea name="body" id="body" class="ckeditor form-control @error('body') is-invalid @enderror">{{ old('body') ?? $post->body }}</textarea>
    
  @error('body')
    <div class="text-danger invalid-feedback text-micro">
      {{ $message }}
    </div>
  @enderror
</div>
  <button class="submit btn btn-primary">{{ $submit ?? 'Update' }}</button>
  <a href="{{ route('admin/artikel') }}" class="btn btn-light">Cancel</a>
  @section('ck_script')
  <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( '.ckeditor' );
  </script>
  @endsection
  
  
