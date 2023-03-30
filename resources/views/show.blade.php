@extends('layout.main')
@section('content')

<div class="movie-info border-b border-gray-800">
  <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
    <img src="{{url('/')}}/img/movies/movie-1.jpg" alt="" class="W-64 md:w-96">
    <div class="md:ml-24">
      <h2 class="text-4xl font-semibold">Jumanji(2017)</h2>
      <div class="flex flex-wrap items-center text-gray-400 text-sm mt-1">
        <svg class="fill-current text-orange-500 w-4" viewbox="0 0 24 24"><g data-name="Layer 2">
          <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0
          01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0
          01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
        <span class="ml-1">85%</span>
        <span class="mx-2">|</span>
        <span>Dec 20, 2017</span>
        <span class="mx-2">|</span>
        <span>Adventure, Action, Fantasy</span>
      </div>
      <p class="text-gray-300 mt-8">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio nisi cupiditate voluptatum 
        assumenda doloremque eius culpa reprehenderit illum in, dolorum adipisci hic fugit quia, 
        vitae error laudantium, ut dignissimos blanditiis fugiat sed quidem molestiae? Ea delectus 
        nostrum nam dignissimos quidem vel maxime ipsam minima similique rem, provident, earum quae 
        voluptatem!
      </p>
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

<div class="movie-cast border-b border-gray-800">
  <h2 class="text-4xl font-semibold ml-6 mt-3">Cast</h2>
  <div class="container mx-auto px-4 py-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 
  lg:grid-cols-4 gap-16">
    <div class="mt-2">
      <a href="">
        <img src="{{url('/')}}/img/actors/userProfile2.svg" alt="" class="hover:opacity-75 transition ease-in-out  duration-150">
      </a>
      <div class="mt-2">
        <div>
          <h5 class="text-yellow-100">Character's Name</h5>
          <h6 class="text-gray-400">Original Name</h6>
        </div>
      </div>
    </div>
    <!-- -------------------------------------------------------  -->
    <div class="mt-2">
      <a href="">
        <img src="{{url('/')}}/img/actors/userProfile4.svg" alt="" class="hover:opacity-75 transition ease-in-out  duration-150">
      </a>
      <div class="mt-2">
        <div>
          <h5 class="text-yellow-100">Character's Name</h5>
          <h6 class="text-gray-400">Original Name</h6>
        </div>
      </div>
    </div>
    <!-- -------------------------------------------------------  -->
    <div class="mt-2">
      <a href="">
        <img src="{{url('/')}}/img/actors/userProfile.svg" alt="" class="hover:opacity-75 transition ease-in-out  duration-150">
      </a>
      <div class="mt-2">
        <div>
          <h5 class="text-yellow-100">Character's Name</h5>
          <h6 class="text-gray-400">Original Name</h6>
        </div>
      </div>
    </div>
    <!-- -------------------------------------------------------  -->
    <div class="mt-2">
      <a href="">
        <img src="{{url('/')}}/img/actors/userProfile3.svg" alt="" class="hover:opacity-75 transition ease-in-out  duration-150">
      </a>
      <div class="mt-2">
        <div>
          <h5 class="text-yellow-100">Character's Name</h5>
          <h6 class="text-gray-400">Original Name</h6>
        </div>
      </div>
    </div>
    <!-- -------------------------------------------------------  -->
  </div>
</div><!-- end of movie cast -->

@endsection('content')