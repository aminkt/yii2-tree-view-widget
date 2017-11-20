<?php
use yii\helpers\Html;

function createNode($level, $arr, $rem, $ed, $r_i, $l_i, $c_i){
echo '<ul>';
    foreach($arr as $key=>$value){
        $icon = $c_i;
        if($level == 0)
            $icon = $r_i;
        else if (!array_key_exists('parent', $value))
            $icon = $l_i;

        echo '<li> <span>'.$icon.' '.$value["name"].'</span> <!--Buttons-->
            <div class="btn-group btn-group-xs">';
                $rem['id']=$value['id'];
                echo Html::a('<i class="fa fa-times-circle"></i>', $rem, [
                    'class' => 'btn btn-danger tooltiped',
                    'data' => [
                        'toggle' => 'tooltip',
                        'placement' => 'top',
                        'original-title' => 'حذف',
                        //'method' => 'post',
                        'confirm'=>'میخواهید این آیتم را حذف کنید؟'
                    ],
                    'type'=>'button'
                ]) ;
                $ed['id']=$value['id'];
                echo Html::a('<i class="fa fa-edit"></i> ', $ed, [
                    'class' => 'btn btn-info tooltiped',
                    'data' => [
                        'toggle' => 'tooltip',
                        'placement' => 'top',
                        'original-title' => 'ویرایش',
                        //'method' => 'post',
                    ],
                    'type'=>'button'
                ]);
        echo '</div> <!--/Buttons-->';
            if(array_key_exists('parent', $value)) {
                createNode($level + 1, $value['parent'], $rem, $ed, $r_i, $l_i, $c_i);
            }
        echo '</li>';
    }
echo '</ul>';
}
?>
<div class="tree well margin-0px">
    <?php createNode(0, $data, $remove, $edit, $root_icon, $leaf_icon, $child_icon); ?>
</div>