<?php
// API key nội bộ, chỉ dùng cho hệ thống - không bao giờ gửi ra ngoài
$api_key = "SECRET-API-KEY-123456";

// Lấy giá trị referer (CHỈ để logging hoặc kiểm tra, KHÔNG sử dụng để gửi request)
$referer = $_SERVER['HTTP_REFERER'] ?? '';

// Kiểm tra referer có đúng domain hay không (optional logging)
$expected_domain = "http://localhost"; // hoặc domain của Anh Hai
if (strpos($referer, $expected_domain) !== 0) {
    // Log bất thường hoặc từ chối request nếu không đúng nguồn
    error_log("Blocked request from unexpected referer: $referer");
    // header("HTTP/1.1 403 Forbidden");
    // exit;
}

// Tuyệt đối KHÔNG gửi bất kỳ request nào ra ngoài từ giá trị $referer!
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Article 1</title>
</head>
<body>
    <h1>Article Secure</h1>
    <p>This is the content of Article Secure.</p>
</body>
</html>
