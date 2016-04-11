<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Acme\DemoBundle\Entity\User;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\MappedSuperclass
 * @ORM\Entity
 * @ORM\Table(name="file")
 * @ORM\HasLifecycleCallbacks 
 */
class File {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(type="integer")
     */
    public $userId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $name;

    /**
     * @ORM\Column(type="string", length=200)
     */
    public $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $root;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;

    /**
     * @ORM\Column(type="date", length=255)
     */
    public $date;

    function __construct() {
        $this->date = new \DateTime();
    }

    public function getId() {
        return $this->id;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getRoot() {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return $this->root;
    }

    public function setRoot($root) {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        $this->root = $root;
    }

    public function getPath() {
        return $this->path;
    }

    public function setPath($path) {
        return $this->path = $path;
    }

    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    public function getDate() {
        return $this->date;
    }

}
