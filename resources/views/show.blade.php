@extends('layout.main')
@section('content')

<div class="movie-info border-b border-gray-800 bg-no-repeat bg-cover"
  style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
  url(https://image.tmdb.org/t/p/w500{{$details['backdrop_path'] ?? null}});">
  <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
    <img src="https://image.tmdb.org/t/p/w500/{{$details['poster_path'] ?? null}}" class="W-64 md:w-96">
    <div class="md:ml-24">
      <h2 class="text-4xl font-semibold">{{$details['title'] ?? null}}</h2>
      <div class="flex flex-wrap items-center text-gray-400 text-sm mt-1">
        <svg class="fill-current text-orange-500 w-4" viewbox="0 0 24 24"><g data-name="Layer 2">
          <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0
          01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0
          01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
        <span class="ml-1">{{($details['vote_average'] ?? null) * 10 . '%'}}</span>
        <span class="mx-2">|</span>
        <span>{{date('d M Y',strtotime($details['release_date'] ?? null))}}</span>
        <span class="mx-2">|</span>
        <span>
            @foreach ($details['genres'] as $genre)
              {{$genre['name']}}
            @endforeach
        </span>
      </div>
      <p class="text-gray-300 mt-8">{{$details['overview']}}</p>
      <div class="mt-12">
        <h4 class="text-white font-semibold">Feature Cast</h4>
        <div class="flex mt-4">
          <div>
            <div>Lorem ipsum dolor</div>
            <div class="text-sm text-gray-400">Director, Screenplay, Story</div>
          </div>
          <!-- ------------ -->
          <div class="ml-10">
            <div>Lorem ipsum dolor</div>
            <div class="text-sm text-gray-400">Writer</div>
          </div>
        </div>
        <!-- ------- -->
        <div class="mt-12">
          <button class="flex items-center bg-orange-500 text-gray-900 rounded dont-semibold
          px-5 py4 hover:bg-orange-600 transition easy-in-out duration-150">
          <img src="{{url('/')}}/img/play.svg" alt="">
          <span class="ml-2">Play Trailer</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div><!-- end of movie info -->

<div class="media border-b border-gray-800  mt-8 mb-4">
  <h2 class="text-4xl font-semibold ml-6">Media</h2> <br>
    <div class="flex items-center justify-center">
      @foreach($videos as $values)
        @if($loop->index < 3)
          <iframe class="ml-3 mr-3" width="500" height="280" 
          src="https://www.youtube.com/embed/{{$values['key']}}" allowfullscreen> </iframe>
        @endif
      @endforeach
    </div> <br>
</div><!-- end of media -->

<div class="movie-cast border-b border-gray-800 mb-8">
  <h2 class="text-4xl font-semibold ml-6 mt-3">Cast</h2>
  <div class="flex items-center justify-center">
    <div class="mr-5 ml-5 mt-5 mb-5 not-prose relative bg-slate-50 rounded-xl overflow-hidden 
      dark:bg-slate-800/25">
      <div class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,#fff,rgba(255,255,255,0.6))] 
        dark:bg-grid-slate-700/25 dark:[mask-image:linear-gradient(0deg,rgba(255,255,255,0.1),rgba(255,255,255,0.5))]" 
        style="background-position: 10px 10px;"></div>
      <div class="relative rounded-xl overflow-auto">
        <div class="flex flex-row snap-x overflow-x-auto py-14 scroll-m-10">
          @foreach($actors as $values)
            <div class="ml-3 snap-start scroll-ml-6 shrink-0 relative first:pl-6 last:pr-[calc(100%-21.5rem)] mr-3">
              <img src="https://www.themoviedb.org/t/p/w138_and_h175_face{{$values['profile_path']}}"
              class="hover:opacity-75 transition ease-in-out  duration-150 w-32 h-44">
              <div class="mt-2">
                <div>
                  <h5 class="text-yellow-100">{{$values['character']}}</h5>
                  <h6 class="text-gray-400">{{$values['name']}}</h6>
                </div>
              </div>
            </div>
          @endforeach
          <div class="absolute inset-0 pointer-events-none border border-black/5 rounded-xl dark:border-white/5 mb-8"></div>
        </div>
      </div>
    </div>
  </div>
</div><!-- end of movie cast -->

@endsection('content')