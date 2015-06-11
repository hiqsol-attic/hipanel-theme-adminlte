<?php

use hiqdev\assets\hipanel\HipanelAsset;

$asset = HipanelAsset::register($this);

$logo = Yii::$app->assetManager->getAssetUrl($asset, 'images/logo.png');

?>

.logo-lg {
    background: url(<?= $logo ?>) 5px 2px no-repeat;
}

.logo-mini {
    background: url(<?= $logo ?>) 7px 2px no-repeat;
}

