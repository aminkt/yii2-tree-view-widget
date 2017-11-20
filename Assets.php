<?php
namespace aminkt\widgets\tree;


use yii\web\AssetBundle;

class Assets extends AssetBundle
{
    function init()
    {
        $this->sourcePath = __DIR__.DIRECTORY_SEPARATOR.'assets';
        parent::init();
    }

    public $css = [
        'tree-style.css',
    ];

    public $js = [
        'tree.js'
    ];

//    public $jsOptions = ['position'=>View::POS_END];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}