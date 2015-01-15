<?php
namespace Acme\DemoBundle\Modals;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Manoj
 */
class Login {
	private $userId;
    private $userName;
    private $password;
    private $firstName;
    
    public function getUserId() {
    	return $this->userId;
    }
    
    public function setUserId($userId) {
    	$this->userId = $userId;
    }
    public function getUserName() {
        return $this->userName;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
    
    public function getFirstName() {
    	return $this->firstName;
    }
    
    public function setFirstName($firstName) {
    	$this->firstName = $firstName;
    }


}

?>
