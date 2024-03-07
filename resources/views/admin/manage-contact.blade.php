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
            <th scope="col">Location</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $contact->location }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->mobile }}</td>
            <td>
              <a href="{{ route('edit-contact',['id'=>$contact->id]) }}" class="btn btn-success">Edit</a>
              <a href="{{ route('delete-contact', $contact->id) }}" onclick="return confirm('Are you Sure to Delete')" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>  
</div>
</section>
@endsection


