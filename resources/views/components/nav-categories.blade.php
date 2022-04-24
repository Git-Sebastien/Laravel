<div class="btn-group">
    <button type="button" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false" id="nav-link">
      {{ __('Categories') }}
    </button>
    <ul class="dropdown-menu">
        @foreach ($category as $item)
        <li><a href="{{ route('categorie',[$item->id,$item->name]) }}" class="nav-link px-2">{{ __($item->name) }}</a></li>
        @endforeach
    </ul>
  </div>
