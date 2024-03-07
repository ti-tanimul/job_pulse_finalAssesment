@extends('admin.master')
@section('main_section')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="{{ route('update-blog', $blog->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="">Title</label>
                      <input type="text" name="title" class="form-control" value="{{ $blog->title }}">
                    </div>
                    <div class="form-group">
                      <label for="">Description</label>
                      <textarea type="text" name="description" class="form-control" >{{ $blog->description }}</textarea>
                    </div>
                    <div class="row mb-3 shadow">
                        <label class="col-md-3 text-center">Image</label>
                        <div class="col-md-7">
                            <input type="file" class="form-control" name="image"  >
                            <img style="width: 70px" src="{{ asset('images/'.$blog->image) }}" alt="">
            
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</section>
@endsection