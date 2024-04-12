<?php

function judge($score1, $score2, $score3) {
    $pass = 140;
    $total = $score1 + $score2 + $score3;
    if ($total > $pass) {
        echo "合計点は" . $total . "点なので合格です";
    } else {
        echo "合計点は" . $total . "点なので不合格です";
    }
}

judge(50,50,50);

?>