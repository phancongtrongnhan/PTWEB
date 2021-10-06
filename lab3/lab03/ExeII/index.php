<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<?php


function button1()
{
    $r = isset($_POST['r']) ? (float)trim($_POST['r']) : '';
    $St = 3* $r * $r;
    echo $St;

}

function button2()
{
    $r = isset($_POST['r']) ? (float)trim($_POST['r']) : '';
    $Ct = 2 * 3 * $r;
    echo $Ct;
    
}

function button3() {
    $a = isset($_POST['b']) ? (float)trim($_POST['a']) : '';
    $b = isset($_POST['a']) ? (float)trim($_POST['b']) : '';
    $S = $a * $b;
    echo $S;
}
?>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 ">
                <h3 class="text-center">Diện tích và Chu vi hình tròn</h3>
                <form action="index.php" method="POST">
                    <div class="form-group">
                        <label>Bán kính</label>
                        <input type="text" class="form-control" name="r">
                    </div>
                    <div class="form-group">
                        <label>Diện tích</label>
                        <input type="text" class="form-control" value="<?php array_key_exists('submit1',$_POST) ? button1() : '' ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label>Chu vi</label>
                        <input type="text" class="form-control" value="<?php array_key_exists('submit1',$_POST) ? button2() : '' ?>" disabled>
                    </div>
                    <button type="submit" class="btn btn-dark" name="submit1">Calculate</button>
                </form>
            </div>

            <div class="col-lg-6">
                <h3 class="text-center">Diện tích hình chữ nhật</h3>
                <form action="index.php" method="POST">
                    <div class="form-group">
                        <label>Chiều dài</label>
                        <input type="text" class="form-control" name="a">
                    </div>
                    <div class="form-group">
                        <label>Chiều rộng</label>
                        <input type="text" class="form-control" name="b">
                    </div>
                    <div class="form-group">
                        <label>Diện tích</label>
                        <input type="text" class="form-control" name="S" value="<?php array_key_exists('submit2',$_POST) ? button3() : '' ?>" disabled>
                    </div>
                    <button type="submit" class="btn btn-dark" name="submit2">Calculate</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>