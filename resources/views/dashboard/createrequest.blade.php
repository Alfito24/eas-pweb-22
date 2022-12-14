@extends('dashboard.templateuser')
@section('content')
<div class="container">
    <h2 class="text-center mt-3">Make Request</h2>
<form action="/make-request" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="title" name="title" id="title">
    </div>
    <div class="mb-3">
      <label for="file" class="form-label">File</label>
      <input type="file" class="file" id="file" name="file">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  @endsection
