@extends('admin.master')
@section('main_section')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="{{ route('store_blog') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="">Title</label>
                      <input type="text" name="title" class="form-control" placeholder="Type Title">
                    </div>
                    <div class="form-group">
                      <label for="">Description</label>
                      <textarea type="text" name="description" class="form-control" placeholder="Type Description"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="">Image</label>
                      <input type="file" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</section>
@endsection