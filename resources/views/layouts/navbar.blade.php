<nav class="navbar navbar-dark bg-dark px-3 ">
  <div class="container">
    <a href="/list" class="navbar-brand">ToDO App</a>
    <div >
      @if(\Auth::guest())
           <a class="text-light me-3 text-decoration-none" href="/register">Register</a>
           <a class="text-light text-decoration-none" href="/login">Sign In</a>
      @else
        <ul class="list-inline mb-0">
          <li class="list-inline-item"><a class="text-light text-decoration-none" href="#">Welcome, {{ \Auth::user()->nama }}</a></li>
          <li class="list-inline-item"><a class="text-light text-decoration-none" href="{{ url('/logout') }}">Sign Out</a></li>
        </ul>
      @endif
    </div>
  </div>
</nav>