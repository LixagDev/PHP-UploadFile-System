<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Upload Image</title>
</head>
<body>
    <form action="addimg.php" method="post" enctype="multipart/form-data">
        <input type="file" name="imageupload" id="imageupload" accept="image/png, image/jpeg, image/jpg">
        <input type="submit" value="test" name="buttonupload">
    </form>
</body>
</html>