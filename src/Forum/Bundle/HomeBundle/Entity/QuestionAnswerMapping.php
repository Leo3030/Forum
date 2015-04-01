<?php

namespace Forum\Bundle\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionAnswerMapping
 */
class QuestionAnswerMapping
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $qId;

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
     * Set qId
     *
     * @param integer $qId
     * @return QuestionAnswerMapping
     */
    public function setQId($qId)
    {
        $this->qId = $qId;

        return $this;
    }

    /**
     * Get qId
     *
     * @return integer 
     */
    public function getQId()
    {
        return $this->qId;
    }

    /**
     * Set aId
     *
     * @param integer $aId
     * @return QuestionAnswerMapping
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
