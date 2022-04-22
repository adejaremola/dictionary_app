<?php
    $dashboard_active = 'active';
    $title = 'Dashboard';
    require('header.php');
?>

    <div class="container-fluid">

        <div class="row">

            <h2>Word Index</h2>

            <?php
                include('sidenav.php');
            ?>


            <div class="col-md-10 main">

                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Word</th>
                            <th>Meaning</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                    
                    </tbody>
                </table>

            </div>
        </div>

    </div>
    <script src="js_scripts/get_wordindex.js"></script>
    <script src="js_scripts/delete_word.js"></script>
<?php
    require('footer.php');
?>