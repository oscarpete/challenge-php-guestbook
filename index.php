<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);



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
    <title>My site</title>
</head>
<body>
<h1>Welcome to my site!</h1>
<p>What would you like to share with us today?</p>
<br>
<div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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

$file = "guestbook.txt";
if (isset($_POST['title'])!= "" && isset($_POST['content'])!= "" &&  isset($_POST['name'])!= "") {


    $title = $_POST['title'];
    $content = $_POST['content'];
    $name = $_POST['name'];
    $fp = fopen($file, "r+");
    $old = fread($fp, filesize($file));

    $dateOfEntry = date("j-n-y");
    $content = htmlspecialchars($content);
    $content = stripcslashes($content);

    $entry = "<p><b>$title</b><br> written by <b>$name</b><br> on <i>$dateOfEntry</i>;<br> <br>$content</p> \n";

    rewind($fp);
    fputs($fp, "$entry \n $old");
    fclose($fp);
}

readfile($file);


?>
<h2>Recent articles</h2>


</body>
</html>