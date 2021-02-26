<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "classes/Post.php";
require "classes/PostLoader.php";
require "classes/listener.php";
require "classes/dataRetriever.php";


listener();
retrieveData();
// save the data from json file
$display = array();
if (retrieveData()) {
    $display = retrieveData();
}

?>
<?php include "templates/partials/header.php";?>
<?php include "templates/homepage.php";?>

<h2>Recent articles</h2>
<div class="content">
<?php foreach ($display as $post)  :?>
    <div c>
        <div class="container">
            <h4><?php echo "Title: ".$post["title"]?></h4>
            <h6><?php echo "Name: ".$post["name"] ."  visit at: " .$post["time"]?></h6>
            <p><?php echo $post["content"]?></p>
        </div>
    </div>
<?php endforeach;?>
</div>
<?php include "templates/partials/footer.php";?>

