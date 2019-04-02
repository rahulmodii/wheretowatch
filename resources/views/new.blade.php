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

@else
@foreach ($somme as $some)
<pre>  <a href="/details/{{$some->showname}}">{{$some->showname}}</a></pre> 
@endforeach

@endif

@if(!empty($listings))
@foreach ($listings as $listing)
  <pre>  <a href="/details/{{$listing->showname}}">{{$listing->showname}}</a></pre>
@endforeach

@endif
@endsection