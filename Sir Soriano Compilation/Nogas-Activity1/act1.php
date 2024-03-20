<!DOCTYPE html>
<html lang="en">
<head>
    <title>Activity1</title>
    <link rel="stylesheet" href="act1.css">
</head>
<body>
    <h1>ACTIVITY 01</h1>

    <p>Personal Details</p>
    <hr>
    <form method="post">
        <label for="name">Name:</label> 
        <input type="text" id="name" name="name"> <br>
        <label for="age">Age:</label>
        <input type="text" id="age" name="age"> <br> 
        <label for="address">Address:</label>
        <input type="text" id="address" name="address"> <br> 
        <label for="cn">Contact Number:</label>
        <input type="text" id="cn" name="cn"> <br> 
        <label for="bday">BirthDate:</label>
        <input type="date" id="bday" name="bday"> <br> 
        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value=""> </option>
            <option value="male"> Female </option>
            <option value="female"> Male </option>
        </select> <br>
        <label for="bloodtype">BloodType:</label>
        <input type="text" id="bloodtype" name="bloodtype"> <br> 
        <br>
        <label for="weight">Weight:</label>
        <input type="number" id="weight" name="weight"> <br> 
        <label for="height">Height:</label>
        <input type="number" id="height" name="height"> <br> 

        <input type="Submit" value="Submit"> <br>
    </form> <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $age = $_POST["age"];
        $address = $_POST["address"];
        $cn = $_POST["cn"];
        $bday = $_POST["bday"];
        $gender = $_POST["gender"];
        $bloodtype = $_POST["bloodtype"];
        $weight = $_POST["weight"]; 
        $height = $_POST["height"]; 

        $bmi = $weight / ($height * $height) * 703;

        echo "Name: $name <br>";
        echo "Age: $age <br>";
        echo "Address: $address <br>";
        echo "Contact Number: $cn <br>";
        echo "BirthDate: $bday <br>";
        echo "Gender: $gender <br>";
        echo "BloodType: $bloodtype <br> <br>";
        echo "Your BMI is: $bmi <br>";
    }
    ?>
</body>
</html>
