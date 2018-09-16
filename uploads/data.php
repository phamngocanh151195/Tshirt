<?php
    if ($_FILES['uploads']) {
        $duoi = explode('.', $_FILES['uploads']['name']); // tách chuỗi khi gặp dấu .
        $duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
        // Kiểm tra xem có phải file ảnh không
        if ($duoi === 'jpg' || $duoi === 'png' || $duoi === 'gif') {
            // tiến hành upload
            if (move_uploaded_file($_FILES['uploads']['tmp_name'], 'uploads/' . $_FILES['uploads']['name'])) {
                // Nếu thành công
                die('Upload thành công file: ' . $_FILES['uploads']['name']); //in ra thông báo + tên file
            } else {
                die('Có lỗi!'); // in ra thông báo
            }
        } else { // nếu không phải file ảnh
            die('Chỉ được upload ảnh');
        }
    } else {
        echo "Loi gui file"; // nếu không phải post method
    }
?>