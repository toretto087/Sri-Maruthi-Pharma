<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="successlogo">Sri Maruthi Pharma</div>

<div class="success">
        <h1>Thank you for reaching out to us</h1>
        <p>Form Submitted successfully</p>
        <button class="homebtn" onclick="window.location.href='index.html';">Home</button>
        
    </div>

    <?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    
    $conn = new mysqli('localhost', 'root', '', 'srimaruthi');
    if($conn->connect_error)
    {
        die('Connection failed : ' .$conn->connect_error);
    }
    else
    {
        $stmt = $conn->prepare("insert into contactdb(name, email, number, subject) values(?, ?, ?, ?) ");
        $stmt-> bind_param("ssis", $name, $email, $number, $subject);
        $stmt->execute();
        
        $stmt->close();
        $conn->close();
    
    }
    ?>
  


</body>
</html>