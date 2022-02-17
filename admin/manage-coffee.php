<?php include('partials/menu.php'); ?>
<div class="main-content">
    <div class="wrapper">
    <h1>Manage Coffee</h1>
    <br />  <br />  <br />
                <a href="<?php echo SITEURL; ?>admin/add-coffee.php" class="btn-primary">Add Coffee</a>
                <br />  <br />  <br />
                <?php
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                }
                
                ?>
                <table class="tbl-full">
                    <tr>
                        <th>ID</th>
                        <th>Size</th>
                        <th>Cost</th>
                       
                    </tr>
                    <?php 
                        $sql2 = "SELECT * FROM coffee";
                        $res2 = mysqli_query($conn, $sql2);
                        if($res2==TRUE){
                            $count = mysqli_num_rows($res2);
                            if($count>0){
                                while($rows=mysqli_fetch_assoc($res2)){
                                $CoffeeID=$rows['CoffeeID'];
                                $Type=$rows['Type'];
                                $Cost=$rows['Cost'];
                                ?>
                    <tr>
                    <tr>
                                    <td><?php echo $CoffeeID;?></td>
                                    <td><?php echo $Type;?></td>
                                     <td><?php echo $Cost;?></td>
                                     <td>
                                       <a href="#" class="btn-secondary">Update Coffee</a>
                                          <a href="#" class="btn-third">Delete Coffee</a>

                                    </td>
                                    </tr>
                                <?php
                            }}
                            else{

                            }
                        }

                    ?>


                    
                </table>
    </div>
    
</div>
<?php include('partials/footer.php'); ?>