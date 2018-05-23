<head>
  <title><?= $title?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?= $_SERVER['DOCUMENT_ROOT'] . '/resources/multimedia/images/favicon.ico'; ?>" type="icon/ico" sizes="100x100">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
        border-radius: 10px;
        margin:  1% 1% 50px 1%;
        background-color: #2f2f2f;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
        background-color: #f2f2f2;
        padding: 25px;
        border-radius: 10px;
        margin: 50px 1% 1% 1%;
    }
    
    /*bakgrundsbild m.m.*/
      body {
          background-image: url("http://privat.bahnhof.se/wb361158/burk/pattern.png");
          background-repeat: repeat;
      }
    /*Byt färg på förgrunden*/
    #main {
        background-color: darkgray;
        border-radius: 10px;
    }
  </style>
</head>