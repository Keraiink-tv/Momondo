<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <script src="app.js" defer></script>    
    <script src="validator.js" defer></script>    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/bc393b01a6.js" crossorigin="anonymous"></script>
    <title>
        <?php echo $_title ?? 'Upppsss....' ?>
    </title>
</head>
<body>
    <nav>
            <div class="momondo_logo">
                <a href="/"><img id="momondo_logo" src="images/momondo.png" alt="Momondo"></a>
            </div>

        <div class="links">
            <?php
                ini_set('display_errors', 0);
                session_start();
                // Hvis brugeren er logget in viser den admin link
                if( $_SESSION ){
                    echo '<a href="admin">Admin</a>';
                }
                // Denne funktion fjerner selve login
                if( ! $_SESSION ){
                    echo '<a href="login">
 
 
                    <i class="fa-regular fa-circle-user"></i> Login</a>';
                }
                ?>
            <?php
                    if( ! $_SESSION){
                        echo '<a href="signup">Signup</a>';  
                    }
                    ?>
            <?php
                    // Denne funktion henviser tilbage til index siden, da man logger ud
                    if( $_SESSION ){
                        echo '<a href="view_upload.php">Gallery</a>';
                    }
                    ?>
            <?php
                    // Denne funktion henviser tilbage til index siden, da man logger ud
                    if( $_SESSION ){
                        echo '<a href="view_logout.php">Signout</a>';
                    }
                    ?>

                    <a href="<?php $_page ?>?language=dk">DK</a>
                    <a href="<?php $_page ?>?language=en">EN</a>

        </div>
    </nav>
</body>
