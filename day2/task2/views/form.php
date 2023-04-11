<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    <div class="container py-4 border my-5 mx-auto">
        <form method="post" action="index.php" class="w-75 mx-auto">
            <div class="mb-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo $name?>">
            </div>

            <div class="mb-4">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $email?>">
            </div>

            <div class="mb-4">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $phone?>">
            </div>

            <div class="mb-4">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="address" value="<?php echo $address?>">
            </div>


            <div class="mb-4 text-center mt-5">
                <input type="submit" class="btn btn-primary" name="action" value="prev">
                <input type="submit" class="btn btn-primary" name="action" value="next">
                <input type="submit" class="btn btn-primary" name="action" value="insert">
                <input type="submit" class="btn btn-primary" name="action" value="update">
                <input type="submit" class="btn btn-primary" name="action" value="delete">
                <input type="submit" class="btn btn-primary" name="action" value="clear">
            </div>
        </form>

    </div>

</body>

</html>