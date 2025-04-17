<?php
    // Lấy thời gian hiện tại
    $current_time = date('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Box</title>
    <style>
        /* CSS để tạo hộp */
        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border: 2px solid #000;
            text-align: center;
            background-color: #f4f4f4;
        }

        h1 {
            font-size: 24px;
            color: #333;
        }

        .time {
            font-size: 20px;
            margin: 20px 0;
        }

        .content {
            font-size: 18px;
            color: #555;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Title of the Page</h1>
        <div class="time">
            <p>ĐỒNG HỒ THỜI GIAN <?php echo $current_time; ?></p>
        </div>
        <div class="content">
            <p>Cấm chỉ Tiến Đạt</p>
        </div>
    </div>

</body>
</html>
