<?php

/**
 * YiiQuickSwapModule class file
 * @author Mark Joyner <mark@joyner.com>
 * @copyright (c) 2013, Mark Joyner
 * @license http://opensource.org/licenses/bsd-license.php BSD Licence
 * @version 1.0
 */

/**
 * Module to quickly swap between registered users of an application.
 */
class YiiQuickSwapModule extends CWebModule {

    /**
     * Initialise the module
     */
    public function init() {
        $this->setImport(array(
            'yiiQuickSwap.components.*',
            'yiiQuickSwap.controllers.*'
        ));
        parent::init();
    }

}