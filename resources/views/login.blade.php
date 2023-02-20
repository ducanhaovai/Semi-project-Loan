<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <title>Music sorce</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form  action="" method="POST" enctype="multipart/form-data"> <!--chuyen sang phan login -->
          @csrf
          <div class="social-container">
              
          </div>
          <span>or use your email for registration</span>
          <input type="text" placeholder="Name" id="name" name="name" require/>
          <input type="email" placeholder="Email" id="email" name="email" require/>
          <input type="password" placeholder="Password" id="password" name="password" require/>
          <button type="submit">Register</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form action=""  method="POST" > <!-- chuyen sang phan dang ki-->
          @csrf
          <div class="social-container">
          
          </div>
          <span>Use your account</span>
          <input type="email" placeholder="Email" id="email" name="email">
          <input type="password" placeholder="Password" id="password" name="password" >
          <a id="forgot">Forgot your password?</a>
          <button type="submit">Sign In</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left"> <!--slide phan register -->
            <h1>Register !</h1>
            <p>
                Register our account to connect the music world
            </p>
            <button class="ghost" id="postLogin" name="postLogin">Sign In</button>
          </div>
          <div class="overlay-panel overlay-right"> <!--slide phan login -->
            <h1>Welcome back!</h1>
            <p>Please login via email  quick access and authentication to music world.</p>
            <button class="ghost"name="postSignup" id="postSignup" >Register?</button>
          </div>
        </div>
      </div>
    </div>

    <script>
        const signUpButton = document.getElementById("postSignup");
        const signInButton = document.getElementById("postLogin");
        const container = document.getElementById('container');
        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });
signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>

  </body>
</html>