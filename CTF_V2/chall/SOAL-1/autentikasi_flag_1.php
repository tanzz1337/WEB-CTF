<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Autentikasi</title>

</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputText = $_POST['authInput'];

        if ($inputText === 'flag{$th15_F1rst_F1ag}') {
            echo "<script>alert('Flag Benar'); window.location.href = '../../index.html';</script>";
        } else {
            echo "<script>alert('Flag Salah'); window.location.href = 'flag1.html';</script>";
        }
    }
    ?>
</body>
</html>
