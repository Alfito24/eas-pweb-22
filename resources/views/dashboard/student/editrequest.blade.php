@extends('dashboard.templateuser')
@section('content')
<div class="container">
    <h2 class="text-center mt-3">Edit Request</h2>
<form action="/editrequest/{{ $request[0]->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="title" name="title" id="title" value="{{ $request[0]->title }}">
    </div>
    <div class="mb-3">
      <label for="file" class="form-label">File</label>
      <input type="file" class="file" id="file" name="file">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
  @endsection
