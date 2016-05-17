<?php

namespace intranetBundle\Entity\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * F_Hours
 */
class F_Hours
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $numHours;

    /**
     * @var string
     */
    private $date1;

    /**
     * @var string
     */
    private $date2;

    /**
     * @var int
     */
    private $status;

    /**
     * @var int
     */
    private $isread;

    /**
     * @var string
     */
    private $type;

      /**
       * @var string
       */
      private $send;




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
     * Set numHours
     *
     * @param integer $numHours
     * @return F_Hours
     */
    public function setNumHours($numHours)
    {
        $this->numHours = $numHours;

        return $this;
    }

    /**
     * Get numHours
     *
     * @return integer
     */
    public function getNumHours()
    {
        return $this->numHours;
    }

    /**
     * Set date1
     *
     * @param string $date1
     * @return F_Hours
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
     * Set date2
     *
     * @param string $date2
     * @return F_Hours
     */
    public function setDate2($date2)
    {
        $this->date2 = $date2;

        return $this;
    }

    /**
     * Get date2
     *
     * @return string
     */
    public function getDate2()
    {
        return $this->date2;
    }

    /**
     * Set status
     *
     * @param integer status
     * @return F_Hours
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set read
     *
     * @param integer read
     * @return F_Hours
     */
    public function setIsread($isread)
    {
        $this->isread = $isread;

        return $this;
    }

    /**
     * Get read
     *
     * @return integer
     */
    public function getIsread()
    {
        return $this->isread;
    }


    /**
     * Set type
     *
     * @param string type
     * @return F_Hours
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }



    /**
     * Set send
     *
     * @param string send
     * @return F_Hours
     */
    public function setSend($send)
    {
        $this->send = $send;

        return $this;
    }

    /**
     * Get send
     *
     * @return string
     */
    public function getSend()
    {
        return $this->send;
    }
}
