<?php
// echo "my name is " . $_POST["user_name"];
// echo "<br/>";
// echo "my email is " . $_POST["user_email"];
// echo "<br/>";
// echo "my password is " . $_POST["user_password"];

echo "<br/>";

// print_r($GLOBALS);
echo "<br/>";
// print_r($_SERVER)
//  file upload advance part

// print_r($_FILES);
if ($_FILES["uploadFile"]) {
    $path = $_FILES["uploadFile"]["name"];
    $assests_path = "./assests" . $path;
    if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $assests_path) || die("file upload failed")) {
        echo "file uploaded";
    }

} else {
    die("file cannot upload");
}


?>