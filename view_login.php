<?php
$_title = "Login";
require_once __DIR__.'/comp_header.php';
$data = file_get_contents('dictionary.json');
$data = json_decode($data, true); 
?>

<div class="form_login">
  <h1><?= $data['dk_form_title'] ?></h1>
  <p><?= $data['dk_form_description']  ?></p>
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


