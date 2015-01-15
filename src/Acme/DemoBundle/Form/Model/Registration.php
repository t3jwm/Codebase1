<?php // src/Acme/AccountBundle/Form/Model/Registration.php
namespace Acme\DemoBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;

use Acme\DemoBundle\Entity\User;

class Registration
{
    /**
     * @Assert\Type(type="Acme\DemoBundle\Entity\User")
     * @Assert\Valid()
     */
    protected $user;

    /**
     * @Assert\NotBlank()
     * @Assert\True()
     */
    protected $termsAccepted;

    public function setUser(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }
    
    public function getTermsAccepted()
    {
    	return $this->termsAccepted;
    }
    
    public function setTermsAccepted($termsAccepted)
    {
    	$this->termsAccepted = (Boolean) $termsAccepted;
    }

   
}