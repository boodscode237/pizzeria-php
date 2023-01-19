<?php

    session_start();
    
    if ($_SERVER['QUERY_STRING'] == 'noname'){
        unset($_SESSION['name']);
    }

    $name = $_SESSION['name'] ?? 'Guest';

    // get cookie
    $gender = $_COOKIE['gender'] ?? 'Unknown';

?>


<head>
    <title>Dona Pizza</title>
    <!-- Compiled and minified CSS -->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
        .brand{
            background: #44547e !important;
        }
        .brand-text{
            color: #569096 !important;
        }
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
        .pizza {
            width: 100px;
            margin: 40px auto -30px;
            display: block;
            position: relative;
            top: -30px;
        }

        .pizza {
            -webkit-transition: all 1s ease; /* Safari and Chrome */
            -moz-transition: all 1s ease; /* Firefox */
            -ms-transition: all 1s ease; /* IE 9 */
            -o-transition: all 1s ease; /* Opera */
            transition: all 1s ease;
        }
        .pizza:hover {
            -webkit-transform:scale(1.5); /* Safari and Chrome */
            -moz-transform:scale(1.5); /* Firefox */
            -ms-transform:scale(1.5); /* IE 9 */
            -o-transform:scale(1.5); /* Opera */
            transform:scale(1.5);
        }
    </style>
</head>
<body class="grey lighten-4">
<nav class="white z-depth-0">
    <div class="container">
        <a href="/index.php" class="brand-logo brand-text">Dona Pizza</a>
        <ul id="nav-mobile" class="right hide-on-small-and-down">
            <li class="white-text btn brand teal lighten-2">
                <span>Hello <?php echo htmlspecialchars($name); ?></span>
                <span>(<?php echo htmlspecialchars($gender); ?>)</span>
            </li>
            <li><a href="/add.php" class="btn brand z-depth-0">Add a Pizza</a></li>
        </ul>
    </div>
</nav>
