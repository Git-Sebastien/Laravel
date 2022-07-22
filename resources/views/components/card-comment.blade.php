@if ($comments->isEmpty())
    <h3 class="text-center mb-4">Aucun commententaire publié</h3>
@else
<h3 class="title-category border-bottom w-75 m-auto ">Commentaires</h3>
    @foreach ($comments as $comment)
  <div class="card card-comment">
      <div class="img-user-comment">
          @foreach ($user as $item)
            @if ($comment->author == $item->name && !empty($item->image_path))
              <img src="{{ asset("images/avatar/$item->image_path") }}" alt="" class="p-2 rounded-circle">
            @endif
          @endforeach
      </div>
    <div class="card-body">
      <h6 class="card-subtitle mb-2 text-muted">{{ __('Ecrit par') }} {{ $comment->author }} le {{ $comment->created_at }}</h6>
      <p class="card-text">{{ $comment->content }}</p>
      @if (!empty(Auth::user()->id) &&  Auth::user()->id == $comment->user_id || !empty(Auth::user()) && Auth::user()->role_id == 1)
        <a href="{{ route('editComment',$comment->id) }}" class="card-link">{{ __('Editer') }}</a>
        <form action="{{ route('destroyComment',$comment->id) }}" method="post">@csrf  <button type="submit" class="card-link">{{ __('Supprimer') }}</button></form>  
      @endif
    </div>
  </div>
@endforeach
@endif





