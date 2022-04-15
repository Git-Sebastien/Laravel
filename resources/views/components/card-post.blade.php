<div class="card mb-3 mt-5 w-75 m-auto slide-in from-right">
  <div class="row g-0">
      <div class="col-md-4">
          <img src="{{ asset('images/demo.jpg') }}" class="img-fluid rounded-start" alt="Image de l'article">
      </div>
    <div class="col-md-8 background">
      <div class="card-body">
        <h5 class="card-title"> {{ $title }} </h5>
        <p class="card-text"> {{ $content }}</p>
        <p class="card-text text-muted card-author"> {{ __('Publier par') }} {{ $author }}</p>
      </div>
      <p class="card-text"><small class="text-muted"><a href="{{ $route }}" class="card-link">{{ __('Voir l\'article') }} <i class="fa-solid fa-right-long"></i></a> </small></p>
    </div>
  </div>
</div>
    





    