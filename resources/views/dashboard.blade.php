@extends('layouts.app')

@section('content')

<div class="card">
    <h1>Dashboard</h1>
    <br>

    <input id="title" placeholder="Search movie...">
    <button onclick="searchMovie()">Search</button>
    <button onclick="logout()">Logout</button>

    <div id="result" class="movie-grid"></div>
</div>

<script>
const token = localStorage.getItem('token');

if(!token){
    window.location='/login';
}

async function searchMovie(){
    let title=document.getElementById('title').value;

    let response=await fetch('/api/v1/movies/search?title='+title,{
        headers:{
            Authorization:'Bearer '+token,
            Accept:'application/json'
        }
    });

    let data=await response.json();
    console.log(data);

    let result=document.getElementById('result');
    result.innerHTML='';

    if(data.data.Search){
        data.data.Search.forEach(movie=>{
            result.innerHTML += `
              <div class="movie-card">
                    <img src="${movie.Poster}">
                    <h3>${movie.Title}</h3>
                    <p>Year: ${movie.Year}</p>
                    <p>Type: ${movie.Type}</p>
                    <p>ID: ${movie.imdbID}</p>

                    <button onclick="saveFavorite(
                        '${movie.imdbID}',
                        '${movie.Title.replace(/'/g, "\\'")}',
                        '${movie.Poster}',
                        '${movie.Year}'
                    )">
                       ❤️ Add Favorite
                    </button>
                </div>
        `;
        });
    }
}

async function saveFavorite(imdb, title, poster, year) {
    const token = localStorage.getItem('token');

    if (!token) {
        alert("Silakan login dulu");
        window.location.href = '/login';
        return;
    }

    let response = await fetch('/api/v1/favorites', {
        method: 'POST',
        headers: {
            'Authorization': 'Bearer ' + token,
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify({
            imdb_id: imdb,
            title: title,
            poster: poster,
            year: year
        })
    });

    let data = await response.json();

    console.log(data);

    if (response.ok) {
        alert("Movie berhasil ditambahkan ke favorites");
    } else {
        alert("Gagal: " + JSON.stringify(data));
    }
}

async function logout(){
    await fetch('/api/v1/logout',{
        method:'POST',
        headers:{
            Authorization:'Bearer '+token
        }
    });

    localStorage.removeItem('token');
    window.location='/login';
}
</script>

@endsection