<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@bower/';
    public $css = [
                    'admin-lte/plugins/fontawesome-free/css/all.min.css',
                    'admin-lte/dist/css/adminlte.min.css',
                    'admin-lte/dist/css/ionicons.min.css',
                    'admin-lte/dist/css/google.css',

                  ];
    public $js = [
                    //'admin-lte/js/AdminLTE/app.js',
                    'admin-lte/plugins/jquery/jquery.min.js',
                    'admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js',
                    'admin-lte/dist/js/adminlte.min.js',
                    'admin-lte/dist/js/demo.js'

                 ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
        //'yii\bootstrap\BootstrapPluginAsset',
    ];
}
