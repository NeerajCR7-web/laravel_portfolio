{{-- resources/views/users/list.blade.php --}}
@extends('layout.console')

@section('content')
<div class="list-page">

  <!-- Header -->
  <div class="list-header">
    <h2>Manage Users</h2>
    <a href="{{ url('/console/users/add') }}" class="btn btn-green">+ New User</a>
  </div>

  <!-- Responsive Table -->
  <div class="table-container">
    <table class="list-table">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Created</th>
          <th colspan="2">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->first }} {{ $user->last }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at->format('M j, Y') }}</td>
            <td>
              <a href="{{ url("/console/users/edit/{$user->id}") }}" class="action-edit">
                Edit
              </a>
            </td>
            <td>
              <a href="{{ url("/console/users/delete/{$user->id}") }}"
                 class="action-delete"
                 onclick="return confirm('Delete this user?')">
                Delete
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>
@endsection
