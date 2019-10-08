<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Future Value Calculator</h1>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $amount = $_POST['amount'];
    $rate = $_POST['rate'];
    $year = $_POST['year'];
    $z = $amount + ($amount * $rate);
    echo 'số lượng tiền ban đầu :' . '$' . $amount . '<br>';
    echo 'số lãi suất năm' . $rate . '%' . '<br>';
    echo 'số năm :  ' . $year . '<br>';
    echo 'giá trị lương lai' . '$' . $z . '<br>';
}
?>
