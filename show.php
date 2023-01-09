<!DOCTYPE html>
<html>

    <body>
        <?php
            $name = $_POST["name"];
            $studentID = $_POST["studentID"];
            $britday = $_POST["britday"];
            $age = $_POST["age"];

            echo "Name:" .$name. "<br>";
            echo "student ID:" .$studentID. "<br>";
            echo "britday:" .$britday. "<br>";
            echo "age:" .$age. "<br>";
        ?>
    </body>

</html>