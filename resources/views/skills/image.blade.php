@extends('layout.console')

@section('content')
<div class="add-container form-container">
  <div class="add-card">
    <h2 class="form-title">Skill Image</h2>

    @if($skill->image)
      <div class="image-preview">
        <img
          src="{{ asset('storage/'.$skill->image) }}"
          alt="Current Skill Image"
          class="preview-img"
        >
      </div>
    @endif

    <form
      method="post"
      action="{{ env('APP_URL') }}/console/skills/image/{{ $skill->id }}"
      enctype="multipart/form-data"
      novalidate
    >
      @csrf

      <div class="form-group">
        <label for="image">Select New Image</label>
        <input type="file" id="image" name="image" required>
        @if ($errors->first('image'))
          <div class="form-error">{{ $errors->first('image') }}</div>
        @endif
      </div>

      <div class="form-actions">
        <button type="submit" class="btn btn-primary">Upload Image</button>
        <a href="{{ env('APP_URL') }}/console/skills/list" class="btn btn-secondary">Back to Skill List</a>
      </div>
    </form>
  </div>
</div>
@endsection
