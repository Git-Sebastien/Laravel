@if ($comments->isEmpty())
    <h3 class="text-center mb-4">Aucun commententaire publié</h3>
@else
<h3 class="title-category border-bottom w-75 m-auto ">Commentaires</h3>
@foreach ($comments as $comment)
<div class=" card card-comment">
    <div class="card-body">
      <h6 class="card-subtitle mb-2 text-muted">{{ __('Ecrit par ') }} {{ $comment->author }} le {{ $comment->created_at }}</h6>
      <p class="card-text">{{ $comment->content }}</p>
      @if (Auth::user()->id == $comment->user_id)
        <a href="{{ route('editComment',$comment->id) }}" class="card-link">{{ __('Editer') }}</a>
        <form action="{{ route('destroyComment',$comment->id) }}" method="post">@csrf  <button type="submit" class="card-link">{{ __('Supprimer') }}</button></form>  
      @endif
    </div>
  </div>
@endforeach
@endif



