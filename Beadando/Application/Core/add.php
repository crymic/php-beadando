<?php require_once 'Application/functions.php' ?>
<?php require_once 'Application/Templates/form.html' ?>

<?php
    if (isset($_POST["btnSubmit"])) 
    {
        $thumbnail = $_POST["thumbnail"];
        $author = $_POST["author"];

        $tmp = array('thumbnail'=>$thumbnail, 'author'=>$author);
        json_write($tmp);
    }
    
?> 
