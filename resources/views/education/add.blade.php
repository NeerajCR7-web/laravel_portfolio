@extends('layout.console')

@section('content')
<div class="add-container form-container">
  <div class="add-card">
    <h2 class="form-title">Add Education</h2>

    <form method="post" action="{{ env('APP_URL') }}/console/education/add" novalidate>
      @csrf

      <div class="form-group">
        <label for="degree">Degree</label>
        <input
          type="text"
          id="degree"
          name="degree"
          value="{{ old('degree') }}"
          required
        >
        @if ($errors->first('degree'))
          <div class="form-error">{{ $errors->first('degree') }}</div>
        @endif
      </div>

      <div class="form-group">
        <label for="university">University</label>
        <input
          type="text"
          id="university"
          name="university"
          value="{{ old('university') }}"
        >
        @if ($errors->first('university'))
          <div class="form-error">{{ $errors->first('university') }}</div>
        @endif
      </div>

      <div class="form-group">
        <label for="year">Year</label>
        <input
          type="text"
          id="year"
          name="year"
          value="{{ old('year') }}"
        >
        @if ($errors->first('year'))
          <div class="form-error">{{ $errors->first('year') }}</div>
        @endif
      </div>

      <div class="form-actions">
        <button type="submit" class="btn btn-primary">Add Education</button>
        <a href="{{ env('APP_URL') }}/console/education/list" class="btn btn-secondary">Back to Education List</a>
      </div>
    </form>
  </div>
</div>
@endsection
