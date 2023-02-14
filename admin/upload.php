<?php
    if(isset($_POST['upload']))
    {
        if(isset($_FILES["image"]))
        {
            $filename = $_FILES["image"]["name"];
            $tempname = $_FILES["image"]["tmp_name"];
            $folder = '../images/'.$filename;
            move_uploaded_file($tempname, $folder);
        }
        $current_date = date("F j, Y H:i:s");
        echo $current_date;
        include '../connection.php';
        $sql = "INSERT INTO photos (file_name, category, uploaded_on) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$filename, $_POST["category"], $current_date]);
        $conn = null;
    }
    header("location: index.php");






