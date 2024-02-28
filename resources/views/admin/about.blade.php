@extends('admin.master')
@section('main_section')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="{{ route('store_about') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="">Company History</label>
                      <textarea type="text" name="history" class="form-control" placeholder="Company History"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="">Mission</label>
                      <textarea type="text" name="mission" class="form-control" placeholder="Type Mission"></textarea>                    </div>
                    <div class="form-group">
                      <label for="">Vission</label>
                      <textarea type="text" name="vission" class="form-control" placeholder="Type Vission"></textarea>                    </div>
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