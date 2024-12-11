<?php
require_once('php/connect.php');

$searchValue = isset($_GET['search']) ? strtolower(trim($_GET['search'])) : '';

// Kiểm tra giá trị tìm kiếm
if ($searchValue !== '') {
    $query = "SELECT * FROM table_students WHERE 
              LOWER(fullname) LIKE '%$searchValue%' 
              OR LOWER(hometown) LIKE '%$searchValue%'";
    $result = mysqli_query($conn, $query);
} else {
    $result = false;
}

?>
<!DOCTYPE html>
<html lang="vi">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả tìm kiếm</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center">Kết quả tìm kiếm</h1>
    <div class="container mt-5">
        <?php if ($result && mysqli_num_rows($result) > 0): ?>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Họ và tên</th>
                        <th>Ngày sinh</th>
                        <th>Giới tính</th>
                        <th>Quê quán</th>
                        <th>Nhóm</th>
                        <th>Trình độ học vấn</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['fullname']; ?></td>
                            <td><?php echo $row['dob']; ?></td>
                            <td><?php echo ($row['gender'] == 0) ? 'Nam' : (($row['gender'] == 1) ? 'Nữ' : 'Gay'); ?></td>
                            <td><?php echo $row['hometown']; ?></td>
                            <td><?php echo $row['group']; ?></td>
                            <td>
                                <?php switch ($row['level']) {
                                    case 0: echo 'Vô học'; break;
                                    case 1: echo 'Tiểu học'; break;
                                    case 2: echo 'Trung học'; break;
                                    case 3: echo 'Cao đẳng'; break;
                                    case 4: echo 'Đại học'; break;
                                }; ?>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p style="text-align: center; color: red;">Không tìm thấy kết quả nào cho từ khóa: "<?php echo htmlspecialchars($searchValue); ?>"</p>
        <?php endif; ?>
    </div>
    <div class="d-flex justify-content-center align-items-center" style="margin-left: 720px;">
    <a href="giua_ky_utt.php" class="btn btn-primary">
        <i class="fas fa-arrow-left mr-2"></i> Quay lại
    </a>
</div>
</body>
</html>