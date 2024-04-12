<?php

require_once("config/status_codes.php");
$answer_code = htmlspecialchars($_POST["answer_code"], ENT_QUOTES);
$option = htmlspecialchars($_POST["option"], ENT_QUOTES);

if (!$option) {
    header("Location: index.php");
}
foreach ($status_codes as $status_code) {
    if ($status_code["code"] == $answer_code) {
        $code = $status_code["code"];
        $description = $status_code["description"];
    }
}
$result = $option == $code;
// $exist = isset($result);

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>

<body>
    <header class="header">
        <a href="/php04/index.php" class="header__logo">Status Code Quiz</a>
    </header>

    <main>
        <div class="result-box">
            <div class="result">
                <?php if ($result): ?>
                    <h2 class="result__text--ture">○正解</h2>
                <?php else: ?>
                    <h2 class="result__text--false">×不正解</h2>
                <?php endif; ?>
            </div>
            <div class="answer">
                <table class="table" border="2">
                    <tr class="table-row">
                        <th class="table-header">ステータスコード</th>
                        <td class="table-text">
                            <?php echo $code ?>
                        </td>
                    </tr>
                    <tr class="table-row">
                        <th class="table-header">説明</th>
                        <td class="table-text">
                            <?php echo $description ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>

</html>