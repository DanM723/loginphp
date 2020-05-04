<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <title>CSF admin login</title>
</head>

<body>
  <form class = "login-form" method='post'>
    <div class="logo">
    <img src="images/logo.png" alt="">
    </div>
    <h1>Login</h1>
    <div  class="textbox">
      <input type="text" name="username" placeholder="username" required>
    </div>
    <div class="textbox">
      <input type="password" name="password" placeholder="password" required>
    </div>
    <div class="textbox">
      <button class="btn" type="submit" name="submit" value="submit">login</button>
    </div>
  </form>

  <?php /**/

  if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST[' submit'])) {

    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if(empty($_POST['username']) || empty($_POST['password']))
    {
      header(Location: index.php?);
    }

  $db_user = 'admin';
  $db_password = 'qwerty12';

  if (strcmp($password, $db_password) == 0) {
    echo "GOOD PASS!";
    echo "welcome " . $user;
    //redirect
    header("Location : dashboard.php");
    die();
  } else {
    echo 'user or pass is wrong!';
  }

} else {

  //echo "U MUST SUBMIST!";
}
?>

</body>
</html>
