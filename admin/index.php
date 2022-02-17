<?php include('partials/menu.php'); ?>
        <!-- Main Content Section --> 
        <div class="main-content">
            <div class="wrapper">
                <h1>DAHSBOARD</h1>
                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br>
                    Categories
                </div>
                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br>
                    Categories
                </div>
                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br>
                    Categories
                </div>
                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br>
                    Categories
                </div>
                <div class="clearfix"></div>

                <div class="form text-center">
                    <form class="newcoffee">
                       <!-- <label for="cname"> Coffee Name:</label>
                        <input type="text" id="cname" name="cname"><br>
                        <label for="cid"> Coffee ID:</label>
                        <input type="text" id="cid" name="cid"><br>
                        <label for="csize"> Size:</label>
                        <input type="text" id="csize" name="csize"><br>
                        <label for="cprice"> Price:</label>
                        <input type="text" id="cprice" name="cprice"><br> -->
                        <fieldset>
                             <legend>New Coffee Details</legend>
                             <div class="order-label">Coffee Name</div>
                             <input type="text" name="full-name" placeholder="E.g. Cappuccino" class="input-responsive" required>

                             <div class="order-label">Coffee ID</div>
                             <input type="text" name="id" placeholder="E.g. 121843xxx" class="input-responsive" required>

                            <div class="order-label">Size</div>
                            <input type="text" name="size" placeholder="E.g. grande" class="input-responsive" required>

                            <div class="order-label">Price</div>
                             <textarea name="price" rows="1" placeholder="E.g. $2.1" class="input-responsive" required></textarea>
                                <br>
                                <br>
                            <input type="submit" name="submit" value="Add new coffee" class="btn btn-primary">
                            <br>
                         </fieldset>
                    </form>
                </div>
            </div>
        </div>
<?php include("partials/footer.php") ?>