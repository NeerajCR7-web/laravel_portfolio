@extends('layout.console')

@section('content')
<div class="add-container form-container">
  <div class="add-card">
    <h2 class="form-title">Add Skill</h2>

    <form method="post" action="{{ env('APP_URL') }}/console/skills/add" novalidate>
      @csrf

      <div class="form-group">
        <label for="title">Title</label>
        <input
          type="text"
          id="title"
          name="title"
          value="{{ old('title') }}"
          required
        >
        @if ($errors->first('title'))
          <div class="form-error">{{ $errors->first('title') }}</div>
        @endif
      </div>

      <div class="form-group">
        <label for="url">URL</label>
        <input
          type="url"
          id="url"
          name="url"
          value="{{ old('url') }}"
        >
        @if ($errors->first('url'))
          <div class="form-error">{{ $errors->first('url') }}</div>
        @endif
      </div>

      <div class="form-actions">
        <button type="submit" class="btn btn-primary">Add Skill</button>
        <a href="{{ env('APP_URL') }}/console/skills/list" class="btn btn-secondary">Back to Skill List</a>
      </div>
    </form>
  </div>
</div>
@endsection
