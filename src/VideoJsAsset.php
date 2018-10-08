<?php
/**
 * @link      https://github.com/wbraganca/yii2-videojs-widget
 * @copyright Copyright (c) 2014 Wanderson Bragança
 * @license   https://github.com/wbraganca/yii2-videojs-widget/blob/master/LICENSE
 */

namespace wbraganca\videojs;

/**
 * Asset bundle for videojs Widget
 *
 * @author Wanderson Bragança <wanderson.wbc@gmail.com>
 */
class VideoJsAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/video.js/build';

    public $css = [
        'http://vjs.zencdn.net/7.0/video-js.min.css',
    ];

    public $js = [
        'http://vjs.zencdn.net/7.0/video.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
