<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="groups")
  */
class Group 
{

     /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

   
    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    protected $name;

      
	/**
	 * @var \Doctrine\Common\Collections\Collection|User[]
	 *
     * @ORM\ManyToMany(targetEntity="User", mappedBy="groups")
	 @ORM\JoinTable(name="UserGroups",
     *      joinColumns={@ORM\JoinColumn(name="usergroupID", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="jid", referencedColumnName="id")}
     *      ) 
     **/
    private $users;


   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

  


}
