
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/login_signup.css">
    

</head>
<body>
<div class="container">
  <input type="checkbox" id="register_toggle">
  <div class="slider">
    <form class="form" method="post" action="login_action.php">
      <span class="title">Login</span>
      <div class="form_control">
        <input type="text" name="email" class="input" required="">
        <label class="label">Email</label>
      </div>
      <div class="form_control">
        <input type="password"  name="password" class="input" required="">
        <label class="label">Password</label>
      </div>
      <button>Login</button>

      <span class="bottom_text">Don't have an account? <label for="register_toggle" class="swtich">Sign Up</label> </span>
    </form>
    <form class="form" method="post" action="signup_action.php">
      <span class="title">Sign Up</span>
      <div class="form_control">
        <input type="text" name="name" class="input" required="">
        <label class="label">Username</label>
      </div>
      <div class="form_control">
        <input type="email" name="email"class="input" required="">
        <label class="label">Email</label>
      </div>
      <div class="form_control">
        <input type="password" name="password" class="input" required="">
        <label class="label">Password</label>
      </div>
      <button>Sign Up</button>

      <span class="bottom_text">Already have an account? <label for="register_toggle" class="swtich">Sign In</label> </span>
    </form>

    
    </div>
</div>
    
</body>
</html>


