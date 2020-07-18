<?php


    $table = 0;

    if(isset($_POST['tableSubmit'])){
        $table = $_POST['table'];
        
        for($i = 1; $i <= 10; $i++){
            echo $table." x " . $i . " = " . $table*$i . "<br>";
        }

    }

?>

<form method="POST">
    <input type="text" placeholder="Enter your number" name="table">
    <input type="submit" name="tableSubmit">
</form>

<h3>Pattern 1</h3>


<?php

        for($i=0; $i<7; $i++){
            for($j=0; $j<$i; $j++){
                echo "*";
            }
            echo "<br />";
        }

?>


<h3>Pattern 2</h3>
<?php

        $n = 10;
        for($x=0; $x < $n; $x++){

            for($i=$n; $i > 2 * $x -$i; $i--){
                echo str_repeat("&nbsp", 2);
            }

            for($y=0; $y <= $x; $y++){
                echo"*";
            }

            for($y=1; $y<= $x; $y++){
                echo"*";
            }
            echo"<br>";
        }


?>




<h3>Pattern 3</h3>

<?php
    $n=10;
    
    for($x=$n; $x>0; $x--){
        for($i=$n; $i>2*$x-$i; $i--){
            echo str_repeat("&nbsp",3);
        }

        for($y=0; $y<$x; $y++){
            echo"*";
        }

        echo"<br>";
    }
?>