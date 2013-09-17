<?php

namespace RootAccez\BasicBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="options")
 * @ORM\Entity(repositoryClass="RootAccez\BasicBundle\Entity\OptionsRepository")
 */
class Phone
{
    /**
     * @ORM\Id
     * @ORM\Column(name="option_id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="option_name",type="string", length=120)
     */
    protected $optionName;    
   
    /**
     * @ORM\Column(name="option_value",type="text")
     */
    protected $optionValue;    

    /**
     * @var datetime $created
     * 
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * @var datetime $updated
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    protected $updated;
    
    
    public function __construct()
    {

    }    

}