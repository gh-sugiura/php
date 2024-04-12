<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header class="header">
        <a href="/php03/index.php" class="header__logo">World Clock</a>
    </header>

    <main>
        <div class="search-from__heading">
            <h2 class="search-from__text">
                日本と世界の時間を比較
            </h2>
        </div>

        <form action="result.php" class="search-from" method="get">
            <select name="city" class="search-form__item">
                <option value="シドニー">シドニー</option>
                <option value="上海">上海</option>
                <option value="モスクワ">モスクワ</option>
                <option value="ロンドン">ロンドン</option>
                <option value="ヨハネスブルク">ヨハネスブルク</option>
                <option value="ニューヨーク">ニューヨーク</option>
            </select>
            <div class="search-form__button-out">
                <button class="search-form__button" type="submit">
                    検索
                </button>
            </div>
        </form>
    </main>
</body>

</html>