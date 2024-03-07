@extends('admin.master')
@section('main_section')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="{{ route('update-about', $content->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="">Company History</label>
                      <textarea type="text" name="history" class="form-control" >{{ $content->history }}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="">Mission</label>
                      <textarea type="text" name="mission" class="form-control" >{{ $content->mission }}</textarea>                    </div>
                    <div class="form-group">
                      <label for="">Vission</label>
                      <textarea type="text" name="vission" class="form-control" >{{ $content->vission }}</textarea>                    </div>
                      <div class="row mb-3 shadow">
                        <label class="col-md-3 text-center">Image</label>
                        <div class="col-md-7">
                            <input type="file" class="form-control" name="image"  >
                            <img style="width: 70px" src="{{ asset('images/'.$content->image) }}" alt="">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection