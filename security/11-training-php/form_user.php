<?php
session_start();

require_once 'models/UserModel.php';
require_once 'utils.php';

$userModel = new UserModel();
$id = isset($_GET['id']) ? custom_decrypt($_GET['id']) : null;

// Kiểm tra xem ID đã được giải mã thành công hay chưa
if ($id === null || !is_numeric($id)) {
    // Chuyển hướng nếu ID không hợp lệ
    header('Location: list_users.php');
    exit;
}

$user = $userModel->findUserById($id);

// Kiểm tra xem người dùng có tồn tại không
if (!$user) {
    // Chuyển hướng nếu không tìm thấy người dùng
    header('Location: list_users.php');
    exit;
}

// Biến để lưu thông báo lỗi
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy dữ liệu từ form
    $name = trim($_POST['name']);
    $password = trim($_POST['password']);

    // Xác thực tên
    if (empty($name)) {
        $errors[] = "Name is required.";
    } elseif (!preg_match('/^[A-Za-z0-9]{5,15}$/', $name)) {
        $errors[] = "Name must be 5 to 15 characters long and can only contain letters and numbers.";
    }

    // Xác thực mật khẩu
    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[~!@#$%^&*()]).{5,10}$/', $password)) {
        $errors[] = "Password must be 5 to 10 characters long, including at least one lowercase letter, one uppercase letter, one digit, and one special character.";
    }

    // Nếu không có lỗi, thực hiện hành động như lưu người dùng
    if (empty($errors)) {
        // Thực hiện cập nhật thông tin người dùng tại đây
        // Bạn có thể gọi đến phương thức updateUser trong UserModel để lưu thông tin
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php' ?>
    <div class="container">

        <?php if (!empty($errors)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php foreach ($errors as $error) { echo htmlspecialchars($error) . "<br>"; } ?>
            </div>
        <?php } ?>

        <div class="alert alert-warning" role="alert">
            User form
        </div>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($user[0]['id']); ?>">
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" name="name" placeholder="Name" value='<?php echo htmlspecialchars($user[0]['name']); ?>'>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>

            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
