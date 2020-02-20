<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <title>Registration</title>
 </head>
 <body>
   
<div class="container">
  <div class="header">

    <h2>Log In</h2>
  </div>
  <form action="registration.php" method="post">
    <div>
      <label>Username</label>
      <input type="text" name="username" required>
    </div>
    <div>
      <label>Password</label>
      <input type="password" name="password" required>
    </div>
 
    <button type="submit" name="login_user">Log In</button>

    <p>Not a user? <a href="registration.php"><b>Register</b></a></p>
  </form>

</div>

 </body>
 </html>