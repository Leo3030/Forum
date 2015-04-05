<?php

namespace Forum\Bundle\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAnswerMapping
 */
class UserAnswerMapping
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $uId;

    /**
     * @var integer
     */
    private $aId;


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
     * Set uId
     *
     * @param integer $uId
     * @return UserAnswerMapping
     */
    public function setUId($uId)
    {
        $this->uId = $uId;

        return $this;
    }

    /**
     * Get uId
     *
     * @return integer 
     */
    public function getUId()
    {
        return $this->uId;
    }

    /**
     * Set aId
     *
     * @param integer $aId
     * @return UserAnswerMapping
     */
    public function setAId($aId)
    {
        $this->aId = $aId;

        return $this;
    }

    /**
     * Get aId
     *
     * @return integer 
     */
    public function getAId()
    {
        return $this->aId;
    }
}
