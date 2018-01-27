<?php

namespace WCS\CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="`user`")
 * @ORM\Entity(repositoryClass="WCS\CoavBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /* Adding personal methods */

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->id . " - " . $this->firstName;
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=32)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name")
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneNumber", type="string", length=32)
     * @ORM\JoinColumn(nullable=true)
     */
    private $phoneNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthDate", type="date")
     */
    private $birthDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creationDate", type="datetime")
     */
    private $creationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=16)
     */
    private $role;

    /**
     * @var int
     *
     * @ORM\Column(name="note", type="smallint", nullable=true)
     */
    private $note;

    /**
     * @var Review $reviews
     *
     * @ORM\ManyToOne(targetEntity="WCS\CoavBundle\Entity\Review")
     */
    private $reviews;

    /**
     * @var int
     *
     * @ORM\Column(name="isACertifiedPilot", type="integer", nullable=true)
     */
    private $isACertifiedPilot;

    /**
     * @var string
     *
     * @ORM\Column(name="isActive", type="string", length=1)
     */
    private $isActive;


    /**
     * @ORM\ManyToMany(targetEntity="WCS\CoavBundle\Entity\Reservation", mappedBy="passenger")
     * @ORM\JoinColumn(nullable=false)
     */
    private $reservations;


    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return User
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return User
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return User
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return User
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set isACertifiedPilot
     *
     * @param integer $isACertifiedPilot
     *
     * @return User
     */
    public function setIsACertifiedPilot($isACertifiedPilot)
    {
        $this->isACertifiedPilot = $isACertifiedPilot;

        return $this;
    }

    /**
     * Get isACertifiedPilot
     *
     * @return integer
     */
    public function getIsACertifiedPilot()
    {
        return $this->isACertifiedPilot;
    }

    /**
     * Set isActive
     *
     * @param string $isActive
     *
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return string
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set reviews
     *
     * @param \WCS\CoavBundle\Entity\Review $reviews
     *
     * @return User
     */
    public function setReviews(\WCS\CoavBundle\Entity\Review $reviews)
    {
        $this->reviews = $reviews;

        return $this;
    }

    /**
     * Get reviews
     *
     * @return \WCS\CoavBundle\Entity\Review
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Add reservation
     *
     * @param \WCS\CoavBundle\Entity\Reservation $reservation
     *
     * @return User
     */
    public function addReservation(\WCS\CoavBundle\Entity\Reservation $reservation)
    {
        $this->reservations[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \WCS\CoavBundle\Entity\Reservation $reservation
     */
    public function removeReservation(\WCS\CoavBundle\Entity\Reservation $reservation)
    {
        $this->reservations->removeElement($reservation);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservations()
    {
        return $this->reservations;
    }
}
