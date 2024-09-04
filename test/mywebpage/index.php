<?php
include "header.php";
include "navbar.php";

?>

<main>
    <nav>
        <h2>Main Content</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla auctor, arcu at fermentum malesuada,
            mauris lorem pharetra neque, et egestas turpis lectus eu metus. In viverra, justo ac viverra suscipit,
            lorem metus porttitor lacus, non hendrerit felis sapien non mi. Integer ac ex justo.</p>
    </nav>
</main>
<center>
    <h1>Login form</h1>
    <form method="get" action="./login.php">
        <input type="text" name="login_name" placeholder="Enter your name" />
        <br />
        <input type="text" name="login_password" placeholder="Enter your password" />
        <br />
        <button type="submit">Login</button>
    </form>
</center>
<hr />
<center>
    <h1>Sign Up form</h1>
    <form method="post" action="./signup.php">
        <input type="text" name="user_name" placeholder="Enter your name" />
        <br />
        <input type="text" name="user_email" placeholder="Enter your Email" />
        <br />
        <input type="text" name="user_password" placeholder="Enter your password" />
        <br />
        <button type="submit">SignUp</button>
    </form>
</center>
<hr />
<center>
    <h1>Super Global variables</h1>
    <form method="post" action="./super.php">
        <input type="text" name="user_name" placeholder="Enter your name" />
        <br />
        <input type="text" name="user_email" placeholder="Enter your Email" />
        <br />
        <input type="text" name="user_password" placeholder="Enter your password" />
        <br />
        <button type="submit">SignUp</button>
    </form>
</center>
<hr />
<center>
    <h1>file upload</h1>

    <form method="post" action="./super.php" enctype="multipart/form-data">
        <input type="file" name="uploadFile" />
        <br />
        <button>upload File</button>
    </form>
</center>
<hr />
<center>
    <h1>call php functions</h1>

    <form method="post" action="">

        <button name="button">call function</button>
    </form>
</center>
<hr />
<?php

if (isset($_POST["button"])) {
    echo mybutton();
}
function mybutton()
{
    echo "<center>hello world</center>";
}
;
echo "<hr />";

// Set cookies
setcookie("Fruit", "apple");

if (isset($_COOKIE["Fruit"])) {
    echo "current cokkie is " . $_COOKIE["Fruit"];
} else {
    echo "cokkie not found";
}
?>
<hr />
<center>
    <h1>handle Cookies with input fields</h1>
    <form action="" method="post">
        <input type="text" name="user" placeholder="enter your name" />
        <br />
        <button name="button" value="set">Set cookie</button>
        <br />
        <button name="button" value="display">Display cookie</button>
        <br />
        <button name="button" value="delete">Delete cookie</button>
    </form>
</center>
<hr />
<center>
    <h1>handle Session with input fields</h1>
    <form action="" method="post">
        <input type="text" name="users" placeholder="enter your name" />
        <br />
        <button name="button" value="set_session">Set session</button>
        <br />
        <button name="button" value="display_session">Display session</button>
        <br />
        <button name="button" value="delete_session">Delete session</button>
    </form>
</center>
<hr />
<center>
    <h1>create file with php</h1>
    <form method="post" action="">
        <input name="filename" placeholder="enter your filename" />
        <br />
        <br />
        <textarea name="filecontent" placeholder="write your file content"></textarea>
        <br />
        <br />
        <button type="submit">create file</button>
    </form>
</center>
<hr />
<!-- <center>
    <h1>choose any file and read</h1>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="file" placeholder="enter your filename" />
        <br />
        <br />
        <button type="submit">read my file</button>
    </form>
</center> -->

<?php
if (isset($_POST["button"])) {
    if ($_POST["button"] == "set") {
        $val = $_POST["user"];
        setcookie("user", $val);
        echo "cookie is set";
    }
    if ($_POST["button"] == "display") {
        if (isset($_COOKIE["user"])) {
            echo $_COOKIE['user'];
        }
    }
    ;
    if ($_POST["button"] == "delete") {
        $val = $_POST["user"];
        setcookie("user", null - 1);
        echo null;
    }
}
;
session_start();

if (isset($_POST["button"])) {
    if ($_POST["button"] == "set_session") {
        $val = $_POST["users"];
        $_SESSION["users"] = $val;
    }

    if ($_POST["button"] == "display_session") {
        echo $_SESSION['users'];
    }

    if ($_POST["button"] == "delete_session") {
        session_destroy();
    }
}
// file created and write

if (isset($_POST["filename"])) {
    $filename = $_POST["filename"];
    $fileContent = $_POST["filecontent"];

    // open the file and write it
    $file = fopen($filename, "w");

    // if file exist file successfully created
    if ($file) {
        fwrite($file, $fileContent);
        fclose($file);
        echo "file created";
    } else {
        echo "file cannot be created";

    }
}
echo "<hr/>";
echo "<hr/>";
echo "<center><h1>file read</h1></center>";

// choose file
$file = "ankit.txt";

if ($file) {
    $myfile = fopen($file, "r");
    echo fread($myfile, filesize($file));
    fclose($myfile);
} else {
    echo "file cannnot get";
}
// ----------------------------------------------both code are correct-------------------------------------
// choose any file any read it


// if (isset($_FILES["myopenfile"])) {
//     $file = $_FILES["myopenfile"]["tmp_name"];

//     if ($file) {
//         $myopenfile = fopen($file, "r");
//         echo fread($myopenfile, filesize($file));
//         fclose($myopenfile);
//     } else {
//         echo "file cannot find";
//     }
// }
// -------------------------------
// if (isset($_FILES["myopenfile"])) {
//     $file = $_FILES["myopenfile"]["tmp_name"];

//     if ($file && file_exists($file)) {
//         $myopenfile = fopen($file, "r");
//         echo nl2br(fread($myopenfile, filesize($file)));
//         fclose($myopenfile);
//     } else {
//         echo "File cannot be found.";
//     }
// }

// --------------------------------------------------------------------------------------------------------


?>


<?php
include 'footer.php';
?>