<?php

require_once("my-model.php");

if(isset($_POST['submit.img'])) {
$extension = pathinfo($_FILES["img"]["name"].PATHINFO_EXTENSION);
$dst_name  = getcwd().'/Uploaded_images/'.time().uniqid(rand()). '.' .$extension;
$dst_name  = str_replace('\\' , '/' , $dst_name);
move_uploaded_file($_FILES["img"]["temp_name"] , $dst_name);
$result = classify_img($dst_name)

} else {
    header("Location : index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>your_result</title>
    <style>
        table , td , th 
        {
            border: 1px solid black
        }
        table
        {
            border-collapse : collapse
        }
        th
        {
            text-align : right ;
            background-color :  gray;
        }
    </style>
</head>
<body>
    <h1>Deep fake Result</h1>
    <p><?php echo $dst_name ?></p>
    <table>
        <tr>
            <th>result</th>
            <td><?php echo $result['class_name']?></td>
        </tr>
        <tr>
            <th>probablity of fake</th>
            <td><?php echo $result['prob_fake']?></td>
        </tr>
        <tr>
            <th>probablity of real</th>
            <td><?php echo $result['prob_real']?></td>
        </tr>
    </table>
    <p>
        to return to previous page <a href="index.php"> click here</a>
    </p>
</body>
</html>