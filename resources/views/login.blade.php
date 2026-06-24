<!DOCTYPE html>
<html>
<body>
<h2>Login</h2>

<input id="email" placeholder="Email">
<input id="password" type="password">

<button onclick="login()">Login</button>

<script>
async function login(){
    let response = await fetch('/api/v1/login',{
        method:'POST',
        headers:{
            'Content-Type':'application/json',
            'Accept':'application/json'
        },
        body:JSON.stringify({
            email:document.getElementById('email').value,
            password:document.getElementById('password').value
        })
    });

    let data = await response.json();

    if(response.ok){
        localStorage.setItem('token', data.token);
        window.location='/dashboard';
   }else{
    console.log(data);
    alert(JSON.stringify(data));
   }
}
</script>
</body>
</html>