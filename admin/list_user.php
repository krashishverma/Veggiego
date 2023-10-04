<h3 class="text-center text-success">All Users</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr class="text-center">
            <th>SI no</th>
            <th>Ctaegory Tittle</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-light">
        <?php
        include('../config.php');
        $select_cat="select * from users";
        $result=mysqli_query($conn,$select_cat);
        $num=0;
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['username'];
            $num++;
        ?>
        <tr class="text-center">
            <td> <?php echo $num; ?></td>
        <td> <?php  echo $name;?></td>
    </tr>
    <?php
    }
    ?>
    </tbody>
</table>