<h3 class="text-center text-success">Categories</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr class="text-center">
            <th>SI no</th>
            <th>Ctaegory Tittle</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-light">
        <?php
        include('../config.php');
        $select_cat="select * from categories";
        $result=mysqli_query($conn,$select_cat);
        $num=0;
        while($row=mysqli_fetch_assoc($result)){
            $cat_id=$row['category_id'];
            $cat_tittle=$row['category_tittle'];
            $num++;
        ?>
        <tr class="text-center">
            <td> <?php echo $num; ?></td>
        <td> <?php  echo $cat_tittle;?></td>
        <td>
        <button class="btn btn-danger"><a href="index.php?delete_cat=  <?php  echo $cat_id ?>" class="text-light">Delete</a></button>
        </td>

    </tr>
    <?php
    }
    ?>
    </tbody>
</table>