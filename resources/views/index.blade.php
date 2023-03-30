@extends('layout.main')
@section('content')
<div class="container mx-auto px-4 pt-16">
  <div class="popular-movies">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
    @foreach($datos as $valor)
      <div class="mt-8">
        <a href="">
          <img src="https://www.themoviedb.org/t/p/w220_and_h330_face{{$valor['poster_path'] }}" 
          alt="" class="hover:opacity-75 transition ease-in-out  duration-150">
        </a>
        <div class="mt-2">
          <a href="" class="text-lg mt-2 hover:text-gray-300">{{$valor['title']}}</a>
          <div class="flex items-center text-gray-400 text-sm mt-1">
            <img src="{{url('/')}}/img/star.svg" alt="" class="fill-current text-orange-500 w-4">
            <span class="ml-1">{{$valor['vote_average'] * 10 . '%'  }}</span>
            <span class="mx-2">|</span>
            <span>{{ date('Y',strtotime($valor['release_date'])) }}</span>
          </div>
          <div class="text-gray-400 text-sm">
            @foreach ($valor['genres'] as $genre)
              <span class="ml-5">{{$genre['name']}}</span>
            @endforeach
          </div>
        </div>
      </div>
    @endforeach
    </div>
  </div> <!-- end of popular movies -->
</div>
@endsection
