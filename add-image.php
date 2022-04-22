<?php
    $dashboard_active = 'active';
    $title = 'Upload New Image';
    require('header.php');
?>
    <div class="container-fluid">

        <div class="row">

            <h2>Upload New Image</h2>

            <?php
                include('sidenav.php');
            ?>

            <div class="col-md-10 main">

                <form class="form-horizontal" action="php_scripts/upload_image.php" method="POST" enctype="multipart/form-data" id="myForm">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="word">Image:</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success btn-lg">Submit</button>
                            <a href="dashboard.php" class="btn btn-warning btn-lg">Cancel</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
    <script src="js_scripts/upload_image.js"></script>
<?php
    require('footer.php');
?>