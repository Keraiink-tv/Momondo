<?php
$_title = "Login";
require_once __DIR__.'/dictionary.php';
require_once __DIR__.'/comp_header.php';
$data = file_get_contents('dictionary.json');
$data = json_decode($data, true); 
?>

<div class="form_login">
  <h1><?= $dictionary[$language.'_login'] ?></h1>
  <p><?= $dictionary[$language.'_login-info']  ?></p>
  <img src="images/momondo-login.png" alt="momondo">
    <form action="bridge-login.php" method="POST">
      <input name="email" type="text" placeholder="email">
      <input name="password" type="password" placeholder="password">
      <button>Login</button>
  </form>
</div>

<?php
require_once __DIR__.'/comp_footer.php';
?>


