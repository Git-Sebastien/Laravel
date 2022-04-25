<h3 class="title-category border-bottom m-auto w-75" id="comment">Laissez un commentaire</h3>
<form action="{{ route('postComment') }}" method="post" class="form-create  w-50">
    @csrf
        <div class="row">
            <div class="mb-3 col-sm-6">
            <label for="author" class="form-label">{{ __('Nom') }}</label>
            <input type="text" class="form-control" id="author" placeholder="Mon nom..." name="author">
            </div>
            <div class="mb-3 col-sm-6" >
            <label for="title" class="form-label">{{ __('Mon email') }}</label>
            <input type="text" class="form-control" id="title" placeholder="Mon email" name="email">
            </div>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">{{ __('Commentaire') }}</label>
            <textarea class="form-control" id="createArea" rows="5" placeholder="Mon commentaire..." name="content"></textarea>
          </div>
          <input type="hidden" name="post_id" value="{{ $id }}">
      <button type="submit" class="btn btn-outline-primary mt-2">{{ __('Publier') }}</button>
</form>



