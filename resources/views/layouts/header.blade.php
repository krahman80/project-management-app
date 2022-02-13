<header class="text-center text-black text-opacity-75 my-5">
    <h1 class="display-5">Project Manager App</h1>
    <p class="text-gray lead mb-0">Manage your project with your team effectively !</p>
    <p class="text-white text-sm mb-0">css by
      <a href="https://bootstrapious.com" class="text-white">
        <u>Bootstrapious</u></a>
    </p>
    @auth
        <div class="my-2">
            <a class="badge rounded-pill bg-info py-2 px-3 btn" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    @endauth
</header>