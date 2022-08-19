@if (session()->has('success'))
<div class="container">
  <div class="d-flex justify-content-center">
      <div class="col-md-8">
        <div class="alert alert-success mt-3 text-center">
          {{ session()->get('success') }}
        </div>
      </div>
    </div>
</div>
@endif

@if (session()->has('error'))
<div class="container">
  <div class="d-flex justify-content-center">
    <div class="col-md-8">
      <div class="alert alert-danger mt-3 text-center">
        {{ session()->get('error') }}
      </div>
    </div>
  </div>
</div>
@endif

@if (session()->has('info'))
<div class="container mb-n3">
  <div class="d-flex justify-content-center">
    <div class="col-md-8">
      <div class="alert alert-info mt-3 text-center">
        {{ session()->get('info') }}
      </div>
    </div>
  </div>
</div>
@endif

@if (session()->has('warning'))
<div class="container">
  <div class="d-flex justify-content-center">
    <div class="col-md-8">
      <div class="alert alert-warning mt-3 text-center">
        {{ session()->get('warning') }}
      </div>
    </div>
  </div>
</div>
@endif