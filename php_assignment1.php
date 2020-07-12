<body>
    <?php
        $student_data = array(
            "Samana" => array
            (
                "Attendence" => 60,
                "SQA"        => 80,
                "wordpress"  => 50

            ),


            "Aliya" => array
            (
                "Attendence" => 80,
                "SQA"        => 100,
                "wordpress"  => 60

            ),


            "Hassan" => array
            (
                "Attendence" => 100,
                "SQA"        => 98,
                "wordpress"  => 80

            ),
        );
        // Samana Marks
            echo "Percentage of Samana :". "<br />";

            echo "Attendence = " ;
            echo $student_data[ 'Samana']['Attendence'] . "<br />";

            echo "SQA = " ;
            echo $student_data[ 'Samana']['SQA'] . "<br />";

            echo "wordpress = " ;
            echo $student_data[ 'Samana']['wordpress'] . "<br />" . "<br />";

     
        // Aliya Marks
            echo "Percentage of Aliya :" ."<br />";

            echo "Attendence = " ;
            echo $student_data[ 'Aliya']['Attendence'] . "<br />";

            echo "SQA = " ;
            echo $student_data[ 'Aliya']['SQA'] . "<br />";

            echo "wordpress = " ;
            echo $student_data[ 'Aliya']['wordpress'] . "<br />" . "<br />";


        // Hassan Marks
            echo "Percentage of Hassan :" ."<br />";

            echo "Attendence = " ;
            echo $student_data[ 'Hassan']['Attendence'] . "<br />";
 
            echo "SQA = " ;
            echo $student_data[ 'Hassan']['SQA'] . "<br />";
 
            echo "wordpress = " ;
            echo $student_data[ 'Hassan']['wordpress'] . "<br />" . "<br />";
 

    
    ?>
