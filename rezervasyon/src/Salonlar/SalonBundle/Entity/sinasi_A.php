<?php

namespace Salonlar\SalonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sinasi_A
 *
 * @ORM\Table(name="sinasi__a")
 * @ORM\Entity(repositoryClass="Salonlar\SalonBundle\Repository\sinasi_ARepository")
 */
class sinasi_A
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="a1", type="integer", length=1)
     */
    private $a1;

    /**
     * @var integer
     *
     * @ORM\Column(name="a2", type="integer", length=1)
     */
    private $a2;

    /**
     * @var integer
     *
     * @ORM\Column(name="a3", type="integer", length=1)
     */
    private $a3;

    /**
     * @var integer
     *
     * @ORM\Column(name="a4", type="integer", length=1)
     */
    private $a4;

    /**
     * @var integer
     *
     * @ORM\Column(name="a5", type="integer", length=1)
     */
    private $a5;

    /**
     * @var integer
     *
     * @ORM\Column(name="a6", type="integer", length=1)
     */
    private $a6;

    /**
     * @var integer
     *
     * @ORM\Column(name="a7", type="integer", length=1)
     */
    private $a7;

    /**
     * @var integer
     *
     * @ORM\Column(name="a8", type="integer", length=1)
     */
    private $a8;

    /**
     * @var integer
     *
     * @ORM\Column(name="a9", type="integer", length=1)
     */
    private $a9;

    /**
     * @var integer
     *
     * @ORM\Column(name="a10", type="integer", length=1)
     */
    private $a10;

    /**
     * @var integer
     *
     * @ORM\Column(name="a11", type="integer", length=1)
     */
    private $a11;

    /**
     * @var integer
     *
     * @ORM\Column(name="a12", type="integer", length=1)
     */
    private $a12;

    /**
     * @var integer
     *
     * @ORM\Column(name="a13", type="integer", length=1)
     */
    private $a13;

    /**
     * @var integer
     *
     * @ORM\Column(name="a14", type="integer", length=1)
     */
    private $a14;

    /**
     * @var integer
     *
     * @ORM\Column(name="a15", type="integer", length=1)
     */
    private $a15;

    /**
     * @var integer
     *
     * @ORM\Column(name="a16", type="integer", length=1)
     */
    private $a16;

    /**
     * @var integer
     *
     * @ORM\Column(name="a17", type="integer", length=1)
     */
    private $a17;

    /**
     * @var integer
     *
     * @ORM\Column(name="a18", type="integer", length=1)
     */
    private $a18;

    /**
     * @var integer
     *
     * @ORM\Column(name="a19", type="integer", length=1)
     */
    private $a19;

    /**
     * @var integer
     *
     * @ORM\Column(name="a20", type="integer", length=1)
     */
    private $a20;

    /**
     * @var integer
     *
     * @ORM\Column(name="a21", type="integer", length=1)
     */
    private $a21;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set a1
     *
     * @param integer $a1
     *
     * @return sinasi_A
     */
    public function setA1($a1)
    {
        $this->a1 = $a1;

        return $this;
    }

    /**
     * Get a1
     *
     * @return integer
     */
    public function getA1()
    {
        return $this->a1;
    }

    /**
     * Set a2
     *
     * @param integer $a2
     *
     * @return sinasi_A
     */
    public function setA2($a2)
    {
        $this->a2 = $a2;

        return $this;
    }

    /**
     * Get a2
     *
     * @return integer
     */
    public function getA2()
    {
        return $this->a2;
    }

    /**
     * Set a3
     *
     * @param integer $a3
     *
     * @return sinasi_A
     */
    public function setA3($a3)
    {
        $this->a3 = $a3;

        return $this;
    }

    /**
     * Get a3
     *
     * @return integer
     */
    public function getA3()
    {
        return $this->a3;
    }

    /**
     * Set a4
     *
     * @param integer $a4
     *
     * @return sinasi_A
     */
    public function setA4($a4)
    {
        $this->a4 = $a4;

        return $this;
    }

    /**
     * Get a4
     *
     * @return integer
     */
    public function getA4()
    {
        return $this->a4;
    }

    /**
     * Set a5
     *
     * @param integer $a5
     *
     * @return sinasi_A
     */
    public function setA5($a5)
    {
        $this->a5 = $a5;

        return $this;
    }

    /**
     * Get a5
     *
     * @return integer
     */
    public function getA5()
    {
        return $this->a5;
    }

    /**
     * Set a6
     *
     * @param integer $a6
     *
     * @return sinasi_A
     */
    public function setA6($a6)
    {
        $this->a6 = $a6;

        return $this;
    }

    /**
     * Get a6
     *
     * @return integer
     */
    public function getA6()
    {
        return $this->a6;
    }

    /**
     * Set a7
     *
     * @param integer $a7
     *
     * @return sinasi_A
     */
    public function setA7($a7)
    {
        $this->a7 = $a7;

        return $this;
    }

    /**
     * Get a7
     *
     * @return integer
     */
    public function getA7()
    {
        return $this->a7;
    }

    /**
     * Set a8
     *
     * @param integer $a8
     *
     * @return sinasi_A
     */
    public function setA8($a8)
    {
        $this->a8 = $a8;

        return $this;
    }

    /**
     * Get a8
     *
     * @return integer
     */
    public function getA8()
    {
        return $this->a8;
    }

    /**
     * Set a9
     *
     * @param integer $a9
     *
     * @return sinasi_A
     */
    public function setA9($a9)
    {
        $this->a9 = $a9;

        return $this;
    }

    /**
     * Get a9
     *
     * @return integer
     */
    public function getA9()
    {
        return $this->a9;
    }

    /**
     * Set a10
     *
     * @param integer $a10
     *
     * @return sinasi_A
     */
    public function setA10($a10)
    {
        $this->a10 = $a10;

        return $this;
    }

    /**
     * Get a10
     *
     * @return integer
     */
    public function getA10()
    {
        return $this->a10;
    }

    /**
     * Set a11
     *
     * @param integer $a11
     *
     * @return sinasi_A
     */
    public function setA11($a11)
    {
        $this->a11 = $a11;

        return $this;
    }

    /**
     * Get a11
     *
     * @return integer
     */
    public function getA11()
    {
        return $this->a11;
    }

    /**
     * Set a12
     *
     * @param integer $a12
     *
     * @return sinasi_A
     */
    public function setA12($a12)
    {
        $this->a12 = $a12;

        return $this;
    }

    /**
     * Get a12
     *
     * @return integer
     */
    public function getA12()
    {
        return $this->a12;
    }

    /**
     * Set a13
     *
     * @param integer $a13
     *
     * @return sinasi_A
     */
    public function setA13($a13)
    {
        $this->a13 = $a13;

        return $this;
    }

    /**
     * Get a13
     *
     * @return integer
     */
    public function getA13()
    {
        return $this->a13;
    }

    /**
     * Set a14
     *
     * @param integer $a14
     *
     * @return sinasi_A
     */
    public function setA14($a14)
    {
        $this->a14 = $a14;

        return $this;
    }

    /**
     * Get a14
     *
     * @return integer
     */
    public function getA14()
    {
        return $this->a14;
    }

    /**
     * Set a15
     *
     * @param integer $a15
     *
     * @return sinasi_A
     */
    public function setA15($a15)
    {
        $this->a15 = $a15;

        return $this;
    }

    /**
     * Get a15
     *
     * @return integer
     */
    public function getA15()
    {
        return $this->a15;
    }

    /**
     * Set a16
     *
     * @param integer $a16
     *
     * @return sinasi_A
     */
    public function setA16($a16)
    {
        $this->a16 = $a16;

        return $this;
    }

    /**
     * Get a16
     *
     * @return integer
     */
    public function getA16()
    {
        return $this->a16;
    }

    /**
     * Set a17
     *
     * @param integer $a17
     *
     * @return sinasi_A
     */
    public function setA17($a17)
    {
        $this->a17 = $a17;

        return $this;
    }

    /**
     * Get a17
     *
     * @return integer
     */
    public function getA17()
    {
        return $this->a17;
    }

    /**
     * Set a18
     *
     * @param integer $a18
     *
     * @return sinasi_A
     */
    public function setA18($a18)
    {
        $this->a18 = $a18;

        return $this;
    }

    /**
     * Get a18
     *
     * @return integer
     */
    public function getA18()
    {
        return $this->a18;
    }

    /**
     * Set a19
     *
     * @param integer $a19
     *
     * @return sinasi_A
     */
    public function setA19($a19)
    {
        $this->a19 = $a19;

        return $this;
    }

    /**
     * Get a19
     *
     * @return integer
     */
    public function getA19()
    {
        return $this->a19;
    }

    /**
     * Set a20
     *
     * @param integer $a20
     *
     * @return sinasi_A
     */
    public function setA20($a20)
    {
        $this->a20 = $a20;

        return $this;
    }

    /**
     * Get a20
     *
     * @return integer
     */
    public function getA20()
    {
        return $this->a20;
    }

    /**
     * Set a21
     *
     * @param integer $a21
     *
     * @return sinasi_A
     */
    public function setA21($a21)
    {
        $this->a21 = $a21;

        return $this;
    }

    /**
     * Get a21
     *
     * @return integer
     */
    public function getA21()
    {
        return $this->a21;
    }
}

