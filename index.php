<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "classes/Post.php";
require "classes/PostLoader.php";

//image this code could be a complex query
//$users = ['John Doe', 'Joe Doe', 'John Smith', 'An Onymous'];
//$articles = ['Terror over london', 'Football: a useless hobby?', 'Economic crisis ahead, says expert', 'Fortis is Fortwas'];
//end controller
//start view
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Guestbook!</title>
</head>
<body>
<h1>Welcome to my site!</h1>
<p>What would you like to share with us today?</p>
<br>
<div>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="title"> Title:
            <input type="text" name="title">
        </label>

        <br><br>
        <label for="content"> Content:
            <textarea name="content" id="contenido" cols="30" rows="10"></textarea>
        </label>
        <br><br>
        </label>
        <label for="name"> Author name:
            <input type="text" name="name">
        </label>
        <br><br>

        <input type="submit" value="Submit">
    </form>
</div>
<h2>Recent articles</h2>
<?php

$file = "post.json";
if (isset($_POST['title']) != "" && isset($_POST['content']) != "" && isset($_POST['name']) != "") {


    $title = $_POST['title'];
    $content = $_POST['content'];
    $name = $_POST['name'];
    $fp = fopen($file, "r+");
    $old = fread($fp, filesize($file));

    $dateOfEntry = date("F j, Y, g:i a");
    $content = htmlspecialchars($content);
    $content = stripcslashes($content);

    $entry = "<div><h4> Title:".$title."</h4><br><h5>".$name."</h5><br><h5>on <i>".$dateOfEntry."</i></h5><br><p>".$content."</p></div>";




    rewind($fp);
    fputs($fp, "$entry \n $old");
    fclose($fp);
}

readfile($file);


?>
<h2>Recent articles</h2>


</body>
</html>
