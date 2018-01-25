<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order a pet</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h3>Order a Pet</h3>
    <form action="" method="post">
        <div class="row">
        <div class="col-4">
            <label>Pet Name</label>
            <input type="text" class="form-control" name="petname" value="">
        </div>

        <div class="col-4">
            <label>Pet Color</label>
            <select class="form-control" name="petcolor">
                <option>--Select--</option>
                <?php foreach (($colors?:[]) as $colorOption): ?>
                    <option><?= ($colorOption) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-4">
            <label>Pet Type</label>
            <input type="text" class="form-control" name="pettype" value="">
        </div>
        </div>
    </form>
</div>
</body>
</html>