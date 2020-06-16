@foreach ($small_news_data as $item)
<a href="{{ $item['url'] }}" class="mb-4" style="text-decoration: none;" target="_blank">
     <div class=" mb-4">
          <img class=" w-100 rounded" src="{{ $item['image_url'] }}" alt="">
          <h4 class="d-block">{{ $item['title'] }}</h4>
          <span class="text-dark">{{ $item['info'] }}</span>
     </div>
</a>
@endforeach