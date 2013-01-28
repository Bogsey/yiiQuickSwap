<?php

/**
 * DefaultController class file
 * @author Mark Joyner <mark@joyner.com>
 * @copyright (c) 2013, Mark Joyner
 * @license http://opensource.org/licenses/bsd-license.php BSD Licence
 * @version 1.0
 */

/**
 * Base controller for the module, just redirects to the users menu
 */
class DefaultController extends Controller {

    /**
     * Logs out then redirects to display the menu of swap users
     */
    public function actionIndex() {
        Yii::app()->user->logout();

        $this->redirect(Yii::app()->createUrl('/yiiQuickSwap/swap/menu'));
    }

}