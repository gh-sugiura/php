<?php

require_once("config/status_codes.php");
$random = array_rand($status_codes, 4);

foreach ($random as $index) {
    $options[] = $status_codes[$index];
}

$question = $options[mt_rand(0, 3)];
// $question = $options[array_rand($options,1)];

?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header class="header">
        <a href="/php04/index.php" class="header__logo">Status Code Quiz</a>
    </header>

    <main>
        <div class="quiz">
            <div class="quiz-box">
                <p class="quiz_text">
                    Q. 以下の内容に当てはまるステータスコードを選択して下さい。
                </p>
                <p class="quiz_main">
                    <?php echo $question["description"] ?>
                </p>
            </div>

            <form action="result.php" class="form" method="post">
                <input type="hidden" name="answer_code" value=" <?php echo $question['code'] ?>">
                <div class="form__item">
                    <?php foreach ($options as $option): ?>
                        <div class="form__group">
                            <input
                                class="form__radio"
                                id="<?php echo $option["code"] ?>"
                                type="radio"
                                name="option"
                                value="<?php echo $option["code"] ?>">
                            <label class="form__label" for="<?php echo $option["code"] ?>">
                                <?php echo $option["code"] ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="form__button-wrapper">
                    <button class="form__button" type="submit">
                        回答
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>