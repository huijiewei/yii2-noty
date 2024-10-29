<?php

namespace huijiewei\noty;

use yii\web\AssetBundle;

class NotyAsset extends AssetBundle
{
    public $sourcePath = '@huijiewei/noty/assets';

    public $js = [
        'jquery.noty.min.js',
        'jquery.noty.bootstrap.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
