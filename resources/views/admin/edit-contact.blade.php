@extends('admin.master')
@section('main_section')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="{{ route('update-contact', $content->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="">Location</label>
                      <input type="text" name="location" class="form-control" value="{{ $content->location }}">
                    </div>
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" name="email" class="form-control" value="{{ $content->email }}">
                    </div>
                    <div class="form-group">
                      <label for="">Mobile</label>
                      <input type="number" name="mobile" class="form-control" value="{{ $content->mobile }}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</section>
@endsection