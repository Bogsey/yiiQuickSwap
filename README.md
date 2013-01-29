yiiQuickSwap
============

A Yii module allowing the logged in user to be quickly changed to speed up application deveoplement

## Usage
### Setup
Unzip the module under ***protected/modules/yiiQuickSwap*** and add the following to your main config
```php
return array(
  'modules' => array(
    'yiiQuickSwap',
  ),
  'components' => array(
    'yiiQuickSwap' => array(
      'class' => 'yiiQuickSwap.components.yiiQuickSwap',
      'users' => array('user1', 'user2'), // a list of users that you want to swap between
      'redirect' => 'application.views.site.index', // where to redirect to after the swap
    ),
  ),
)
```
Use only on developement builds as this module allows anyone to log in as the users specified in the config file without
the need for a password.
### Using the module
Simply include the following code in the view file where ever you would like the menu to appear.
```php
<?php echo $this->renderPartial('yiiQuickSwap.views.menu'); ?>
```
or you can point your browser to ***http://your.site.address/index.php?r=yiiQuickSwap***
