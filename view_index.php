<?php
$_title = "Home";
require_once __DIR__.'/comp_header.php';
$data = file_get_contents('dictionary.json');
$data = json_decode($data, true); 
?>

<section class="flights_container">
<h1><?= $data['dk_title'] ?></h1>
      <div>
        <div id="flights-search">
            <form>
            <div id="from-container">
              <input id="from-input" type="text" placeholder="Fra?"
              oninput="show_from_results()"
              onblur="hide_from_results()"
              >
              <div id="from-results">
                </div>
              </div>
            </form>
            
            <form>
            <div id="to-container">
              <input id="to-input" type="text" placeholder="Til?"
              oninput="show_to_results()"
              onblur="hide_to_results()"
              >
              <div id="to-results">
                </div>
            </div>             
        </form>    
    </div>
    <div class="button_search"><a href="/">Søg</a> </div> 
</section>

<?php
require_once __DIR__.'/comp_footer.php';
?>
