@extends('master.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<form action="{{route('contacts.store')}}" method="POST">
    @csrf
    <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" name="content" rows="5" id="content"></textarea>
    </div>
    @error('content')
    <div class="alert alert-success">
    {{$message}}
  </div>
    @enderror
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <!-- /.content -->
</div>
@endsection