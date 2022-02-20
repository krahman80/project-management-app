<header class="text-center text-black text-opacity-75 my-5">
    <h1 class="display-5">Project Manager App</h1>
    <p class="text-gray lead mb-0">Manage your project with your team effectively !</p>
    <p class="text-white text-sm mb-0">css by
      <a href="https://bootstrapious.com" class="text-white">
        <u>Bootstrapious</u></a>
    </p>
    @auth
        <ul class="nav justify-content-center pt-2">
            <li class="nav-item mx-2">
              <a class="badge rounded-pill bg-info py-2 px-3 btn active"  aria-current="page" href="{{ route('home') }}">home</a>
            </li>
            <li class="nav-item mx-2">
              <a class="badge rounded-pill bg-info py-2 px-3 btn active"  aria-current="page" href="{{ route('admin.users.index') }}">User</a>
            </li>
            <li class="nav-item mx-2">
                <a class="badge rounded-pill bg-info py-2 px-3 btn active"  aria-current="page" href="{{ route('admin.roles.index') }}">roles</a>
            </li>
            <li class="nav-item mx-2">
              <a class="badge rounded-pill bg-info py-2 px-3 btn active"  aria-current="page" href="{{ route('admin.permissions.index') }}">permission</a>
          </li>
            <li class="nav-item mx-2">
                <a class="badge rounded-pill bg-info py-2 px-3 btn" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </li>
            {{-- <li class="nav-item mx-2">
              <a class="nav-link badge rounded-pill bg-info py-2 px-3 btn" href="#">Link</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link badge rounded-pill bg-info py-2 px-3 btn disabled">Disabled</a>
            </li> --}}
          </ul>
    @endauth
</header>
{{-- <div class="container">
    <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills justify-content-center ">
            <li class="nav-item">
              <a class="nav-link py-2 px-3 active" href="#">Active</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>             
        </div>
    </div>
</div> --}}