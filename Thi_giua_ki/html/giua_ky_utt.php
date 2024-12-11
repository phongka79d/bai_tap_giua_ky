<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QLSV</title>
  <link rel="stylesheet" href="../css/giua_ky_utt.css">
</head>
<body>


  

<!-- add-sv form -->
  <div id="add-sv-form" style="display: none;">
    <div class="add-sv-container modal-dialog" role="document" >
        <button type="button" class="close" aria-label="Close" id="close-add-sv-form">
            <span aria-hidden="true">&times;</span>
        </button>
        <h2 class="modal-title" id="editFormLabel" style = "font-weight: bold; font-size: 25px;">Thêm sinh viên</h2>
        <form action="php/main.php" method="post">
            <div class="form-group">
                <label for="fullname">Họ và tên</label>
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Họ và tên" required>
            </div>

            <div class="form-group">
                <label for="dob">Ngày sinh</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>

            <div class="form-group">
              <label for="gender">Giới tính</label>
              <select class="form-control" id="gender" name="gender" required>
                  <option value="">-- Chọn giới tính --</option>
                  <option value="0">Nam</option>
                  <option value="1">Nữ</option>
              </select>
            </div>


            <div class="form-group">
              <label for="fullname">Quê Quán</label>
              <input type="text" class="form-control" id="hometown" name="hometown" placeholder="Quê Quán" required>
            </div>

            <div class="form-group">
              <label for="group">Nhóm</label>
              <select class="form-control" id="group" name="group" required>
                  <option value="">-- Chọn nhóm --</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
              </select>
          </div>

          <div class="form-group">
            <label for="level">Trình độ học vấn</label>
            <select class="form-control" id="level" name="level" required>
                <option value="">-- Trình độ học vấn --</option>
                <option value="0">Vô học</option>
                <option value="1">Tiểu học</option>
                <option value="2">Trung học</option>
                <option value="3">Cao đẳng</option>
                <option value="4">Đại học</option>
            </select>
        </div>


            <button type="submit">Thêm sinh viên</button>
        </form>
    </div>
  </div>

<!-- --------------- -->



<div id="edit-form" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" aria-label="Close" onclick="closeEditForm()">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="editFormLabel" style = "font-weight: bold; font-size: 25px;">CHỈNH SỬA THÔNG TIN SINH VIÊN</h5>
            </div>
            <form action="php/edit_db.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="id" id="edit-id">

                    <div class="form-group">
                        <label for="edit-fullname">Họ và tên:</label>
                        <input type="text" id="edit-fullname" name="fullname" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="edit-dob">Ngày sinh:</label>
                        <input type="date" id="edit-dob" name="dob" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="edit-gender">Giới tính:</label>
                        <select id="edit-gender" name="gender" class="form-control" required>
                            <option value="0">Nam</option>
                            <option value="1">Nữ</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="edit-hometown">Quê quán:</label>
                        <input type="text" id="edit-hometown" name="hometown" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="edit-group">Nhóm:</label>
                        <select id="edit-group" name="group" class="form-control" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="edit-level">Trình độ học vấn:</label>
                        <select id="edit-level" name="level" class="form-control" required>
                            <option value="">-- Trình độ học vấn --</option>
                            <option value="0">Vô học</option>
                            <option value="1">Tiểu học</option>
                            <option value="2">Trung học</option>
                            <option value="3">Cao đẳng</option>
                            <option value="4">Đại học</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Lưu thay đổi</button>
                    <button type="button" class="btn btn-secondary" onclick="closeEditForm()">Hủy</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- confirm-delete_all -->
<div id="confirm-delete-all" class="modal" style="display: none;">
    <div class="modal-content">
        <button type="button" class="close" aria-label="Close" onclick="closeConfirmDeleteAll()">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4>Xác nhận xóa tất cả</h4>
        <p>Bạn có chắc chắn muốn xóa toàn bộ sinh viên không? Hành động này không thể hoàn tác!</p>
        <form id="delete-all-form" action="php/delete_all.php" method="POST">
            <button type="submit" class="btn btn-danger">Xóa Tất Cả</button>
            <button type="button" class="btn btn-secondary" onclick="closeConfirmDeleteAll()">Hủy</button>
        </form>
    </div>
</div>
<!-- ---------------- -->



<!-- confirm-delete -->
<div id="confirm-delete" class="modal" style="display: none;">
    <div class="modal-content">
    <button type="button" class="close" aria-label="Close" onclick="closeConfirm()">
                    <span aria-hidden="true">&times;</span>
                </button>
        <h4>Xác nhận xóa</h4>
        <p>Bạn có chắc chắn muốn xóa sinh viên này không?</p>
        
        <form id="delete-form" action="php/delete.php" method="POST">
            <input type="hidden" name="id" id="delete-id">
            <button type="submit" class="btn btn-danger">Xóa</button>
            <button type="button" class="btn btn-secondary" onclick="closeConfirm()">Hủy</button>
        </form>
    </div>
