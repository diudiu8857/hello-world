<?php
if ($_FILES["file"]["error"] > 0)
{
    echo "Error: " . $_FILES["file"]["error"] . "<br />";
}
else
{
   $file=$_FILES['file'];
   $name=$file['name'];
   move_uploaded_file($file['tmp_name'],"..\\".$name);
}
?>