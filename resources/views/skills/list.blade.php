@extends('layout.console')

@section('content')
<div class="list-page">
  <!-- Header -->
  <div class="list-header">
    <h2>Manage Skills</h2>
    <a href="{{ env('APP_URL') }}/console/skills/add" class="btn btn-green">+ New Skill</a>
  </div>

  <!-- Responsive Table -->
  <div class="table-container">
    <table class="list-table">
      <thead>
        <tr>
          <th>Image</th>
          <th>Title</th>
          <th>URL</th>
          <th>Created</th>
          <th colspan="3" class="actions">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($skills as $skill)
          <tr>
            <td>
              @if ($skill->image)
                <img src="{{ asset('storage/'.$skill->image) }}" alt="{{ $skill->title }}" class="thumb">
              @endif
            </td>
            <td>{{ $skill->title }}</td>
            <td>
              <a href="{{ $skill->url }}" class="slug-link" target="_blank">
                {{ $skill->url }}
              </a>
            </td>
            <td>{{ $skill->created_at->format('M j, Y') }}</td>
            <td><a href="{{ env('APP_URL') }}/console/skills/image/{{ $skill->id }}" class="action-view">Image</a></td>
            <td><a href="{{ env('APP_URL') }}/console/skills/edit/{{ $skill->id }}" class="action-edit">Edit</a></td>
            <td><a href="{{ env('APP_URL') }}/console/skills/delete/{{ $skill->id }}" class="action-delete">Delete</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
