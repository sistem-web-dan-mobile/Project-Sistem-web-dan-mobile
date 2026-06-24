<!DOCTYPE html>
<html>
<head>
    <title>MovieHub</title>
    <style>
        *{margin:0;padding:0;box-sizing:border-box;font-family:Arial}
        body{
            min-height:100vh;
            background:
            radial-gradient(circle at top left,#7c3aed,#111827 40%),
            radial-gradient(circle at bottom right,#2563eb,#0f172a 40%);
            color:white;
        }
        nav{
            display:flex;
            justify-content:space-between;
            padding:25px 60px;
        }
        .logo{
            font-size:32px;
            font-weight:bold;
        }
        .btn{
            text-decoration:none;
            padding:12px 24px;
            border-radius:14px;
            background:linear-gradient(90deg,#9333ea,#3b82f6);
            color:white;
            margin-left:10px;
            box-shadow:0 0 25px rgba(139,92,246,.4);
        }
        .hero{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            height:80vh;
            text-align:center;
        }
        h1{
            font-size:70px;
            margin-bottom:20px;
        }
        p{
            font-size:22px;
            opacity:.8;
            max-width:700px;
        }
        .card{
            margin-top:40px;
        }
    </style>
</head>
<body>
<nav>
    <div class="logo">🎬 MovieHub</div>
    <div>
        <a href="/login" class="btn">Login</a>
        <a href="/register" class="btn">Register</a>
    </div>
</nav>

<section class="hero">
    <h1>Discover Movies Instantly</h1>
    <p>Search millions of movies, explore details, and save your favorites in one beautiful platform.</p>

    <div class="card">
        <a href="/register" class="btn">Get Started</a>
    </div>
</section>
</body>
</html>