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

<body>
    <?php
    if (isset($_POST['submit'])) {
        $result1 = $_POST['num1'];
        $result2 = $_POST['num2'];
        $operator = $_POST['op'];
        switch ($operator) {
            case 'Add':
                setcookie("ketqua", ".($result1 + $result2).", time() - 86400);
                echo '<div class="container">
                <h3 class="text-center">PHÉP TÍNH TRÊN HAI SỐ</h3>
                <h4 class="text-center">Đã chọn phép cộng</h4>
                <div class="d-flex justify-content-center">
                    <form action="index.php" method="POST">    
                        <div class="mb-3">
                            <label class="form-label">Số thứ nhất</label>
                            <input type="number" class="form-control" value = ' . ($result1) . '>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Số thứ hai</label>
                            <input type="number" class="form-control" value = ' . ($result2) . '>
                        </div>
                        <div class="mb-3">
                        <label class="form-label">Kết quả</label>
                        <input type="number" class="form-control" value = ' . ($result1 + $result2) . '>
                    </div>
                        <button type="submit" class="btn btn-primary" name="submit">Go Back</button>
                    </form>
                </div>
            </div>';
                break;
            case 'Sub':
                setcookie("ketqua", ".($result1 + $result2).", time() - 86400);
                echo '<div class="container">
                <h3 class="text-center">PHÉP TÍNH TRÊN HAI SỐ</h3>
                <h4 class="text-center">Đã chọn phép trừ</h4>
                <div class="d-flex justify-content-center">
                    <form action="index.php" method="POST">  
                        <div class="mb-3">
                            <label class="form-label">Số thứ nhất</label>
                            <input type="number" class="form-control" value = ' . ($result1) . '>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Số thứ hai</label>
                            <input type="number" class="form-control" value = ' . ($result2) . '>
                        </div>
                        <div class="mb-3">
                        <label class="form-label">Kết quả</label>
                        <input type="number" class="form-control" value = ' . ($result1 - $result2) . '>
                    </div>
                        <button type="submit" class="btn btn-primary" name="submit">Go Back</button>
                    </form>
                </div>
            </div>';
                break;
            case 'Mul':
                setcookie("ketqua", ".($result1 + $result2).", time() - 86400);
                echo '<div class="container">
                <h3 class="text-center">PHÉP TÍNH TRÊN HAI SỐ</h3>
                <h4 class="text-center">Đã chọn phép nhân</h4>
                <div class="d-flex justify-content-center">
                    <form action="index.php" method="POST">      
                        <div class="mb-3">
                            <label class="form-label">Số thứ nhất</label>
                            <input type="number" class="form-control" value = ' . ($result1) . '>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Số thứ hai</label>
                            <input type="number" class="form-control" value = ' . ($result2) . '>
                        </div>
                        <div class="mb-3">
                        <label class="form-label">Kết quả</label>
                        <input type="number" class="form-control" value = ' . ($result1 * $result2) . '>
                    </div>
                        <button type="submit" class="btn btn-primary" name="submit">Go Back</button>
                    </form>
                </div>
            </div>';
                break;
            case 'Divi':
                setcookie("ketqua", ".($result1 + $result2).", time() - 86400);
                echo '<div class="container">
                <h3 class="text-center">PHÉP TÍNH TRÊN HAI SỐ</h3>
                <h4 class="text-center">Đã chọn phép chia</h4>
                <div class="d-flex justify-content-center">
                    <form action="index.php" method="POST">      
                        <div class="mb-3">
                            <label class="form-label">Số thứ nhất</label>
                            <input type="number" class="form-control" value = ' . ($result1) . '>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Số thứ hai</label>
                            <input type="number" class="form-control" value = ' . ($result2) . '>
                        </div>
                        <div class="mb-3">
                        <label class="form-label">Kết quả</label>
                        <input type="number" class="form-control" value = ' . ($result1 / $result2) . '>
                    </div>
                        <button type="submit" class="btn btn-primary" name="submit">Go Back</button>
                    </form>
                </div>
            </div>';
                break;
        }
    }
    ?>
</body>

</html>