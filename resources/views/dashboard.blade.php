<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<style>
body{
margin:0;
font-family:Arial;
background:#0f172a;
color:white;
}
nav{
padding:20px 40px;
background:#111827;
display:flex;
justify-content:space-between;
}
.grid{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:20px;
padding:40px;
}
.movie{
background:#1e293b;
padding:20px;
border-radius:18px;
height:250px;
display:flex;
justify-content:center;
align-items:center;
font-size:24px;
}
</style>
</head>
<body>
<nav>
<h2>MovieHub Dashboard</h2>
<button>Logout</button>
</nav>

<div class="grid">
<div class="movie">Movie 1</div>
<div class="movie">Movie 2</div>
<div class="movie">Movie 3</div>
</div>
</body>
</html>