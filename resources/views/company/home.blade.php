@extends('company.company-dashboard')
@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="{{ route('store_circular') }}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="">Company Name</label>
                      <input type="text" name="c_name" class="form-control" placeholder="Company Name">
                    </div>
                    <div class="form-group">
                      <label for="">Job Category</label>
                      <select name="category" class="form-control">
                        <option>Select Job Type</option>
                        @foreach ($categorys as $category)
                        <option value="{{$category->id}}">{{$category->category}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="">Requirment</label>
                        <input type="text" name="requirment" class="form-control" placeholder="Type Requirment">
                    </div>
                    <div class="form-group">
                        <label for="">Vacency</label>
                        <input type="number" name="vacency" class="form-control" placeholder="Type">
                    </div>
                    <div class="form-group">
                        <label for="">Job Type</label>
                        <select name="job_type" class="form-control">
                          <option>Select Type</option>
                          <option value="full_time">Full-Time</option>
                          <option value="remote">Remote</option>
                          <option value="intern">Intern</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="">Company Address</label>
                      <textarea type="text" name="address" class="form-control" placeholder="Company Address"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</section>
@endsection

