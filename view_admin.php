<?php
session_start();
$data = file_get_contents('dictionary.json'); //Vi tager vores data fra vores dictionary.json fil
// Så konverterer vi det til et object
$data = json_decode($data, true); // Bruger [] 


if( ! $_SESSION ){
  header('Location: login');
  exit();
}

$_title = "Hi {$_SESSION['user_name']}";
require_once __DIR__.'/comp_header.php';

//HVAD GØR DEN HER? SPØRG SANTIAGO
try{
    $db = new PDO('sqlite:'.__DIR__.'/momondo.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $q = $db->prepare('SELECT * FROM flights');
    $q->execute();
    $flights = $q->fetchAll(PDO::FETCH_ASSOC);
    // echo json_encode($flights);
  }catch(Exception $ex){
    echo "Sorry something went wrong";
    exit();
  }

?>

<main>
    <?php
    foreach($flights as $flight){
    ?>

    <form id="admin_flights">
      <div>
        <img src="images/copenhagen.jpg" alt="Image">
        <span>
          <?= $flight['from_city'] ?>
        </span>
        <span>
          <?= $flight['to_city'] ?>
        </span>
          <input style="display:none" 
          name="flight_id" 
          value="<?= $flight['id'] ?>" 
          type="text">
          <button type="button" onclick="delete_flight()">
            🗑️ Delete
          </button>
        </div>
      </form>

    <?php
    }
    ?>
  </main>

<?php
require_once __DIR__.'/comp_footer.php';
?>