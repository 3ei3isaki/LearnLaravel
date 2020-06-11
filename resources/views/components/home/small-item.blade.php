@foreach ($small_news_data as $item)
<a href="{{ $large_news_data['url'] }}" class="mb-4" style="text-decoration: none;">
     <div class=" mb-4">
          <img class=" w-100 rounded" src="https://photo-2-baomoi.zadn.vn/w700_r16x9_sm/2020_06_11_30_35343568/504d9b96d1d5388b61c4.jpg" alt="">
          <h4 class="d-block">{{ $item['title'] }}</h4>
          <span class="text-dark">{{ $item['info'] }}</span>
     </div>
</a>
@endforeach