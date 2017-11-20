How to install this module:

Step1: Add flowing line to require part of `composer.json` :
```
"aminkt/yii2-tree-view-widget": "*",
```

And after that run bellow command in your composer :
```
Composer update aminkt/yii2-tree-view-widget
```

Step2: Add flowing lines in your application view file:

```php
\aminkt\widgets\tree\TreeView::widget([
    'data'=>$treeData,
    'remove'=>['bot-actions/category-remove'],
    'edit'=>['bot-actions/categories'],
])
```