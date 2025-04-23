{{-- resources/views/layout/console.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Portfolio Console</title>

  {{-- Static CSS --}}
  <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>
<body>
  <header>
    <div class="header-container">
      {{-- Logo / Title --}}
      <div class="logo">Portfolio Console</div>

      {{-- Navigation --}}
      <nav class="nav-menu">
        @if (Auth::check())
          <a href="{{ url('/console/dashboard') }}">Dashboard</a>
          <a href="{{ url('/console/projects/list') }}">Projects</a>
          <a href="{{ url('/console/skills/list') }}">Skills</a>
          <a href="{{ url('/console/education/list') }}">Education</a>
          <a href="{{ url('/console/blog/list') }}">Blog</a>
          <a href="{{ url('/console/users/list') }}">Users</a>
          <a href="{{ url('/console/logout') }}">Log Out</a>
        @else
          <a href="{{ url('/') }}">Return to My Portfolio</a>
        @endif

        <input
          type="search"
          id="search-box"
          class="search-input"
          placeholder="Search…"
        >

        <button id="dark-mode-toggle" class="btn">🌙 Dark</button>
      </nav>

      <button id="menu-toggle" class="menu-toggle">&#9776;</button>
    </div>

    @if (session('message'))
      <div class="flash-message">
        {{ session('message') }}
      </div>
    @endif
  </header>

  {{-- Main content --}}
  <main>
    @yield('content')
  </main>

  {{-- Footer with contact info --}}
  <footer class="footer">
    <div class="footer-container">
      <h2>Get in Touch</h2>
      <p>We’re a team of passionate web developers. Let’s connect:</p>
      <ul class="contact-list">
        <li><a href="https://linkedin.com/in/your-profile" target="_blank">LinkedIn</a></li>
        <li><a href="https://github.com/your-username" target="_blank">GitHub</a></li>
        <li><a href="mailto:your.email@example.com">Email</a></li>
      </ul>
    </div>
  </footer>

  {{-- Static JS --}}
  <script src="{{ asset('app.js') }}"></script>
</body>
</html>
