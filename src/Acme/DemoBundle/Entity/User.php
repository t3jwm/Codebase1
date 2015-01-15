<?php // src/Acme/AccountBundle/Entity/User.php
namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 * @UniqueEntity(fields="email", message="Email already taken")
 * @UniqueEntity(fields="userName", message="userName already taken")
 */
class User 
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     * @Assert\Length(max = 4096, min = 5)
     */
    protected $userName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(max = 4096, min = 4)
     */
    protected $password;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(max = 4096)
     */
    protected $lastName;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(max = 4096)
     */
    protected $firstName;
    
   /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(max = 4096)
     */
    protected $language;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(max = 4096)
     */
    protected $isAdmin;
 
   

    public function getId()
    {
        return $this->id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
    
    

    
    public function getUserName()
    {
    	return $this->userName;
    }
    
    public function setUserName($userName)
    {
    	$this->userName = $userName;
    }
    
    public function getFirstName()
    {
    	return $this->firstName;
    }
    
    public function setFirstName($firstName)
    {
    	$this->firstName = $firstName;
    }
    
    public function getLastName()
    {
    	return $this->lastName;
    }
    
    public function setLastName($lastName)
    {
    	$this->lastName = $lastName;
    }
    public function getLanguage()
    {
    	return $this->language;
    }
    
    public function setLanguage($language)
    {
    	$this->language = $language;
    }
    
    public function getIsAdmin()
    {
    	return $this->isAdmin;
    }
    
    public function setIsAdmin($isAdmin)
    {
    	$this->isAdmin = $isAdmin;
    }
    
    
}