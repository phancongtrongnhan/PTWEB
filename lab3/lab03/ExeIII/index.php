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
    <div class="container">
        <h3 class="text-center">PHÉP TÍNH TRÊN HAI SỐ</h3>
        <div class="d-flex justify-content-center">

            <form action="calc.php" method="POST">
                <select class="custom-select" name="op">
                    <option>Add</option>
                    <option>Sub</option>
                    <option>Mul</option>
                    <option>Divi</option>
                </select>

                <div class="mb-3">
                    <label class="form-label">Số thứ nhất</label>
                    <input type="number" class="form-control" name="num1">
                </div>
                <div class="mb-3">
                    <label class="form-label">Số thứ hai</label>
                    <input type="number" class="form-control" name="num2">
                </div>
                <button type="submit" class="btn btn-dark" name="submit">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>