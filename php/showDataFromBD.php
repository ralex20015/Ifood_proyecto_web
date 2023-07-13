<?php
    include "dbConection.php";
    
    if (isset($_GET['search'])) {
        $textTyped = $_GET['search'];
        $query = mysqli_query($conn,"select * from `recipes` where name='$textTyped' || cost='$textTyped'");
    }else{
        $query = mysqli_query($conn,"select * from `recipes`");
    }

    if (isset($_GET['keyPressed'])) {
        $textTyped = $_GET['keyPressed'];
        $text = 'select * from `recipes` where name LIKE "'.$textTyped.'%" OR cost LIKE "'.$textTyped.'%"';
        $query = mysqli_query($conn,$text);
    }
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $rows[] = array(
                $row["id_recipe"],
                $row["name"],
                $row["cost"],
                $row["description"],
                $row["image"],
                $row["id_chef"]);
        } 
    }
    $response = array("data" => $rows);

    mysqli_close($conn);
    echo json_encode($response); 
?>