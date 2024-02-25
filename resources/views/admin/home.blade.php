@extends('admin.master')
@section('main_section')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="{{ route('store_banner') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="">Banner Name</label>
                      <input type="text" name="heading" class="form-control" placeholder="Banner Name">
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

