<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    form {
        border: 1px solid;
        border-radius: 6px;
        width: 80%;
        margin-top: 20px;
        margin-bottom: 20px;
    }
</style>
<?php
function button1()
{
    $a = isset($_POST['a']) ? (float)trim($_POST['a']) : '';
    $b = isset($_POST['b']) ? (float)trim($_POST['b']) : '';
    if ($a == '') {
        $x = 'Chưa nhập số a';
    } elseif ($b == '') {
        $x = 'Chưa nhập số b';
    } elseif ($a == 0) {
        $x = 'Làm ơn nhập số khác 0';
    } else {
        $x = - ($b) / $a;
    }
    echo $x;
}

function button2()
{
    $a = isset($_POST['a']) ? (float)trim($_POST['a']) : '';
    $b = isset($_POST['b']) ? (float)trim($_POST['b']) : '';
    $c = isset($_POST['c']) ? (float)trim($_POST['c']) : '';
    $D = $b * $b - 4 * $a * $c;
    if ($D >= 0) {
        $x1 = (-$b + sqrt($D)) / (2 * $a);
        $x2 = (-$b - sqrt($D)) / (2 * $a);
        echo "Phương trình có nghiệm: $x1, $x2 \n";
    } else {
        $x1 = -$b / (2 * $a);
        $x2 = sqrt(-$D) / (2 * $a);
        echo "Phương trình có nghiệm: $x1 ± $x2 i \n";
    }
    echo $x1;
    echo $x2;
}
function button3()
{
    $a = isset($_POST['a']) ? (float)trim($_POST['a']) : '';
    $b = isset($_POST['b']) ? (float)trim($_POST['b']) : '';
    $c = isset($_POST['c']) ? (float)trim($_POST['c']) : '';
    if ($a < $b + $c && $b < $a + $c && $c < $a + $b) {
        if ($a * $a == $b * $b + $c * $c || $b * $b == $a * $a + $c * $c || $c * $c == $a * $a + $b * $b) {
            echo 'Đây là tam giác vuông';
        } elseif ($a == $b && $b == $c) {
            echo 'Đây là tam giác đều';
        } elseif ($a == $b || $a == $c || $b == $c) {
            echo 'Đây là tam giác cân';
        } elseif ($a * $a > $b * $b + $c * $c || $b * $b > $a * $a + $c * $c || $c * $c > $a * $a + $b * $b) {
            echo 'Đây là tam giác tù';
        } else {
            echo 'Đây là tam giác nhọn';
        }
    } else {
        echo 'Ba cạnh này ko tạo thành một tam giác';
    }
}
function button4()
{
    $n = isset($_POST['n']) ? (float)trim($_POST['n']) : '';
    for ($i = 0; $i < 10; $i++) {
        $mul = $n * $i;
        echo $n . " * " . $i . " = " . $mul . "<br>";
    }
}
function button5()
{
    //UCLN
    $a = isset($_POST['a']) ? (float)trim($_POST['a']) : '';
    $b = isset($_POST['b']) ? (float)trim($_POST['b']) : '';
    $ucln = 0;
    if ($a == 0 || $b == 0) {
        return $a + $b;
    }
    while ($a != $b) {
        if ($a > $b) {
            $a -= $b;
        } else {
            $b -= $a;
        }
    }
    echo $a;
}
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="col-sm">
                    <form method="POST">
                        <div class="mb-3 ">
                            <label class="form-label">Phương trình bậc nhất một ẩn</label>
                            <div class="form-text">Nhập a: (a khác 0)</div>
                            <input type="number" class="form-control" name="a">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nhập b:</label>
                            <input type="number" class="form-control" name="b">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">X: <?php array_key_exists('submit1', $_POST) ? button1() : 'FuckingHell' ?></label>
                        </div>
                        <button type="submit" name="submit1" class="btn btn-dark">Kết quả</button>
                    </form>
                </div>
            </div>
            <div class="col">
                <div class="col-sm">
                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Phương trình bậc hai hai ẩn</label>
                            <div class="form-text">Nhập a: </div>
                            <input type="number" class="form-control" name="a">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nhập b: </label>
                            <input type="number" class="form-control" name="b">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nhập c: </label>
                            <input type="number" class="form-control" name="c">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">X: <?php array_key_exists('submit2', $_POST) ? button2() : 'FuckingHell' ?></label>
                        </div>
                        <button type="submit" name="submit2" class="btn btn-dark">Kết quả</button>
                    </form>
                </div>
            </div>
            <div class="col">
                <div class="col-sm">
                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Kiểm tra tam giác</label>
                            <div class="form-text">Nhập cạnh a: </div>
                            <input type="number" class="form-control" name="a">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nhập cạnh b: </label>
                            <input type="number" class="form-control" name="b">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nhập cạnh c: </label>
                            <input type="number" class="form-control" name="c">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"><?php array_key_exists('submit3', $_POST) ? button3() : 'FuckingHell' ?></label>
                        </div>
                        <button type="submit" name="submit3" class="btn btn-dark">Kết quả</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            
            <div class="col">
                <div class="col-sm">
                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Bảng cửu chương thứ n</label>
                            <div class="form-text">Nhập n: </div>
                            <input type="number" class="form-control" name="n">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"><?php array_key_exists('submit4', $_POST) ? button4() : 'FuckingHell' ?></label>
                        </div>
                        <button type="submit" name="submit4" class="btn btn-dark">Kết quả</button>
                    </form>
                </div>
            </div>
            <div class="col">
                <div class="col-sm">
                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Tìm UCLN, UCNN, BSCNN</label>
                            <div class="form-text">Nhập a: </div>
                            <input type="number" class="form-control" name="a">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nhập b:</label>
                            <input type="number" class="form-control" name="b">
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><?php array_key_exists('submit5', $_POST) ? button5() : 'FuckingHell' ?></label>
                        </div>
                        <button type="submit5" name="submit1" class="btn btn-dark justify-content-center">Kết quả</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>