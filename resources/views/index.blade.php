@extends('layout.main')
@section('content')
<div class="container mx-auto px-4 pt-16">
  <div class="trending-movies">
    <h2 class="uppercase tracking-wider text-orange-500 text-lg-font-semibold">Trending Movies</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
      @foreach($trendingmovies as $values)
        <x-movie-card :$values :$genres/>
      @endforeach
    </div>
  </div><!-- end of trending movies -->



  <div class="now-playing-movies py-24">
    <h2 class="uppercase tracking-wider text-orange-500 text-lg-font-semibold mb-4">Now Playing</h2>
    <div class="mr-5 ml-5 mt-5 mb-5 not-prose relative bg-slate-50 rounded-xl overflow-hidden 
    dark:bg-slate-800/25 flex items-center justify-center">
      <div class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,#fff,rgba(255,255,255,0.6))] 
        dark:bg-grid-slate-700/25 dark:[mask-image:linear-gradient(0deg,rgba(255,255,255,0.1),rgba(255,255,255,0.5))]" 
        style="background-position: 10px 10px;"></div>
      <img src="{{url('/')}}/img/left-arrow.svg" class="relative w-12 h-12 rounded-full bg-white 
      cursor-pointer object-cover p-2.5 left-0 top-1/2 translate-x-1/2 mr-6" id="arrowL">
      <div class="relative rounded-xl">
          <div class="flex flex-row snap-x overflow-hidden py-14 scroll-m-10" id="slider">
            @foreach($nowPlayingMovies as $values)
              <div class="ml-3 snap-start scroll-ml-6 shrink-0 relative mr-3">
                <a href="{{route('movies.show', $values['id'])}}">
                  <img src="https://image.tmdb.org/t/p/w500/{{$values['poster_path']}}" alt="{{$values['name'] ?? $values['title']}}" 
                  class="hover:opacity-75 transition ease-in-out  duration-150 w-full h-72 hover:scale-105">
                </a> 
              </div>
            @endforeach
          </div>
      </div>
      <img src="{{url('/')}}/img/right-arrow.svg" class="relative w-12 h-12 rounded-full bg-white
      cursor-pointer object-cover p-2.5 right-0 top-1/2 translate-x-1/2 mr-8" id="arrowR">
    </div>
  </div><!-- end of now playing movies -->
</div>

<script>
  const prev = document.getElementById('arrowL');
  const next = document.getElementById('arrowR');
  const slider = document.getElementById('slider');

  prev.addEventListener('click', () => { slider.scrollLeft -= 300});
  next.addEventListener('click', () => { slider.scrollLeft += 300});
</script>
@endsection

