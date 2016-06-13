<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
  */
class User
{
   

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * 
     */
    private $name;
	
	 /**
	  * 
 	 * @var \Doctrine\Common\Collections\Collection|Group[]	  
     * @ORM\ManyToMany(targetEntity="Group", inversedBy="users")
     * @ORM\JoinTable(name="UserGroups",
     *      joinColumns={@ORM\JoinColumn(name="pgID", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="jid", referencedColumnName="id")}
     *      )
     **/
    private $groups;
 	
	 
	/**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    protected $URL;
	
   
	/**
     * @ORM\Column(type="string", length=255)
     */
    protected $address;
	/**
     * @ORM\Column(type="decimal", precision=8, scale=6)
     */
   
    protected $lat;
	/**
     * @ORM\Column(type="decimal", precision=8, scale=6)
     */
    protected $lng;
	
	/**
     * @ORM\Column(type="string", length=255)
     */
    protected $imageUrl;
	
	  /**
      *@var \Doctrine\Common\Collections\Collection|Product[]	 
	  * 
	  *@ORM\OneToMany(targetEntity="Product", mappedBy="user")
      */
     protected $products;

	 
    public function __construct()
    {
        $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
		$this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }

   
}
