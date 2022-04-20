@extends('layouts.app')


@section('edit-comment')
  <h3 class="title-category border-bottom reveal reveal-4">Editer le commentaire </h3>

  <form action="{{ route('updateComment',$comment->id) }}" method="post" class="form-create">
      @csrf
      @method('PATCH')
          <div class="mb-3">
            <label for="title" class="form-label">{{ __('Contenu') }}</label>
            <textarea class="form-control" id="createArea" rows="9" placeholder="Mon contenu" name="content">{{ $comment->content }}</textarea>
          </div>
        <button type="submit" class="btn btn-outline-primary mt-2">{{ __('Editer') }}</button>
  </form>
@endsection
