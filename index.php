<?php
$servername = "localhost";
$username = "root";
$password = "cdti1234";
$dbname = "ong1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tong2_customer";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);

echo($row['address']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            width: min(65ch, 100% - 4rem);
            margin-inline: auto;
            background-color: antiquewhite;
        }

        img, svg, video {
            width: 100%;
            border-color: black;
            border-width: 2px;
            border-style: solid;
        }
    </style>
</head>
<body>
    <h1>Superong</h1>
    <p>ong became html progamer today. aksdjfiasjfidjieidi djj  jjj kk kkk kk kk oo oop pp pp poo oi ii ii ii jj jj uu uuu u</p>
    <p>dfdf</p>
    <img src="https://images.squarespace-cdn.com/content/v1/53164d0ae4b0c6f4c1788440/1652145003526-229VG586UR442MSW0Q20/aerochrome-11+%283%29_res.jpg?format=2500w" alt="">
</body>
</html>