<?php
// Kết nối đến cơ sở dữ liệu
require_once('connect.php');

// Thực thi truy vấn để xóa tất cả dữ liệu trong bảng
$sql = "DELETE FROM table_students";
if (mysqli_query($conn, $sql)) {
    // Thành công: Chuyển hướng về trang chính với thông báo
    header("Location: ../giua_ky_utt.php?status=delete_all_success");
    exit();
}

// Đóng kết nối
mysqli_close($conn);
?>
