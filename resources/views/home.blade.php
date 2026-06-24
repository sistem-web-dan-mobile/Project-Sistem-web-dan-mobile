<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieHub API</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, sans-serif;
        }

        body{
            min-height:100vh;
            background: linear-gradient(135deg,#6a11cb,#2575fc,#ff4ecd);
            display:flex;
            justify-content:center;
            align-items:center;
            padding:40px;
        }

        .container{
            width:100%;
            max-width:1100px;
        }

        .card{
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(18px);
            border:1px solid rgba(255,255,255,0.2);
            border-radius:28px;
            padding:50px;
            color:white;
            box-shadow:0 20px 40px rgba(0,0,0,0.25);
        }

        h1{
            font-size:56px;
            margin-bottom:10px;
        }

        .subtitle{
            font-size:20px;
            opacity:0.9;
            margin-bottom:40px;
        }

        .features{
            display:grid;
            grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
            gap:20px;
            margin-bottom:40px;
        }

        .feature-box{
            background: rgba(255,255,255,0.12);
            padding:25px;
            border-radius:20px;
            transition:0.3s;
        }

        .feature-box:hover{
            transform:translateY(-5px);
            background: rgba(255,255,255,0.2);
        }

        .feature-box h3{
            margin-bottom:10px;
            font-size:22px;
        }

        .endpoint{
            background:#0f172a;
            color:#38bdf8;
            padding:14px 18px;
            border-radius:12px;
            margin-top:12px;
            font-family: monospace;
            overflow:auto;
        }

        .footer{
            margin-top:40px;
            text-align:center;
            opacity:0.8;
        }

        .btn{
            display:inline-block;
            margin-top:25px;
            padding:14px 28px;
            border-radius:999px;
            background:white;
            color:#6a11cb;
            text-decoration:none;
            font-weight:bold;
            transition:0.3s;
        }

        .btn:hover{
            transform:scale(1.05);
        }

        @media(max-width:768px){
            h1{
                font-size:38px;
            }

            .card{
                padding:30px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>🎬 MovieHub API</h1>
            <p class="subtitle">
                Laravel REST API untuk pencarian film, detail film, dan favorite list menggunakan OMDB API.
            </p>

            <div class="features">
                <div class="feature-box">
                    <h3>🔍 Search Movie</h3>
                    <p>Cari film berdasarkan judul.</p>
                    <div class="endpoint">
                        GET /api/v1/movies/search?title=Batman
                    </div>
                </div>

                <div class="feature-box">
                    <h3>🎞 Movie Detail</h3>
                    <p>Lihat detail lengkap film.</p>
                    <div class="endpoint">
                        GET /api/v1/movies/{imdbID}
                    </div>
                </div>

                <div class="feature-box">
                    <h3>❤️ Favorites</h3>
                    <p>Simpan film favorit user.</p>
                    <div class="endpoint">
                        POST /api/v1/favorites
                    </div>
                </div>
            </div>

            <a href="/api/v1/movies/search?title=Batman" class="btn">
                Try API
            </a>

            <div class="footer">
                Built with Laravel • Render Deployment • OMDB API
            </div>
        </div>
    </div>
</body>
</html>