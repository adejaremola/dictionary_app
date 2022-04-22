<?php
    $dashboard_active = 'active';
    $title = 'Add New Word';
    require('header.php');
?>
    <div class="container-fluid">

        <div class="row">

            <h2>Create New Word</h2>

            <?php
                include('sidenav.php');
            ?>

            <div class="col-md-10 main">

                <form class="form-horizontal" action="php_scripts/add_word.php" method="POST" id="myForm">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="word">Word:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="word" name="word">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="meaning">Meaning:</label>
                        <div class="col-sm-10">
                            <textarea name="meaning" id="meaning" rows="10" class="form-control"></textarea>
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
    <script src="js_scripts/create_word.js"></script>
<?php
    require('footer.php');
?>