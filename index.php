
  <?php
    if (!isset( $_POST['password']) OR $_POST['password'] != 'youyou' ){
     include("webPage/header.php");
     }

     else {
      echo ' <h4> Mots de Passe Correct !!! </h4> ';
      include("webPage/header.php");
     }
     
  ?>

    <?php include("webPage/footer.php") ?>
