@extends('layout.console')

@section('content')
<div class="list-page">
  <!-- Header -->
  <div class="list-header">
    <h2>Manage Education</h2>
    <a href="{{ env('APP_URL') }}/console/education/add" class="btn btn-green">+ New Education</a>
  </div>

  <!-- Responsive Table -->
  <div class="table-container">
    <table class="list-table">
      <thead>
        <tr>
          <th>Degree</th>
          <th>University</th>
          <th>Year</th>
          <th>Created</th>
          <th colspan="3" class="actions">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($education as $education)
          <tr>
          
            <td>{{ $education->degree }}</td>
            <td>{{ $education->university }}</td>
            <td>{{ $education->year }}</td>
            </td>
            <td>{{ $education->created_at->format('M j, Y') }}</td>
            <td><a href="{{ env('APP_URL') }}/console/education/image/{{ $education->id }}" class="action-view">Image</a></td>
            <td><a href="{{ env('APP_URL') }}/console/education/edit/{{ $education->id }}" class="action-edit">Edit</a></td>
            <td><a href="{{ env('APP_URL') }}/console/education/delete/{{ $education->id }}" class="action-delete">Delete</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
