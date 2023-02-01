@extends("layout")

@section("content")
@include('partials._search')

<div class="mx-4">
  <div class="flex">
    <div class="hidden w-48 mr-6 md:block">
      <img src="{{asset('images/no-image.png')}}"/>
    </div>
    <div>
      <h3 class="text-2xl">{{ $listing["title"] }}</h3>
      <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
      <ul style="display: flex; list-style: none">
        <li style="margin-right: 2vw">Laravel</li>
        <li style="margin-right: 2vw">API</li>
        <li style="margin-right: 2vw">Backend</li>
        <li style="margin-right: 2vw">Vue</li>
      </ul>
      <div>
        <div class="text-lg mt-4"><p>{{$listing->location}}</p></div>
          <p>{{ $listing->description}}</p>
          <div class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-envelope"></i>
            <a href="mailto:{{$listing->email}}">Contact Employer</a>
          </div>
        <div class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-globe"></i>
          <a href="{{$listing->website}}">Visit Website</a>
        </div>
      </div>
    </div>
  </div>


</div>

@endsection