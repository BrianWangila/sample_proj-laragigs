{{-- @extends("layout") --}}

<x-layout >
{{-- @section("content") --}}





<!-- with blade -->
<h1> {{ $heading }}</h1>

@include('partials._search')

@if(count($listings) == 0)
<p>No Listings Found</p>

@endif

@foreach($listings as $listing)
  <x-listing-card :listing="$listing"/>
@endforeach

{{-- @endsection --}}

</x-layout>