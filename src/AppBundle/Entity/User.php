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
    protected $streetaddress;
	
	/**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    protected $streetnumber;
	
	/**
     * @ORM\Column(type="string", length=255)
     */
    protected $city;
	
	/**
     * @ORM\Column(type="decimal", precision=8, scale=6)
     */
   
    protected $lat;
	/**
     * @ORM\Column(type="decimal", precision=8, scale=6)
     */
    protected $lng;
	
	/**
     * @ORM\Column(type="string", length=255,nullable=true)
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

   

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set URL
     *
     * @param string $uRL
     * @return User
     */
    public function setURL($uRL)
    {
        $this->URL = $uRL;

        return $this;
    }

    /**
     * Get URL
     *
     * @return string 
     */
    public function getURL()
    {
        return $this->URL;
    }

   

    /**
     * Set lat
     *
     * @param string $lat
     * @return User
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return string 
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lng
     *
     * @param string $lng
     * @return User
     */
    public function setLng($lng)
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Get lng
     *
     * @return string 
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Set imageUrl
     *
     * @param string $imageUrl
     * @return User
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * Get imageUrl
     *
     * @return string 
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * Add groups
     *
     * @param \AppBundle\Entity\Group $groups
     * @return User
     */
    public function addGroup(\AppBundle\Entity\Group $groups)
    {
        $this->groups[] = $groups;

        return $this;
    }

    /**
     * Remove groups
     *
     * @param \AppBundle\Entity\Group $groups
     */
    public function removeGroup(\AppBundle\Entity\Group $groups)
    {
        $this->groups->removeElement($groups);
    }

    /**
     * Get groups
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Add products
     *
     * @param \AppBundle\Entity\Product $products
     * @return User
     */
    public function addProduct(\AppBundle\Entity\Product $products)
    {
        $this->products[] = $products;

        return $this;
    }

    /**
     * Remove products
     *
     * @param \AppBundle\Entity\Product $products
     */
    public function removeProduct(\AppBundle\Entity\Product $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set streetaddress
     *
     * @param string $streetaddress
     * @return User
     */
    public function setStreetaddress($streetaddress)
    {
        $this->streetaddress = $streetaddress;

        return $this;
    }

    /**
     * Get streetaddress
     *
     * @return string 
     */
    public function getStreetaddress()
    {
        return $this->streetaddress;
    }

    /**
     * Set streetnumber
     *
     * @param string $streetnumber
     * @return User
     */
    public function setStreetnumber($streetnumber)
    {
        $this->streetnumber = $streetnumber;

        return $this;
    }

    /**
     * Get streetnumber
     *
     * @return string 
     */
    public function getStreetnumber()
    {
        return $this->streetnumber;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }
}
