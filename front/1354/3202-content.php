<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="gel-heading text-left">
                    <h2 class="gel-heading-title">
                        Orders<br>&amp; Shipping
                    </h2>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="vc_toggle vc_toggle_active">
                    <div class="vc_toggle_title">
                        <h4>How did my package ship?</h4>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="vc_toggle_content">
                        <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                            vitamins, and other skin-nourishing nutrients...</p>
                    </div>
                </div>
                <div class="vc_toggle vc_toggle_active">
                    <div class="vc_toggle_title">
                        <h4>Why does my USPS tracking number state 1-Day, 2-Day, 3-Day Delivery?</h4>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="vc_toggle_content">
                        <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                            vitamins, and other skin-nourishing nutrients. Creamy liquid formula sets with a pristine
                            matte finish for soft, velvety smooth skin.</p>
                    </div>
                </div>
                <div class="vc_toggle vc_toggle_active">
                    <div class="vc_toggle_title">
                        <h4>How long will my package take to arrive?</h4>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="vc_toggle_content">
                        <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                            vitamins, and other skin-nourishing nutrients...</p>
                    </div>
                </div>
                <div class="vc_toggle vc_toggle_active">
                    <div class="vc_toggle_title">
                        <h4>What are business days?</h4>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="vc_toggle_content">
                        <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                            vitamins, and other skin-nourishing nutrients...</p>
                    </div>
                </div>
                <div class="vc_toggle vc_toggle_active">
                    <div class="vc_toggle_title">
                        <h4>How do I know my package has shipped?</h4>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="vc_toggle_content">
                        <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                            vitamins, and other skin-nourishing nutrients...</p>
                    </div>
                </div>
                <div class="vc_toggle vc_toggle_active">
                    <div class="vc_toggle_title">
                        <h4>Why are certain products unavailable to ship Internationally?</h4>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="vc_toggle_content">
                        <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                            vitamins, and other skin-nourishing nutrients...</p>
                    </div>
                </div>
                <div class="vc_toggle vc_toggle_active">
                    <div class="vc_toggle_title">
                        <h4>Why is my tracking number not updating?</h4>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="vc_toggle_content">
                        <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                            vitamins, and other skin-nourishing nutrients...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.vc_toggle_title').forEach(title => {
            title.addEventListener('click', () => {
                const content = title.nextElementSibling; // Lấy nội dung kế tiếp
                const icon = title.querySelector('.toggle-icon'); // Lấy biểu tượng dấu cộng

                // Chuyển đổi hiển thị của nội dung
                if (content) {
                    if (content.style.display === "block") {
                        content.style.display = "none"; // Ẩn nội dung
                        icon.textContent = "+"; // Đặt lại biểu tượng
                    } else {
                        content.style.display = "block"; // Hiện nội dung
                        icon.textContent = "-"; // Đổi sang biểu tượng trừ
                    }
                }
            });
        });
        // Đặt trạng thái ban đầu cho tất cả các nội dung
        document.querySelectorAll('.vc_toggle_content').forEach(content => {
            content.style.display = "none"; // Ẩn tất cả các nội dung khi bắt đầu
        });
    </script>
</body>
</html>