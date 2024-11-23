<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome CDN  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/loginsignup.css">

    <title>Signup/Login</title>
</head>

<body>

    <h1 class="title">Muscle Factory</h1>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">
    
        <div class="signup">
            <form action="signup.php" method="post">
                <label for="username" aria-hidden="true">Sign up</label>
                <input type="text" name="username" placeholder="User name" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="pass" placeholder="Password" required="">
                <button type="submit" name="signup" class="signup-button" >Sign up</button>
            </form>
        </div>
    
        <div id="login"class="login" >
            <form action="login.php" method="post" >
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="emailg" placeholder="Email" required="">
                <input type="password" name="passg" placeholder="Password" required="">
                <button type="submit" name="login" class="login-button" >Login</button>  
            </form>
        </div>
    </div>



    <!-- <Script>
        let ch = document.querySelector("#login");
        ch.addEventListener('click',()=>{
            ch.classList.remove()
            ch.classList.toggle("uncheck");
            document.querySelector("#admin").classList.remove("admin");
        });
        
    </Script> -->
</body>

</html>