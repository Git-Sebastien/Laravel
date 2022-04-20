<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
  <a href="{{ route('home') }}" class="d-flex align-items-center col-md-1 mb-2 mb-md-0 text-white ms-5 title">
    {{ __('Newspaper') }}
  </a>
  <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0"> 
    <li><a href="{{ route('home') }}" class="nav-link px-2 link-dark">{{ __('Accueil') }}</a></li>
    <li><a href="{{ route('posts.index') }}" class="nav-link px-2 link-dark">{{ __('Articles') }}</a></li>
    <li><a href="{{ route('posts.create') }}" class="nav-link px-2">{{ __('Creer un article') }}</a></li>
    <div class="btn-group">
      <button type="button" class="dropdown-toggle nav-link link-dark" data-bs-toggle="dropdown" aria-expanded="false">
        {{ __('Categories') }}
      </button>
      <ul class="dropdown-menu">
        <li><a href="" class="nav-link px-2 link-dark">{{ __('Developpement') }}</a></li>
        <li><a href="" class="nav-link px-2 link-dark">{{ __('Actus') }}</a></li>
        <li><a href="" class="nav-link px-2 link-dark">{{ __('Jeux vidéo') }}</a></li>
      </ul>
    </div>
  </ul>
  <div class="col-md-3 text-end d-flex">
    @if (! Auth::user())
      <a href="{{ route('login') }}" class="nav-link px-2 link-dark">{{ __('Se connecter') }}</a>
      <a href="{{ route('register') }}" class="nav-link px-2 link-dark">{{ __("S'enregistrer") }}</a>
    @else
      <button type="button" class="btn-user"> <i class="fa-solid fa-user"></i>  {{ Auth::user()->name }} <i class="fa-solid fa-chevron-down"></i></button> 
      <ul class="nav-account shadow-sm">
        <li> <a href="{{ route('user',[Auth::user()->id,Auth::user()->name]) }}" class="nav-link px-2">{{ __('Mon compte') }}</a> </li>
        <li><form action="{{ route('logout') }}" method="post" class="form-logout">
          @csrf
          <button type="submit" class="btn-user">{{ __('Se deconnecter') }}</button>
      </form></li>
      </ul>
    @endif
  </div>
</header>