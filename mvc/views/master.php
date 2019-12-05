<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <sript type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></sript>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../public/js/main.js"></script>
    <style>
        .title{
            color: red;
        }
        
        .table{
            text-align: center;
        }
    </style>
</head>
<body align="center">
    <div>
    <?php require_once "./mvc/views/pages/".$data['pages'].".php" ?>
    
    
    </div>
    
</body>
</html>