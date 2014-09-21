<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\tagsinput;

use Yii;

/**
 * 
 * @author Nghia Nguyen <yiidevelop@hotmail.com>
 * @since 2.0
 */
class TagsInputAsset extends \yii\web\AssetBundle {

    public $sourcePath = '@bower/bootstrap-tagsinput';
    public $js = ['dist/bootstrap-tagsinput.js'];
    public $css = ['dist/bootstrap-tagsinput.css'];
    public $depends = ['yii\web\JqueryAsset'];

}
