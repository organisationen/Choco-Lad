<head>
        <title><?= $title?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="<?= $HostAddress .'/resources/multimedia/images/favicon.ico'?>" type="icon/x-icon" sizes="100x100">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?=  $HostAddress .'/resources/scripts/konami.js'?>"></script>
        <style>
        /* Remove the navbar's default rounded borders and increase the bottom margin */ 
        .navbar {
        border-radius: 10px;
        margin:  1% 1% 50px 1%;
        background-color: #2f2f2f;
        box-shadow: 0px 20px 40px rgba(0,0,0,0.4);
        border: 0px;
        }

        /* Remove the jumbotron's default bottom margin */ 
        .jumbotron {
        /*margin-bottom: 0;*/
        }

        /* Add a gray background color and some padding to the footer */
        footer {
        background-color: #f2f2f2;
        padding: 25px;
        border-radius: 10px;
        margin: 50px 1% 1% 1%;
        box-shadow: 0px 20px 40px rgba(0,0,0,0.4);
        }

        /*bakgrundsbild m.m.*/
        body {
        background-image: url("<?= $HostAddress .'/resources/multimedia/images/pattern.png'?>");
        background-repeat: repeat;
        }
        /*Byt färg på förgrunden*/
        #main {
        background-color: darkgray;
        border-radius: 10px;
        display: flex;
        align-content: flex-start;
        flex-wrap: wrap;
        padding-top: 25px;
        box-shadow: 0px 20px 40px rgba(0,0,0,0.4);
        }
        .flex-row {
        display: flex;
        flex-wrap: wrap;
        }
        .flex-row > [class*='col-'] {
        display: flex;
        flex-direction: column;
        flex-basis: 100%;
        width: 200px;
        /*justify-content: center;*/
        }

        .flex-row .thumbnail,
        .flex-row .caption {
        flex-direction: column;
        display: flex;
        flex: 1 0 auto;
        height: auto;
        position: relative;
        }
        .flex-text {
        flex-grow: 1;
        }
        .flex-row img {
        min-width: 0;
        width: 100%;
        }
        </style>
    </head>
    