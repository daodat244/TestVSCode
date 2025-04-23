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
        /* Reset CSS cơ bản */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #e5e5e5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .container {
            width: 70%;
            max-width: 600px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #5d5d5d;
        }

        .time {
            font-size: 24px;
            margin: 20px 0;
            color:rgb(255, 0, 0);
        }

        .content {
            font-size: 18px;
            color: #555;
            line-height: 1.6;
        }

        /* Thêm hiệu ứng cho hộp */
        .container:hover {
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        /* Responsive: Thích ứng với các màn hình nhỏ */
        @media (max-width: 600px) {
            .container {
                width: 90%;
            }
        }

    </style>
</head>
<body>

    <div class="container">
        <h1>Đồng hồ siêu sai</h1>
        <div class="time">
            <p>Time Stone <?php echo $current_time; ?></p>
        </div>
        <div class="content">
            <p>LOKI</p>
        </div>
    </div>

</body>
</html>
