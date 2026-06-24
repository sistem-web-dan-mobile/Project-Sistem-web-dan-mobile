<!DOCTYPE html>
<html>
<body>
<h2>Register</h2>

<input id="name" placeholder="Name">
<input id="email" placeholder="Email">
<input id="password" type="password" placeholder="Password">
<button onclick="register()">Register</button>

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

    if(response.ok){
        alert("Register berhasil, silakan login");
        window.location='/login';
    }else{
        alert(JSON.stringify(data));
    }
}
</script>
</body>
</html>