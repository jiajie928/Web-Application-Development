<?php 
    if (!empty($_POST['search'])) {
        // Fetch from form
        $search = $_POST["search"];

        header('location:search.php?query='.$search);
    }
?>