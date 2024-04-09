<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

        <?php foreach ($countries as $country): ?>
            <li>
                <?= Html::encode("{$country->code} ({$country->name})") ?>:
                <?= $country->population ?>
            </li>
        <?php endforeach; ?>

        <li>
            <?= Html::a('link', Url::toRoute('slot/index')) ?>
        </li>

</div>
