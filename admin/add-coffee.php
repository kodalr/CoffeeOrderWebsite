<?php include('partials/menu.php');?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Coffee</h1>

        <br><br>
        
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>ID:</td>
                    <td>
                        <input type="text" name="title" placeholder="Id of the Coffee">
                    </td>
                </tr>
                <tr>
                    <td>Type:</td>
                    <td>
                        <input type="text" name="type" placeholder="Ex> grande">
                    </td>
                </tr>
                <tr>
                    <td>Cost:</td>
                    <td>
                        <input type="text" name="cost" placeholder="Ex> $2.3">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Coffee" class="btn-secondary">
                    </td>
                </tr>
        </table>

        </form>
        
         
    </div>
</div>
<?php include('partials/footer.php');?>
<?php 
    if(isset($_POST['submit']))
            {
            $CoffeeID = $_POST['CoffeeID'];
            $Type = $_POST['Type'];
            $Cost = $_POST['Cost'];

            $sql2 = "INSERT INTO coffee SET
            CoffeeID='$CoffeeID',
            Type='$Type',
            Cost='$Cost'
            ";
    
            $res2 = mysqli_query($conn, $sql2);
            if($res2==TRUE){
                $_SESSION['add'] = "Admin Added Successfully";
                  header("location:".SITEURL.'admin/manage-coffee.php'); 
                
            }
            else{
               
                    $_SESSION['add'] = "Admin Added Not Successfully";
                      header("location:".SITEURL.'admin/manage-coffee.php'); 
                
            }
        }
        ?>