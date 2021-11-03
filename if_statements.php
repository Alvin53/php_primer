    <?php 
    $title = "Simple If Statements";
    include 'includes/header.php'; 
    ?>

    <h1><?php echo $title ?></h1>

    <?php
    echo '<h2> If Statements </h2>';
    $grade = 80;

    if($grade >= 50){
        echo '<h3 style ="color:green">YOU HAVE PASSED</h3>';
    }
    else{
        echo '<h3 style ="color:red">YOU HAVE FAILED</h3>';
    }
    $grade ='C';
    // If-else 
    if($grade == 'A'){
        echo '<h2 style ="color:green">YOU are a superstar</h2>';
    }
    elseif($grade == 'B'){
        echo '<h3 style ="color:blue">YOU DID WELL</h3>';
    }
    else{
        echo '<h2 style="color:red">YOU HAVE FAILED...</h2>';
    }
    ?>
    <?php require 'includes/footer.php' ?>