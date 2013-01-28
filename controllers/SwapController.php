<?php

/**
 * SwapController class file
 * @author Mark Joyner <mark@joyner.com>
 * @copyright (c) 2013, Mark Joyner
 * @license http://opensource.org/licenses/bsd-license.php BSD Licence
 * @version 1.0
 */

/**
 * Base class for swapping users
 */
class SwapController extends Controller {

    /**
     * Authenticates and logs in the new user
     * @param string $username
     */
    public function actionSwap($username) {

        $_identity = new swapUserIdentity($username);
        $_identity->authenticate();

        Yii::app()->user->login($_identity);
        $this->redirect(Yii::app()->homeUrl);
    }

    /**
     * Displays the menu of swap users
     */
    public function actionMenu() {
        $this->render('yiiQuickSwap.views.menu');
    }

}