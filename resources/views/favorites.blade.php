@extends('layouts.app')

@section('content')
<div class="card">
    <h1>Favorites</h1>
    <div id="favorites"></div>
</div>

<script>
async function loadFavorites() {
    const token = localStorage.getItem('token');

    if (!token) {
        window.location.href = '/login';
        return;
    }

    let response = await fetch('/api/v1/favorites', {
        method: 'GET',
        headers: {
            'Authorization': 'Bearer ' + token,
            'Accept': 'application/json'
        }
    });

    let data = await response.json();
    console.log(data);

    let container = document.getElementById('favorites');
    container.innerHTML = "";

    if (data.data && data.data.length > 0) {
        data.data.forEach(movie => {
            container.innerHTML += `
                <div style="
                    border:1px solid #ccc;
                    padding:20px;
                    margin:15px 0;
                    border-radius:15px;
                ">
                    <img src="${movie.poster}" width="150">
                    <h3>${movie.title}</h3>
                    <p>${movie.year}</p>
                </div>
            `;
        });
    } else {
        container.innerHTML = "<p>Belum ada movie favorite.</p>";
    }
}

loadFavorites();
</script>
@endsection