</div>

<!-- ---------------------------- -->
<h1 class="text-center text-header" >DANH SÁCH SINH VIÊN</h1>



<div class="QLSV-table-container container mt-5">
    <!-- search-container -->
<div class="search-container">
    <input type="text" id="search-input" class="form-control" placeholder="Tìm kiếm sinh viên...">
    <button class="btn btn-primary" id="search-button"><i class="bi bi-search"></i> Tìm kiếm</button>
</div>
<!-- ----------------- -->

<!-- delete-reset_all-button-container -->
<div class="action-buttons ml-auto">
        <button class="btn btn-danger" id="delete-all-button">
            <i class="bi bi-trash3"></i> Delete All
        </button>
</div>
<!-- ---------------- -->

<table class="table table-hover table-bordered QLSV-table">
    <?php
    require_once('php/connect.php');
    $result = mysqli_query($conn, "SELECT * FROM table_students");

    // Kiểm tra nếu có dữ liệu, hiển thị tiêu đề và nội dung bảng
    if (mysqli_num_rows($result) > 0): ?>
        <thead class="table-dark">
            <tr>
                <th style="border: 1px solid black;">ID</th>
                <th style="border: 1px solid black;">Họ và tên</th>
                <th style="border: 1px solid black;">Ngày sinh</th>
                <th style="border: 1px solid black;">Giới tính</th>
                <th style="border: 1px solid black;">Quê quán</th>
                <th style="border: 1px solid black;">Nhóm</th>
                <th style="border: 1px solid black;">Trình độ học vấn</th>
                <th>Thao Tác</th>
            </tr>
        </thead>
        <tbody id="table-body">
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr data-id="<?php echo $row['id']; ?>">
                    <td style="border: 1px solid black;"><?php echo $row['id']; ?></td>
                    <td class="col-fullname" style="border: 1px solid black;"><?php echo $row['fullname']; ?></td>
                    <td class="col-dob" style="border: 1px solid black;"><?php echo $row['dob']; ?></td>
                    <td class="col-gender" style="border: 1px solid black;">
                        <?php switch ($row['gender']) {
                            case 0: echo 'Nam'; break;
                            case 1: echo 'Nữ'; break;
                        } ?>
                    </td>
                    <td class="col-hometown" style="border: 1px solid black;"><?php echo $row['hometown']; ?></td>
                    <td class="col-group" style="border: 1px solid black;"><?php echo $row['group']; ?></td>
                    <td class="col-level" style="border: 1px solid black;"><?php switch ($row['level']) { 
                        case 0: echo 'Vô học'; break; 
                        case 1: echo 'Tiểu học'; break; 
                        case 2: echo 'Trung học'; break; 
                        case 3: echo 'Cao đẳng'; break; 
                        case 4: echo 'Đại học'; break; 
                    }; ?></td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="editStudent(<?php echo $row['id']; ?>)">
                            <i class="bi bi-pencil-square"></i> Chỉnh sửa
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" onclick="showConfirm(<?php echo $row['id']; ?>)">
                            <i class="bi bi-trash"></i> Xóa
                        </button>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    <?php else: ?>
        <p style="text-align: center; color: red; font-weight: bold;">
            Không có sinh viên nào trong danh sách.
        </p>
    <?php endif; ?>
    <?php mysqli_close($conn); ?>
    <tr>
                <td colspan="8" style="text-align: center;">
                    <button type="button" class="button-modify">
                        <i class="bi bi-plus-circle-fill"></i> Thêm sinh viên
                    </button>
                </td>
    </tr>
</table>

</div>
  <script src="../js/giua_ky_utt.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
<footer>
        <!-- Phần thông báo  -->
<?php if (isset($_GET['status'])): ?>
    <?php if ($_GET['status'] == 'success'): ?>
        <div style="color: green; text-align: center;">Thêm sinh viên thành công!</div>
    <?php elseif ($_GET['status'] == 'delete_success'): ?>
        <div style="color: green; text-align: center;">Xóa sinh viên thành công!</div>
    <?php elseif ($_GET['status'] == 'delete_error'): ?>
        <div style="color: red; text-align: center;">Lỗi khi xóa sinh viên!</div>
    <?php elseif ($_GET['status'] == 'delete_all_success'): ?>
        <div style="color: green; text-align: center;">Xóa tất cả sinh viên thành công</div>
    <?php endif; ?>
    
<?php endif; ?>
<!-- ------------------ -->
</footer>
</html>
