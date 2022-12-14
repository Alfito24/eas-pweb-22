@extends('dashboard.lecture.templatelecture')
@section('content')
<h2 class="text-center">Request List</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">File</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($request as $request )
      <tr>
        <td>{{ $request->student_id }}</td>
        <td>
          <img src="" alt="">
        </td>
      </tr>

    </tbody>
  </table>
  <form action="/acceptlecture/{{ $request->id }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-success">Accept</button>
</form>
  @endforeach
@endsection

