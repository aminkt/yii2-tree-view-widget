<?php
namespace aminkt\widgets\tree;
use yii\base\Widget;

class TreeView extends Widget
{
    public $data = null;

    public $edit = null;

    public $remove = null;

    public $root_icon = null;

    public $leaf_icon = null;

    public $child_icon = null;

    public function init(){
        if($this->edit == null)
            $this->edit = 'myEditLink.com';

        if($this->remove == null)
            $this->remove = 'myRemoveLink.com';

        if($this->root_icon == null)
            $this->root_icon = '<i class="fa fa-folder-open"></i>';

        if($this->leaf_icon == null)
            $this->leaf_icon = '<i class="glyphicon glyphicon-file"></i>';

        if($this->child_icon == null)
            $this->child_icon = '<i class="fa fa-minus-circle"></i>';

        Assets::register($this->view);

    }

    public function addChild(){

    }

    public function run(){
        if($this->data != null)
            return $this->render('TreeView', [
                'data'=>$this->data,
                'edit'=>$this->edit,
                'remove'=>$this->remove,
                'root_icon'=>$this->root_icon,
                'leaf_icon'=>$this->leaf_icon,
                'child_icon'=>$this->child_icon
            ]);
        else
            return null;
    }
}