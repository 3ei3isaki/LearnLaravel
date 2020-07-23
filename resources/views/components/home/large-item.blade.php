@empty (!$large_news_data[0])
<a href="{{ $large_news_data[0]['url'] }}" style="text-decoration: none;" target="_blank">
    <img class="w-100 rounded" src="{{ $large_news_data[0]['image_url'] }}" alt="">
    <h2 class="font-weight-mediun">{{ $large_news_data[0]['title'] }}</h2>
    <p class="text-dark">{{ $large_news_data[0]['description'] }}</p>
    <span class="text-secondary">{{ $large_news_data[0]['info'] }}</span>
</a>
@endempty
