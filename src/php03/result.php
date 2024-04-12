<?php

require_once("functions/search_city_time.php");
$tokyo = search_city_time("東京");
$city = htmlspecialchars($_GET["city"], ENT_QUOTES);
$comparison = search_city_time($city);

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>

<body>
    <header class="header">
        <a href="/php03/index.php" class="header__logo">World Clock</a>
    </header>

    <main>
        <div class="result__content">
            <div class="result-cards">
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img class="result-card__img" src="img/<?php echo $tokyo['img'] ?>" alt="国旗">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city">
                            <?php echo $tokyo['name'] ?>
                        </p>
                        <p class="result-card__time">
                            <?php echo $tokyo['time'] ?>
                        </p>
                    </div>
                </div>
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img class="result-card__img" src="img/<?php echo $comparison['img'] ?>" alt="国旗">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city">
                            <?php echo $comparison['name'] ?>
                        </p>
                        <p class="result-card__time">
                            <?php echo $comparison['time'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>