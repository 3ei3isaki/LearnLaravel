@foreach ($news_data as $item)
<a href="{{ $item['url'] }}" class="mb-4" style="text-decoration: none;">
     <div class=" row">
          <div class="col-lg-3">
               <img class=" w-100 rounded" src="{{ $item['image_url'] }}" alt="{{ $item['title'] }}">
          </div>
          <div class="col-lg-9">
               <h4 class=" d-block">{{ $item['title'] }}</h4>
               <p class="text-dark">{{ $item['description'] }}</p>
               <span class="text-dark">{{ $item['info'] }}</span>
          </div>
     </div>
</a>
<hr>
@endforeach