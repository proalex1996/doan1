<?php
$this->title = 'About Us';

use yii\helpers\Url;

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
            display: -webkit-box;
        }

        .title {
            color: grey;
            font-size: 18px;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #FFFFFF;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        button:hover, a:hover {
            opacity: 0.7;
        }
    </style>
</head>
<body>
<br><br>
<div class="card">
    <br>
    <img src="<?=Url::to(['img/auth/me.jpg'])?>" alt="John" style="width:50%">
    <h1>Trần Trung Tính</h1>
    <p>MSSV: 1700373</p>
    <p class="title">Trường Đại học Kỹ thuật - Công nghệ Cần Thơ</p>
    <p>Đề Tài:</p>
    <p>XÂY DỰNG WEBSITE TIN TỨC
        BÓNG ĐÁ
    </p>
    <p><button><a href="https://www.facebook.com/tinhtran001">Liên Hệ</a></button></p>
</div>

</body>
</html>
