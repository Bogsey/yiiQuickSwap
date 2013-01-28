<?php

/**
 * swapUserIdentity class file
 * @author Mark Joyner <mark@joyner.com>
 * @copyright (c) 2013, Mark Joyner
 * @license http://opensource.org/licenses/bsd-license.php BSD Licence
 * @version 1.0
 */

/**
 * UserIdenity class allowing login without password
 */
class swapUserIdentity extends CUserIdentity {

    private $_isSwap = false;
    private $_id;

    /**
     * Class constructor
     * 
     * @param type $username username
     * @param type $password optional
     */
    public function __construct($username, $password = NULL) {
        if (isset($password)) {
            parent::__construct($username, $password);
        } else {
            $this->username = $username;
            $this->_isSwap = TRUE;
        }
    }

    /**
     * Gets the userId
     * @return int
     */
    public function getId() {
        return $this->_id;
    }

    /**
     * Overrides the authenticate method
     * 
     * Checks that it is for a swap then populates last_login
     * Doesn't check password as it is not required for a swap.
     * 
     * @return type
     */
    public function authenticate() {
        $user = User::model()->findByAttributes(array('username' => $this->username));

        if ($this->_isSwap) {
            $this->_id = $user->id;
            if (null === $user->last_login_time) {
                $lastlogin = time();
            } else {
                $lastlogin = strtotime($user->last_login_time);
            }
            $this->setState('lastLoginTime', $lastlogin);
            $this->errorCode = self::ERROR_NONE;
            return $this->errorCode;
        }
    }

}