<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form handle</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name ="name" placeholder="enter your name"/>
        <br>
        <br>
        <input type="email" name ="email" placeholder="enter your email"/>
        <br>
        <br>
        <input type="password" name ="password" placeholder="enter your password"/>
        <br>
        <br>
        <input type="checkbox" name ="skill[]" value = "php"><spam>PHP</spam>
        <br>
        <br>
        <input type="checkbox" name ="skill[]" value = "python"><spam>Python</spam>
        <br>
        <br>
        <input type="checkbox" name ="skill[]" value = "java"><spam>Java</spam>
        <br>
        <br>
        <input type="radio" name ="gender"><spam>male</spam>
        <br>
        <br>
        <input type="radio" name ="gender"><spam>female</spam>
        <br>
        <br>
        <select name="city">
            <option>Select your city</option>
            <option value="noida">Noida</option>
            <option value="delhi">Delhi</option>
            <option value="Lucknow">Lucknow</option>
        </select>
        <br>
        <br>
        <textarea name="bio"></textarea>
        <br><br>
        <button>Signup</button>
    </form>
    
</body>
</html>


<?php
if(isset($_POST['name'])){
    echo $_POST['name'];
    echo "<br>";
    echo $_POST['email'];
    echo "<br>";
    echo $_POST['password'];
    echo "<br>";
    echo implode(", ",$_POST['skill']);
    echo "<br>";
    echo $_POST['gender'];
    echo "<br>";
    echo $_POST['city'];
    echo "<br>";
    echo $_POST['bio'];
    echo "<br>";
}
?>