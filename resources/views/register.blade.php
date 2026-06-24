<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<style>
body{
display:flex;
justify-content:center;
align-items:center;
height:100vh;
background:linear-gradient(135deg,#111827,#581c87,#1d4ed8);
font-family:Arial;
}
.card{
background:rgba(255,255,255,.08);
backdrop-filter:blur(20px);
padding:40px;
border-radius:24px;
width:400px;
color:white;
box-shadow:0 0 40px rgba(0,0,0,.4);
}
input{
width:100%;
padding:14px;
margin-top:15px;
border:none;
border-radius:12px;
}
button{
width:100%;
margin-top:20px;
padding:14px;
border:none;
border-radius:12px;
background:linear-gradient(90deg,#9333ea,#3b82f6);
color:white;
font-size:18px;
cursor:pointer;
}
a{color:#93c5fd;}
</style>
</head>
<body>
<div class="card">
<h1>Register</h1>
<form>
<input type="text" placeholder="Name">
<input type="email" placeholder="Email">
<input type="password" placeholder="Password">
<button>Register</button>
</form>
<p style="margin-top:20px">Already have account? <a href="/login">Login</a></p>
</div>
</body>
</html>