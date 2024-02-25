@extends('admin.master')
@section('main_section')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="{{ route('store_category') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="">Job Category</label>
                      <input type="text" name="category" class="form-control" placeholder="Add Category">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</section>
@endsection