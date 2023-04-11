<?php
$source= $_FILES['profile']['tmp_name']
$dest= "./"class="baseanme"($_FILES['profile']['name']);
move_uploaded_file($source, $dest);
?>