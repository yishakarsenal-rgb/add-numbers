<!DOCTYPE html>
<html>
<head>
    <title>Add Numbers</title>
</head>
<body>
    <form method="post" action="">
        <label>First Number:</label>
        <input type="text" name="num1"><br><br>        
        <label>Second Number:</label>
        <input type="text" name="num2"><br><br>       
        <input type="submit" name="add" value="Add Numbers">
        <input type="reset" value="Clear">
    </form>

    <?php
    if (isset($_POST['add'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];        
        if (is_numeric($num1) && is_numeric($num2)) {
            $sum = $num1 + $num2;
            echo "<h3>Result: $sum</h3>";
        } else {
            echo "<h3>Please enter valid numbers.</h3>";
        }
    }
    ?>
</body>
</html>
