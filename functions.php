  <?php
    $title = "Simple Functions";
    include 'includes/header.php'; 
  ?>

  <h1><?php echo $title ?></h1>

  <?php
    // Defining a Function
    function writeMessage(){
        echo "You are really a nice person. <br/>";
    }
    //Calling Function
    writeMessage();
    echo "<hr/>";
    writeMessage();

    function addFunction($num1, $num2){
        $sum = $num1 + $num2;
        echo "The sum of $num1 and $num2 is: $sum <br/>";
    }

    function changeNum($num){
    $num = $num + 10;
    }

    $num = 500;
    addFunction(10,20);
    addFunction(10,$num);
    changeNum($num);
    echo $num . '<br/>';
  ?>   
    
    <?php require 'includes/footer.php' ?>