<?php

/**
 * yiiQuickSwap class file
 * @author Mark Joyner <mark@joyner.com>
 * @copyright (c) 2013, Mark Joyner
 * @license http://opensource.org/licenses/bsd-license.php BSD Licence
 * @version 1.0
 */

/**
 * Web module for quickly swapping between registered users to help speed up
 * application developement
 */
class yiiQuickSwap extends CApplicationComponent {

    /**
     *
     * @var array An array of usernames that will appear in the menu to allow
     * quick swapping
     */
    public $users;

    /**
     *
     * @var string Where to redirect to after logging in
     */
    public $redirect;

    /**
     * Initialise the module
     */
    public function init() {
        parent::init();
    }

}