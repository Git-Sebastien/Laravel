<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
  <a href="{{ route('home') }}" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark ms-5 title">
    {{ __('Newspaper') }}
  </a>

  <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
    <li><a href="{{ route('home') }}" class="nav-link px-2 link-secondary">{{ __('Accueil') }}</a></li>
    <li><a href="{{ route('posts.index') }}" class="nav-link px-2 link-dark">{{ __('Articles') }}</a></li>
    <li><a href="{{ route('posts.create') }}" class="nav-link px-2 link-dark">{{ __('Creer un article') }}</a></li>
  </ul>
  <div class="col-md-3 text-end">
    <button type="button" class="btn me-2 text-dark">{{ __('Se connecter') }}</button>
    <button type="button" class="btn text-dark">{{ __('Créer un compte') }}</button>
  </div>
</header>