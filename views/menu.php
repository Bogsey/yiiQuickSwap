<?php
/* @var $this Controller */

$users = Yii::app()->yiiQuickSwap->users;
$menu = array();

foreach ($users as $user) {
    $menu[] = array('label' => $user, 'url' => array('/yiiQuickSwap/swap/swap', 'username' => $user));
}

$this->beginWidget('zii.widgets.CPortlet', array(
    'title' => 'Quick Swap User'
));
$this->widget('zii.widgets.CMenu', array(
    'items' => $menu,
    'htmlOptions' => array('class' => 'operations')
));
$this->endWidget();
?>
