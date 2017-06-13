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

    public $basePath = '@vendor/ddmytruk/yii2-user';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
    ];
    public $js = [
    ];

}