<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

/** @var yii\web\View $this */

$this->title = 'Slot Application';
?>
<div class="site-index">
    <input type="button" value="stop" id="stop"/>
    <ul id="slot-results"></ul>
    <p id="result-message"></p>
    <?= Html::img('@web/images/test.png', ['alt' => 'Test Image']) ?>
    <script>
        function clickButton() {
            var slotResults = document.getElementById("slot-results");
            slotResults.innerHTML = "";

            var random1 = Math.floor(Math.random() * 5);
            var random2 = Math.floor(Math.random() * 5);
            var random3 = Math.floor(Math.random() * 5);
            let contents = [random1, random2, random3];

            contents.forEach(function(element) {
                var li = document.createElement("li");
                var text = document.createTextNode(element);
                li.appendChild(text);
                document.getElementById("slot-results").appendChild(li);
            });

            var resultMessage = document.getElementById("result-message");
            resultMessage.innerHTML = "";
            if (contents[0] === contents[1] && contents[1] === contents[2]) {
                    resultMessage.innerHTML = 'あたり';
                }
        };

        let button = document.getElementById('stop');
        button.onclick = clickButton;
    </script>
</div>
