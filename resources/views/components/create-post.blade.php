<h3 class="title-category border-bottom reveal reveal-4">Creer un article </h3>

<form action="{{ route('posts.store') }}" method="post" class="form-create">
    @csrf
    <div class="row">
        <div class="mb-3 col-sm-6">
          <label for="author" class="form-label">{{ __('Nom') }}</label>
          <input type="text" class="form-control" id="author" placeholder="Mon nom..." name="author" value="{{ Auth::user()->name ?? "" }}">
        </div>
        <div class="mb-3 col-sm-6" >
          <label for="title" class="form-label">{{ __('Titre') }}</label>
          <input type="text" class="form-control" id="title" placeholder="Mon titre" name="title">
        </div>
    </div>
        <div class="mb-3">
          <label for="title" class="form-label">{{ __('Contenu') }}</label>
          <textarea class="form-control" id="createArea" rows="9" placeholder="Mon contenu" name="content"></textarea>

          <select class="form-select mt-3 w-25" aria-label="Default select example" name="categories">
            <option selected>{{ __('Categories') }}</option>
            <option value="1">{{ __('Developpement') }}</option>
            <option value="2">{{ __('Actus') }}</option>
            <option value="3">{{ __('Jeux vidéo') }}</option>
          </select>
        </div>
       
      <button type="submit" class="btn btn-outline-primary mt-2">{{ __('Publier') }}</button>
</form>
