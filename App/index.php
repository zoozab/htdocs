<?php
require_once 'Model.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $model = new Model;
    $model->sell(45000, 'cpu');
    $model->sell(50000, 'RAM');
    echo '<pre>';
    print_r($model->getSells());
    echo '</pre>';
    ?>
</body>
</html>