@extends('layouts.app')

@section('content')
<div class="card" style="max-width:500px;margin:auto;">
    <h2>Register</h2>

    <input id="name" placeholder="Name">
    <input id="email" placeholder="Email">
    <input id="password" type="password" placeholder="Password">

    <button onclick="register()">Register</button>
</div>

<script>
async function register(){
    let response = await fetch('/api/v1/register',{
        method:'POST',
        headers:{
            'Content-Type':'application/json',
            'Accept':'application/json'
        },
        body:JSON.stringify({
            name:document.getElementById('name').value,
            email:document.getElementById('email').value,
            password:document.getElementById('password').value
        })
    });

    let data = await response.json();
    console.log(data);

    if(response.ok){
        alert("Register berhasil");
        window.location='/login';
    } else {
        alert(JSON.stringify(data));
    }
}
</script>
@endsection