<?php
// src/Gyouth/Bundle/UserBundle/Entity/User.php

namespace Gyouth\Bundle\UserBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="gyouth_user")
 * @ORM\HasLifecycleCallbacks()
 */
class User extends BaseUser
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	public function setEmail($email)
	{
		parent::setEmail($email);
		$this->setUsername($email);
	}

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
		return $this->id;
    }
}