<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../components/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../components/bootstrap/css/jumbotron-narrow.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <a  href="/" class="navbar-brand">WOLF</a>
            <ul class="nav navbar-nav pull-right">
                <li>
                    <li><a href="#">Регистрация</a></li>
                    <li><a href="#">Вход</a></li>
                </li>
            </ul>
        </nav>
        <section>
            <? include $filePath; ?>
        </section>
        <div class="footer">
              <p>WOLF © <?=date('Y')?></p>
        </div>
    </div>
</body>
</html>