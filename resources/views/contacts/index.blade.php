@extends('master.layout')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">User name</th>
      <th scope="col">Content</th>
      <th scope="col"><a href="{{route('contacts.create')}}" class="btn btn-success">Add +</a></th>
    </tr>
  </thead>
  <tbody>
    @foreach($contacts as $contact)
    <tr>
      <td>{{$contact->id}}</td>
      <td>{{$contact->users->name}}</td>
      <td>{{$contact->content}}</td>
      <td><a href="{{route('contacts.edit',[$contact->id])}}" class="btn btn-primary">Update</a></td>
      <td><a href="#" class="btn btn-primary">Show</a></td>
      <td><form action="{{ route('contacts.destroy',[$contact->id])}}" method="POST">
                  @csrf
                  @method("DELETE")
                  <button class="btn btn-danger" id="remove" type="button">Delete</button>
          </form>
    </tr>
    @endforeach
    
  </tbody>
</table>
    <!-- /.content -->
  </div>
@endsection
@section('script')
  <script>
    $('#remove').click(function(){
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
      })
      .then((result) => {
        if(result.value) {
          // vì this ở đây vẫn là button chứ không phải swal
          $(this).parent().submit();
        }
      })
    })
  </script>
@endsection
