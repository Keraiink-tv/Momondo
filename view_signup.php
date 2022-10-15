<?php
  $_title = 'SIGNUP';
  require_once __DIR__.'/comp_header.php';
  $data = file_get_contents('dictionary.json');
  $data = json_decode($data, true); 
  ?>

   <!-- START PÅ SIGN-UP FORM -->
   <form id="signup_form" onsubmit="validate(created_user); return false">
    <input id="email_signup"
    name="email" 
    type="text" 
    placeholder="Email"
    onblur="is_email_available()"
    onfocus="clean_input()"
    >

    <p id="p_email" style="display: none">
      Email already in use
    </p>


    <input name="psw" type="password" placeholder="Password">
    <button>Opret bruger</button>
      
    </form>

    <?php
        require_once __DIR__.'/comp_footer.php';
    ?>