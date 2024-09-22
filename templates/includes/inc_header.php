
<!DOCTYPE html>
<html lang="es">
<head>
    <meta href="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X_UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title><?php echo isset($d->title) ? $d->title.' - '.get_sitename() : 'Bienvenido - '
    .get_sitename() ?></title>
    <style>
        .btn{
            border-radius: 2px;
        }
        .bg-gradient{
            background: rgba(38,38,38,1);
            background: -moz-linear-gradient(left, rgba(38,38,38,1) 0%, rgba(28,33,28,1) 100%);
            background: -webkit-gradient(left top, right top, color-stop(0%, rgba(38,38,38,1)),
            color-stop(100%, rgba(28,33,28,1)));
            background: -webkit-linear-gradient(left, rgba(38,38,38,1) 0%, rgba(28,33,28,1) 100%);
            background: -o-linear-gradient(left, rgba(38,38,38,1) 0%, rgba(28,33,28,1) 100%);
            background: -ms-linear-gradient(left, rgba(38,38,38,1) 0%, rgba(28,33,28,1) 100%);
            background: linear-gradient(to right, rgba(38,38,38,1) 0%, rgba(28,33,28,1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#262626',
            endColorstr='#1c211c',GradientType=1);

        }   

    </style>

</head>
<body class="<?php echo isset($d->bg) && $d->bg === 'dark' ? 'bg-dark' : 'bg-light' ?>" 
style="padding: 100px 0px;">
    <!-- Fin inc:header.php -->
