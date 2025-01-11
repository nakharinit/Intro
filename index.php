<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ทรงพระเจริญ</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #d4b866;
            font-family: 'Kanit', sans-serif;
        }
        .content-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            color: #fff;
            padding: 20px;
        }
        .btn-custom {
            background-color: #fff;
            color: #d4b866;
            border: none;
            padding: 10px 20px;
            margin: 10px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background-color: #d4b866;
            color: #fff;
            border: 1px solid #fff;
        }
        .btn-custom i {
            margin-right: 8px;
        }
        .golden-text {
            color: #d4b866;
        }
        /* กรอบรูปภาพ */
        .hero-image-wrapper {
            width: 80%; /* ปรับความกว้างกรอบ */
            height: 60vh; /* ปรับความสูงกรอบ */
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 5px solid #fff; /* กรอบสีขาว */
            border-radius: 10px; /* มุมโค้งมน */
            margin: 20px auto; /* จัดให้อยู่กลาง */
        }
        .hero-image {
            width: 100%;
            height: 100%;
            object-fit: cover; /* ให้รูปขยายจนเต็มกรอบ */
        }
        .hero-text {
            font-size: 2rem;
        }
        .hero-text-sm {
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="container-fluid content-wrapper">
        <div class="row">
            <!-- กรอบรูปภาพ -->
            <div class="col-12">
                <div class="hero-image-wrapper">
                    <img src="batch_batch_0009_1575105146.jpg" alt="ทรงพระเจริญ" class="hero-image">
                </div>
            </div>
        </div>

        <h1 class="golden-text hero-text hero-text-sm">ทรงพระเจริญ</h1>
        <p class="hero-text hero-text-sm">
            เนื่องในโอกาส<br>
            พระบาทสมเด็จพระเจ้าอยู่หัวทรงเจริญพระชนมายุ<br>
            <strong>๒๖,๕๙๙ วัน</strong><br>
            ขอพระองค์ทรงพระเจริญยิ่งยืนนาน
        </p>

        <div class="d-flex justify-content-center flex-wrap">
            <a href="timeline.php" class="btn btn-custom">
                <i class="bi bi-calendar"></i> สมเด็จมหาวชิราลงกรณ
            </a>
            <a href="main.php" class="btn btn-custom">
                <i class="bi bi-box-arrow-in-right"></i> เข้าสู่เว็บไซต์
            </a>
            <a href="check-lottery.php" class="btn btn-custom">
                <i class="bi bi-search"></i> ตรวจสลาก
            </a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
