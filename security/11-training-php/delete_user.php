<?php
session_start();

require_once 'models/UserModel.php';
require_once 'utils.php';

$userModel = new UserModel();
$id = isset($_GET['id']) ? custom_decrypt($_GET['id']) : null;

// Kiểm tra xem ID đã được giải mã thành công hay chưa
if ($id === null || !is_numeric($id)) {
    header('Location: list_users.php'); // Chuyển hướng nếu ID không hợp lệ
    exit;
}

// Tìm người dùng theo ID
$user = $userModel->findUserById($id);
if (!$user) {
    header('Location: list_users.php'); // Chuyển hướng nếu không tìm thấy người dùng
    exit;
}

// Xóa người dùng ngay lập tức
$userModel->deleteUserById($id);
header('Location: list_users.php'); // Chuyển hướng về danh sách người dùng sau khi xóa
exit;
?>
