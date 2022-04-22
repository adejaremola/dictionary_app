<?php
    session_start();
    $home_active = 'active';
    $title = 'Home';
    $response = '';
    require('header.php');
?>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-6">
                <h1>The Dictionary App</h1>
                <div class="row">
                    <div class="col-sm-6">
                        <form action="php_scripts/get_meaning.php" method="POST" id="myForm">
                            <div class="form-group">
                                <label for="word">Word:</label>
                                <input type="text" class="form-control" name="word" id="word" placeholder="Type in the word here:">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <form action="#">
                            <div class="form-group">
                                <label for="word">Meaning:</label>
                                <textarea class="form-control" id="res-area" placeholder="The meaning of the word shows here:" disabled></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="images/search.jpg" alt="">
            </div>
        </div>

    </div>
    <script src="js_scripts/get_meaning.js"></script>
<?php
require('footer.php');
?>