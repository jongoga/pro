<html>
    <head>
        <title>
            Register
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
            <link rel="stylesheet" href="registerStyle.css">
            <form action="action_page.php">
        
            <div class="container" >
            <h1>Register</h1>
            <p>Mbushni formen per tu regjistruar.</p>
            <hr>
        
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
        
            <div class="container">
                <link rel="stylesheet" href="rg.css">
                <form action="/action_page.php">
                    
                  <label for="psw">Password</label>
                <input type="password"  placeholder="Enter Password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                title="Duhet te permbaje te pakten nje numer nje shkronj te madhe dhe shkronja te vogla, dhe te pakten 8 ose me shume karaktere" required>
              
                </form>
              </div>
              
              <div id="message">
                <h3>Password must contain the following:</h3>
                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                <p id="number" class="invalid">A <b>number</b></p>
                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
              </div>
              <script>
                var myInput = document.getElementById("psw");
                var letter = document.getElementById("letter");
                var capital = document.getElementById("capital");
                var number = document.getElementById("number");
                var length = document.getElementById("length");
                
       
                myInput.onfocus = function() {
                  document.getElementById("message").style.display = "block";
                }
                
      
                myInput.onblur = function() {
                  document.getElementById("message").style.display = "none";
                }
                
          
                myInput.onkeyup = function() {
               
                  var lowerCaseLetters = /[a-z]/g;
                  if(myInput.value.match(lowerCaseLetters)) {
                    letter.classList.remove("invalid");
                    letter.classList.add("valid");
                  } else {
                    letter.classList.remove("valid");
                    letter.classList.add("invalid");
                }
                
                
                  var upperCaseLetters = /[A-Z]/g;
                  if(myInput.value.match(upperCaseLetters)) {
                    capital.classList.remove("invalid");
                    capital.classList.add("valid");
                  } else {
                    capital.classList.remove("valid");
                    capital.classList.add("invalid");
                  }
                
                  
                  var numbers = /[0-9]/g;
                  if(myInput.value.match(numbers)) {
                    number.classList.remove("invalid");
                    number.classList.add("valid");
                  } else {
                    number.classList.remove("valid");
                    number.classList.add("invalid");
                  }
                
                 
                  if(myInput.value.length >= 8) {
                    length.classList.remove("invalid");
                    length.classList.add("valid");
                  } else {
                    length.classList.remove("valid");
                    length.classList.add("invalid");
                  }
                }
                </script>
        
            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
            <hr>
        
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <button type="submit" class="registerbtn">Register</button>
            </div>
        
            <div class="container signin">
            <p>Already have an account? <a href="logIn.html">Sign in</a>.</p>
            </div>
        </form>
        </body>
  </html>