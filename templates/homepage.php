<?php
?>

<body>
<h1>Welcome to my site!</h1>
<p>What would you like to share with us today?</p>
<br>
<div class="content">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="forma">
        <label for="title"> Title:
            <input type="text" name="title" class="inner">
        </label>

        <br><br>
        <label for="content"> Content:
            <textarea name="content" class="inner" cols="30" rows="10"></textarea>
        </label>
        <br><br>
        </label>
        <label for="name"> Author name:
            <input type="text" name="name" class="inner">
        </label>
        <br><br>

        <input type="submit" name="send" value="Submit" class="boton">
    </form>
</div>