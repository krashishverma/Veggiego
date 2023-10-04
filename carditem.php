
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>card items</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center">shoping cart date</h2>
                    <?php
                    include('./config.php');
                    $query= "SELECT * FROM items";
                    $stmt = mysqli_prepare($conn, $query);

                    while ($row = mysqli_fetch_array($stmt)){?>
                    <div class="col-md-4">
                    <form method="get" action="carditem.php?id=<?=$row['id'] ?>">
                    <img src="images/<?= $row['image'];?> "style='height:150px;'>
                        <h2><?= $row['name']; ?></h2>
                        <h2><?= $row['price']; ?></h2>
                    </form>
                    <?php }
                    ?>
                    
    </body>
</html>