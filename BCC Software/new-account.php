<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Create Account | BCC_Web</title>
  </head>
  <body>


<div class='box'>
  <div class='box-form'>
    <div class='box-login-tab'></div>
    <div class='box-login-title'>
      <div class='i i-login'><i class="fa fa-login"></i></div>
      <h2>CREATE A/C</h2>
    </div>
    <div class='box-login'>
      <form action="registration.php" method="post">
      <div class='fieldset-body' id='login_form'>
        <p class='field'>
          <label for='user'><i class="fa fa-user"></i> CREATE USERNAME</label>
          <input type='text' id='user' name="user" title='Username' autocomplete="off" />
          <span id='valida' class='i i-warning'></span>
        </p>
        <p class='field'>
          <label for='pass'><i class="fa fa-lock"></i> CREATE PASSWORD</label>
          <input type='password' id='pass' name="password" title='Password' autocomplete="off" />
          <span id='valida' class='i i-close'></span>
        </p>

       <div class="box-login-desc">
         <p>Already At BCC? <a href="index.html">Login</a></p>
       </div>
 
        <input type='submit' id='do_login' value='CREATE ACCOUNT' title='Get Started' />
        </form>
      </div>
    </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
     
$(".user").focusin(function(){
  $(".inputUserIcon").css("color", "#e74c3c");
}).focusout(function(){
  $(".inputUserIcon").css("color", "white");
});

$(".pass").focusin(function(){
  $(".inputPassIcon").css("color", "#e74c3c");
}).focusout(function(){
  $(".inputPassIcon").css("color", "white");
});
    </script>
  </body>
</html>