<div class="card mb-3 mt-5 w-75 m-auto reveal reveal-2">
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
      
  