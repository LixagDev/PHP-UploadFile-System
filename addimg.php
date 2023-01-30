<?php
if (isset($_POST['buttonupload']) && isset($_FILES['imageupload']))
{
    echo "<pre>";
	print_r($_FILES['imageupload']);
	echo "</pre>";

    $img_name = $_FILES['imageupload']['name'];
    $img_size = $_FILES['imageupload']['size'];
    $img_tmp = $_FILES['imageupload']['tmp_name'];
    $error = $_FILES['imageupload']['error'];

    $img_ext = pathinfo($img_name, PATHINFO_EXTENSION);
    $supported_image = array(
        'jpg',
        'jpeg',
        'png'
    );
    echo $img_ext;

    if ($error == 1)
    {
        echo "Il y a une erreur";
    }
    else
    {

    }
    if (in_array($img_ext, $supported_image))
    {
        $time = time();
        $newimg_name = $time.$img_name;
        $moveimg = move_uploaded_file($img_tmp, "img/".$newimg_name);
    }
    else
    {
        echo "Pas la bonne eext";
    }
}
else
{
    header("Location: /");
}
?>