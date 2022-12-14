@extends('dashboard.templateuser')
@section('content')
<h2 class="text-center">Request List</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th>Title</th>
        <th scope="col">Date</th>
        <th scope="col">Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($requests as $request )
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $request->title }}</td>
        <td>{{ $request->created_at }}</td>
        <td>
            @if ($request->lecture_acceptance == true && $request->admin_acceptance == true)
            <button type="button" class="btn btn-success">Accepted</button>
            @elseif ($request->lecture_acceptance == false)
            <button type="button" class="btn btn-danger">Rejected</button>
            @elseif($request->lecture_check == true)
            <button type="button" class="btn btn-warning">Waiting</button>
            @endif
        </td>
        <td>
          @if ($request->lecture_acceptance == true && $request->admin_acceptance == true)
         <a href="" class="btn btn-success">No Action Needed</a>
         @elseif ($request->lecture_acceptance == false)
         <a href="/editrequest/{{ $request->id }}" class="btn btn-warning">Edit</a>
         @else
         <button type="button" class="btn btn-warning">Waiting</button>
          @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
