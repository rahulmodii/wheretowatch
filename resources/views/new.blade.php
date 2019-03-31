@extends('layout.app')
@section('content')
@foreach ($shows as $show)

  <pre>  <a href="http://www.omdbapi.com/?apikey=68ec73bc&t={{$show->showname}}">{{$show->showname}}</a></pre>
@endforeach
@endsection