<!DOCTYPE html>

<html>

    <head>

        <!-- http://getbootstrap.com/ -->
        <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="/css/styles.css"/>
        <style>
          a {color: #b21fe0;}
          a:hover {color: #4485FF;}
          
        </style> 
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php if (isset($title)): ?>
            <title>Emotionally Empowered <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Emotionally Empowered</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>

        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <div>
                    <a href="/"><img alt="Emotionally Empowered" src="/img/Emotionally Empowered Logo1 smaller.png"/></a>
                </div>
                <?php if (!empty($_SESSION["id"])): ?>
                    <ul class="nav nav-pills">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="resources.php">Resources</a></li>
                        <li><a href="history.php">History</a></li>
                        <li><a href="chart_index.php">My Chart</a></li>
                        <li><a href="my_account_options.php">My Account</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
                <?php endif ?>
            </div>

            <div id="middle">
