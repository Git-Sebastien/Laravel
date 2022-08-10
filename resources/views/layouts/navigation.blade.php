<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-around mb-4 border-bottom bg-animate">
  <a href="{{ route('home') }}" class="px-2" id="nav-link"><img src="{{ asset('images/logo.png') }}" alt="" id="logo"><h1>Newspapers</h1></a>
  <ul class="nav justify-content-center" id="nav"> 
    <li><a href="{{ route('home') }}" class="nav-link px-2" id="nav-link">{{ __('Accueil') }}</a></li>
    <li><a href="{{ route('posts.index') }}" class="nav-link px-2" id="nav-link">{{ __('Articles') }}</a></li>
     @if (!empty(Auth::user()->role_id) && Auth::user()->role_id == 1)
      <li><a href="{{ route('posts.create') }}" class="nav-link px-2" id="nav-link">{{ __('Creer un article') }}</a></li> 
    @endif
    <x-nav-categories/>
  </ul>
  <nav class="nav-user col-xl-3" id="nav-user">
    @if (! Auth::user())
      <a href="{{ route('login') }}" class="nav-link px-2 link-dark" id="nav-link">{{ __('Se connecter') }}</a>
      <a href="{{ route('register') }}" class="nav-link px-2 link-dark" id="nav-link">{{ __("S'enregistrer") }}</a>
    @else 
    <div class="btn-group">
      <button type="button" class="dropdown-toggle nav-category nav-link link-dark" data-bs-toggle="dropdown" aria-expanded="false" id="nav-link">
        <i class="fa-solid fa-user mr-3"></i>{{ Auth::user()->name }}
      </button>
      <ul class="dropdown-menu" id="dropdown">
        <li> <a href="{{ route('user',[Auth::user()->id,Auth::user()->name]) }}" class="nav-link">{{ __('Mon compte') }}</a></li>
        <li><form action="{{ route('logout') }}" method="post" class="form-logout">
          @csrf
          <button type="submit" class="nav-link">{{ __('Se deconnecter') }}</button>
      </form></li>
      </ul>
    </div>  
      </ul>
    @endif
    </nav>
    <div class="burger">
      <span></span>
    </div>
    <div class="bloc">


    </div>
</header>


