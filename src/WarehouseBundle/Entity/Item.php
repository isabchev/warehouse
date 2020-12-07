<?php

namespace WarehouseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="WarehouseBundle\Repository\ItemRepository")
 * @ORM\Table(name="item")
 * @ORM\HasLifecycleCallbacks
 */
class Item
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
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $unit;

    /**
     * @ORM\Column(type="integer")
     */
    private $qty;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;

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
     * @return Product
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
     * Set qty
     *
     * @param string $qty
     *
     * @return Product
     */
    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
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
     * @return Item
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
     * Set unit
     *
     * @param integer $unit
     *
     * @return Item
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get unit
     *
     * @return integer
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Item
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
     * @return Item
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
}
