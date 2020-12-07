<?php

namespace WarehouseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="WarehouseBundle\Repository\IsolationRepository")
 * @ORM\Table(name="isolation")
 * @ORM\HasLifecycleCallbacks
 */
class Isolation
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
     * @ORM\Column(type="integer")
     */
    private $size;

    /**
     * @ORM\Column(type="integer")
     */
    private $qty;

    /**
     * @ORM\Column(type="integer")
     */
    private $pcs_in_pack;

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
     * @return Isolation
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
     * Set size
     *
     * @param integer $size
     *
     * @return Isolation
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set qty
     *
     * @param integer $qty
     *
     * @return Isolation
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
     * Set pcsInPack
     *
     * @param integer $pcsInPack
     *
     * @return Isolation
     */
    public function setPcsInPack($pcsInPack)
    {
        $this->pcs_in_pack = $pcsInPack;

        return $this;
    }

    /**
     * Get pcsInPack
     *
     * @return integer
     */
    public function getPcsInPack()
    {
        return $this->pcs_in_pack;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Isolation
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
     * @return Isolation
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
     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        $now = new \DateTime('now');
        $now->setTimezone(new \DateTimeZone('UTC'));
        $this->setUpdatedAt($now);
    }
}

