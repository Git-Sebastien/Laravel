<div class="card  w-75 card-article">
    <div class="g-0">
        <div class="col-md-4 card-image">
            <img src="{{ asset('images/demo.jpg') }}" class="rounded-start card-image" alt="...">
        </div>
      <div class="col-md-8 background">
        <div class="card-body">
          <h5 class="card-title"> {{ $title }} </h5>
          <p class="card-text"> {{ $content }}</p>
          <p class="card-text"><small class="text-muted"></small></p>
          <p class="card-text text-muted card-author">{{ __('Publier par') }}  {{ $author }}</p>
        </div>
      </div>
    </div>
  </div>
  <x-card-comment/>




      
  