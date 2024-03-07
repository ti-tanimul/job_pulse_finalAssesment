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
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Message</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contactsList as $contacts )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $contacts->name }}</td>
            <td>{{ $contacts->email }}</td>
            <td>{{ $contacts->mobile }}</td>
            <td>{{ $contacts->message }}</td>
            <td>
              <a href="{{ route('delete-contact-list', $contacts->id) }}" onclick="return confirm('Are you Sure to Delete')" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>  
</div>
</section>
@endsection


