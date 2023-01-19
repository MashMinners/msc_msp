<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>ПМУ в КМУ</title>
</head>
<!--<style><?php //include $css; ?></style>-->
<body class="app">
    <header class="app-header"></header>
        <div class="app-content">
            <form method="get">
                <label for="fname">Введите код медицинской услуги</label><br>
                <input type="text" name="code"><br>
                <button>Получить</button>
            </form>
            <?php include $template;?>
        </div>
    <footer class="app-footer"></footer>
</body>
</html>