<html>
    <head>
        <title>
            Social LogIn
        </title>
    </head>

    <body>
        <header>
            <nav>
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="menu.html">Menu</a></li>
                <li class="mobile"><a href="locations.html">Locations</a></li>
                <li class="mobile"><a href="contact.html">Contact</a></li>
                <li class="desktop"><a href="locations.html">Locations</a></li> 
                <li class="logo"><a href="index.html">Artisan Bakery Logo</a></li>
                <li class="desktop"><a href="contact.html">Contact</a></li>
                <li class="logIn"><a href="logIn.html">LogIn</a></li>
                <li class="register"><a href="register.html">Register</a></li>
              </ul>
            </nav>
          </header>
        <link rel="stylesheet" href="logInStyle.css">
        <div class="container">
            <form action="/action_page.php">
              <div class="row">
                <h2 style="text-align:center">Login with Social Media or Manually</h2>
                
          
                <div class="col">
                  <a href="#" class="fb btn">
                    <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                  </a>
                  <a href="#" class="twitter btn">
                    <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                  </a>
                  <a href="#" class="google btn">
                    <i class="fa fa-google fa-fw"></i> Login with Google+
                  </a>
                </div>
          
                <div class="col">
                  <div class="hide-md-lg">
                    <p>Or sign in manually:</p>
                  </div>
          
                  <input type="text" name="username" placeholder="Username" required>
                  <input type="password" name="password" placeholder="Password" required>
                  <input type="submit" value="Login">
                </div>
          
              </div>
            </form>
          </div>
          
          <div class="bottom-container">
            <div class="row">
              <div class="col">
                <a href="register.html" style="color:white" class="btn">Sign up</a>
              </div>
              <div class="col">
                <a href="#" style="color:white" class="btn">Forgot password?</a>
              </div>
            </div>
          </div>

    </body>
</html>