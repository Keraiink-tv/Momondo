<?php
$_title = "Home";
require_once __DIR__.'/dictionary.php';
require_once __DIR__.'/comp_header.php';
$data = file_get_contents('dictionary.json');
$data = json_decode($data, true); 
?>

<section class="flights_container">
<h1><?= $dictionary[$language.'_welcome'] ?></h1>
      <div id="flight-form-container">
        <div id="flights-search">
            <form>
            <div id="from-container">
              <input id="from-input" type="text" placeholder="<?= $dictionary[$language.'_from'] ?>" name="from-input"
              onfocus = "focus_from_results()"
              oninput="show_from_results()"
             
              >
              <div id="from-results">
                </div>
              </div>
            </form>
            
            <form>
            <div id="to-container">
              <input id="to-input" type="text" placeholder="<?= $dictionary[$language.'_to'] ?>" name="to-input"
              oninput="show_to_results()"
              onblur="hide_to_results()"
              >
              <div id="to-results">
                </div>
            </div>             
        </form>    
    </div>
   
</section>

<?php
require_once __DIR__.'/comp_footer.php';
?>
