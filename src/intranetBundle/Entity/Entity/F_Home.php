<?php

namespace intranetBundle\Entity\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * F_Home
 */
class F_Home
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $date1;

    /**
     * @var string
     */
    private $reason;

    /**
     * @var int
     */
    private $wholeDay;


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
     * Set date1
     *
     * @param string $date1
     * @return F_Home
     */
    public function setDate1($date1)
    {
        $this->date1 = $date1;

        return $this;
    }

    /**
     * Get date1
     *
     * @return string 
     */
    public function getDate1()
    {
        return $this->date1;
    }

    /**
     * Set reason
     *
     * @param string $reason
     * @return F_Home
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return string 
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set wholeDay
     *
     * @param integer $wholeDay
     * @return F_Home
     */
    public function setWholeDay($wholeDay)
    {
        $this->wholeDay = $wholeDay;

        return $this;
    }

    /**
     * Get wholeDay
     *
     * @return integer 
     */
    public function getWholeDay()
    {
        return $this->wholeDay;
    }
}
