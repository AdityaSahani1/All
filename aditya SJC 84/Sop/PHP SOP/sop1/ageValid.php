<html>
    <body bgcolor="pink">
        <?php
            $age=$_POST['t1'];
            if($age<18){
                echo "Age Under 18! You can't vote,<br>";
            }
            else{
                echo "Login successful!";
            }
        ?>
    </body>
</html>