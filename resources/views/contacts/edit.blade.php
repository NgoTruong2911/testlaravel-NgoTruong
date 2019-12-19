@extends('master.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<form action="{{route('contacts.update',$contact->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" name="content" rows="5" id="content">{{$contact->content}}</textarea>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <!-- /.content -->
</div>
@endsection