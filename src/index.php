<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>IS 218 | Mini Project 1</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>

    <body>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
            <a class="navbar-brand" href="https://github.com/mnichols17/218_testing">IS 218 Project 1</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="https://mikenichols.xyz">Michael Nichols</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nolan Custodio</a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="container">
            <div>
                <table class="table table-striped table-bordered">
                    <?php
                        require("../src/File.php");
                        require("../src/CreateTable.php");
                        $file = new File();
                        //$table = new CreateTable();

                        $data = ($file::readCSVtoArray("../data/data.csv"));
                        echo(CreateTable::create_HTML_Table($data[0], $data[1]));
                    ?>
                </table>
            </div>
        </main>

    </body>
</html>
