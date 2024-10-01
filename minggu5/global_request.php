<!DOCTYPE html>
<html>
    <body>
        <from method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        name: <input type="text" name="fname">
        <input type="submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            //collet value of input field
            $name = $_REQUEST['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
        ?>
    </body>
</html>
