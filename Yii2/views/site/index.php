<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

        <li>
            <?= Html::a('link', ['slot/index']) ?>
        </li>

</div>
