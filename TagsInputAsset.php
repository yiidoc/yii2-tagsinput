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
class TagsInputAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/yiidoc/yii2-tagsinput/assets';
    public $depends = ['yii\web\JqueryAsset'];

    public function init()
    {
        $this->js[] = YII_DEBUG ? 'js/jquery.tagsinput.js' : 'js/jquery.tagsinput.min.js';
        $this->css[] = YII_DEBUG ? 'css/tagsinput.css' : 'css/tagsinput.min.css';
    }

}