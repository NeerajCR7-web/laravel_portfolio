@extends('layout.console')

@section('content')
<div class="list-page">

  <!-- Header -->
  <div class="list-header">
    <h2>Manage Projects</h2>
    <a href="{{ url('/console/projects/add') }}" class="btn btn-green">+ New Project</a>
  </div>

  <!-- Responsive Table -->
  <div class="table-container">
    <table class="list-table">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Slug</th>
          <th>URL</th>
          <th>Status</th>
          <th>Created</th>
          <th colspan="3">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($projects as $project)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $project->title }}</td>
            <td>{{ $project->slug }}</td>
            <td>
              @if ($project->url)
                <a href="{{ $project->url }}" target="_blank">Visit</a>
              @else
                —
              @endif
            </td>
            <td>{{ ucfirst($project->status) }}</td>
            <td>{{ $project->created_at->format('M j, Y') }}</td>
            <td><a href="{{ url("/console/projects/edit/{$project->id}") }}" class="action-edit">Edit</a></td>
            <td><a href="{{ url("/console/projects/delete/{$project->id}") }}" class="action-delete" onclick="return confirm('Delete this project?')">Delete</a></td>
            <td><a href="{{ url("/console/projects/image/{$project->id}") }}" class="action-view">Image</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>
@endsection
