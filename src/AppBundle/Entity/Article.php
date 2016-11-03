<?php

namespace AppBundle\Entity;



class Article 
{

            private $id;
            private $title;
            private $contetnt;
            private $created;
            
            
        /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContetnt()
    {
        return $this->contetnt;
    }

    /**
     * @param mixed $contetnt
     */
    public function setContetnt($contetnt)
    {
        $this->contetnt = $contetnt;
        
        
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
        
        return $this;
    }
            

}