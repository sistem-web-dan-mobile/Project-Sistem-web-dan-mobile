```html
<!DOCTYPE html>
<html>
<body>

<h1>Dashboard MovieHub</h1>

<input id="title" placeholder="Search movie">
<button onclick="searchMovie()">Search</button>
<button onclick="logout()">Logout</button>

<div id="result"></div>

<script>
const token = localStorage.getItem('token');

if (!token) {
    window.location.href = '/login';
}

async function searchMovie() {
    let title = document.getElementById('title').value;

    let response = await fetch('/api/v1/movies/search?title=' + title, {
        headers: {
            'Authorization': 'Bearer ' + token,
            'Accept': 'application/json'
        }
    });

    let data = await response.json();
    let result = document.getElementById('result');
    result.innerHTML = "";

    if (data.data && data.data.Search) {
        data.data.Search.forEach(movie => {
            result.innerHTML += `
                <div style="border:1px solid black;margin:20px;padding:20px">
                    <img src="${movie.Poster}" width="120">
                    <h3>${movie.Title}</h3>
                    <p>${movie.Year}</p>
                    <button onclick="saveFavorite(
                        '${movie.imdbID}',
                        '${movie.Title}',
                        '${movie.Poster}',
                        '${movie.Year}'
                    )">Favorite</button>
                </div>
            `;
        });
    }
}

async function saveFavorite(imdb, title, poster, year) {
    await fetch('/api/v1/favorites', {
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

    alert("Added to favorite");
}

async function logout() {
    await fetch('/api/v1/logout', {
        method: 'POST',
        headers: {
            'Authorization': 'Bearer ' + token,
            'Accept': 'application/json'
        }
    });

    localStorage.removeItem('token');
    window.location.href = '/login';
}
</script>

</body>
</html>
```
