<!DOCTYPE html>
<html>
<head>
    <title>MovieHub</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial;
        }

        body{
            background: linear-gradient(135deg,#0b1020,#151b35,#28194f);
            color:white;
            min-height:100vh;
        }

        nav{
            display:flex;
            justify-content:space-between;
            padding:20px 60px;
            backdrop-filter: blur(15px);
            background:rgba(255,255,255,0.05);
        }

        nav a{
            color:white;
            text-decoration:none;
            margin-left:20px;
        }

        .container{
            width:90%;
            margin:auto;
            padding-top:40px;
        }

        .card{
            background: rgba(255,255,255,0.08);
            border-radius:20px;
            padding:30px;
            backdrop-filter: blur(20px);
            box-shadow:0 10px 30px rgba(0,0,0,.3);
        }

        input{
            width:100%;
            padding:15px;
            margin:10px 0;
            border:none;
            border-radius:12px;
        }

        button{
            background:#7c3aed;
            color:white;
            border:none;
            padding:14px 28px;
            border-radius:12px;
            cursor:pointer;
        }

        .movie-grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
            gap:20px;
            margin-top:30px;
        }

        .movie-card{
            background:rgba(255,255,255,0.07);
            padding:15px;
            border-radius:20px;
        }

        .movie-card img{
            width:100%;
            border-radius:15px;
        }
    </style>
</head>
<body>

<nav>
    <h2>🎬 MovieHub</h2>
    <div>
        <a href="/">Home</a>
        <a href="/dashboard">Dashboard</a>
        <a href="/favorites">Favorites</a>
        <a href="/login">Login</a>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>