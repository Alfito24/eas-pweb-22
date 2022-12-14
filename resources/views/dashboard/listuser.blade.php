@extends('dashboard.templateadmin')
@section('content')
<h2 class="text-center">Users List</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First Name</th>
        <th scope="col">Role</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user )
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $user->first_name }}</td>
        <td>
          @if ($user->role == 'student')
          Student
          @elseif ($user->role == 'admin')
          Admin
          @else
          Lecture
          @endif
        </td>
        <td>
          <a href="/dashboard_admin/edit_user/{{ $user->id }}" class="btn btn-warning">Edit</a> | <a href="/user/delete/{{ $user->id }}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
