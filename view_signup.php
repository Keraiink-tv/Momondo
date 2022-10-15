<?php
  $_title = 'SIGNUP';
  require_once __DIR__.'/comp_header.php';
  require_once __DIR__.'/_x.php';
  $data = file_get_contents('dictionary.json');
  $data = json_decode($data, true); 
  ?>

   <!-- START PÅ SIGN-UP FORM -->
   <form id="signup_form" onsubmit="validate(created_user); return false">
  


   <input type="text" 
      placeholder="Name"
      maxlength="<?= NAME_MAX_LEN ?>"
      data-validate="str"
      data-min = "<?= NAME_MIN_LEN ?>"
      data-max= "<?= NAME_MAX_LEN ?>"
    >
    <input type="text" 
      placeholder="Lastname"
      maxlength="<?= NAME_MAX_LEN ?>"
      name = "user_last_name"
      data-validate="str"
      data-min = "<?= NAME_MIN_LEN ?>"
      data-max= "<?= NAME_MAX_LEN ?>"
    >    


   <input id="email_signup"
    name="email" 
    type="email" 
    placeholder="Email"
    onblur="is_email_available()"
    onfocus="clean_input()"
    data-validate="email"
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