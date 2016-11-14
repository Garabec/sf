<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="test")
 */


class Test 
{

/**
 * @ORM\Id
 * @ORM\GeneratedValue(strategy="AUTO")
 * @ORM\Column(type="integer")
 */
 
 private $id;
 
 /**
 * @ORM\Column(type="string", length=100)
 */
 
  private $title;
            
            
 /**
  * 
  * @ORM\Column(type="text")
  */
  private $contetnt;
            
            
            

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
     * Set title
     *
     * @param string $title
     *
     * @return Test
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set contetnt
     *
     * @param string $contetnt
     *
     * @return Test
     */
    public function setContetnt($contetnt)
    {
        $this->contetnt = $contetnt;

        return $this;
    }

    /**
     * Get contetnt
     *
     * @return string
     */
    public function getContetnt()
    {
        return $this->contetnt;
    }
}
