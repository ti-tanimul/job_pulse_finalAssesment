@extends('admin.master')
@section('main_section')
<section class="py-5">
<div class="container">
    
    <h4 class="text-center text-success">{{ Session::get('success') }}</h4>
    <h4 class="text-center text-success"></h4>
    <table class="table table-bordered mt-3" id="myTable">
        <thead class="bg-primary">
          <tr>
            <th scope="col">No</th>
            <th scope="col">History</th>
            <th scope="col">Mission</th>
            <th scope="col">Vission</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contents as $content )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $content->history }}</td>
            <td>{{ $content->mission }}</td>
            <td>{{ $content->vission }}</td>
            <td>
              <img style="width:70px" src="{{ asset('images/'.$content->image) }}" alt="">
            </td>
            <td>
              <a href="{{ route('edit-about',['id'=>$content->id]) }}" class="btn btn-success">Edit</a>
              <a href="{{ route('delete-about', $content->id) }}" onclick="return confirm('Are you Sure to Delete')" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>  
</div>
</section>
@endsection


