<?php
    $dashboard_active = 'active';
    $title = 'Edit Word';
    require('header.php');
    require('php_scripts/edit_word.php');
    require_once('php_scripts/database.php');
    
    $wordId = $_GET["id"];     
    $wordArr = getWord($wordId, $conn);
    
?>
    <div class="container-fluid">

        <div class="row">

            <h2>Word Details</h2>

            <?php
                include('sidenav.php');
            ?>

            <div class="col-md-10 main">

                <form class="form-horizontal" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" id="myForm">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="word">Word:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="word" name="word" value="<?php echo $wordArr["word"]; ?>">
                            <input hidden type="text" id="id" name="id" value="<?php echo $wordId; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="meaning">Meaning:</label>
                        <div class="col-sm-10">
                            <textarea name="meaning" id="meaning" rows="10"><?php echo $wordArr["meaning"]; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success btn-lg">Submit</button>
                            <a href="/dashboard.php" class="btn btn-warning btn-lg">Cancel</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
    <script src="js_scripts/edit_word.js"></script>
<?php
    require('footer.php');
?>