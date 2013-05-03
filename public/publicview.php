<!DOCTYPE html>
<html lang="en" ng-app="beercheck">
  <head>
    <meta charset="utf-8">
    <title>BeerCheck</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
    
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.6/angular.min.js"></script>
    <script>
      apikey = '<?php echo $request->param('api_key'); ?>';
    </script>
    <script src="js/app/app.js"></script>
    <script src="js/index.js"></script>
  </head>

  <body>
        
    <div ng-view></div>
        
  </body>
</html>