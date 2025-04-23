{{-- resources/views/console/dashboard.blade.php --}}
@extends('layout.console')

@section('content')
  {{-- Hero / Intro --}}
  <section class="intro">
    <h1>Welcome to Our Team Portfolio</h1>
    <p>We are a group of Web Development students from Humber College, united by our shared passion for building modern, responsive web applications. Each card below links you to our latest work and accomplishments.</p>

    {{-- Team Members --}}
    <h3>Meet the Team</h3>
    <ul class="team-members">
      <li>Neeraj Kumar Ramsamujh – Web Developer</li>
      <li>AniketKumar Sharma– Web Developer</li>
      <li>Harsh Parmar – Web Developer</li>
    </ul>
  </section>

  {{-- Dashboard Cards --}}
  <ul id="dashboard">
    <li>
      <a href="{{ url('/console/projects/list') }}">
        <span class="card-title">Projects</span>
        <span class="badge">{{ $projectCount }}</span>
      </a>
    </li>
    <li>
      <a href="{{ url('/console/skills/list') }}">
        <span class="card-title">Skills</span>
        <span class="badge">{{ $skillCount }}</span>
      </a>
    </li>
    <li>
      <a href="{{ url('/console/education/list') }}">
        <span class="card-title">Education</span>
        <span class="badge">{{ $educationCount }}</span>
      </a>
    </li>
    <li>
      <a href="{{ url('/console/blog/list') }}">
        <span class="card-title">Blog</span>
        <span class="badge">{{ $blogCount }}</span>
      </a>
    </li>
    <li>
      <a href="{{ url('/console/logout') }}">
        <span class="card-title">Log Out</span>
      </a>
    </li>
  </ul>
@endsection
