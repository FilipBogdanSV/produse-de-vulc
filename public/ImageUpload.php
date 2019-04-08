<?php
if (isset($_FILES['image'])) {
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $tmp2 = explode('.', $_FILES['image']['name']);
    $file_ext = strtolower(end($tmp2));

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    }

    if (empty($errors) == true) {
        $result = move_uploaded_file($file_tmp, "pozeanvelope/" . $file_name);
        if ($result == 1) {
            echo "Success";
        }
    } else {
        print_r($errors);
    }
}
