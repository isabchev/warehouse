<?php

namespace WarehouseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="WarehouseBundle\Repository\ScrewRepository")
 * @ORM\Table(name="screw")
 * @ORM\HasLifecycleCallbacks
 */
class Screw
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;
    
    /**
     * @ORM\ManyToOne(targetEntity="ScrewTypeEntity")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $type;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $length;
    
    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $diameter;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $number_of_screws;
    
    /**
     * @ORM\ManyToOne(targetEntity="ScrewQtyUnit")
     * @ORM\JoinColumn(name="qty_unit_id", referencedColumnName="id")
     */
    private $qty_unit;

    /**
     * @ORM\Column(type="integer")
     */
    private $qty;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;
    
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
     *
     * @return Screw
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
     * Set length
     *
     * @param int $length
     *
     * @return Screw
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return \int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set diameter
     *
     * @param integer $diameter
     *
     * @return Screw
     */
    public function setDiameter($diameter)
    {
        $this->diameter = $diameter;

        return $this;
    }

    /**
     * Get diameter
     *
     * @return integer
     */
    public function getDiameter()
    {
        return $this->diameter;
    }

    /**
     * Set qty
     *
     * @param integer $qty
     *
     * @return Screw
     */
    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }

    /**
     * Get qty
     *
     * @return integer
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Screw
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Screw
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Screw
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
    
        
    /**
     * Gets triggered only on insert
     * @ORM\PrePersist
     */
    public function onPrePersist()
    {
        $now = new \DateTime("now");
        $now->setTimezone(new \DateTimeZone('UTC'));
        $this->setCreatedAt($now);
        $this->setUpdatedAt($now);
    }

    /**
     * Gets triggered every time on update
     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        $now = new \DateTime('now');
        $now->setTimezone(new \DateTimeZone('UTC'));
        $this->setUpdatedAt($now);
    }

    /**
     * Set type
     *
     * @param $type
     *
     * @return Screw
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set numberOfScrews
     *
     * @param integer $numberOfScrews
     *
     * @return Screw
     */
    public function setNumberOfScrews($numberOfScrews)
    {
        $this->number_of_screws = $numberOfScrews;

        return $this;
    }

    /**
     * Get numberOfScrews
     *
     * @return integer
     */
    public function getNumberOfScrews()
    {
        return $this->number_of_screws;
    }

    /**
     * Set qtyUnit
     *
     * @param \WarehouseBundle\Entity\ScrewQtyUnit $qtyUnit
     *
     * @return Screw
     */
    public function setQtyUnit(\WarehouseBundle\Entity\ScrewQtyUnit $qtyUnit = null)
    {
        $this->qty_unit = $qtyUnit;

        return $this;
    }

    /**
     * Get qtyUnit
     *
     * @return \WarehouseBundle\Entity\ScrewQtyUnit
     */
    public function getQtyUnit()
    {
        return $this->qty_unit;
    }
}
