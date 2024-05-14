<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

/** @var yii\web\View $this */

$this->title = 'でかいいぬ';
?>

<div class="site-index">
<ul>
    <li><?= Html::a('slot', ['slot/index']) ?></li>
    <li><?= Html::a('users/create', ['users/create/index']) ?></li>
</ul>
<?= Html::button('PWAインストール', ['class' => 'btn btn-primary', 'id' => 'pwaInstall']); ?>

</div>

<script>
if ('serviceWorker' in navigator) {
    window.addEventListener("load", function() {
        navigator.serviceWorker.register('/sw.js');
    });
}
</script>
