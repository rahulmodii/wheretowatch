@if (!empty($response))
<img src="{{$value = (!empty($response['Poster'])) ? $response['Poster'] : 'N/A'}}">
<pre>
<h2>Title:</h2>{{$value = (!empty($response['Title'])) ? $response['Title'] : 'N/A'}}
<h2>Year:</h2>{{$value = (!empty($response['Year'])) ? $response['Year'] : 'N/A'}}
<h2>Released:</h2>{{$value = (!empty($response['Released'])) ? $response['Released'] : 'N/A'}}
<h2>Runtime:</h2>{{$value = (!empty($response['Runtime'])) ? $response['Runtime'] : 'N/A'}}
<h2>Genre:</h2>{{$value = (!empty($response['Genre'])) ? $response['Genre'] : 'N/A'}}
<h2>Actors:</h2>{{$value = (!empty($response['Actors'])) ? $response['Actors'] : 'N/A'}}
<h2>Plot:</h2>{{$value = (!empty($response['Plot'])) ? $response['Plot'] : 'N/A'}}
<h2>Awards:</h2>{{$value = (!empty($response['Awards'])) ? $response['Awards'] : 'N/A'}}
<h2>totalSeasons:</h2>{{$value = (!empty($response['totalSeasons'])) ? $response['totalSeasons'] : 'N/A'}}
<h2>imdbRating:</h2>{{$value = (!empty($response['imdbRating'])) ? $response['imdbRating'] : 'N/A'}}
<h2>Metascore:</h2>{{$value = (!empty($response['Metascore'])) ? $response['Metascore'] : 'N/A'}}
<h2>imdbVotes:</h2>{{$value = (!empty($response['imdbVotes'])) ? $response['imdbVotes'] : 'N/A'}}
<h2>Type:</h2>{{$value = (!empty($response['Type'])) ? $response['Type'] : 'N/A'}}
<h2>Language:</h2>{{$value = (!empty($response['Language'])) ? $response['Language'] : 'N/A'}}
</pre>  
@else
<script>window.location = "/";</script>
    
@endif

