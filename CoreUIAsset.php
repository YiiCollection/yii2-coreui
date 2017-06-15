<?php
/**
 * Created by PhpStorm.
 * User: dmytrodmytruk
 * Date: 13.06.17
 * Time: 14:26
 */

namespace ddmytruk\coreui;

use yii\web\AssetBundle;

class CoreUIAsset extends AssetBundle
{
    public $sourcePath = '@vendor/ddmytruk/yii2-coreui';
    public $css = [
        'css/font-awesome.min.css',
        'css/simple-line-icons.css',
        'css/style.css',
    ];
    public $js = [

    ];
}