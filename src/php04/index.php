<?php

require_once('config/status_codes.php');

$random_numbers = array_rand($status_codes, 4);


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a href="/php04" class="header__logo">
                Status Code Quiz
            </a>
        </div>
    </header>
    <main>
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください</p>
                <p class="question__text"></p>
            </div>
            <form action="result.php" class="quiz__form" method="$_POST">
                <input type="hidden" name="answer__code" value="">
                <div class="quiz-form__item">
                    <div class="quiz-form__group">
                        <input type="radio" class="quiz-form__radio" id="" name="option" value="">
                        <label for="" class="quiz-form__label"></label>
                    </div>
                </div>
                <div class="quiz-form__buttom">
                    <button class="quiz-form__button-submit" type="submit">
                        回答
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>