@extends('layout.app')
@section('content')
<div style="margin-left:30%; margin-bottom:50px;">
<form action="/listing" method="get"> 
  @csrf 
<input type="text" name="search" class="form-control" style="width:50%; display:inline">
<button type="submit" class="btn btn-success">Search</button>
</form>
</div>
<h1>Latest Shows here</h1><hr>
@if(empty($somme))
<h3>Nothing found</h3>
@else
@foreach ($somme as $some)
<pre>  <a href="http://www.omdbapi.com/?apikey=68ec73bc&t={{$some->showname}}">{{$some->showname}}</a></pre> 
@endforeach

@endif

@if(!empty($listings))
@foreach ($listings as $listing)
  <pre>  <a href="http://www.omdbapi.com/?apikey=68ec73bc&t={{$listing->showname}}">{{$listing->showname}}</a></pre>
@endforeach

@endif
@endsection