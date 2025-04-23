@extends('layout.console')

@section('content')
<div class="list-page">

  <!-- Header -->
  <div class="list-header">
    <h2>Manage Blog</h2>
    <a href="{{ url('/console/blog/add') }}" class="btn btn-green">+ New Post</a>
  </div>

  <!-- Responsive Table -->
  <div class="table-container">
    <table class="list-table">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Slug</th>
          <th>Status</th>
          <th>Published</th>
          <th colspan="3">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($blog as $post)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->slug }}</td>
            <td>{{ ucfirst($post->status) }}</td>
            <td>{{ $post->published_at ? $post->published_at->format('M j, Y') : '—' }}</td>
            <td><a href="{{ url("/console/blog/edit/{$post->id}") }}" class="action-edit">Edit</a></td>
            <td><a href="{{ url("/console/blog/delete/{$post->id}") }}" class="action-delete" onclick="return confirm('Delete this post?')">Delete</a></td>
            <td><a href="{{ url("/console/blog/image/{$post->id}") }}" class="action-view">Image</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>
@endsection
