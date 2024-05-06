<!DOCTYPE html>
<html>
<head>
    <title> Deep Fake </title>
</head>
<body>
    <h1>Deep Fake Detecion</h1>
    <form action ="deep-fake-img.php" method = "POST" enctype="multipart/form-data" >
        <label>upload image : </label>
        <input required type="file" name="img" accept=".jpg , .png , .jpeg" >
        <input type="submit" name="submit-img" value="predict" >
    </form>
<body>
</html>