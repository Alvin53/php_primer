  <?php 
    $title = "Home";
    include 'includes/header.php';
  ?>
      <h1><?php echo $title ?></h1>
      <br/>
      <?php
     
    
      //Variable need a "$. They are not strongly typed
      $name ='Alvin Reid';
      $age = '22';
      //echo Variable
      echo "<p>Welcome to the Home Page </p>";
      echo '<h1>My name Is: '.$name.' </h1>';
      echo '<h1>My age Is: '.$age.' </h1>';
     
      ?>

  <?php require 'includes/footer.php' ?>