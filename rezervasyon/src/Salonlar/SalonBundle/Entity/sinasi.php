<?php

namespace Salonlar\SalonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sinasi
 *
 * @ORM\Table(name="sinasi")
 * @ORM\Entity(repositoryClass="Salonlar\SalonBundle\Repository\sinasiRepository")
 */
class sinasi
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
     * @var string
     *
     * @ORM\Column(name="a1", type="string", length=2)
     */
    private $a1;

    /**
     * @var string
     *
     * @ORM\Column(name="a2", type="string", length=2)
     */
    private $a2;

    /**
     * @var string
     *
     * @ORM\Column(name="a3", type="string", length=2)
     */
    private $a3;

    /**
     * @var string
     *
     * @ORM\Column(name="a4", type="string", length=2)
     */
    private $a4;

    /**
     * @var string
     *
     * @ORM\Column(name="a5", type="string", length=2)
     */
    private $a5;

    /**
     * @var string
     *
     * @ORM\Column(name="a6", type="string", length=2)
     */
    private $a6;

    /**
     * @var string
     *
     * @ORM\Column(name="a7", type="string", length=2)
     */
    private $a7;

    /**
     * @var string
     *
     * @ORM\Column(name="a8", type="string", length=2)
     */
    private $a8;

    /**
     * @var string
     *
     * @ORM\Column(name="a9", type="string", length=2)
     */
    private $a9;

    /**
     * @var string
     *
     * @ORM\Column(name="a10", type="string", length=2)
     */
    private $a10;

    /**
     * @var string
     *
     * @ORM\Column(name="a11", type="string", length=2)
     */
    private $a11;

    /**
     * @var string
     *
     * @ORM\Column(name="a12", type="string", length=2)
     */
    private $a12;

    /**
     * @var string
     *
     * @ORM\Column(name="a13", type="string", length=2)
     */
    private $a13;

    /**
     * @var string
     *
     * @ORM\Column(name="a14", type="string", length=2)
     */
    private $a14;

    /**
     * @var string
     *
     * @ORM\Column(name="a15", type="string", length=2)
     */
    private $a15;

    /**
     * @var string
     *
     * @ORM\Column(name="a17", type="string", length=2)
     */
    private $a17;

    /**
     * @var string
     *
     * @ORM\Column(name="a16", type="string", length=2)
     */
    private $a16;

    /**
     * @var string
     *
     * @ORM\Column(name="a18", type="string", length=2)
     */
    private $a18;

    /**
     * @var string
     *
     * @ORM\Column(name="a19", type="string", length=2)
     */
    private $a19;

    /**
     * @var string
     *
     * @ORM\Column(name="a20", type="string", length=2)
     */
    private $a20;

    /**
     * @var string
     *
     * @ORM\Column(name="a21", type="string", length=2)
     */
    private $a21;

    /**
     * @var string
     *
     * @ORM\Column(name="b1", type="string", length=2)
     */
    private $b1;

    /**
     * @var string
     *
     * @ORM\Column(name="b2", type="string", length=2)
     */
    private $b2;

    /**
     * @var string
     *
     * @ORM\Column(name="b3", type="string", length=2)
     */
    private $b3;

    /**
     * @var string
     *
     * @ORM\Column(name="b4", type="string", length=2)
     */
    private $b4;

    /**
     * @var string
     *
     * @ORM\Column(name="b5", type="string", length=2)
     */
    private $b5;

    /**
     * @var string
     *
     * @ORM\Column(name="b6", type="string", length=2)
     */
    private $b6;

    /**
     * @var string
     *
     * @ORM\Column(name="b7", type="string", length=2)
     */
    private $b7;

    /**
     * @var string
     *
     * @ORM\Column(name="b8", type="string", length=2)
     */
    private $b8;

    /**
     * @var string
     *
     * @ORM\Column(name="b9", type="string", length=2)
     */
    private $b9;

    /**
     * @var string
     *
     * @ORM\Column(name="b10", type="string", length=2)
     */
    private $b10;

    /**
     * @var string
     *
     * @ORM\Column(name="b11", type="string", length=2)
     */
    private $b11;

    /**
     * @var string
     *
     * @ORM\Column(name="b12", type="string", length=2)
     */
    private $b12;

    /**
     * @var string
     *
     * @ORM\Column(name="b13", type="string", length=2)
     */
    private $b13;

    /**
     * @var string
     *
     * @ORM\Column(name="b14", type="string", length=2)
     */
    private $b14;

    /**
     * @var string
     *
     * @ORM\Column(name="b15", type="string", length=2)
     */
    private $b15;

    /**
     * @var string
     *
     * @ORM\Column(name="b16", type="string", length=2)
     */
    private $b16;

    /**
     * @var string
     *
     * @ORM\Column(name="b17", type="string", length=2)
     */
    private $b17;

    /**
     * @var string
     *
     * @ORM\Column(name="b18", type="string", length=2)
     */
    private $b18;

    /**
     * @var string
     *
     * @ORM\Column(name="b19", type="string", length=2)
     */
    private $b19;

    /**
     * @var string
     *
     * @ORM\Column(name="b20", type="string", length=2)
     */
    private $b20;

    /**
     * @var string
     *
     * @ORM\Column(name="b21", type="string", length=2)
     */
    private $b21;

    /**
     * @var string
     *
     * @ORM\Column(name="b22", type="string", length=2)
     */
    private $b22;

    /**
     * @var string
     *
     * @ORM\Column(name="b23", type="string", length=2)
     */
    private $b23;

    /**
     * @var string
     *
     * @ORM\Column(name="c1", type="string", length=2)
     */
    private $c1;

    /**
     * @var string
     *
     * @ORM\Column(name="c2", type="string", length=2)
     */
    private $c2;

    /**
     * @var string
     *
     * @ORM\Column(name="c4", type="string", length=2)
     */
    private $c4;

    /**
     * @var string
     *
     * @ORM\Column(name="c3", type="string", length=2)
     */
    private $c3;

    /**
     * @var string
     *
     * @ORM\Column(name="c5", type="string", length=2)
     */
    private $c5;

    /**
     * @var string
     *
     * @ORM\Column(name="c6", type="string", length=2)
     */
    private $c6;

    /**
     * @var string
     *
     * @ORM\Column(name="c7", type="string", length=2)
     */
    private $c7;

    /**
     * @var string
     *
     * @ORM\Column(name="c8", type="string", length=2)
     */
    private $c8;

    /**
     * @var string
     *
     * @ORM\Column(name="c9", type="string", length=2)
     */
    private $c9;

    /**
     * @var string
     *
     * @ORM\Column(name="c10", type="string", length=2)
     */
    private $c10;

    /**
     * @var string
     *
     * @ORM\Column(name="c11", type="string", length=2)
     */
    private $c11;

    /**
     * @var string
     *
     * @ORM\Column(name="c12", type="string", length=2)
     */
    private $c12;

    /**
     * @var string
     *
     * @ORM\Column(name="c13", type="string", length=2)
     */
    private $c13;

    /**
     * @var string
     *
     * @ORM\Column(name="c14", type="string", length=2)
     */
    private $c14;

    /**
     * @var string
     *
     * @ORM\Column(name="c15", type="string", length=2)
     */
    private $c15;

    /**
     * @var string
     *
     * @ORM\Column(name="c16", type="string", length=2)
     */
    private $c16;

    /**
     * @var string
     *
     * @ORM\Column(name="c17", type="string", length=2)
     */
    private $c17;

    /**
     * @var string
     *
     * @ORM\Column(name="c18", type="string", length=2)
     */
    private $c18;

    /**
     * @var string
     *
     * @ORM\Column(name="c19", type="string", length=2)
     */
    private $c19;

    /**
     * @var string
     *
     * @ORM\Column(name="c20", type="string", length=2)
     */
    private $c20;

    /**
     * @var string
     *
     * @ORM\Column(name="c21", type="string", length=2)
     */
    private $c21;

    /**
     * @var string
     *
     * @ORM\Column(name="c22", type="string", length=2)
     */
    private $c22;

    /**
     * @var string
     *
     * @ORM\Column(name="c23", type="string", length=2)
     */
    private $c23;

    /**
     * @var string
     *
     * @ORM\Column(name="c24", type="string", length=2)
     */
    private $c24;

    /**
     * @var string
     *
     * @ORM\Column(name="c25", type="string", length=2)
     */
    private $c25;

    /**
     * @var string
     *
     * @ORM\Column(name="d1", type="string", length=2)
     */
    private $d1;

    /**
     * @var string
     *
     * @ORM\Column(name="d2", type="string", length=2)
     */
    private $d2;

    /**
     * @var string
     *
     * @ORM\Column(name="d3", type="string", length=2)
     */
    private $d3;

    /**
     * @var string
     *
     * @ORM\Column(name="d4", type="string", length=2)
     */
    private $d4;

    /**
     * @var string
     *
     * @ORM\Column(name="d5", type="string", length=2)
     */
    private $d5;

    /**
     * @var string
     *
     * @ORM\Column(name="d6", type="string", length=2)
     */
    private $d6;

    /**
     * @var string
     *
     * @ORM\Column(name="d7", type="string", length=2)
     */
    private $d7;

    /**
     * @var string
     *
     * @ORM\Column(name="d8", type="string", length=2)
     */
    private $d8;

    /**
     * @var string
     *
     * @ORM\Column(name="d9", type="string", length=2)
     */
    private $d9;

    /**
     * @var string
     *
     * @ORM\Column(name="d10", type="string", length=2)
     */
    private $d10;

    /**
     * @var string
     *
     * @ORM\Column(name="d11", type="string", length=2)
     */
    private $d11;

    /**
     * @var string
     *
     * @ORM\Column(name="d12", type="string", length=2)
     */
    private $d12;

    /**
     * @var string
     *
     * @ORM\Column(name="d13", type="string", length=2)
     */
    private $d13;

    /**
     * @var string
     *
     * @ORM\Column(name="d14", type="string", length=2)
     */
    private $d14;

    /**
     * @var string
     *
     * @ORM\Column(name="d15", type="string", length=2)
     */
    private $d15;

    /**
     * @var string
     *
     * @ORM\Column(name="d16", type="string", length=2)
     */
    private $d16;

    /**
     * @var string
     *
     * @ORM\Column(name="d17", type="string", length=2)
     */
    private $d17;

    /**
     * @var string
     *
     * @ORM\Column(name="d18", type="string", length=2)
     */
    private $d18;

    /**
     * @var string
     *
     * @ORM\Column(name="d19", type="string", length=2)
     */
    private $d19;

    /**
     * @var string
     *
     * @ORM\Column(name="d20", type="string", length=2)
     */
    private $d20;

    /**
     * @var string
     *
     * @ORM\Column(name="d21", type="string", length=2)
     */
    private $d21;

    /**
     * @var string
     *
     * @ORM\Column(name="d22", type="string", length=2)
     */
    private $d22;

    /**
     * @var string
     *
     * @ORM\Column(name="d23", type="string", length=2)
     */
    private $d23;

    /**
     * @var string
     *
     * @ORM\Column(name="d24", type="string", length=2)
     */
    private $d24;

    /**
     * @var string
     *
     * @ORM\Column(name="d25", type="string", length=2)
     */
    private $d25;

    /**
     * @var string
     *
     * @ORM\Column(name="d26", type="string", length=2)
     */
    private $d26;

    /**
     * @var string
     *
     * @ORM\Column(name="d27", type="string", length=2)
     */
    private $d27;

    /**
     * @var string
     *
     * @ORM\Column(name="e1", type="string", length=2)
     */
    private $e1;

    /**
     * @var string
     *
     * @ORM\Column(name="e2", type="string", length=2)
     */
    private $e2;

    /**
     * @var string
     *
     * @ORM\Column(name="e3", type="string", length=2)
     */
    private $e3;

    /**
     * @var string
     *
     * @ORM\Column(name="e4", type="string", length=2)
     */
    private $e4;

    /**
     * @var string
     *
     * @ORM\Column(name="e5", type="string", length=2)
     */
    private $e5;

    /**
     * @var string
     *
     * @ORM\Column(name="e6", type="string", length=2)
     */
    private $e6;

    /**
     * @var string
     *
     * @ORM\Column(name="e7", type="string", length=2)
     */
    private $e7;

    /**
     * @var string
     *
     * @ORM\Column(name="e8", type="string", length=2)
     */
    private $e8;

    /**
     * @var string
     *
     * @ORM\Column(name="e9", type="string", length=2)
     */
    private $e9;

    /**
     * @var string
     *
     * @ORM\Column(name="e10", type="string", length=2)
     */
    private $e10;

    /**
     * @var string
     *
     * @ORM\Column(name="e11", type="string", length=2)
     */
    private $e11;

    /**
     * @var string
     *
     * @ORM\Column(name="e12", type="string", length=2)
     */
    private $e12;

    /**
     * @var string
     *
     * @ORM\Column(name="e13", type="string", length=2)
     */
    private $e13;

    /**
     * @var string
     *
     * @ORM\Column(name="e14", type="string", length=2)
     */
    private $e14;

    /**
     * @var string
     *
     * @ORM\Column(name="e15", type="string", length=2)
     */
    private $e15;

    /**
     * @var string
     *
     * @ORM\Column(name="e16", type="string", length=2)
     */
    private $e16;

    /**
     * @var string
     *
     * @ORM\Column(name="e17", type="string", length=2)
     */
    private $e17;

    /**
     * @var string
     *
     * @ORM\Column(name="e18", type="string", length=2)
     */
    private $e18;

    /**
     * @var string
     *
     * @ORM\Column(name="e19", type="string", length=2)
     */
    private $e19;

    /**
     * @var string
     *
     * @ORM\Column(name="e20", type="string", length=2)
     */
    private $e20;

    /**
     * @var string
     *
     * @ORM\Column(name="e21", type="string", length=2)
     */
    private $e21;

    /**
     * @var string
     *
     * @ORM\Column(name="e22", type="string", length=2)
     */
    private $e22;

    /**
     * @var string
     *
     * @ORM\Column(name="e23", type="string", length=2)
     */
    private $e23;

    /**
     * @var string
     *
     * @ORM\Column(name="e24", type="string", length=2)
     */
    private $e24;

    /**
     * @var string
     *
     * @ORM\Column(name="e25", type="string", length=2)
     */
    private $e25;

    /**
     * @var string
     *
     * @ORM\Column(name="e26", type="string", length=2)
     */
    private $e26;

    /**
     * @var string
     *
     * @ORM\Column(name="e27", type="string", length=2)
     */
    private $e27;

    /**
     * @var string
     *
     * @ORM\Column(name="e28", type="string", length=2)
     */
    private $e28;

    /**
     * @var string
     *
     * @ORM\Column(name="e29", type="string", length=2)
     */
    private $e29;

    /**
     * @var string
     *
     * @ORM\Column(name="f1", type="string", length=2)
     */
    private $f1;

    /**
     * @var string
     *
     * @ORM\Column(name="f2", type="string", length=2)
     */
    private $f2;

    /**
     * @var string
     *
     * @ORM\Column(name="f3", type="string", length=2)
     */
    private $f3;

    /**
     * @var string
     *
     * @ORM\Column(name="f4", type="string", length=2)
     */
    private $f4;

    /**
     * @var string
     *
     * @ORM\Column(name="f5", type="string", length=2)
     */
    private $f5;

    /**
     * @var string
     *
     * @ORM\Column(name="f6", type="string", length=2)
     */
    private $f6;

    /**
     * @var string
     *
     * @ORM\Column(name="f7", type="string", length=2)
     */
    private $f7;

    /**
     * @var string
     *
     * @ORM\Column(name="f8", type="string", length=2)
     */
    private $f8;

    /**
     * @var string
     *
     * @ORM\Column(name="f9", type="string", length=2)
     */
    private $f9;

    /**
     * @var string
     *
     * @ORM\Column(name="f10", type="string", length=2)
     */
    private $f10;

    /**
     * @var string
     *
     * @ORM\Column(name="f11", type="string", length=2)
     */
    private $f11;

    /**
     * @var string
     *
     * @ORM\Column(name="f12", type="string", length=2)
     */
    private $f12;

    /**
     * @var string
     *
     * @ORM\Column(name="f13", type="string", length=2)
     */
    private $f13;

    /**
     * @var string
     *
     * @ORM\Column(name="f14", type="string", length=2)
     */
    private $f14;

    /**
     * @var string
     *
     * @ORM\Column(name="f15", type="string", length=2)
     */
    private $f15;

    /**
     * @var string
     *
     * @ORM\Column(name="f16", type="string", length=2)
     */
    private $f16;

    /**
     * @var string
     *
     * @ORM\Column(name="f17", type="string", length=2)
     */
    private $f17;

    /**
     * @var string
     *
     * @ORM\Column(name="f18", type="string", length=2)
     */
    private $f18;

    /**
     * @var string
     *
     * @ORM\Column(name="f19", type="string", length=2)
     */
    private $f19;

    /**
     * @var string
     *
     * @ORM\Column(name="f20", type="string", length=2)
     */
    private $f20;

    /**
     * @var string
     *
     * @ORM\Column(name="f21", type="string", length=2)
     */
    private $f21;

    /**
     * @var string
     *
     * @ORM\Column(name="f22", type="string", length=2)
     */
    private $f22;

    /**
     * @var string
     *
     * @ORM\Column(name="f23", type="string", length=2)
     */
    private $f23;

    /**
     * @var string
     *
     * @ORM\Column(name="f24", type="string", length=2)
     */
    private $f24;

    /**
     * @var string
     *
     * @ORM\Column(name="f25", type="string", length=2)
     */
    private $f25;

    /**
     * @var string
     *
     * @ORM\Column(name="f26", type="string", length=2)
     */
    private $f26;

    /**
     * @var string
     *
     * @ORM\Column(name="f27", type="string", length=2)
     */
    private $f27;

    /**
     * @var string
     *
     * @ORM\Column(name="f28", type="string", length=2)
     */
    private $f28;

    /**
     * @var string
     *
     * @ORM\Column(name="f29", type="string", length=2)
     */
    private $f29;

    /**
     * @var string
     *
     * @ORM\Column(name="g1", type="string", length=2)
     */
    private $g1;

    /**
     * @var string
     *
     * @ORM\Column(name="g2", type="string", length=2)
     */
    private $g2;

    /**
     * @var string
     *
     * @ORM\Column(name="g3", type="string", length=2)
     */
    private $g3;

    /**
     * @var string
     *
     * @ORM\Column(name="g4", type="string", length=2)
     */
    private $g4;

    /**
     * @var string
     *
     * @ORM\Column(name="g5", type="string", length=2)
     */
    private $g5;

    /**
     * @var string
     *
     * @ORM\Column(name="g6", type="string", length=2)
     */
    private $g6;

    /**
     * @var string
     *
     * @ORM\Column(name="g7", type="string", length=2)
     */
    private $g7;

    /**
     * @var string
     *
     * @ORM\Column(name="g8", type="string", length=2)
     */
    private $g8;

    /**
     * @var string
     *
     * @ORM\Column(name="g9", type="string", length=2)
     */
    private $g9;

    /**
     * @var string
     *
     * @ORM\Column(name="g10", type="string", length=2)
     */
    private $g10;

    /**
     * @var string
     *
     * @ORM\Column(name="g11", type="string", length=2)
     */
    private $g11;

    /**
     * @var string
     *
     * @ORM\Column(name="g12", type="string", length=2)
     */
    private $g12;

    /**
     * @var string
     *
     * @ORM\Column(name="g13", type="string", length=2)
     */
    private $g13;

    /**
     * @var string
     *
     * @ORM\Column(name="g14", type="string", length=2)
     */
    private $g14;

    /**
     * @var string
     *
     * @ORM\Column(name="g15", type="string", length=2)
     */
    private $g15;

    /**
     * @var string
     *
     * @ORM\Column(name="g16", type="string", length=2)
     */
    private $g16;

    /**
     * @var string
     *
     * @ORM\Column(name="g17", type="string", length=2)
     */
    private $g17;

    /**
     * @var string
     *
     * @ORM\Column(name="g18", type="string", length=2)
     */
    private $g18;

    /**
     * @var string
     *
     * @ORM\Column(name="g19", type="string", length=2)
     */
    private $g19;

    /**
     * @var string
     *
     * @ORM\Column(name="g20", type="string", length=2)
     */
    private $g20;

    /**
     * @var string
     *
     * @ORM\Column(name="g21", type="string", length=2)
     */
    private $g21;

    /**
     * @var string
     *
     * @ORM\Column(name="g22", type="string", length=2)
     */
    private $g22;

    /**
     * @var string
     *
     * @ORM\Column(name="g23", type="string", length=2)
     */
    private $g23;

    /**
     * @var string
     *
     * @ORM\Column(name="g24", type="string", length=2)
     */
    private $g24;

    /**
     * @var string
     *
     * @ORM\Column(name="g25", type="string", length=2)
     */
    private $g25;

    /**
     * @var string
     *
     * @ORM\Column(name="g26", type="string", length=2)
     */
    private $g26;

    /**
     * @var string
     *
     * @ORM\Column(name="g27", type="string", length=2)
     */
    private $g27;

    /**
     * @var string
     *
     * @ORM\Column(name="h1", type="string", length=2)
     */
    private $h1;

    /**
     * @var string
     *
     * @ORM\Column(name="h2", type="string", length=2)
     */
    private $h2;

    /**
     * @var string
     *
     * @ORM\Column(name="h3", type="string", length=2)
     */
    private $h3;

    /**
     * @var string
     *
     * @ORM\Column(name="h4", type="string", length=2)
     */
    private $h4;

    /**
     * @var string
     *
     * @ORM\Column(name="h5", type="string", length=2)
     */
    private $h5;

    /**
     * @var string
     *
     * @ORM\Column(name="h6", type="string", length=2)
     */
    private $h6;

    /**
     * @var string
     *
     * @ORM\Column(name="h7", type="string", length=2)
     */
    private $h7;

    /**
     * @var string
     *
     * @ORM\Column(name="h8", type="string", length=2)
     */
    private $h8;

    /**
     * @var string
     *
     * @ORM\Column(name="h9", type="string", length=2)
     */
    private $h9;

    /**
     * @var string
     *
     * @ORM\Column(name="h10", type="string", length=2)
     */
    private $h10;

    /**
     * @var string
     *
     * @ORM\Column(name="h11", type="string", length=2)
     */
    private $h11;

    /**
     * @var string
     *
     * @ORM\Column(name="h12", type="string", length=2)
     */
    private $h12;

    /**
     * @var string
     *
     * @ORM\Column(name="h13", type="string", length=2)
     */
    private $h13;

    /**
     * @var string
     *
     * @ORM\Column(name="h14", type="string", length=2)
     */
    private $h14;

    /**
     * @var string
     *
     * @ORM\Column(name="h15", type="string", length=2)
     */
    private $h15;

    /**
     * @var string
     *
     * @ORM\Column(name="h16", type="string", length=2)
     */
    private $h16;

    /**
     * @var string
     *
     * @ORM\Column(name="h17", type="string", length=2)
     */
    private $h17;

    /**
     * @var string
     *
     * @ORM\Column(name="h18", type="string", length=2)
     */
    private $h18;

    /**
     * @var string
     *
     * @ORM\Column(name="h19", type="string", length=2)
     */
    private $h19;

    /**
     * @var string
     *
     * @ORM\Column(name="h20", type="string", length=2)
     */
    private $h20;

    /**
     * @var string
     *
     * @ORM\Column(name="h21", type="string", length=2)
     */
    private $h21;

    /**
     * @var string
     *
     * @ORM\Column(name="h22", type="string", length=2)
     */
    private $h22;

    /**
     * @var string
     *
     * @ORM\Column(name="h23", type="string", length=2)
     */
    private $h23;

    /**
     * @var string
     *
     * @ORM\Column(name="h24", type="string", length=2)
     */
    private $h24;

    /**
     * @var string
     *
     * @ORM\Column(name="h25", type="string", length=2)
     */
    private $h25;

    /**
     * @var string
     *
     * @ORM\Column(name="h26", type="string", length=2)
     */
    private $h26;

    /**
     * @var string
     *
     * @ORM\Column(name="h27", type="string", length=2)
     */
    private $h27;

    /**
     * @var string
     *
     * @ORM\Column(name="i1", type="string", length=2)
     */
    private $i1;

    /**
     * @var string
     *
     * @ORM\Column(name="i2", type="string", length=2)
     */
    private $i2;

    /**
     * @var string
     *
     * @ORM\Column(name="i3", type="string", length=2)
     */
    private $i3;

    /**
     * @var string
     *
     * @ORM\Column(name="i4", type="string", length=2)
     */
    private $i4;

    /**
     * @var string
     *
     * @ORM\Column(name="i5", type="string", length=2)
     */
    private $i5;

    /**
     * @var string
     *
     * @ORM\Column(name="i6", type="string", length=2)
     */
    private $i6;

    /**
     * @var string
     *
     * @ORM\Column(name="i7", type="string", length=2)
     */
    private $i7;

    /**
     * @var string
     *
     * @ORM\Column(name="i8", type="string", length=2)
     */
    private $i8;

    /**
     * @var string
     *
     * @ORM\Column(name="i9", type="string", length=2)
     */
    private $i9;

    /**
     * @var string
     *
     * @ORM\Column(name="i10", type="string", length=2)
     */
    private $i10;

    /**
     * @var string
     *
     * @ORM\Column(name="i11", type="string", length=2)
     */
    private $i11;

    /**
     * @var string
     *
     * @ORM\Column(name="i12", type="string", length=2)
     */
    private $i12;

    /**
     * @var string
     *
     * @ORM\Column(name="i13", type="string", length=2)
     */
    private $i13;

    /**
     * @var string
     *
     * @ORM\Column(name="i14", type="string", length=2)
     */
    private $i14;

    /**
     * @var string
     *
     * @ORM\Column(name="i15", type="string", length=2)
     */
    private $i15;

    /**
     * @var string
     *
     * @ORM\Column(name="i16", type="string", length=2)
     */
    private $i16;

    /**
     * @var string
     *
     * @ORM\Column(name="i17", type="string", length=2)
     */
    private $i17;

    /**
     * @var string
     *
     * @ORM\Column(name="i18", type="string", length=2)
     */
    private $i18;

    /**
     * @var string
     *
     * @ORM\Column(name="i19", type="string", length=2)
     */
    private $i19;

    /**
     * @var string
     *
     * @ORM\Column(name="i20", type="string", length=2)
     */
    private $i20;

    /**
     * @var string
     *
     * @ORM\Column(name="i21", type="string", length=2)
     */
    private $i21;

    /**
     * @var string
     *
     * @ORM\Column(name="i22", type="string", length=2)
     */
    private $i22;

    /**
     * @var string
     *
     * @ORM\Column(name="i23", type="string", length=2)
     */
    private $i23;

    /**
     * @var string
     *
     * @ORM\Column(name="i24", type="string", length=2)
     */
    private $i24;

    /**
     * @var string
     *
     * @ORM\Column(name="i25", type="string", length=2)
     */
    private $i25;

    /**
     * @var string
     *
     * @ORM\Column(name="i26", type="string", length=2)
     */
    private $i26;

    /**
     * @var string
     *
     * @ORM\Column(name="i27", type="string", length=2)
     */
    private $i27;

    /**
     * @var string
     *
     * @ORM\Column(name="i28", type="string", length=2)
     */
    private $i28;

    /**
     * @var string
     *
     * @ORM\Column(name="i29", type="string", length=2)
     */
    private $i29;

    /**
     * @var string
     *
     * @ORM\Column(name="j1", type="string", length=2)
     */
    private $j1;

    /**
     * @var string
     *
     * @ORM\Column(name="j2", type="string", length=2)
     */
    private $j2;

    /**
     * @var string
     *
     * @ORM\Column(name="j3", type="string", length=2)
     */
    private $j3;

    /**
     * @var string
     *
     * @ORM\Column(name="j4", type="string", length=2)
     */
    private $j4;

    /**
     * @var string
     *
     * @ORM\Column(name="j5", type="string", length=2)
     */
    private $j5;

    /**
     * @var string
     *
     * @ORM\Column(name="j6", type="string", length=2)
     */
    private $j6;

    /**
     * @var string
     *
     * @ORM\Column(name="j7", type="string", length=2)
     */
    private $j7;

    /**
     * @var string
     *
     * @ORM\Column(name="j8", type="string", length=2)
     */
    private $j8;

    /**
     * @var string
     *
     * @ORM\Column(name="j9", type="string", length=2)
     */
    private $j9;

    /**
     * @var string
     *
     * @ORM\Column(name="j10", type="string", length=2)
     */
    private $j10;

    /**
     * @var string
     *
     * @ORM\Column(name="j11", type="string", length=2)
     */
    private $j11;

    /**
     * @var string
     *
     * @ORM\Column(name="j12", type="string", length=2)
     */
    private $j12;

    /**
     * @var string
     *
     * @ORM\Column(name="j13", type="string", length=2)
     */
    private $j13;

    /**
     * @var string
     *
     * @ORM\Column(name="j14", type="string", length=2)
     */
    private $j14;

    /**
     * @var string
     *
     * @ORM\Column(name="j15", type="string", length=2)
     */
    private $j15;

    /**
     * @var string
     *
     * @ORM\Column(name="j16", type="string", length=2)
     */
    private $j16;

    /**
     * @var string
     *
     * @ORM\Column(name="j17", type="string", length=2)
     */
    private $j17;

    /**
     * @var string
     *
     * @ORM\Column(name="j18", type="string", length=2)
     */
    private $j18;

    /**
     * @var string
     *
     * @ORM\Column(name="j19", type="string", length=2)
     */
    private $j19;

    /**
     * @var string
     *
     * @ORM\Column(name="j20", type="string", length=2)
     */
    private $j20;

    /**
     * @var string
     *
     * @ORM\Column(name="j21", type="string", length=2)
     */
    private $j21;

    /**
     * @var string
     *
     * @ORM\Column(name="j22", type="string", length=2)
     */
    private $j22;

    /**
     * @var string
     *
     * @ORM\Column(name="j23", type="string", length=2)
     */
    private $j23;

    /**
     * @var string
     *
     * @ORM\Column(name="j24", type="string", length=2)
     */
    private $j24;

    /**
     * @var string
     *
     * @ORM\Column(name="j25", type="string", length=2)
     */
    private $j25;

    /**
     * @var string
     *
     * @ORM\Column(name="j26", type="string", length=2)
     */
    private $j26;

    /**
     * @var string
     *
     * @ORM\Column(name="j27", type="string", length=2)
     */
    private $j27;

    /**
     * @var string
     *
     * @ORM\Column(name="j28", type="string", length=2)
     */
    private $j28;

    /**
     * @var string
     *
     * @ORM\Column(name="j29", type="string", length=2)
     */
    private $j29;

    /**
     * @var string
     *
     * @ORM\Column(name="j30", type="string", length=2)
     */
    private $j30;

    /**
     * @var string
     *
     * @ORM\Column(name="j31", type="string", length=2)
     */
    private $j31;

    /**
     * @var string
     *
     * @ORM\Column(name="k1", type="string", length=2)
     */
    private $k1;

    /**
     * @var string
     *
     * @ORM\Column(name="k2", type="string", length=2)
     */
    private $k2;

    /**
     * @var string
     *
     * @ORM\Column(name="k3", type="string", length=2)
     */
    private $k3;

    /**
     * @var string
     *
     * @ORM\Column(name="k4", type="string", length=2)
     */
    private $k4;

    /**
     * @var string
     *
     * @ORM\Column(name="k5", type="string", length=2)
     */
    private $k5;

    /**
     * @var string
     *
     * @ORM\Column(name="k6", type="string", length=2)
     */
    private $k6;

    /**
     * @var string
     *
     * @ORM\Column(name="k7", type="string", length=2)
     */
    private $k7;

    /**
     * @var string
     *
     * @ORM\Column(name="k8", type="string", length=2)
     */
    private $k8;

    /**
     * @var string
     *
     * @ORM\Column(name="k9", type="string", length=2)
     */
    private $k9;

    /**
     * @var string
     *
     * @ORM\Column(name="k10", type="string", length=2)
     */
    private $k10;

    /**
     * @var string
     *
     * @ORM\Column(name="k11", type="string", length=2)
     */
    private $k11;

    /**
     * @var string
     *
     * @ORM\Column(name="k12", type="string", length=2)
     */
    private $k12;

    /**
     * @var string
     *
     * @ORM\Column(name="k13", type="string", length=2)
     */
    private $k13;

    /**
     * @var string
     *
     * @ORM\Column(name="k14", type="string", length=2)
     */
    private $k14;

    /**
     * @var string
     *
     * @ORM\Column(name="k15", type="string", length=2)
     */
    private $k15;

    /**
     * @var string
     *
     * @ORM\Column(name="k16", type="string", length=2)
     */
    private $k16;

    /**
     * @var string
     *
     * @ORM\Column(name="k17", type="string", length=2)
     */
    private $k17;

    /**
     * @var string
     *
     * @ORM\Column(name="k18", type="string", length=2)
     */
    private $k18;

    /**
     * @var string
     *
     * @ORM\Column(name="k19", type="string", length=2)
     */
    private $k19;

    /**
     * @var string
     *
     * @ORM\Column(name="k20", type="string", length=2)
     */
    private $k20;

    /**
     * @var string
     *
     * @ORM\Column(name="k21", type="string", length=2)
     */
    private $k21;

    /**
     * @var string
     *
     * @ORM\Column(name="k22", type="string", length=2)
     */
    private $k22;

    /**
     * @var string
     *
     * @ORM\Column(name="k23", type="string", length=2)
     */
    private $k23;

    /**
     * @var string
     *
     * @ORM\Column(name="k24", type="string", length=2)
     */
    private $k24;

    /**
     * @var string
     *
     * @ORM\Column(name="k25", type="string", length=2)
     */
    private $k25;

    /**
     * @var string
     *
     * @ORM\Column(name="k26", type="string", length=2)
     */
    private $k26;

    /**
     * @var string
     *
     * @ORM\Column(name="k27", type="string", length=2)
     */
    private $k27;

    /**
     * @var string
     *
     * @ORM\Column(name="k28", type="string", length=2)
     */
    private $k28;

    /**
     * @var string
     *
     * @ORM\Column(name="k29", type="string", length=2)
     */
    private $k29;

    /**
     * @var string
     *
     * @ORM\Column(name="l1", type="string", length=2)
     */
    private $l1;

    /**
     * @var string
     *
     * @ORM\Column(name="l2", type="string", length=2)
     */
    private $l2;

    /**
     * @var string
     *
     * @ORM\Column(name="l3", type="string", length=2)
     */
    private $l3;

    /**
     * @var string
     *
     * @ORM\Column(name="l4", type="string", length=2)
     */
    private $l4;

    /**
     * @var string
     *
     * @ORM\Column(name="l5", type="string", length=2)
     */
    private $l5;

    /**
     * @var string
     *
     * @ORM\Column(name="l6", type="string", length=2)
     */
    private $l6;

    /**
     * @var string
     *
     * @ORM\Column(name="l7", type="string", length=2)
     */
    private $l7;

    /**
     * @var string
     *
     * @ORM\Column(name="l8", type="string", length=2)
     */
    private $l8;

    /**
     * @var string
     *
     * @ORM\Column(name="l9", type="string", length=2)
     */
    private $l9;

    /**
     * @var string
     *
     * @ORM\Column(name="l10", type="string", length=2)
     */
    private $l10;

    /**
     * @var string
     *
     * @ORM\Column(name="l11", type="string", length=2)
     */
    private $l11;

    /**
     * @var string
     *
     * @ORM\Column(name="l12", type="string", length=2)
     */
    private $l12;

    /**
     * @var string
     *
     * @ORM\Column(name="l13", type="string", length=2)
     */
    private $l13;

    /**
     * @var string
     *
     * @ORM\Column(name="l14", type="string", length=2)
     */
    private $l14;

    /**
     * @var string
     *
     * @ORM\Column(name="l15", type="string", length=2)
     */
    private $l15;

    /**
     * @var string
     *
     * @ORM\Column(name="l16", type="string", length=2)
     */
    private $l16;

    /**
     * @var string
     *
     * @ORM\Column(name="l17", type="string", length=2)
     */
    private $l17;

    /**
     * @var string
     *
     * @ORM\Column(name="l18", type="string", length=2)
     */
    private $l18;

    /**
     * @var string
     *
     * @ORM\Column(name="l19", type="string", length=2)
     */
    private $l19;

    /**
     * @var string
     *
     * @ORM\Column(name="l20", type="string", length=2)
     */
    private $l20;

    /**
     * @var string
     *
     * @ORM\Column(name="l21", type="string", length=2)
     */
    private $l21;

    /**
     * @var string
     *
     * @ORM\Column(name="l22", type="string", length=2)
     */
    private $l22;

    /**
     * @var string
     *
     * @ORM\Column(name="l23", type="string", length=2)
     */
    private $l23;

    /**
     * @var string
     *
     * @ORM\Column(name="l24", type="string", length=2)
     */
    private $l24;

    /**
     * @var string
     *
     * @ORM\Column(name="l25", type="string", length=2)
     */
    private $l25;

    /**
     * @var string
     *
     * @ORM\Column(name="l26", type="string", length=2)
     */
    private $l26;

    /**
     * @var string
     *
     * @ORM\Column(name="l27", type="string", length=2)
     */
    private $l27;

    /**
     * @var string
     *
     * @ORM\Column(name="l28", type="string", length=2)
     */
    private $l28;

    /**
     * @var string
     *
     * @ORM\Column(name="l29", type="string", length=2)
     */
    private $l29;

    /**
     * @var string
     *
     * @ORM\Column(name="l30", type="string", length=2)
     */
    private $l30;

    /**
     * @var string
     *
     * @ORM\Column(name="l31", type="string", length=2)
     */
    private $l31;

    /**
     * @var string
     *
     * @ORM\Column(name="m1", type="string", length=2)
     */
    private $m1;

    /**
     * @var string
     *
     * @ORM\Column(name="m2", type="string", length=2)
     */
    private $m2;

    /**
     * @var string
     *
     * @ORM\Column(name="m3", type="string", length=2)
     */
    private $m3;

    /**
     * @var string
     *
     * @ORM\Column(name="m4", type="string", length=2)
     */
    private $m4;

    /**
     * @var string
     *
     * @ORM\Column(name="m5", type="string", length=2)
     */
    private $m5;

    /**
     * @var string
     *
     * @ORM\Column(name="m6", type="string", length=2)
     */
    private $m6;

    /**
     * @var string
     *
     * @ORM\Column(name="m7", type="string", length=2)
     */
    private $m7;

    /**
     * @var string
     *
     * @ORM\Column(name="m8", type="string", length=2)
     */
    private $m8;

    /**
     * @var string
     *
     * @ORM\Column(name="m9", type="string", length=2)
     */
    private $m9;

    /**
     * @var string
     *
     * @ORM\Column(name="m10", type="string", length=2)
     */
    private $m10;

    /**
     * @var string
     *
     * @ORM\Column(name="m11", type="string", length=2)
     */
    private $m11;

    /**
     * @var string
     *
     * @ORM\Column(name="m12", type="string", length=2)
     */
    private $m12;

    /**
     * @var string
     *
     * @ORM\Column(name="m13", type="string", length=2)
     */
    private $m13;

    /**
     * @var string
     *
     * @ORM\Column(name="m14", type="string", length=2)
     */
    private $m14;

    /**
     * @var string
     *
     * @ORM\Column(name="m15", type="string", length=2)
     */
    private $m15;

    /**
     * @var string
     *
     * @ORM\Column(name="m16", type="string", length=2)
     */
    private $m16;

    /**
     * @var string
     *
     * @ORM\Column(name="m17", type="string", length=2)
     */
    private $m17;

    /**
     * @var string
     *
     * @ORM\Column(name="m18", type="string", length=2)
     */
    private $m18;

    /**
     * @var string
     *
     * @ORM\Column(name="m19", type="string", length=2)
     */
    private $m19;

    /**
     * @var string
     *
     * @ORM\Column(name="m20", type="string", length=2)
     */
    private $m20;

    /**
     * @var string
     *
     * @ORM\Column(name="m21", type="string", length=2)
     */
    private $m21;

    /**
     * @var string
     *
     * @ORM\Column(name="m22", type="string", length=2)
     */
    private $m22;

    /**
     * @var string
     *
     * @ORM\Column(name="m23", type="string", length=2)
     */
    private $m23;

    /**
     * @var string
     *
     * @ORM\Column(name="m24", type="string", length=2)
     */
    private $m24;

    /**
     * @var string
     *
     * @ORM\Column(name="m25", type="string", length=2)
     */
    private $m25;

    /**
     * @var string
     *
     * @ORM\Column(name="m26", type="string", length=2)
     */
    private $m26;

    /**
     * @var string
     *
     * @ORM\Column(name="m27", type="string", length=2)
     */
    private $m27;

    /**
     * @var string
     *
     * @ORM\Column(name="m28", type="string", length=2)
     */
    private $m28;

    /**
     * @var string
     *
     * @ORM\Column(name="m29", type="string", length=2)
     */
    private $m29;

    /**
     * @var string
     *
     * @ORM\Column(name="n1", type="string", length=2)
     */
    private $n1;

    /**
     * @var string
     *
     * @ORM\Column(name="n2", type="string", length=2)
     */
    private $n2;

    /**
     * @var string
     *
     * @ORM\Column(name="n3", type="string", length=2)
     */
    private $n3;

    /**
     * @var string
     *
     * @ORM\Column(name="n4", type="string", length=2)
     */
    private $n4;

    /**
     * @var string
     *
     * @ORM\Column(name="n5", type="string", length=2)
     */
    private $n5;

    /**
     * @var string
     *
     * @ORM\Column(name="n6", type="string", length=2)
     */
    private $n6;

    /**
     * @var string
     *
     * @ORM\Column(name="n7", type="string", length=2)
     */
    private $n7;

    /**
     * @var string
     *
     * @ORM\Column(name="n8", type="string", length=2)
     */
    private $n8;

    /**
     * @var string
     *
     * @ORM\Column(name="n9", type="string", length=2)
     */
    private $n9;

    /**
     * @var string
     *
     * @ORM\Column(name="n10", type="string", length=2)
     */
    private $n10;

    /**
     * @var string
     *
     * @ORM\Column(name="n11", type="string", length=2)
     */
    private $n11;

    /**
     * @var string
     *
     * @ORM\Column(name="n12", type="string", length=2)
     */
    private $n12;

    /**
     * @var string
     *
     * @ORM\Column(name="n13", type="string", length=2)
     */
    private $n13;

    /**
     * @var string
     *
     * @ORM\Column(name="n14", type="string", length=2)
     */
    private $n14;

    /**
     * @var string
     *
     * @ORM\Column(name="n15", type="string", length=2)
     */
    private $n15;

    /**
     * @var string
     *
     * @ORM\Column(name="n16", type="string", length=2)
     */
    private $n16;

    /**
     * @var string
     *
     * @ORM\Column(name="n17", type="string", length=2)
     */
    private $n17;

    /**
     * @var string
     *
     * @ORM\Column(name="n18", type="string", length=2)
     */
    private $n18;

    /**
     * @var string
     *
     * @ORM\Column(name="n19", type="string", length=2)
     */
    private $n19;

    /**
     * @var string
     *
     * @ORM\Column(name="n20", type="string", length=2)
     */
    private $n20;

    /**
     * @var string
     *
     * @ORM\Column(name="n21", type="string", length=2)
     */
    private $n21;

    /**
     * @var string
     *
     * @ORM\Column(name="n22", type="string", length=2)
     */
    private $n22;

    /**
     * @var string
     *
     * @ORM\Column(name="n23", type="string", length=2)
     */
    private $n23;

    /**
     * @var string
     *
     * @ORM\Column(name="n24", type="string", length=2)
     */
    private $n24;

    /**
     * @var string
     *
     * @ORM\Column(name="n25", type="string", length=2)
     */
    private $n25;

    /**
     * @var string
     *
     * @ORM\Column(name="n26", type="string", length=2)
     */
    private $n26;

    /**
     * @var string
     *
     * @ORM\Column(name="n27", type="string", length=2)
     */
    private $n27;

    /**
     * @var string
     *
     * @ORM\Column(name="o1", type="string", length=2)
     */
    private $o1;

    /**
     * @var string
     *
     * @ORM\Column(name="o2", type="string", length=2)
     */
    private $o2;

    /**
     * @var string
     *
     * @ORM\Column(name="o3", type="string", length=2)
     */
    private $o3;

    /**
     * @var string
     *
     * @ORM\Column(name="o4", type="string", length=2)
     */
    private $o4;

    /**
     * @var string
     *
     * @ORM\Column(name="o5", type="string", length=2)
     */
    private $o5;

    /**
     * @var string
     *
     * @ORM\Column(name="o6", type="string", length=2)
     */
    private $o6;

    /**
     * @var string
     *
     * @ORM\Column(name="o7", type="string", length=2)
     */
    private $o7;

    /**
     * @var string
     *
     * @ORM\Column(name="o8", type="string", length=2)
     */
    private $o8;

    /**
     * @var string
     *
     * @ORM\Column(name="o9", type="string", length=2)
     */
    private $o9;

    /**
     * @var string
     *
     * @ORM\Column(name="o10", type="string", length=2)
     */
    private $o10;

    /**
     * @var string
     *
     * @ORM\Column(name="o11", type="string", length=2)
     */
    private $o11;

    /**
     * @var string
     *
     * @ORM\Column(name="o12", type="string", length=2)
     */
    private $o12;

    /**
     * @var string
     *
     * @ORM\Column(name="o13", type="string", length=2)
     */
    private $o13;

    /**
     * @var string
     *
     * @ORM\Column(name="o14", type="string", length=2)
     */
    private $o14;

    /**
     * @var string
     *
     * @ORM\Column(name="o15", type="string", length=2)
     */
    private $o15;

    /**
     * @var string
     *
     * @ORM\Column(name="o16", type="string", length=2)
     */
    private $o16;

    /**
     * @var string
     *
     * @ORM\Column(name="o17", type="string", length=2)
     */
    private $o17;

    /**
     * @var string
     *
     * @ORM\Column(name="o18", type="string", length=2)
     */
    private $o18;

    /**
     * @var string
     *
     * @ORM\Column(name="o19", type="string", length=2)
     */
    private $o19;

    /**
     * @var string
     *
     * @ORM\Column(name="o20", type="string", length=2)
     */
    private $o20;

    /**
     * @var string
     *
     * @ORM\Column(name="o21", type="string", length=2)
     */
    private $o21;

    /**
     * @var string
     *
     * @ORM\Column(name="o22", type="string", length=2)
     */
    private $o22;

    /**
     * @var string
     *
     * @ORM\Column(name="o23", type="string", length=2)
     */
    private $o23;

    /**
     * @var string
     *
     * @ORM\Column(name="o24", type="string", length=2)
     */
    private $o24;

    /**
     * @var string
     *
     * @ORM\Column(name="o25", type="string", length=2)
     */
    private $o25;

    /**
     * @var string
     *
     * @ORM\Column(name="p1", type="string", length=2)
     */
    private $p1;

    /**
     * @var string
     *
     * @ORM\Column(name="p2", type="string", length=2)
     */
    private $p2;

    /**
     * @var string
     *
     * @ORM\Column(name="p3", type="string", length=2)
     */
    private $p3;

    /**
     * @var string
     *
     * @ORM\Column(name="p4", type="string", length=2)
     */
    private $p4;

    /**
     * @var string
     *
     * @ORM\Column(name="p5", type="string", length=2)
     */
    private $p5;

    /**
     * @var string
     *
     * @ORM\Column(name="p6", type="string", length=2)
     */
    private $p6;

    /**
     * @var string
     *
     * @ORM\Column(name="p7", type="string", length=2)
     */
    private $p7;

    /**
     * @var string
     *
     * @ORM\Column(name="p8", type="string", length=2)
     */
    private $p8;

    /**
     * @var string
     *
     * @ORM\Column(name="p9", type="string", length=2)
     */
    private $p9;

    /**
     * @var string
     *
     * @ORM\Column(name="p10", type="string", length=2)
     */
    private $p10;

    /**
     * @var string
     *
     * @ORM\Column(name="p11", type="string", length=2)
     */
    private $p11;

    /**
     * @var string
     *
     * @ORM\Column(name="p12", type="string", length=2)
     */
    private $p12;

    /**
     * @var string
     *
     * @ORM\Column(name="p13", type="string", length=2)
     */
    private $p13;

    /**
     * @var string
     *
     * @ORM\Column(name="p14", type="string", length=2)
     */
    private $p14;

    /**
     * @var string
     *
     * @ORM\Column(name="p15", type="string", length=2)
     */
    private $p15;

    /**
     * @var string
     *
     * @ORM\Column(name="p16", type="string", length=2)
     */
    private $p16;

    /**
     * @var string
     *
     * @ORM\Column(name="p17", type="string", length=2)
     */
    private $p17;

    /**
     * @var string
     *
     * @ORM\Column(name="p18", type="string", length=2)
     */
    private $p18;

    /**
     * @var string
     *
     * @ORM\Column(name="p19", type="string", length=2)
     */
    private $p19;

    /**
     * @var string
     *
     * @ORM\Column(name="p20", type="string", length=2)
     */
    private $p20;

    /**
     * @var string
     *
     * @ORM\Column(name="p21", type="string", length=2)
     */
    private $p21;

    /**
     * @var string
     *
     * @ORM\Column(name="p22", type="string", length=2)
     */
    private $p22;

    /**
     * @var string
     *
     * @ORM\Column(name="p23", type="string", length=2)
     */
    private $p23;

    /**
     * @var string
     *
     * @ORM\Column(name="p24", type="string", length=2)
     */
    private $p24;

    /**
     * @var string
     *
     * @ORM\Column(name="p25", type="string", length=2)
     */
    private $p25;

    /**
     * @var string
     *
     * @ORM\Column(name="r1", type="string", length=2)
     */
    private $r1;

    /**
     * @var string
     *
     * @ORM\Column(name="r2", type="string", length=2)
     */
    private $r2;

    /**
     * @var string
     *
     * @ORM\Column(name="r3", type="string", length=2)
     */
    private $r3;

    /**
     * @var string
     *
     * @ORM\Column(name="r4", type="string", length=2)
     */
    private $r4;

    /**
     * @var string
     *
     * @ORM\Column(name="r5", type="string", length=2)
     */
    private $r5;

    /**
     * @var string
     *
     * @ORM\Column(name="r6", type="string", length=2)
     */
    private $r6;

    /**
     * @var string
     *
     * @ORM\Column(name="r7", type="string", length=2)
     */
    private $r7;

    /**
     * @var string
     *
     * @ORM\Column(name="r8", type="string", length=2)
     */
    private $r8;

    /**
     * @var string
     *
     * @ORM\Column(name="r9", type="string", length=2)
     */
    private $r9;

    /**
     * @var string
     *
     * @ORM\Column(name="r10", type="string", length=2)
     */
    private $r10;

    /**
     * @var string
     *
     * @ORM\Column(name="r11", type="string", length=2)
     */
    private $r11;

    /**
     * @var string
     *
     * @ORM\Column(name="r12", type="string", length=2)
     */
    private $r12;

    /**
     * @var string
     *
     * @ORM\Column(name="r13", type="string", length=2)
     */
    private $r13;

    /**
     * @var string
     *
     * @ORM\Column(name="r14", type="string", length=2)
     */
    private $r14;

    /**
     * @var string
     *
     * @ORM\Column(name="r15", type="string", length=2)
     */
    private $r15;

    /**
     * @var string
     *
     * @ORM\Column(name="r16", type="string", length=2)
     */
    private $r16;

    /**
     * @var string
     *
     * @ORM\Column(name="r17", type="string", length=2)
     */
    private $r17;

    /**
     * @var string
     *
     * @ORM\Column(name="r18", type="string", length=2)
     */
    private $r18;

    /**
     * @var string
     *
     * @ORM\Column(name="r19", type="string", length=2)
     */
    private $r19;

    /**
     * @var string
     *
     * @ORM\Column(name="r20", type="string", length=2)
     */
    private $r20;

    /**
     * @var string
     *
     * @ORM\Column(name="r21", type="string", length=2)
     */
    private $r21;

    /**
     * @var string
     *
     * @ORM\Column(name="r22", type="string", length=2)
     */
    private $r22;

    /**
     * @var string
     *
     * @ORM\Column(name="r23", type="string", length=2)
     */
    private $r23;

    /**
     * @var string
     *
     * @ORM\Column(name="r24", type="string", length=2)
     */
    private $r24;

    /**
     * @var string
     *
     * @ORM\Column(name="r25", type="string", length=2)
     */
    private $r25;

    /**
     * @var string
     *
     * @ORM\Column(name="s1", type="string", length=2)
     */
    private $s1;

    /**
     * @var string
     *
     * @ORM\Column(name="s2", type="string", length=2)
     */
    private $s2;

    /**
     * @var string
     *
     * @ORM\Column(name="s3", type="string", length=2)
     */
    private $s3;

    /**
     * @var string
     *
     * @ORM\Column(name="s4", type="string", length=2)
     */
    private $s4;

    /**
     * @var string
     *
     * @ORM\Column(name="s5", type="string", length=2)
     */
    private $s5;

    /**
     * @var string
     *
     * @ORM\Column(name="s6", type="string", length=2)
     */
    private $s6;

    /**
     * @var string
     *
     * @ORM\Column(name="s7", type="string", length=2)
     */
    private $s7;

    /**
     * @var string
     *
     * @ORM\Column(name="s8", type="string", length=2)
     */
    private $s8;

    /**
     * @var string
     *
     * @ORM\Column(name="s9", type="string", length=2)
     */
    private $s9;

    /**
     * @var string
     *
     * @ORM\Column(name="s10", type="string", length=2)
     */
    private $s10;

    /**
     * @var string
     *
     * @ORM\Column(name="s11", type="string", length=2)
     */
    private $s11;

    /**
     * @var string
     *
     * @ORM\Column(name="s12", type="string", length=2)
     */
    private $s12;

    /**
     * @var string
     *
     * @ORM\Column(name="s13", type="string", length=2)
     */
    private $s13;

    /**
     * @var string
     *
     * @ORM\Column(name="s14", type="string", length=2)
     */
    private $s14;

    /**
     * @var string
     *
     * @ORM\Column(name="s15", type="string", length=2)
     */
    private $s15;

    /**
     * @var string
     *
     * @ORM\Column(name="s16", type="string", length=2)
     */
    private $s16;

    /**
     * @var string
     *
     * @ORM\Column(name="s17", type="string", length=2)
     */
    private $s17;

    /**
     * @var string
     *
     * @ORM\Column(name="s18", type="string", length=2)
     */
    private $s18;

    /**
     * @var string
     *
     * @ORM\Column(name="s19", type="string", length=2)
     */
    private $s19;

    /**
     * @var string
     *
     * @ORM\Column(name="s20", type="string", length=2)
     */
    private $s20;

    /**
     * @var string
     *
     * @ORM\Column(name="s21", type="string", length=2)
     */
    private $s21;

    /**
     * @var string
     *
     * @ORM\Column(name="s22", type="string", length=2)
     */
    private $s22;

    /**
     * @var string
     *
     * @ORM\Column(name="s23", type="string", length=2)
     */
    private $s23;

    /**
     * @var string
     *
     * @ORM\Column(name="t1", type="string", length=2)
     */
    private $t1;

    /**
     * @var string
     *
     * @ORM\Column(name="t2", type="string", length=2)
     */
    private $t2;

    /**
     * @var string
     *
     * @ORM\Column(name="t3", type="string", length=2)
     */
    private $t3;

    /**
     * @var string
     *
     * @ORM\Column(name="t4", type="string", length=2)
     */
    private $t4;

    /**
     * @var string
     *
     * @ORM\Column(name="t5", type="string", length=2)
     */
    private $t5;

    /**
     * @var string
     *
     * @ORM\Column(name="t6", type="string", length=2)
     */
    private $t6;

    /**
     * @var string
     *
     * @ORM\Column(name="t7", type="string", length=2)
     */
    private $t7;

    /**
     * @var string
     *
     * @ORM\Column(name="t8", type="string", length=2)
     */
    private $t8;

    /**
     * @var string
     *
     * @ORM\Column(name="t9", type="string", length=2)
     */
    private $t9;

    /**
     * @var string
     *
     * @ORM\Column(name="t10", type="string", length=2)
     */
    private $t10;

    /**
     * @var string
     *
     * @ORM\Column(name="t11", type="string", length=2)
     */
    private $t11;

    /**
     * @var string
     *
     * @ORM\Column(name="t12", type="string", length=2)
     */
    private $t12;

    /**
     * @var string
     *
     * @ORM\Column(name="t13", type="string", length=2)
     */
    private $t13;

    /**
     * @var string
     *
     * @ORM\Column(name="u1", type="string", length=2)
     */
    private $u1;

    /**
     * @var string
     *
     * @ORM\Column(name="u2", type="string", length=2)
     */
    private $u2;

    /**
     * @var string
     *
     * @ORM\Column(name="u3", type="string", length=2)
     */
    private $u3;

    /**
     * @var string
     *
     * @ORM\Column(name="u4", type="string", length=2)
     */
    private $u4;

    /**
     * @var string
     *
     * @ORM\Column(name="u5", type="string", length=2)
     */
    private $u5;

    /**
     * @var string
     *
     * @ORM\Column(name="u6", type="string", length=2)
     */
    private $u6;

    /**
     * @var string
     *
     * @ORM\Column(name="u7", type="string", length=2)
     */
    private $u7;

    /**
     * @var string
     *
     * @ORM\Column(name="u8", type="string", length=2)
     */
    private $u8;

    /**
     * @var string
     *
     * @ORM\Column(name="u9", type="string", length=2)
     */
    private $u9;

    /**
     * @var string
     *
     * @ORM\Column(name="u10", type="string", length=2)
     */
    private $u10;

    /**
     * @var string
     *
     * @ORM\Column(name="u11", type="string", length=2)
     */
    private $u11;

    /**
     * @var string
     *
     * @ORM\Column(name="u12", type="string", length=2)
     */
    private $u12;

    /**
     * @var string
     *
     * @ORM\Column(name="u13", type="string", length=2)
     */
    private $u13;

    /**
     * @var string
     *
     * @ORM\Column(name="u14", type="string", length=2)
     */
    private $u14;

    /**
     * @var string
     *
     * @ORM\Column(name="u15", type="string", length=2)
     */
    private $u15;

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
     * @param string $a1
     *
     * @return sinasi
     */
    public function setA1($a1)
    {
        $this->a1 = $a1;

        return $this;
    }

    /**
     * Get a1
     *
     * @return string
     */
    public function getA1()
    {
        return $this->a1;
    }

    /**
     * Set a2
     *
     * @param string $a2
     *
     * @return sinasi
     */
    public function setA2($a2)
    {
        $this->a2 = $a2;

        return $this;
    }

    /**
     * Get a2
     *
     * @return string
     */
    public function getA2()
    {
        return $this->a2;
    }

    /**
     * Set a3
     *
     * @param string $a3
     *
     * @return sinasi
     */
    public function setA3($a3)
    {
        $this->a3 = $a3;

        return $this;
    }

    /**
     * Get a3
     *
     * @return string
     */
    public function getA3()
    {
        return $this->a3;
    }

    /**
     * Set a4
     *
     * @param string $a4
     *
     * @return sinasi
     */
    public function setA4($a4)
    {
        $this->a4 = $a4;

        return $this;
    }

    /**
     * Get a4
     *
     * @return string
     */
    public function getA4()
    {
        return $this->a4;
    }

    /**
     * Set a5
     *
     * @param string $a5
     *
     * @return sinasi
     */
    public function setA5($a5)
    {
        $this->a5 = $a5;

        return $this;
    }

    /**
     * Get a5
     *
     * @return string
     */
    public function getA5()
    {
        return $this->a5;
    }

    /**
     * Set a6
     *
     * @param string $a6
     *
     * @return sinasi
     */
    public function setA6($a6)
    {
        $this->a6 = $a6;

        return $this;
    }

    /**
     * Get a6
     *
     * @return string
     */
    public function getA6()
    {
        return $this->a6;
    }

    /**
     * Set a7
     *
     * @param string $a7
     *
     * @return sinasi
     */
    public function setA7($a7)
    {
        $this->a7 = $a7;

        return $this;
    }

    /**
     * Get a7
     *
     * @return string
     */
    public function getA7()
    {
        return $this->a7;
    }

    /**
     * Set a8
     *
     * @param string $a8
     *
     * @return sinasi
     */
    public function setA8($a8)
    {
        $this->a8 = $a8;

        return $this;
    }

    /**
     * Get a8
     *
     * @return string
     */
    public function getA8()
    {
        return $this->a8;
    }

    /**
     * Set a9
     *
     * @param string $a9
     *
     * @return sinasi
     */
    public function setA9($a9)
    {
        $this->a9 = $a9;

        return $this;
    }

    /**
     * Get a9
     *
     * @return string
     */
    public function getA9()
    {
        return $this->a9;
    }

    /**
     * Set a10
     *
     * @param string $a10
     *
     * @return sinasi
     */
    public function setA10($a10)
    {
        $this->a10 = $a10;

        return $this;
    }

    /**
     * Get a10
     *
     * @return string
     */
    public function getA10()
    {
        return $this->a10;
    }

    /**
     * Set a11
     *
     * @param string $a11
     *
     * @return sinasi
     */
    public function setA11($a11)
    {
        $this->a11 = $a11;

        return $this;
    }

    /**
     * Get a11
     *
     * @return string
     */
    public function getA11()
    {
        return $this->a11;
    }

    /**
     * Set a12
     *
     * @param string $a12
     *
     * @return sinasi
     */
    public function setA12($a12)
    {
        $this->a12 = $a12;

        return $this;
    }

    /**
     * Get a12
     *
     * @return string
     */
    public function getA12()
    {
        return $this->a12;
    }

    /**
     * Set a13
     *
     * @param string $a13
     *
     * @return sinasi
     */
    public function setA13($a13)
    {
        $this->a13 = $a13;

        return $this;
    }

    /**
     * Get a13
     *
     * @return string
     */
    public function getA13()
    {
        return $this->a13;
    }

    /**
     * Set a14
     *
     * @param string $a14
     *
     * @return sinasi
     */
    public function setA14($a14)
    {
        $this->a14 = $a14;

        return $this;
    }

    /**
     * Get a14
     *
     * @return string
     */
    public function getA14()
    {
        return $this->a14;
    }

    /**
     * Set a15
     *
     * @param string $a15
     *
     * @return sinasi
     */
    public function setA15($a15)
    {
        $this->a15 = $a15;

        return $this;
    }

    /**
     * Get a15
     *
     * @return string
     */
    public function getA15()
    {
        return $this->a15;
    }

    /**
     * Set a17
     *
     * @param string $a17
     *
     * @return sinasi
     */
    public function setA17($a17)
    {
        $this->a17 = $a17;

        return $this;
    }

    /**
     * Get a17
     *
     * @return string
     */
    public function getA17()
    {
        return $this->a17;
    }

    /**
     * Set a16
     *
     * @param string $a16
     *
     * @return sinasi
     */
    public function setA16($a16)
    {
        $this->a16 = $a16;

        return $this;
    }

    /**
     * Get a16
     *
     * @return string
     */
    public function getA16()
    {
        return $this->a16;
    }

    /**
     * Set a18
     *
     * @param string $a18
     *
     * @return sinasi
     */
    public function setA18($a18)
    {
        $this->a18 = $a18;

        return $this;
    }

    /**
     * Get a18
     *
     * @return string
     */
    public function getA18()
    {
        return $this->a18;
    }

    /**
     * Set a19
     *
     * @param string $a19
     *
     * @return sinasi
     */
    public function setA19($a19)
    {
        $this->a19 = $a19;

        return $this;
    }

    /**
     * Get a19
     *
     * @return string
     */
    public function getA19()
    {
        return $this->a19;
    }

    /**
     * Set a20
     *
     * @param string $a20
     *
     * @return sinasi
     */
    public function setA20($a20)
    {
        $this->a20 = $a20;

        return $this;
    }

    /**
     * Get a20
     *
     * @return string
     */
    public function getA20()
    {
        return $this->a20;
    }

    /**
     * Set a21
     *
     * @param string $a21
     *
     * @return sinasi
     */
    public function setA21($a21)
    {
        $this->a21 = $a21;

        return $this;
    }

    /**
     * Get a21
     *
     * @return string
     */
    public function getA21()
    {
        return $this->a21;
    }

    /**
     * Set b1
     *
     * @param string $b1
     *
     * @return sinasi
     */
    public function setB1($b1)
    {
        $this->b1 = $b1;

        return $this;
    }

    /**
     * Get b1
     *
     * @return string
     */
    public function getB1()
    {
        return $this->b1;
    }

    /**
     * Set b2
     *
     * @param string $b2
     *
     * @return sinasi
     */
    public function setB2($b2)
    {
        $this->b2 = $b2;

        return $this;
    }

    /**
     * Get b2
     *
     * @return string
     */
    public function getB2()
    {
        return $this->b2;
    }

    /**
     * Set b3
     *
     * @param string $b3
     *
     * @return sinasi
     */
    public function setB3($b3)
    {
        $this->b3 = $b3;

        return $this;
    }

    /**
     * Get b3
     *
     * @return string
     */
    public function getB3()
    {
        return $this->b3;
    }

    /**
     * Set b4
     *
     * @param string $b4
     *
     * @return sinasi
     */
    public function setB4($b4)
    {
        $this->b4 = $b4;

        return $this;
    }

    /**
     * Get b4
     *
     * @return string
     */
    public function getB4()
    {
        return $this->b4;
    }

    /**
     * Set b5
     *
     * @param string $b5
     *
     * @return sinasi
     */
    public function setB5($b5)
    {
        $this->b5 = $b5;

        return $this;
    }

    /**
     * Get b5
     *
     * @return string
     */
    public function getB5()
    {
        return $this->b5;
    }

    /**
     * Set b6
     *
     * @param string $b6
     *
     * @return sinasi
     */
    public function setB6($b6)
    {
        $this->b6 = $b6;

        return $this;
    }

    /**
     * Get b6
     *
     * @return string
     */
    public function getB6()
    {
        return $this->b6;
    }

    /**
     * Set b7
     *
     * @param string $b7
     *
     * @return sinasi
     */
    public function setB7($b7)
    {
        $this->b7 = $b7;

        return $this;
    }

    /**
     * Get b7
     *
     * @return string
     */
    public function getB7()
    {
        return $this->b7;
    }

    /**
     * Set b8
     *
     * @param string $b8
     *
     * @return sinasi
     */
    public function setB8($b8)
    {
        $this->b8 = $b8;

        return $this;
    }

    /**
     * Get b8
     *
     * @return string
     */
    public function getB8()
    {
        return $this->b8;
    }

    /**
     * Set b9
     *
     * @param string $b9
     *
     * @return sinasi
     */
    public function setB9($b9)
    {
        $this->b9 = $b9;

        return $this;
    }

    /**
     * Get b9
     *
     * @return string
     */
    public function getB9()
    {
        return $this->b9;
    }

    /**
     * Set b10
     *
     * @param string $b10
     *
     * @return sinasi
     */
    public function setB10($b10)
    {
        $this->b10 = $b10;

        return $this;
    }

    /**
     * Get b10
     *
     * @return string
     */
    public function getB10()
    {
        return $this->b10;
    }

    /**
     * Set b11
     *
     * @param string $b11
     *
     * @return sinasi
     */
    public function setB11($b11)
    {
        $this->b11 = $b11;

        return $this;
    }

    /**
     * Get b11
     *
     * @return string
     */
    public function getB11()
    {
        return $this->b11;
    }

    /**
     * Set b12
     *
     * @param string $b12
     *
     * @return sinasi
     */
    public function setB12($b12)
    {
        $this->b12 = $b12;

        return $this;
    }

    /**
     * Get b12
     *
     * @return string
     */
    public function getB12()
    {
        return $this->b12;
    }

    /**
     * Set b13
     *
     * @param string $b13
     *
     * @return sinasi
     */
    public function setB13($b13)
    {
        $this->b13 = $b13;

        return $this;
    }

    /**
     * Get b13
     *
     * @return string
     */
    public function getB13()
    {
        return $this->b13;
    }

    /**
     * Set b14
     *
     * @param string $b14
     *
     * @return sinasi
     */
    public function setB14($b14)
    {
        $this->b14 = $b14;

        return $this;
    }

    /**
     * Get b14
     *
     * @return string
     */
    public function getB14()
    {
        return $this->b14;
    }

    /**
     * Set b15
     *
     * @param string $b15
     *
     * @return sinasi
     */
    public function setB15($b15)
    {
        $this->b15 = $b15;

        return $this;
    }

    /**
     * Get b15
     *
     * @return string
     */
    public function getB15()
    {
        return $this->b15;
    }

    /**
     * Set b16
     *
     * @param string $b16
     *
     * @return sinasi
     */
    public function setB16($b16)
    {
        $this->b16 = $b16;

        return $this;
    }

    /**
     * Get b16
     *
     * @return string
     */
    public function getB16()
    {
        return $this->b16;
    }

    /**
     * Set b17
     *
     * @param string $b17
     *
     * @return sinasi
     */
    public function setB17($b17)
    {
        $this->b17 = $b17;

        return $this;
    }

    /**
     * Get b17
     *
     * @return string
     */
    public function getB17()
    {
        return $this->b17;
    }

    /**
     * Set b18
     *
     * @param string $b18
     *
     * @return sinasi
     */
    public function setB18($b18)
    {
        $this->b18 = $b18;

        return $this;
    }

    /**
     * Get b18
     *
     * @return string
     */
    public function getB18()
    {
        return $this->b18;
    }

    /**
     * Set b19
     *
     * @param string $b19
     *
     * @return sinasi
     */
    public function setB19($b19)
    {
        $this->b19 = $b19;

        return $this;
    }

    /**
     * Get b19
     *
     * @return string
     */
    public function getB19()
    {
        return $this->b19;
    }

    /**
     * Set b20
     *
     * @param string $b20
     *
     * @return sinasi
     */
    public function setB20($b20)
    {
        $this->b20 = $b20;

        return $this;
    }

    /**
     * Get b20
     *
     * @return string
     */
    public function getB20()
    {
        return $this->b20;
    }

    /**
     * Set b21
     *
     * @param string $b21
     *
     * @return sinasi
     */
    public function setB21($b21)
    {
        $this->b21 = $b21;

        return $this;
    }

    /**
     * Get b21
     *
     * @return string
     */
    public function getB21()
    {
        return $this->b21;
    }

    /**
     * Set b22
     *
     * @param string $b22
     *
     * @return sinasi
     */
    public function setB22($b22)
    {
        $this->b22 = $b22;

        return $this;
    }

    /**
     * Get b22
     *
     * @return string
     */
    public function getB22()
    {
        return $this->b22;
    }

    /**
     * Set b23
     *
     * @param string $b23
     *
     * @return sinasi
     */
    public function setB23($b23)
    {
        $this->b23 = $b23;

        return $this;
    }

    /**
     * Get b23
     *
     * @return string
     */
    public function getB23()
    {
        return $this->b23;
    }

    /**
     * Set c1
     *
     * @param string $c1
     *
     * @return sinasi
     */
    public function setC1($c1)
    {
        $this->c1 = $c1;

        return $this;
    }

    /**
     * Get c1
     *
     * @return string
     */
    public function getC1()
    {
        return $this->c1;
    }

    /**
     * Set c2
     *
     * @param string $c2
     *
     * @return sinasi
     */
    public function setC2($c2)
    {
        $this->c2 = $c2;

        return $this;
    }

    /**
     * Get c2
     *
     * @return string
     */
    public function getC2()
    {
        return $this->c2;
    }

    /**
     * Set c4
     *
     * @param string $c4
     *
     * @return sinasi
     */
    public function setC4($c4)
    {
        $this->c4 = $c4;

        return $this;
    }

    /**
     * Get c4
     *
     * @return string
     */
    public function getC4()
    {
        return $this->c4;
    }

    /**
     * Set c3
     *
     * @param string $c3
     *
     * @return sinasi
     */
    public function setC3($c3)
    {
        $this->c3 = $c3;

        return $this;
    }

    /**
     * Get c3
     *
     * @return string
     */
    public function getC3()
    {
        return $this->c3;
    }

    /**
     * Set c5
     *
     * @param string $c5
     *
     * @return sinasi
     */
    public function setC5($c5)
    {
        $this->c5 = $c5;

        return $this;
    }

    /**
     * Get c5
     *
     * @return string
     */
    public function getC5()
    {
        return $this->c5;
    }

    /**
     * Set c6
     *
     * @param string $c6
     *
     * @return sinasi
     */
    public function setC6($c6)
    {
        $this->c6 = $c6;

        return $this;
    }

    /**
     * Get c6
     *
     * @return string
     */
    public function getC6()
    {
        return $this->c6;
    }

    /**
     * Set c7
     *
     * @param string $c7
     *
     * @return sinasi
     */
    public function setC7($c7)
    {
        $this->c7 = $c7;

        return $this;
    }

    /**
     * Get c7
     *
     * @return string
     */
    public function getC7()
    {
        return $this->c7;
    }

    /**
     * Set c8
     *
     * @param string $c8
     *
     * @return sinasi
     */
    public function setC8($c8)
    {
        $this->c8 = $c8;

        return $this;
    }

    /**
     * Get c8
     *
     * @return string
     */
    public function getC8()
    {
        return $this->c8;
    }

    /**
     * Set c9
     *
     * @param string $c9
     *
     * @return sinasi
     */
    public function setC9($c9)
    {
        $this->c9 = $c9;

        return $this;
    }

    /**
     * Get c9
     *
     * @return string
     */
    public function getC9()
    {
        return $this->c9;
    }

    /**
     * Set c10
     *
     * @param string $c10
     *
     * @return sinasi
     */
    public function setC10($c10)
    {
        $this->c10 = $c10;

        return $this;
    }

    /**
     * Get c10
     *
     * @return string
     */
    public function getC10()
    {
        return $this->c10;
    }

    /**
     * Set c11
     *
     * @param string $c11
     *
     * @return sinasi
     */
    public function setC11($c11)
    {
        $this->c11 = $c11;

        return $this;
    }

    /**
     * Get c11
     *
     * @return string
     */
    public function getC11()
    {
        return $this->c11;
    }

    /**
     * Set c12
     *
     * @param string $c12
     *
     * @return sinasi
     */
    public function setC12($c12)
    {
        $this->c12 = $c12;

        return $this;
    }

    /**
     * Get c12
     *
     * @return string
     */
    public function getC12()
    {
        return $this->c12;
    }

    /**
     * Set c13
     *
     * @param string $c13
     *
     * @return sinasi
     */
    public function setC13($c13)
    {
        $this->c13 = $c13;

        return $this;
    }

    /**
     * Get c13
     *
     * @return string
     */
    public function getC13()
    {
        return $this->c13;
    }

    /**
     * Set c14
     *
     * @param string $c14
     *
     * @return sinasi
     */
    public function setC14($c14)
    {
        $this->c14 = $c14;

        return $this;
    }

    /**
     * Get c14
     *
     * @return string
     */
    public function getC14()
    {
        return $this->c14;
    }

    /**
     * Set c15
     *
     * @param string $c15
     *
     * @return sinasi
     */
    public function setC15($c15)
    {
        $this->c15 = $c15;

        return $this;
    }

    /**
     * Get c15
     *
     * @return string
     */
    public function getC15()
    {
        return $this->c15;
    }

    /**
     * Set c16
     *
     * @param string $c16
     *
     * @return sinasi
     */
    public function setC16($c16)
    {
        $this->c16 = $c16;

        return $this;
    }

    /**
     * Get c16
     *
     * @return string
     */
    public function getC16()
    {
        return $this->c16;
    }

    /**
     * Set c17
     *
     * @param string $c17
     *
     * @return sinasi
     */
    public function setC17($c17)
    {
        $this->c17 = $c17;

        return $this;
    }

    /**
     * Get c17
     *
     * @return string
     */
    public function getC17()
    {
        return $this->c17;
    }

    /**
     * Set c18
     *
     * @param string $c18
     *
     * @return sinasi
     */
    public function setC18($c18)
    {
        $this->c18 = $c18;

        return $this;
    }

    /**
     * Get c18
     *
     * @return string
     */
    public function getC18()
    {
        return $this->c18;
    }

    /**
     * Set c19
     *
     * @param string $c19
     *
     * @return sinasi
     */
    public function setC19($c19)
    {
        $this->c19 = $c19;

        return $this;
    }

    /**
     * Get c19
     *
     * @return string
     */
    public function getC19()
    {
        return $this->c19;
    }

    /**
     * Set c20
     *
     * @param string $c20
     *
     * @return sinasi
     */
    public function setC20($c20)
    {
        $this->c20 = $c20;

        return $this;
    }

    /**
     * Get c20
     *
     * @return string
     */
    public function getC20()
    {
        return $this->c20;
    }

    /**
     * Set c21
     *
     * @param string $c21
     *
     * @return sinasi
     */
    public function setC21($c21)
    {
        $this->c21 = $c21;

        return $this;
    }

    /**
     * Get c21
     *
     * @return string
     */
    public function getC21()
    {
        return $this->c21;
    }

    /**
     * Set c22
     *
     * @param string $c22
     *
     * @return sinasi
     */
    public function setC22($c22)
    {
        $this->c22 = $c22;

        return $this;
    }

    /**
     * Get c22
     *
     * @return string
     */
    public function getC22()
    {
        return $this->c22;
    }

    /**
     * Set c23
     *
     * @param string $c23
     *
     * @return sinasi
     */
    public function setC23($c23)
    {
        $this->c23 = $c23;

        return $this;
    }

    /**
     * Get c23
     *
     * @return string
     */
    public function getC23()
    {
        return $this->c23;
    }

    /**
     * Set c24
     *
     * @param string $c24
     *
     * @return sinasi
     */
    public function setC24($c24)
    {
        $this->c24 = $c24;

        return $this;
    }

    /**
     * Get c24
     *
     * @return string
     */
    public function getC24()
    {
        return $this->c24;
    }

    /**
     * Set c25
     *
     * @param string $c25
     *
     * @return sinasi
     */
    public function setC25($c25)
    {
        $this->c25 = $c25;

        return $this;
    }

    /**
     * Get c25
     *
     * @return string
     */
    public function getC25()
    {
        return $this->c25;
    }

    /**
     * Set d1
     *
     * @param string $d1
     *
     * @return sinasi
     */
    public function setD1($d1)
    {
        $this->d1 = $d1;

        return $this;
    }

    /**
     * Get d1
     *
     * @return string
     */
    public function getD1()
    {
        return $this->d1;
    }

    /**
     * Set d2
     *
     * @param string $d2
     *
     * @return sinasi
     */
    public function setD2($d2)
    {
        $this->d2 = $d2;

        return $this;
    }

    /**
     * Get d2
     *
     * @return string
     */
    public function getD2()
    {
        return $this->d2;
    }

    /**
     * Set d3
     *
     * @param string $d3
     *
     * @return sinasi
     */
    public function setD3($d3)
    {
        $this->d3 = $d3;

        return $this;
    }

    /**
     * Get d3
     *
     * @return string
     */
    public function getD3()
    {
        return $this->d3;
    }

    /**
     * Set d4
     *
     * @param string $d4
     *
     * @return sinasi
     */
    public function setD4($d4)
    {
        $this->d4 = $d4;

        return $this;
    }

    /**
     * Get d4
     *
     * @return string
     */
    public function getD4()
    {
        return $this->d4;
    }

    /**
     * Set d5
     *
     * @param string $d5
     *
     * @return sinasi
     */
    public function setD5($d5)
    {
        $this->d5 = $d5;

        return $this;
    }

    /**
     * Get d5
     *
     * @return string
     */
    public function getD5()
    {
        return $this->d5;
    }

    /**
     * Set d6
     *
     * @param string $d6
     *
     * @return sinasi
     */
    public function setD6($d6)
    {
        $this->d6 = $d6;

        return $this;
    }

    /**
     * Get d6
     *
     * @return string
     */
    public function getD6()
    {
        return $this->d6;
    }

    /**
     * Set d7
     *
     * @param string $d7
     *
     * @return sinasi
     */
    public function setD7($d7)
    {
        $this->d7 = $d7;

        return $this;
    }

    /**
     * Get d7
     *
     * @return string
     */
    public function getD7()
    {
        return $this->d7;
    }

    /**
     * Set d8
     *
     * @param string $d8
     *
     * @return sinasi
     */
    public function setD8($d8)
    {
        $this->d8 = $d8;

        return $this;
    }

    /**
     * Get d8
     *
     * @return string
     */
    public function getD8()
    {
        return $this->d8;
    }

    /**
     * Set d9
     *
     * @param string $d9
     *
     * @return sinasi
     */
    public function setD9($d9)
    {
        $this->d9 = $d9;

        return $this;
    }

    /**
     * Get d9
     *
     * @return string
     */
    public function getD9()
    {
        return $this->d9;
    }

    /**
     * Set d10
     *
     * @param string $d10
     *
     * @return sinasi
     */
    public function setD10($d10)
    {
        $this->d10 = $d10;

        return $this;
    }

    /**
     * Get d10
     *
     * @return string
     */
    public function getD10()
    {
        return $this->d10;
    }

    /**
     * Set d11
     *
     * @param string $d11
     *
     * @return sinasi
     */
    public function setD11($d11)
    {
        $this->d11 = $d11;

        return $this;
    }

    /**
     * Get d11
     *
     * @return string
     */
    public function getD11()
    {
        return $this->d11;
    }

    /**
     * Set d12
     *
     * @param string $d12
     *
     * @return sinasi
     */
    public function setD12($d12)
    {
        $this->d12 = $d12;

        return $this;
    }

    /**
     * Get d12
     *
     * @return string
     */
    public function getD12()
    {
        return $this->d12;
    }

    /**
     * Set d13
     *
     * @param string $d13
     *
     * @return sinasi
     */
    public function setD13($d13)
    {
        $this->d13 = $d13;

        return $this;
    }

    /**
     * Get d13
     *
     * @return string
     */
    public function getD13()
    {
        return $this->d13;
    }

    /**
     * Set d14
     *
     * @param string $d14
     *
     * @return sinasi
     */
    public function setD14($d14)
    {
        $this->d14 = $d14;

        return $this;
    }

    /**
     * Get d14
     *
     * @return string
     */
    public function getD14()
    {
        return $this->d14;
    }

    /**
     * Set d15
     *
     * @param string $d15
     *
     * @return sinasi
     */
    public function setD15($d15)
    {
        $this->d15 = $d15;

        return $this;
    }

    /**
     * Get d15
     *
     * @return string
     */
    public function getD15()
    {
        return $this->d15;
    }

    /**
     * Set d16
     *
     * @param string $d16
     *
     * @return sinasi
     */
    public function setD16($d16)
    {
        $this->d16 = $d16;

        return $this;
    }

    /**
     * Get d16
     *
     * @return string
     */
    public function getD16()
    {
        return $this->d16;
    }

    /**
     * Set d17
     *
     * @param string $d17
     *
     * @return sinasi
     */
    public function setD17($d17)
    {
        $this->d17 = $d17;

        return $this;
    }

    /**
     * Get d17
     *
     * @return string
     */
    public function getD17()
    {
        return $this->d17;
    }

    /**
     * Set d18
     *
     * @param string $d18
     *
     * @return sinasi
     */
    public function setD18($d18)
    {
        $this->d18 = $d18;

        return $this;
    }

    /**
     * Get d18
     *
     * @return string
     */
    public function getD18()
    {
        return $this->d18;
    }

    /**
     * Set d19
     *
     * @param string $d19
     *
     * @return sinasi
     */
    public function setD19($d19)
    {
        $this->d19 = $d19;

        return $this;
    }

    /**
     * Get d19
     *
     * @return string
     */
    public function getD19()
    {
        return $this->d19;
    }

    /**
     * Set d20
     *
     * @param string $d20
     *
     * @return sinasi
     */
    public function setD20($d20)
    {
        $this->d20 = $d20;

        return $this;
    }

    /**
     * Get d20
     *
     * @return string
     */
    public function getD20()
    {
        return $this->d20;
    }

    /**
     * Set d21
     *
     * @param string $d21
     *
     * @return sinasi
     */
    public function setD21($d21)
    {
        $this->d21 = $d21;

        return $this;
    }

    /**
     * Get d21
     *
     * @return string
     */
    public function getD21()
    {
        return $this->d21;
    }

    /**
     * Set d22
     *
     * @param string $d22
     *
     * @return sinasi
     */
    public function setD22($d22)
    {
        $this->d22 = $d22;

        return $this;
    }

    /**
     * Get d22
     *
     * @return string
     */
    public function getD22()
    {
        return $this->d22;
    }

    /**
     * Set d23
     *
     * @param string $d23
     *
     * @return sinasi
     */
    public function setD23($d23)
    {
        $this->d23 = $d23;

        return $this;
    }

    /**
     * Get d23
     *
     * @return string
     */
    public function getD23()
    {
        return $this->d23;
    }

    /**
     * Set d24
     *
     * @param string $d24
     *
     * @return sinasi
     */
    public function setD24($d24)
    {
        $this->d24 = $d24;

        return $this;
    }

    /**
     * Get d24
     *
     * @return string
     */
    public function getD24()
    {
        return $this->d24;
    }

    /**
     * Set d25
     *
     * @param string $d25
     *
     * @return sinasi
     */
    public function setD25($d25)
    {
        $this->d25 = $d25;

        return $this;
    }

    /**
     * Get d25
     *
     * @return string
     */
    public function getD25()
    {
        return $this->d25;
    }

    /**
     * Set d26
     *
     * @param string $d26
     *
     * @return sinasi
     */
    public function setD26($d26)
    {
        $this->d26 = $d26;

        return $this;
    }

    /**
     * Get d26
     *
     * @return string
     */
    public function getD26()
    {
        return $this->d26;
    }

    /**
     * Set d27
     *
     * @param string $d27
     *
     * @return sinasi
     */
    public function setD27($d27)
    {
        $this->d27 = $d27;

        return $this;
    }

    /**
     * Get d27
     *
     * @return string
     */
    public function getD27()
    {
        return $this->d27;
    }

    /**
     * Set e1
     *
     * @param string $e1
     *
     * @return sinasi
     */
    public function setE1($e1)
    {
        $this->e1 = $e1;

        return $this;
    }

    /**
     * Get e1
     *
     * @return string
     */
    public function getE1()
    {
        return $this->e1;
    }

    /**
     * Set e2
     *
     * @param string $e2
     *
     * @return sinasi
     */
    public function setE2($e2)
    {
        $this->e2 = $e2;

        return $this;
    }

    /**
     * Get e2
     *
     * @return string
     */
    public function getE2()
    {
        return $this->e2;
    }

    /**
     * Set e3
     *
     * @param string $e3
     *
     * @return sinasi
     */
    public function setE3($e3)
    {
        $this->e3 = $e3;

        return $this;
    }

    /**
     * Get e3
     *
     * @return string
     */
    public function getE3()
    {
        return $this->e3;
    }

    /**
     * Set e4
     *
     * @param string $e4
     *
     * @return sinasi
     */
    public function setE4($e4)
    {
        $this->e4 = $e4;

        return $this;
    }

    /**
     * Get e4
     *
     * @return string
     */
    public function getE4()
    {
        return $this->e4;
    }

    /**
     * Set e5
     *
     * @param string $e5
     *
     * @return sinasi
     */
    public function setE5($e5)
    {
        $this->e5 = $e5;

        return $this;
    }

    /**
     * Get e5
     *
     * @return string
     */
    public function getE5()
    {
        return $this->e5;
    }

    /**
     * Set e6
     *
     * @param string $e6
     *
     * @return sinasi
     */
    public function setE6($e6)
    {
        $this->e6 = $e6;

        return $this;
    }

    /**
     * Get e6
     *
     * @return string
     */
    public function getE6()
    {
        return $this->e6;
    }

    /**
     * Set e7
     *
     * @param string $e7
     *
     * @return sinasi
     */
    public function setE7($e7)
    {
        $this->e7 = $e7;

        return $this;
    }

    /**
     * Get e7
     *
     * @return string
     */
    public function getE7()
    {
        return $this->e7;
    }

    /**
     * Set e8
     *
     * @param string $e8
     *
     * @return sinasi
     */
    public function setE8($e8)
    {
        $this->e8 = $e8;

        return $this;
    }

    /**
     * Get e8
     *
     * @return string
     */
    public function getE8()
    {
        return $this->e8;
    }

    /**
     * Set e9
     *
     * @param string $e9
     *
     * @return sinasi
     */
    public function setE9($e9)
    {
        $this->e9 = $e9;

        return $this;
    }

    /**
     * Get e9
     *
     * @return string
     */
    public function getE9()
    {
        return $this->e9;
    }

    /**
     * Set e10
     *
     * @param string $e10
     *
     * @return sinasi
     */
    public function setE10($e10)
    {
        $this->e10 = $e10;

        return $this;
    }

    /**
     * Get e10
     *
     * @return string
     */
    public function getE10()
    {
        return $this->e10;
    }

    /**
     * Set e11
     *
     * @param string $e11
     *
     * @return sinasi
     */
    public function setE11($e11)
    {
        $this->e11 = $e11;

        return $this;
    }

    /**
     * Get e11
     *
     * @return string
     */
    public function getE11()
    {
        return $this->e11;
    }

    /**
     * Set e12
     *
     * @param string $e12
     *
     * @return sinasi
     */
    public function setE12($e12)
    {
        $this->e12 = $e12;

        return $this;
    }

    /**
     * Get e12
     *
     * @return string
     */
    public function getE12()
    {
        return $this->e12;
    }

    /**
     * Set e13
     *
     * @param string $e13
     *
     * @return sinasi
     */
    public function setE13($e13)
    {
        $this->e13 = $e13;

        return $this;
    }

    /**
     * Get e13
     *
     * @return string
     */
    public function getE13()
    {
        return $this->e13;
    }

    /**
     * Set e14
     *
     * @param string $e14
     *
     * @return sinasi
     */
    public function setE14($e14)
    {
        $this->e14 = $e14;

        return $this;
    }

    /**
     * Get e14
     *
     * @return string
     */
    public function getE14()
    {
        return $this->e14;
    }

    /**
     * Set e15
     *
     * @param string $e15
     *
     * @return sinasi
     */
    public function setE15($e15)
    {
        $this->e15 = $e15;

        return $this;
    }

    /**
     * Get e15
     *
     * @return string
     */
    public function getE15()
    {
        return $this->e15;
    }

    /**
     * Set e16
     *
     * @param string $e16
     *
     * @return sinasi
     */
    public function setE16($e16)
    {
        $this->e16 = $e16;

        return $this;
    }

    /**
     * Get e16
     *
     * @return string
     */
    public function getE16()
    {
        return $this->e16;
    }

    /**
     * Set e17
     *
     * @param string $e17
     *
     * @return sinasi
     */
    public function setE17($e17)
    {
        $this->e17 = $e17;

        return $this;
    }

    /**
     * Get e17
     *
     * @return string
     */
    public function getE17()
    {
        return $this->e17;
    }

    /**
     * Set e18
     *
     * @param string $e18
     *
     * @return sinasi
     */
    public function setE18($e18)
    {
        $this->e18 = $e18;

        return $this;
    }

    /**
     * Get e18
     *
     * @return string
     */
    public function getE18()
    {
        return $this->e18;
    }

    /**
     * Set e19
     *
     * @param string $e19
     *
     * @return sinasi
     */
    public function setE19($e19)
    {
        $this->e19 = $e19;

        return $this;
    }

    /**
     * Get e19
     *
     * @return string
     */
    public function getE19()
    {
        return $this->e19;
    }

    /**
     * Set e20
     *
     * @param string $e20
     *
     * @return sinasi
     */
    public function setE20($e20)
    {
        $this->e20 = $e20;

        return $this;
    }

    /**
     * Get e20
     *
     * @return string
     */
    public function getE20()
    {
        return $this->e20;
    }

    /**
     * Set e21
     *
     * @param string $e21
     *
     * @return sinasi
     */
    public function setE21($e21)
    {
        $this->e21 = $e21;

        return $this;
    }

    /**
     * Get e21
     *
     * @return string
     */
    public function getE21()
    {
        return $this->e21;
    }

    /**
     * Set e22
     *
     * @param string $e22
     *
     * @return sinasi
     */
    public function setE22($e22)
    {
        $this->e22 = $e22;

        return $this;
    }

    /**
     * Get e22
     *
     * @return string
     */
    public function getE22()
    {
        return $this->e22;
    }

    /**
     * Set e23
     *
     * @param string $e23
     *
     * @return sinasi
     */
    public function setE23($e23)
    {
        $this->e23 = $e23;

        return $this;
    }

    /**
     * Get e23
     *
     * @return string
     */
    public function getE23()
    {
        return $this->e23;
    }

    /**
     * Set e24
     *
     * @param string $e24
     *
     * @return sinasi
     */
    public function setE24($e24)
    {
        $this->e24 = $e24;

        return $this;
    }

    /**
     * Get e24
     *
     * @return string
     */
    public function getE24()
    {
        return $this->e24;
    }

    /**
     * Set e25
     *
     * @param string $e25
     *
     * @return sinasi
     */
    public function setE25($e25)
    {
        $this->e25 = $e25;

        return $this;
    }

    /**
     * Get e25
     *
     * @return string
     */
    public function getE25()
    {
        return $this->e25;
    }

    /**
     * Set e26
     *
     * @param string $e26
     *
     * @return sinasi
     */
    public function setE26($e26)
    {
        $this->e26 = $e26;

        return $this;
    }

    /**
     * Get e26
     *
     * @return string
     */
    public function getE26()
    {
        return $this->e26;
    }

    /**
     * Set e27
     *
     * @param string $e27
     *
     * @return sinasi
     */
    public function setE27($e27)
    {
        $this->e27 = $e27;

        return $this;
    }

    /**
     * Get e27
     *
     * @return string
     */
    public function getE27()
    {
        return $this->e27;
    }

    /**
     * Set e28
     *
     * @param string $e28
     *
     * @return sinasi
     */
    public function setE28($e28)
    {
        $this->e28 = $e28;

        return $this;
    }

    /**
     * Get e28
     *
     * @return string
     */
    public function getE28()
    {
        return $this->e28;
    }

    /**
     * Set e29
     *
     * @param string $e29
     *
     * @return sinasi
     */
    public function setE29($e29)
    {
        $this->e29 = $e29;

        return $this;
    }

    /**
     * Get e29
     *
     * @return string
     */
    public function getE29()
    {
        return $this->e29;
    }

    /**
     * Set f1
     *
     * @param string $f1
     *
     * @return sinasi
     */
    public function setF1($f1)
    {
        $this->f1 = $f1;

        return $this;
    }

    /**
     * Get f1
     *
     * @return string
     */
    public function getF1()
    {
        return $this->f1;
    }

    /**
     * Set f2
     *
     * @param string $f2
     *
     * @return sinasi
     */
    public function setF2($f2)
    {
        $this->f2 = $f2;

        return $this;
    }

    /**
     * Get f2
     *
     * @return string
     */
    public function getF2()
    {
        return $this->f2;
    }

    /**
     * Set f3
     *
     * @param string $f3
     *
     * @return sinasi
     */
    public function setF3($f3)
    {
        $this->f3 = $f3;

        return $this;
    }

    /**
     * Get f3
     *
     * @return string
     */
    public function getF3()
    {
        return $this->f3;
    }

    /**
     * Set f4
     *
     * @param string $f4
     *
     * @return sinasi
     */
    public function setF4($f4)
    {
        $this->f4 = $f4;

        return $this;
    }

    /**
     * Get f4
     *
     * @return string
     */
    public function getF4()
    {
        return $this->f4;
    }

    /**
     * Set f5
     *
     * @param string $f5
     *
     * @return sinasi
     */
    public function setF5($f5)
    {
        $this->f5 = $f5;

        return $this;
    }

    /**
     * Get f5
     *
     * @return string
     */
    public function getF5()
    {
        return $this->f5;
    }

    /**
     * Set f6
     *
     * @param string $f6
     *
     * @return sinasi
     */
    public function setF6($f6)
    {
        $this->f6 = $f6;

        return $this;
    }

    /**
     * Get f6
     *
     * @return string
     */
    public function getF6()
    {
        return $this->f6;
    }

    /**
     * Set f7
     *
     * @param string $f7
     *
     * @return sinasi
     */
    public function setF7($f7)
    {
        $this->f7 = $f7;

        return $this;
    }

    /**
     * Get f7
     *
     * @return string
     */
    public function getF7()
    {
        return $this->f7;
    }

    /**
     * Set f8
     *
     * @param string $f8
     *
     * @return sinasi
     */
    public function setF8($f8)
    {
        $this->f8 = $f8;

        return $this;
    }

    /**
     * Get f8
     *
     * @return string
     */
    public function getF8()
    {
        return $this->f8;
    }

    /**
     * Set f9
     *
     * @param string $f9
     *
     * @return sinasi
     */
    public function setF9($f9)
    {
        $this->f9 = $f9;

        return $this;
    }

    /**
     * Get f9
     *
     * @return string
     */
    public function getF9()
    {
        return $this->f9;
    }

    /**
     * Set f10
     *
     * @param string $f10
     *
     * @return sinasi
     */
    public function setF10($f10)
    {
        $this->f10 = $f10;

        return $this;
    }

    /**
     * Get f10
     *
     * @return string
     */
    public function getF10()
    {
        return $this->f10;
    }

    /**
     * Set f11
     *
     * @param string $f11
     *
     * @return sinasi
     */
    public function setF11($f11)
    {
        $this->f11 = $f11;

        return $this;
    }

    /**
     * Get f11
     *
     * @return string
     */
    public function getF11()
    {
        return $this->f11;
    }

    /**
     * Set f12
     *
     * @param string $f12
     *
     * @return sinasi
     */
    public function setF12($f12)
    {
        $this->f12 = $f12;

        return $this;
    }

    /**
     * Get f12
     *
     * @return string
     */
    public function getF12()
    {
        return $this->f12;
    }

    /**
     * Set f13
     *
     * @param string $f13
     *
     * @return sinasi
     */
    public function setF13($f13)
    {
        $this->f13 = $f13;

        return $this;
    }

    /**
     * Get f13
     *
     * @return string
     */
    public function getF13()
    {
        return $this->f13;
    }

    /**
     * Set f14
     *
     * @param string $f14
     *
     * @return sinasi
     */
    public function setF14($f14)
    {
        $this->f14 = $f14;

        return $this;
    }

    /**
     * Get f14
     *
     * @return string
     */
    public function getF14()
    {
        return $this->f14;
    }

    /**
     * Set f15
     *
     * @param string $f15
     *
     * @return sinasi
     */
    public function setF15($f15)
    {
        $this->f15 = $f15;

        return $this;
    }

    /**
     * Get f15
     *
     * @return string
     */
    public function getF15()
    {
        return $this->f15;
    }

    /**
     * Set f16
     *
     * @param string $f16
     *
     * @return sinasi
     */
    public function setF16($f16)
    {
        $this->f16 = $f16;

        return $this;
    }

    /**
     * Get f16
     *
     * @return string
     */
    public function getF16()
    {
        return $this->f16;
    }

    /**
     * Set f17
     *
     * @param string $f17
     *
     * @return sinasi
     */
    public function setF17($f17)
    {
        $this->f17 = $f17;

        return $this;
    }

    /**
     * Get f17
     *
     * @return string
     */
    public function getF17()
    {
        return $this->f17;
    }

    /**
     * Set f18
     *
     * @param string $f18
     *
     * @return sinasi
     */
    public function setF18($f18)
    {
        $this->f18 = $f18;

        return $this;
    }

    /**
     * Get f18
     *
     * @return string
     */
    public function getF18()
    {
        return $this->f18;
    }

    /**
     * Set f19
     *
     * @param string $f19
     *
     * @return sinasi
     */
    public function setF19($f19)
    {
        $this->f19 = $f19;

        return $this;
    }

    /**
     * Get f19
     *
     * @return string
     */
    public function getF19()
    {
        return $this->f19;
    }

    /**
     * Set f20
     *
     * @param string $f20
     *
     * @return sinasi
     */
    public function setF20($f20)
    {
        $this->f20 = $f20;

        return $this;
    }

    /**
     * Get f20
     *
     * @return string
     */
    public function getF20()
    {
        return $this->f20;
    }

    /**
     * Set f21
     *
     * @param string $f21
     *
     * @return sinasi
     */
    public function setF21($f21)
    {
        $this->f21 = $f21;

        return $this;
    }

    /**
     * Get f21
     *
     * @return string
     */
    public function getF21()
    {
        return $this->f21;
    }

    /**
     * Set f22
     *
     * @param string $f22
     *
     * @return sinasi
     */
    public function setF22($f22)
    {
        $this->f22 = $f22;

        return $this;
    }

    /**
     * Get f22
     *
     * @return string
     */
    public function getF22()
    {
        return $this->f22;
    }

    /**
     * Set f23
     *
     * @param string $f23
     *
     * @return sinasi
     */
    public function setF23($f23)
    {
        $this->f23 = $f23;

        return $this;
    }

    /**
     * Get f23
     *
     * @return string
     */
    public function getF23()
    {
        return $this->f23;
    }

    /**
     * Set f24
     *
     * @param string $f24
     *
     * @return sinasi
     */
    public function setF24($f24)
    {
        $this->f24 = $f24;

        return $this;
    }

    /**
     * Get f24
     *
     * @return string
     */
    public function getF24()
    {
        return $this->f24;
    }

    /**
     * Set f25
     *
     * @param string $f25
     *
     * @return sinasi
     */
    public function setF25($f25)
    {
        $this->f25 = $f25;

        return $this;
    }

    /**
     * Get f25
     *
     * @return string
     */
    public function getF25()
    {
        return $this->f25;
    }

    /**
     * Set f26
     *
     * @param string $f26
     *
     * @return sinasi
     */
    public function setF26($f26)
    {
        $this->f26 = $f26;

        return $this;
    }

    /**
     * Get f26
     *
     * @return string
     */
    public function getF26()
    {
        return $this->f26;
    }

    /**
     * Set f27
     *
     * @param string $f27
     *
     * @return sinasi
     */
    public function setF27($f27)
    {
        $this->f27 = $f27;

        return $this;
    }

    /**
     * Get f27
     *
     * @return string
     */
    public function getF27()
    {
        return $this->f27;
    }

    /**
     * Set f28
     *
     * @param string $f28
     *
     * @return sinasi
     */
    public function setF28($f28)
    {
        $this->f28 = $f28;

        return $this;
    }

    /**
     * Get f28
     *
     * @return string
     */
    public function getF28()
    {
        return $this->f28;
    }

    /**
     * Set f29
     *
     * @param string $f29
     *
     * @return sinasi
     */
    public function setF29($f29)
    {
        $this->f29 = $f29;

        return $this;
    }

    /**
     * Get f29
     *
     * @return string
     */
    public function getF29()
    {
        return $this->f29;
    }

    /**
     * Set g1
     *
     * @param string $g1
     *
     * @return sinasi
     */
    public function setG1($g1)
    {
        $this->g1 = $g1;

        return $this;
    }

    /**
     * Get g1
     *
     * @return string
     */
    public function getG1()
    {
        return $this->g1;
    }

    /**
     * Set g2
     *
     * @param string $g2
     *
     * @return sinasi
     */
    public function setG2($g2)
    {
        $this->g2 = $g2;

        return $this;
    }

    /**
     * Get g2
     *
     * @return string
     */
    public function getG2()
    {
        return $this->g2;
    }

    /**
     * Set g3
     *
     * @param string $g3
     *
     * @return sinasi
     */
    public function setG3($g3)
    {
        $this->g3 = $g3;

        return $this;
    }

    /**
     * Get g3
     *
     * @return string
     */
    public function getG3()
    {
        return $this->g3;
    }

    /**
     * Set g4
     *
     * @param string $g4
     *
     * @return sinasi
     */
    public function setG4($g4)
    {
        $this->g4 = $g4;

        return $this;
    }

    /**
     * Get g4
     *
     * @return string
     */
    public function getG4()
    {
        return $this->g4;
    }

    /**
     * Set g5
     *
     * @param string $g5
     *
     * @return sinasi
     */
    public function setG5($g5)
    {
        $this->g5 = $g5;

        return $this;
    }

    /**
     * Get g5
     *
     * @return string
     */
    public function getG5()
    {
        return $this->g5;
    }

    /**
     * Set g6
     *
     * @param string $g6
     *
     * @return sinasi
     */
    public function setG6($g6)
    {
        $this->g6 = $g6;

        return $this;
    }

    /**
     * Get g6
     *
     * @return string
     */
    public function getG6()
    {
        return $this->g6;
    }

    /**
     * Set g7
     *
     * @param string $g7
     *
     * @return sinasi
     */
    public function setG7($g7)
    {
        $this->g7 = $g7;

        return $this;
    }

    /**
     * Get g7
     *
     * @return string
     */
    public function getG7()
    {
        return $this->g7;
    }

    /**
     * Set g8
     *
     * @param string $g8
     *
     * @return sinasi
     */
    public function setG8($g8)
    {
        $this->g8 = $g8;

        return $this;
    }

    /**
     * Get g8
     *
     * @return string
     */
    public function getG8()
    {
        return $this->g8;
    }

    /**
     * Set g9
     *
     * @param string $g9
     *
     * @return sinasi
     */
    public function setG9($g9)
    {
        $this->g9 = $g9;

        return $this;
    }

    /**
     * Get g9
     *
     * @return string
     */
    public function getG9()
    {
        return $this->g9;
    }

    /**
     * Set g10
     *
     * @param string $g10
     *
     * @return sinasi
     */
    public function setG10($g10)
    {
        $this->g10 = $g10;

        return $this;
    }

    /**
     * Get g10
     *
     * @return string
     */
    public function getG10()
    {
        return $this->g10;
    }

    /**
     * Set g11
     *
     * @param string $g11
     *
     * @return sinasi
     */
    public function setG11($g11)
    {
        $this->g11 = $g11;

        return $this;
    }

    /**
     * Get g11
     *
     * @return string
     */
    public function getG11()
    {
        return $this->g11;
    }

    /**
     * Set g12
     *
     * @param string $g12
     *
     * @return sinasi
     */
    public function setG12($g12)
    {
        $this->g12 = $g12;

        return $this;
    }

    /**
     * Get g12
     *
     * @return string
     */
    public function getG12()
    {
        return $this->g12;
    }

    /**
     * Set g13
     *
     * @param string $g13
     *
     * @return sinasi
     */
    public function setG13($g13)
    {
        $this->g13 = $g13;

        return $this;
    }

    /**
     * Get g13
     *
     * @return string
     */
    public function getG13()
    {
        return $this->g13;
    }

    /**
     * Set g14
     *
     * @param string $g14
     *
     * @return sinasi
     */
    public function setG14($g14)
    {
        $this->g14 = $g14;

        return $this;
    }

    /**
     * Get g14
     *
     * @return string
     */
    public function getG14()
    {
        return $this->g14;
    }

    /**
     * Set g15
     *
     * @param string $g15
     *
     * @return sinasi
     */
    public function setG15($g15)
    {
        $this->g15 = $g15;

        return $this;
    }

    /**
     * Get g15
     *
     * @return string
     */
    public function getG15()
    {
        return $this->g15;
    }

    /**
     * Set g16
     *
     * @param string $g16
     *
     * @return sinasi
     */
    public function setG16($g16)
    {
        $this->g16 = $g16;

        return $this;
    }

    /**
     * Get g16
     *
     * @return string
     */
    public function getG16()
    {
        return $this->g16;
    }

    /**
     * Set g17
     *
     * @param string $g17
     *
     * @return sinasi
     */
    public function setG17($g17)
    {
        $this->g17 = $g17;

        return $this;
    }

    /**
     * Get g17
     *
     * @return string
     */
    public function getG17()
    {
        return $this->g17;
    }

    /**
     * Set g18
     *
     * @param string $g18
     *
     * @return sinasi
     */
    public function setG18($g18)
    {
        $this->g18 = $g18;

        return $this;
    }

    /**
     * Get g18
     *
     * @return string
     */
    public function getG18()
    {
        return $this->g18;
    }

    /**
     * Set g19
     *
     * @param string $g19
     *
     * @return sinasi
     */
    public function setG19($g19)
    {
        $this->g19 = $g19;

        return $this;
    }

    /**
     * Get g19
     *
     * @return string
     */
    public function getG19()
    {
        return $this->g19;
    }

    /**
     * Set g20
     *
     * @param string $g20
     *
     * @return sinasi
     */
    public function setG20($g20)
    {
        $this->g20 = $g20;

        return $this;
    }

    /**
     * Get g20
     *
     * @return string
     */
    public function getG20()
    {
        return $this->g20;
    }

    /**
     * Set g21
     *
     * @param string $g21
     *
     * @return sinasi
     */
    public function setG21($g21)
    {
        $this->g21 = $g21;

        return $this;
    }

    /**
     * Get g21
     *
     * @return string
     */
    public function getG21()
    {
        return $this->g21;
    }

    /**
     * Set g22
     *
     * @param string $g22
     *
     * @return sinasi
     */
    public function setG22($g22)
    {
        $this->g22 = $g22;

        return $this;
    }

    /**
     * Get g22
     *
     * @return string
     */
    public function getG22()
    {
        return $this->g22;
    }

    /**
     * Set g23
     *
     * @param string $g23
     *
     * @return sinasi
     */
    public function setG23($g23)
    {
        $this->g23 = $g23;

        return $this;
    }

    /**
     * Get g23
     *
     * @return string
     */
    public function getG23()
    {
        return $this->g23;
    }

    /**
     * Set g24
     *
     * @param string $g24
     *
     * @return sinasi
     */
    public function setG24($g24)
    {
        $this->g24 = $g24;

        return $this;
    }

    /**
     * Get g24
     *
     * @return string
     */
    public function getG24()
    {
        return $this->g24;
    }

    /**
     * Set g25
     *
     * @param string $g25
     *
     * @return sinasi
     */
    public function setG25($g25)
    {
        $this->g25 = $g25;

        return $this;
    }

    /**
     * Get g25
     *
     * @return string
     */
    public function getG25()
    {
        return $this->g25;
    }

    /**
     * Set g26
     *
     * @param string $g26
     *
     * @return sinasi
     */
    public function setG26($g26)
    {
        $this->g26 = $g26;

        return $this;
    }

    /**
     * Get g26
     *
     * @return string
     */
    public function getG26()
    {
        return $this->g26;
    }

    /**
     * Set g27
     *
     * @param string $g27
     *
     * @return sinasi
     */
    public function setG27($g27)
    {
        $this->g27 = $g27;

        return $this;
    }

    /**
     * Get g27
     *
     * @return string
     */
    public function getG27()
    {
        return $this->g27;
    }

    /**
     * Set h1
     *
     * @param string $h1
     *
     * @return sinasi
     */
    public function setH1($h1)
    {
        $this->h1 = $h1;

        return $this;
    }

    /**
     * Get h1
     *
     * @return string
     */
    public function getH1()
    {
        return $this->h1;
    }

    /**
     * Set h2
     *
     * @param string $h2
     *
     * @return sinasi
     */
    public function setH2($h2)
    {
        $this->h2 = $h2;

        return $this;
    }

    /**
     * Get h2
     *
     * @return string
     */
    public function getH2()
    {
        return $this->h2;
    }

    /**
     * Set h3
     *
     * @param string $h3
     *
     * @return sinasi
     */
    public function setH3($h3)
    {
        $this->h3 = $h3;

        return $this;
    }

    /**
     * Get h3
     *
     * @return string
     */
    public function getH3()
    {
        return $this->h3;
    }

    /**
     * Set h4
     *
     * @param string $h4
     *
     * @return sinasi
     */
    public function setH4($h4)
    {
        $this->h4 = $h4;

        return $this;
    }

    /**
     * Get h4
     *
     * @return string
     */
    public function getH4()
    {
        return $this->h4;
    }

    /**
     * Set h5
     *
     * @param string $h5
     *
     * @return sinasi
     */
    public function setH5($h5)
    {
        $this->h5 = $h5;

        return $this;
    }

    /**
     * Get h5
     *
     * @return string
     */
    public function getH5()
    {
        return $this->h5;
    }

    /**
     * Set h6
     *
     * @param string $h6
     *
     * @return sinasi
     */
    public function setH6($h6)
    {
        $this->h6 = $h6;

        return $this;
    }

    /**
     * Get h6
     *
     * @return string
     */
    public function getH6()
    {
        return $this->h6;
    }

    /**
     * Set h7
     *
     * @param string $h7
     *
     * @return sinasi
     */
    public function setH7($h7)
    {
        $this->h7 = $h7;

        return $this;
    }

    /**
     * Get h7
     *
     * @return string
     */
    public function getH7()
    {
        return $this->h7;
    }

    /**
     * Set h8
     *
     * @param string $h8
     *
     * @return sinasi
     */
    public function setH8($h8)
    {
        $this->h8 = $h8;

        return $this;
    }

    /**
     * Get h8
     *
     * @return string
     */
    public function getH8()
    {
        return $this->h8;
    }

    /**
     * Set h9
     *
     * @param string $h9
     *
     * @return sinasi
     */
    public function setH9($h9)
    {
        $this->h9 = $h9;

        return $this;
    }

    /**
     * Get h9
     *
     * @return string
     */
    public function getH9()
    {
        return $this->h9;
    }

    /**
     * Set h10
     *
     * @param string $h10
     *
     * @return sinasi
     */
    public function setH10($h10)
    {
        $this->h10 = $h10;

        return $this;
    }

    /**
     * Get h10
     *
     * @return string
     */
    public function getH10()
    {
        return $this->h10;
    }

    /**
     * Set h11
     *
     * @param string $h11
     *
     * @return sinasi
     */
    public function setH11($h11)
    {
        $this->h11 = $h11;

        return $this;
    }

    /**
     * Get h11
     *
     * @return string
     */
    public function getH11()
    {
        return $this->h11;
    }

    /**
     * Set h12
     *
     * @param string $h12
     *
     * @return sinasi
     */
    public function setH12($h12)
    {
        $this->h12 = $h12;

        return $this;
    }

    /**
     * Get h12
     *
     * @return string
     */
    public function getH12()
    {
        return $this->h12;
    }

    /**
     * Set h13
     *
     * @param string $h13
     *
     * @return sinasi
     */
    public function setH13($h13)
    {
        $this->h13 = $h13;

        return $this;
    }

    /**
     * Get h13
     *
     * @return string
     */
    public function getH13()
    {
        return $this->h13;
    }

    /**
     * Set h14
     *
     * @param string $h14
     *
     * @return sinasi
     */
    public function setH14($h14)
    {
        $this->h14 = $h14;

        return $this;
    }

    /**
     * Get h14
     *
     * @return string
     */
    public function getH14()
    {
        return $this->h14;
    }

    /**
     * Set h15
     *
     * @param string $h15
     *
     * @return sinasi
     */
    public function setH15($h15)
    {
        $this->h15 = $h15;

        return $this;
    }

    /**
     * Get h15
     *
     * @return string
     */
    public function getH15()
    {
        return $this->h15;
    }

    /**
     * Set h16
     *
     * @param string $h16
     *
     * @return sinasi
     */
    public function setH16($h16)
    {
        $this->h16 = $h16;

        return $this;
    }

    /**
     * Get h16
     *
     * @return string
     */
    public function getH16()
    {
        return $this->h16;
    }

    /**
     * Set h17
     *
     * @param string $h17
     *
     * @return sinasi
     */
    public function setH17($h17)
    {
        $this->h17 = $h17;

        return $this;
    }

    /**
     * Get h17
     *
     * @return string
     */
    public function getH17()
    {
        return $this->h17;
    }

    /**
     * Set h18
     *
     * @param string $h18
     *
     * @return sinasi
     */
    public function setH18($h18)
    {
        $this->h18 = $h18;

        return $this;
    }

    /**
     * Get h18
     *
     * @return string
     */
    public function getH18()
    {
        return $this->h18;
    }

    /**
     * Set h19
     *
     * @param string $h19
     *
     * @return sinasi
     */
    public function setH19($h19)
    {
        $this->h19 = $h19;

        return $this;
    }

    /**
     * Get h19
     *
     * @return string
     */
    public function getH19()
    {
        return $this->h19;
    }

    /**
     * Set h20
     *
     * @param string $h20
     *
     * @return sinasi
     */
    public function setH20($h20)
    {
        $this->h20 = $h20;

        return $this;
    }

    /**
     * Get h20
     *
     * @return string
     */
    public function getH20()
    {
        return $this->h20;
    }

    /**
     * Set h21
     *
     * @param string $h21
     *
     * @return sinasi
     */
    public function setH21($h21)
    {
        $this->h21 = $h21;

        return $this;
    }

    /**
     * Get h21
     *
     * @return string
     */
    public function getH21()
    {
        return $this->h21;
    }

    /**
     * Set h22
     *
     * @param string $h22
     *
     * @return sinasi
     */
    public function setH22($h22)
    {
        $this->h22 = $h22;

        return $this;
    }

    /**
     * Get h22
     *
     * @return string
     */
    public function getH22()
    {
        return $this->h22;
    }

    /**
     * Set h23
     *
     * @param string $h23
     *
     * @return sinasi
     */
    public function setH23($h23)
    {
        $this->h23 = $h23;

        return $this;
    }

    /**
     * Get h23
     *
     * @return string
     */
    public function getH23()
    {
        return $this->h23;
    }

    /**
     * Set h24
     *
     * @param string $h24
     *
     * @return sinasi
     */
    public function setH24($h24)
    {
        $this->h24 = $h24;

        return $this;
    }

    /**
     * Get h24
     *
     * @return string
     */
    public function getH24()
    {
        return $this->h24;
    }

    /**
     * Set h25
     *
     * @param string $h25
     *
     * @return sinasi
     */
    public function setH25($h25)
    {
        $this->h25 = $h25;

        return $this;
    }

    /**
     * Get h25
     *
     * @return string
     */
    public function getH25()
    {
        return $this->h25;
    }

    /**
     * Set h26
     *
     * @param string $h26
     *
     * @return sinasi
     */
    public function setH26($h26)
    {
        $this->h26 = $h26;

        return $this;
    }

    /**
     * Get h26
     *
     * @return string
     */
    public function getH26()
    {
        return $this->h26;
    }

    /**
     * Set h27
     *
     * @param string $h27
     *
     * @return sinasi
     */
    public function setH27($h27)
    {
        $this->h27 = $h27;

        return $this;
    }

    /**
     * Get h27
     *
     * @return string
     */
    public function getH27()
    {
        return $this->h27;
    }

    /**
     * Set i1
     *
     * @param string $i1
     *
     * @return sinasi
     */
    public function setI1($i1)
    {
        $this->i1 = $i1;

        return $this;
    }

    /**
     * Get i1
     *
     * @return string
     */
    public function getI1()
    {
        return $this->i1;
    }

    /**
     * Set i2
     *
     * @param string $i2
     *
     * @return sinasi
     */
    public function setI2($i2)
    {
        $this->i2 = $i2;

        return $this;
    }

    /**
     * Get i2
     *
     * @return string
     */
    public function getI2()
    {
        return $this->i2;
    }

    /**
     * Set i3
     *
     * @param string $i3
     *
     * @return sinasi
     */
    public function setI3($i3)
    {
        $this->i3 = $i3;

        return $this;
    }

    /**
     * Get i3
     *
     * @return string
     */
    public function getI3()
    {
        return $this->i3;
    }

    /**
     * Set i4
     *
     * @param string $i4
     *
     * @return sinasi
     */
    public function setI4($i4)
    {
        $this->i4 = $i4;

        return $this;
    }

    /**
     * Get i4
     *
     * @return string
     */
    public function getI4()
    {
        return $this->i4;
    }

    /**
     * Set i5
     *
     * @param string $i5
     *
     * @return sinasi
     */
    public function setI5($i5)
    {
        $this->i5 = $i5;

        return $this;
    }

    /**
     * Get i5
     *
     * @return string
     */
    public function getI5()
    {
        return $this->i5;
    }

    /**
     * Set i6
     *
     * @param string $i6
     *
     * @return sinasi
     */
    public function setI6($i6)
    {
        $this->i6 = $i6;

        return $this;
    }

    /**
     * Get i6
     *
     * @return string
     */
    public function getI6()
    {
        return $this->i6;
    }

    /**
     * Set i7
     *
     * @param string $i7
     *
     * @return sinasi
     */
    public function setI7($i7)
    {
        $this->i7 = $i7;

        return $this;
    }

    /**
     * Get i7
     *
     * @return string
     */
    public function getI7()
    {
        return $this->i7;
    }

    /**
     * Set i8
     *
     * @param string $i8
     *
     * @return sinasi
     */
    public function setI8($i8)
    {
        $this->i8 = $i8;

        return $this;
    }

    /**
     * Get i8
     *
     * @return string
     */
    public function getI8()
    {
        return $this->i8;
    }

    /**
     * Set i9
     *
     * @param string $i9
     *
     * @return sinasi
     */
    public function setI9($i9)
    {
        $this->i9 = $i9;

        return $this;
    }

    /**
     * Get i9
     *
     * @return string
     */
    public function getI9()
    {
        return $this->i9;
    }

    /**
     * Set i10
     *
     * @param string $i10
     *
     * @return sinasi
     */
    public function setI10($i10)
    {
        $this->i10 = $i10;

        return $this;
    }

    /**
     * Get i10
     *
     * @return string
     */
    public function getI10()
    {
        return $this->i10;
    }

    /**
     * Set i11
     *
     * @param string $i11
     *
     * @return sinasi
     */
    public function setI11($i11)
    {
        $this->i11 = $i11;

        return $this;
    }

    /**
     * Get i11
     *
     * @return string
     */
    public function getI11()
    {
        return $this->i11;
    }

    /**
     * Set i12
     *
     * @param string $i12
     *
     * @return sinasi
     */
    public function setI12($i12)
    {
        $this->i12 = $i12;

        return $this;
    }

    /**
     * Get i12
     *
     * @return string
     */
    public function getI12()
    {
        return $this->i12;
    }

    /**
     * Set i13
     *
     * @param string $i13
     *
     * @return sinasi
     */
    public function setI13($i13)
    {
        $this->i13 = $i13;

        return $this;
    }

    /**
     * Get i13
     *
     * @return string
     */
    public function getI13()
    {
        return $this->i13;
    }

    /**
     * Set i14
     *
     * @param string $i14
     *
     * @return sinasi
     */
    public function setI14($i14)
    {
        $this->i14 = $i14;

        return $this;
    }

    /**
     * Get i14
     *
     * @return string
     */
    public function getI14()
    {
        return $this->i14;
    }

    /**
     * Set i15
     *
     * @param string $i15
     *
     * @return sinasi
     */
    public function setI15($i15)
    {
        $this->i15 = $i15;

        return $this;
    }

    /**
     * Get i15
     *
     * @return string
     */
    public function getI15()
    {
        return $this->i15;
    }

    /**
     * Set i16
     *
     * @param string $i16
     *
     * @return sinasi
     */
    public function setI16($i16)
    {
        $this->i16 = $i16;

        return $this;
    }

    /**
     * Get i16
     *
     * @return string
     */
    public function getI16()
    {
        return $this->i16;
    }

    /**
     * Set i17
     *
     * @param string $i17
     *
     * @return sinasi
     */
    public function setI17($i17)
    {
        $this->i17 = $i17;

        return $this;
    }

    /**
     * Get i17
     *
     * @return string
     */
    public function getI17()
    {
        return $this->i17;
    }

    /**
     * Set i18
     *
     * @param string $i18
     *
     * @return sinasi
     */
    public function setI18($i18)
    {
        $this->i18 = $i18;

        return $this;
    }

    /**
     * Get i18
     *
     * @return string
     */
    public function getI18()
    {
        return $this->i18;
    }

    /**
     * Set i19
     *
     * @param string $i19
     *
     * @return sinasi
     */
    public function setI19($i19)
    {
        $this->i19 = $i19;

        return $this;
    }

    /**
     * Get i19
     *
     * @return string
     */
    public function getI19()
    {
        return $this->i19;
    }

    /**
     * Set i20
     *
     * @param string $i20
     *
     * @return sinasi
     */
    public function setI20($i20)
    {
        $this->i20 = $i20;

        return $this;
    }

    /**
     * Get i20
     *
     * @return string
     */
    public function getI20()
    {
        return $this->i20;
    }

    /**
     * Set i21
     *
     * @param string $i21
     *
     * @return sinasi
     */
    public function setI21($i21)
    {
        $this->i21 = $i21;

        return $this;
    }

    /**
     * Get i21
     *
     * @return string
     */
    public function getI21()
    {
        return $this->i21;
    }

    /**
     * Set i22
     *
     * @param string $i22
     *
     * @return sinasi
     */
    public function setI22($i22)
    {
        $this->i22 = $i22;

        return $this;
    }

    /**
     * Get i22
     *
     * @return string
     */
    public function getI22()
    {
        return $this->i22;
    }

    /**
     * Set i23
     *
     * @param string $i23
     *
     * @return sinasi
     */
    public function setI23($i23)
    {
        $this->i23 = $i23;

        return $this;
    }

    /**
     * Get i23
     *
     * @return string
     */
    public function getI23()
    {
        return $this->i23;
    }

    /**
     * Set i24
     *
     * @param string $i24
     *
     * @return sinasi
     */
    public function setI24($i24)
    {
        $this->i24 = $i24;

        return $this;
    }

    /**
     * Get i24
     *
     * @return string
     */
    public function getI24()
    {
        return $this->i24;
    }

    /**
     * Set i25
     *
     * @param string $i25
     *
     * @return sinasi
     */
    public function setI25($i25)
    {
        $this->i25 = $i25;

        return $this;
    }

    /**
     * Get i25
     *
     * @return string
     */
    public function getI25()
    {
        return $this->i25;
    }

    /**
     * Set i26
     *
     * @param string $i26
     *
     * @return sinasi
     */
    public function setI26($i26)
    {
        $this->i26 = $i26;

        return $this;
    }

    /**
     * Get i26
     *
     * @return string
     */
    public function getI26()
    {
        return $this->i26;
    }

    /**
     * Set i27
     *
     * @param string $i27
     *
     * @return sinasi
     */
    public function setI27($i27)
    {
        $this->i27 = $i27;

        return $this;
    }

    /**
     * Get i27
     *
     * @return string
     */
    public function getI27()
    {
        return $this->i27;
    }

    /**
     * Set i28
     *
     * @param string $i28
     *
     * @return sinasi
     */
    public function setI28($i28)
    {
        $this->i28 = $i28;

        return $this;
    }

    /**
     * Get i28
     *
     * @return string
     */
    public function getI28()
    {
        return $this->i28;
    }

    /**
     * Set i29
     *
     * @param string $i29
     *
     * @return sinasi
     */
    public function setI29($i29)
    {
        $this->i29 = $i29;

        return $this;
    }

    /**
     * Get i29
     *
     * @return string
     */
    public function getI29()
    {
        return $this->i29;
    }

    /**
     * Set j1
     *
     * @param string $j1
     *
     * @return sinasi
     */
    public function setJ1($j1)
    {
        $this->j1 = $j1;

        return $this;
    }

    /**
     * Get j1
     *
     * @return string
     */
    public function getJ1()
    {
        return $this->j1;
    }

    /**
     * Set j2
     *
     * @param string $j2
     *
     * @return sinasi
     */
    public function setJ2($j2)
    {
        $this->j2 = $j2;

        return $this;
    }

    /**
     * Get j2
     *
     * @return string
     */
    public function getJ2()
    {
        return $this->j2;
    }

    /**
     * Set j3
     *
     * @param string $j3
     *
     * @return sinasi
     */
    public function setJ3($j3)
    {
        $this->j3 = $j3;

        return $this;
    }

    /**
     * Get j3
     *
     * @return string
     */
    public function getJ3()
    {
        return $this->j3;
    }

    /**
     * Set j4
     *
     * @param string $j4
     *
     * @return sinasi
     */
    public function setJ4($j4)
    {
        $this->j4 = $j4;

        return $this;
    }

    /**
     * Get j4
     *
     * @return string
     */
    public function getJ4()
    {
        return $this->j4;
    }

    /**
     * Set j5
     *
     * @param string $j5
     *
     * @return sinasi
     */
    public function setJ5($j5)
    {
        $this->j5 = $j5;

        return $this;
    }

    /**
     * Get j5
     *
     * @return string
     */
    public function getJ5()
    {
        return $this->j5;
    }

    /**
     * Set j6
     *
     * @param string $j6
     *
     * @return sinasi
     */
    public function setJ6($j6)
    {
        $this->j6 = $j6;

        return $this;
    }

    /**
     * Get j6
     *
     * @return string
     */
    public function getJ6()
    {
        return $this->j6;
    }

    /**
     * Set j7
     *
     * @param string $j7
     *
     * @return sinasi
     */
    public function setJ7($j7)
    {
        $this->j7 = $j7;

        return $this;
    }

    /**
     * Get j7
     *
     * @return string
     */
    public function getJ7()
    {
        return $this->j7;
    }

    /**
     * Set j8
     *
     * @param string $j8
     *
     * @return sinasi
     */
    public function setJ8($j8)
    {
        $this->j8 = $j8;

        return $this;
    }

    /**
     * Get j8
     *
     * @return string
     */
    public function getJ8()
    {
        return $this->j8;
    }

    /**
     * Set j9
     *
     * @param string $j9
     *
     * @return sinasi
     */
    public function setJ9($j9)
    {
        $this->j9 = $j9;

        return $this;
    }

    /**
     * Get j9
     *
     * @return string
     */
    public function getJ9()
    {
        return $this->j9;
    }

    /**
     * Set j10
     *
     * @param string $j10
     *
     * @return sinasi
     */
    public function setJ10($j10)
    {
        $this->j10 = $j10;

        return $this;
    }

    /**
     * Get j10
     *
     * @return string
     */
    public function getJ10()
    {
        return $this->j10;
    }

    /**
     * Set j11
     *
     * @param string $j11
     *
     * @return sinasi
     */
    public function setJ11($j11)
    {
        $this->j11 = $j11;

        return $this;
    }

    /**
     * Get j11
     *
     * @return string
     */
    public function getJ11()
    {
        return $this->j11;
    }

    /**
     * Set j12
     *
     * @param string $j12
     *
     * @return sinasi
     */
    public function setJ12($j12)
    {
        $this->j12 = $j12;

        return $this;
    }

    /**
     * Get j12
     *
     * @return string
     */
    public function getJ12()
    {
        return $this->j12;
    }

    /**
     * Set j13
     *
     * @param string $j13
     *
     * @return sinasi
     */
    public function setJ13($j13)
    {
        $this->j13 = $j13;

        return $this;
    }

    /**
     * Get j13
     *
     * @return string
     */
    public function getJ13()
    {
        return $this->j13;
    }

    /**
     * Set j14
     *
     * @param string $j14
     *
     * @return sinasi
     */
    public function setJ14($j14)
    {
        $this->j14 = $j14;

        return $this;
    }

    /**
     * Get j14
     *
     * @return string
     */
    public function getJ14()
    {
        return $this->j14;
    }

    /**
     * Set j15
     *
     * @param string $j15
     *
     * @return sinasi
     */
    public function setJ15($j15)
    {
        $this->j15 = $j15;

        return $this;
    }

    /**
     * Get j15
     *
     * @return string
     */
    public function getJ15()
    {
        return $this->j15;
    }

    /**
     * Set j16
     *
     * @param string $j16
     *
     * @return sinasi
     */
    public function setJ16($j16)
    {
        $this->j16 = $j16;

        return $this;
    }

    /**
     * Get j16
     *
     * @return string
     */
    public function getJ16()
    {
        return $this->j16;
    }

    /**
     * Set j17
     *
     * @param string $j17
     *
     * @return sinasi
     */
    public function setJ17($j17)
    {
        $this->j17 = $j17;

        return $this;
    }

    /**
     * Get j17
     *
     * @return string
     */
    public function getJ17()
    {
        return $this->j17;
    }

    /**
     * Set j18
     *
     * @param string $j18
     *
     * @return sinasi
     */
    public function setJ18($j18)
    {
        $this->j18 = $j18;

        return $this;
    }

    /**
     * Get j18
     *
     * @return string
     */
    public function getJ18()
    {
        return $this->j18;
    }

    /**
     * Set j19
     *
     * @param string $j19
     *
     * @return sinasi
     */
    public function setJ19($j19)
    {
        $this->j19 = $j19;

        return $this;
    }

    /**
     * Get j19
     *
     * @return string
     */
    public function getJ19()
    {
        return $this->j19;
    }

    /**
     * Set j20
     *
     * @param string $j20
     *
     * @return sinasi
     */
    public function setJ20($j20)
    {
        $this->j20 = $j20;

        return $this;
    }

    /**
     * Get j20
     *
     * @return string
     */
    public function getJ20()
    {
        return $this->j20;
    }

    /**
     * Set j21
     *
     * @param string $j21
     *
     * @return sinasi
     */
    public function setJ21($j21)
    {
        $this->j21 = $j21;

        return $this;
    }

    /**
     * Get j21
     *
     * @return string
     */
    public function getJ21()
    {
        return $this->j21;
    }

    /**
     * Set j22
     *
     * @param string $j22
     *
     * @return sinasi
     */
    public function setJ22($j22)
    {
        $this->j22 = $j22;

        return $this;
    }

    /**
     * Get j22
     *
     * @return string
     */
    public function getJ22()
    {
        return $this->j22;
    }

    /**
     * Set j23
     *
     * @param string $j23
     *
     * @return sinasi
     */
    public function setJ23($j23)
    {
        $this->j23 = $j23;

        return $this;
    }

    /**
     * Get j23
     *
     * @return string
     */
    public function getJ23()
    {
        return $this->j23;
    }

    /**
     * Set j24
     *
     * @param string $j24
     *
     * @return sinasi
     */
    public function setJ24($j24)
    {
        $this->j24 = $j24;

        return $this;
    }

    /**
     * Get j24
     *
     * @return string
     */
    public function getJ24()
    {
        return $this->j24;
    }

    /**
     * Set j25
     *
     * @param string $j25
     *
     * @return sinasi
     */
    public function setJ25($j25)
    {
        $this->j25 = $j25;

        return $this;
    }

    /**
     * Get j25
     *
     * @return string
     */
    public function getJ25()
    {
        return $this->j25;
    }

    /**
     * Set j26
     *
     * @param string $j26
     *
     * @return sinasi
     */
    public function setJ26($j26)
    {
        $this->j26 = $j26;

        return $this;
    }

    /**
     * Get j26
     *
     * @return string
     */
    public function getJ26()
    {
        return $this->j26;
    }

    /**
     * Set j27
     *
     * @param string $j27
     *
     * @return sinasi
     */
    public function setJ27($j27)
    {
        $this->j27 = $j27;

        return $this;
    }

    /**
     * Get j27
     *
     * @return string
     */
    public function getJ27()
    {
        return $this->j27;
    }

    /**
     * Set j28
     *
     * @param string $j28
     *
     * @return sinasi
     */
    public function setJ28($j28)
    {
        $this->j28 = $j28;

        return $this;
    }

    /**
     * Get j28
     *
     * @return string
     */
    public function getJ28()
    {
        return $this->j28;
    }

    /**
     * Set j29
     *
     * @param string $j29
     *
     * @return sinasi
     */
    public function setJ29($j29)
    {
        $this->j29 = $j29;

        return $this;
    }

    /**
     * Get j29
     *
     * @return string
     */
    public function getJ29()
    {
        return $this->j29;
    }

    /**
     * Set j30
     *
     * @param string $j30
     *
     * @return sinasi
     */
    public function setJ30($j30)
    {
        $this->j30 = $j30;

        return $this;
    }

    /**
     * Get j30
     *
     * @return string
     */
    public function getJ30()
    {
        return $this->j30;
    }

    /**
     * Set j31
     *
     * @param string $j31
     *
     * @return sinasi
     */
    public function setJ31($j31)
    {
        $this->j31 = $j31;

        return $this;
    }

    /**
     * Get j31
     *
     * @return string
     */
    public function getJ31()
    {
        return $this->j31;
    }

    /**
     * Set k1
     *
     * @param string $k1
     *
     * @return sinasi
     */
    public function setK1($k1)
    {
        $this->k1 = $k1;

        return $this;
    }

    /**
     * Get k1
     *
     * @return string
     */
    public function getK1()
    {
        return $this->k1;
    }

    /**
     * Set k2
     *
     * @param string $k2
     *
     * @return sinasi
     */
    public function setK2($k2)
    {
        $this->k2 = $k2;

        return $this;
    }

    /**
     * Get k2
     *
     * @return string
     */
    public function getK2()
    {
        return $this->k2;
    }

    /**
     * Set k3
     *
     * @param string $k3
     *
     * @return sinasi
     */
    public function setK3($k3)
    {
        $this->k3 = $k3;

        return $this;
    }

    /**
     * Get k3
     *
     * @return string
     */
    public function getK3()
    {
        return $this->k3;
    }

    /**
     * Set k4
     *
     * @param string $k4
     *
     * @return sinasi
     */
    public function setK4($k4)
    {
        $this->k4 = $k4;

        return $this;
    }

    /**
     * Get k4
     *
     * @return string
     */
    public function getK4()
    {
        return $this->k4;
    }

    /**
     * Set k5
     *
     * @param string $k5
     *
     * @return sinasi
     */
    public function setK5($k5)
    {
        $this->k5 = $k5;

        return $this;
    }

    /**
     * Get k5
     *
     * @return string
     */
    public function getK5()
    {
        return $this->k5;
    }

    /**
     * Set k6
     *
     * @param string $k6
     *
     * @return sinasi
     */
    public function setK6($k6)
    {
        $this->k6 = $k6;

        return $this;
    }

    /**
     * Get k6
     *
     * @return string
     */
    public function getK6()
    {
        return $this->k6;
    }

    /**
     * Set k7
     *
     * @param string $k7
     *
     * @return sinasi
     */
    public function setK7($k7)
    {
        $this->k7 = $k7;

        return $this;
    }

    /**
     * Get k7
     *
     * @return string
     */
    public function getK7()
    {
        return $this->k7;
    }

    /**
     * Set k8
     *
     * @param string $k8
     *
     * @return sinasi
     */
    public function setK8($k8)
    {
        $this->k8 = $k8;

        return $this;
    }

    /**
     * Get k8
     *
     * @return string
     */
    public function getK8()
    {
        return $this->k8;
    }

    /**
     * Set k9
     *
     * @param string $k9
     *
     * @return sinasi
     */
    public function setK9($k9)
    {
        $this->k9 = $k9;

        return $this;
    }

    /**
     * Get k9
     *
     * @return string
     */
    public function getK9()
    {
        return $this->k9;
    }

    /**
     * Set k10
     *
     * @param string $k10
     *
     * @return sinasi
     */
    public function setK10($k10)
    {
        $this->k10 = $k10;

        return $this;
    }

    /**
     * Get k10
     *
     * @return string
     */
    public function getK10()
    {
        return $this->k10;
    }

    /**
     * Set k11
     *
     * @param string $k11
     *
     * @return sinasi
     */
    public function setK11($k11)
    {
        $this->k11 = $k11;

        return $this;
    }

    /**
     * Get k11
     *
     * @return string
     */
    public function getK11()
    {
        return $this->k11;
    }

    /**
     * Set k12
     *
     * @param string $k12
     *
     * @return sinasi
     */
    public function setK12($k12)
    {
        $this->k12 = $k12;

        return $this;
    }

    /**
     * Get k12
     *
     * @return string
     */
    public function getK12()
    {
        return $this->k12;
    }

    /**
     * Set k13
     *
     * @param string $k13
     *
     * @return sinasi
     */
    public function setK13($k13)
    {
        $this->k13 = $k13;

        return $this;
    }

    /**
     * Get k13
     *
     * @return string
     */
    public function getK13()
    {
        return $this->k13;
    }

    /**
     * Set k14
     *
     * @param string $k14
     *
     * @return sinasi
     */
    public function setK14($k14)
    {
        $this->k14 = $k14;

        return $this;
    }

    /**
     * Get k14
     *
     * @return string
     */
    public function getK14()
    {
        return $this->k14;
    }

    /**
     * Set k15
     *
     * @param string $k15
     *
     * @return sinasi
     */
    public function setK15($k15)
    {
        $this->k15 = $k15;

        return $this;
    }

    /**
     * Get k15
     *
     * @return string
     */
    public function getK15()
    {
        return $this->k15;
    }

    /**
     * Set k16
     *
     * @param string $k16
     *
     * @return sinasi
     */
    public function setK16($k16)
    {
        $this->k16 = $k16;

        return $this;
    }

    /**
     * Get k16
     *
     * @return string
     */
    public function getK16()
    {
        return $this->k16;
    }

    /**
     * Set k17
     *
     * @param string $k17
     *
     * @return sinasi
     */
    public function setK17($k17)
    {
        $this->k17 = $k17;

        return $this;
    }

    /**
     * Get k17
     *
     * @return string
     */
    public function getK17()
    {
        return $this->k17;
    }

    /**
     * Set k18
     *
     * @param string $k18
     *
     * @return sinasi
     */
    public function setK18($k18)
    {
        $this->k18 = $k18;

        return $this;
    }

    /**
     * Get k18
     *
     * @return string
     */
    public function getK18()
    {
        return $this->k18;
    }

    /**
     * Set k19
     *
     * @param string $k19
     *
     * @return sinasi
     */
    public function setK19($k19)
    {
        $this->k19 = $k19;

        return $this;
    }

    /**
     * Get k19
     *
     * @return string
     */
    public function getK19()
    {
        return $this->k19;
    }

    /**
     * Set k20
     *
     * @param string $k20
     *
     * @return sinasi
     */
    public function setK20($k20)
    {
        $this->k20 = $k20;

        return $this;
    }

    /**
     * Get k20
     *
     * @return string
     */
    public function getK20()
    {
        return $this->k20;
    }

    /**
     * Set k21
     *
     * @param string $k21
     *
     * @return sinasi
     */
    public function setK21($k21)
    {
        $this->k21 = $k21;

        return $this;
    }

    /**
     * Get k21
     *
     * @return string
     */
    public function getK21()
    {
        return $this->k21;
    }

    /**
     * Set k22
     *
     * @param string $k22
     *
     * @return sinasi
     */
    public function setK22($k22)
    {
        $this->k22 = $k22;

        return $this;
    }

    /**
     * Get k22
     *
     * @return string
     */
    public function getK22()
    {
        return $this->k22;
    }

    /**
     * Set k23
     *
     * @param string $k23
     *
     * @return sinasi
     */
    public function setK23($k23)
    {
        $this->k23 = $k23;

        return $this;
    }

    /**
     * Get k23
     *
     * @return string
     */
    public function getK23()
    {
        return $this->k23;
    }

    /**
     * Set k24
     *
     * @param string $k24
     *
     * @return sinasi
     */
    public function setK24($k24)
    {
        $this->k24 = $k24;

        return $this;
    }

    /**
     * Get k24
     *
     * @return string
     */
    public function getK24()
    {
        return $this->k24;
    }

    /**
     * Set k25
     *
     * @param string $k25
     *
     * @return sinasi
     */
    public function setK25($k25)
    {
        $this->k25 = $k25;

        return $this;
    }

    /**
     * Get k25
     *
     * @return string
     */
    public function getK25()
    {
        return $this->k25;
    }

    /**
     * Set k26
     *
     * @param string $k26
     *
     * @return sinasi
     */
    public function setK26($k26)
    {
        $this->k26 = $k26;

        return $this;
    }

    /**
     * Get k26
     *
     * @return string
     */
    public function getK26()
    {
        return $this->k26;
    }

    /**
     * Set k27
     *
     * @param string $k27
     *
     * @return sinasi
     */
    public function setK27($k27)
    {
        $this->k27 = $k27;

        return $this;
    }

    /**
     * Get k27
     *
     * @return string
     */
    public function getK27()
    {
        return $this->k27;
    }

    /**
     * Set k28
     *
     * @param string $k28
     *
     * @return sinasi
     */
    public function setK28($k28)
    {
        $this->k28 = $k28;

        return $this;
    }

    /**
     * Get k28
     *
     * @return string
     */
    public function getK28()
    {
        return $this->k28;
    }

    /**
     * Set k29
     *
     * @param string $k29
     *
     * @return sinasi
     */
    public function setK29($k29)
    {
        $this->k29 = $k29;

        return $this;
    }

    /**
     * Get k29
     *
     * @return string
     */
    public function getK29()
    {
        return $this->k29;
    }

    /**
     * Set l1
     *
     * @param string $l1
     *
     * @return sinasi
     */
    public function setL1($l1)
    {
        $this->l1 = $l1;

        return $this;
    }

    /**
     * Get l1
     *
     * @return string
     */
    public function getL1()
    {
        return $this->l1;
    }

    /**
     * Set l2
     *
     * @param string $l2
     *
     * @return sinasi
     */
    public function setL2($l2)
    {
        $this->l2 = $l2;

        return $this;
    }

    /**
     * Get l2
     *
     * @return string
     */
    public function getL2()
    {
        return $this->l2;
    }

    /**
     * Set l3
     *
     * @param string $l3
     *
     * @return sinasi
     */
    public function setL3($l3)
    {
        $this->l3 = $l3;

        return $this;
    }

    /**
     * Get l3
     *
     * @return string
     */
    public function getL3()
    {
        return $this->l3;
    }

    /**
     * Set l4
     *
     * @param string $l4
     *
     * @return sinasi
     */
    public function setL4($l4)
    {
        $this->l4 = $l4;

        return $this;
    }

    /**
     * Get l4
     *
     * @return string
     */
    public function getL4()
    {
        return $this->l4;
    }

    /**
     * Set l5
     *
     * @param string $l5
     *
     * @return sinasi
     */
    public function setL5($l5)
    {
        $this->l5 = $l5;

        return $this;
    }

    /**
     * Get l5
     *
     * @return string
     */
    public function getL5()
    {
        return $this->l5;
    }

    /**
     * Set l6
     *
     * @param string $l6
     *
     * @return sinasi
     */
    public function setL6($l6)
    {
        $this->l6 = $l6;

        return $this;
    }

    /**
     * Get l6
     *
     * @return string
     */
    public function getL6()
    {
        return $this->l6;
    }

    /**
     * Set l7
     *
     * @param string $l7
     *
     * @return sinasi
     */
    public function setL7($l7)
    {
        $this->l7 = $l7;

        return $this;
    }

    /**
     * Get l7
     *
     * @return string
     */
    public function getL7()
    {
        return $this->l7;
    }

    /**
     * Set l8
     *
     * @param string $l8
     *
     * @return sinasi
     */
    public function setL8($l8)
    {
        $this->l8 = $l8;

        return $this;
    }

    /**
     * Get l8
     *
     * @return string
     */
    public function getL8()
    {
        return $this->l8;
    }

    /**
     * Set l9
     *
     * @param string $l9
     *
     * @return sinasi
     */
    public function setL9($l9)
    {
        $this->l9 = $l9;

        return $this;
    }

    /**
     * Get l9
     *
     * @return string
     */
    public function getL9()
    {
        return $this->l9;
    }

    /**
     * Set l10
     *
     * @param string $l10
     *
     * @return sinasi
     */
    public function setL10($l10)
    {
        $this->l10 = $l10;

        return $this;
    }

    /**
     * Get l10
     *
     * @return string
     */
    public function getL10()
    {
        return $this->l10;
    }

    /**
     * Set l11
     *
     * @param string $l11
     *
     * @return sinasi
     */
    public function setL11($l11)
    {
        $this->l11 = $l11;

        return $this;
    }

    /**
     * Get l11
     *
     * @return string
     */
    public function getL11()
    {
        return $this->l11;
    }

    /**
     * Set l12
     *
     * @param string $l12
     *
     * @return sinasi
     */
    public function setL12($l12)
    {
        $this->l12 = $l12;

        return $this;
    }

    /**
     * Get l12
     *
     * @return string
     */
    public function getL12()
    {
        return $this->l12;
    }

    /**
     * Set l13
     *
     * @param string $l13
     *
     * @return sinasi
     */
    public function setL13($l13)
    {
        $this->l13 = $l13;

        return $this;
    }

    /**
     * Get l13
     *
     * @return string
     */
    public function getL13()
    {
        return $this->l13;
    }

    /**
     * Set l14
     *
     * @param string $l14
     *
     * @return sinasi
     */
    public function setL14($l14)
    {
        $this->l14 = $l14;

        return $this;
    }

    /**
     * Get l14
     *
     * @return string
     */
    public function getL14()
    {
        return $this->l14;
    }

    /**
     * Set l15
     *
     * @param string $l15
     *
     * @return sinasi
     */
    public function setL15($l15)
    {
        $this->l15 = $l15;

        return $this;
    }

    /**
     * Get l15
     *
     * @return string
     */
    public function getL15()
    {
        return $this->l15;
    }

    /**
     * Set l16
     *
     * @param string $l16
     *
     * @return sinasi
     */
    public function setL16($l16)
    {
        $this->l16 = $l16;

        return $this;
    }

    /**
     * Get l16
     *
     * @return string
     */
    public function getL16()
    {
        return $this->l16;
    }

    /**
     * Set l17
     *
     * @param string $l17
     *
     * @return sinasi
     */
    public function setL17($l17)
    {
        $this->l17 = $l17;

        return $this;
    }

    /**
     * Get l17
     *
     * @return string
     */
    public function getL17()
    {
        return $this->l17;
    }

    /**
     * Set l18
     *
     * @param string $l18
     *
     * @return sinasi
     */
    public function setL18($l18)
    {
        $this->l18 = $l18;

        return $this;
    }

    /**
     * Get l18
     *
     * @return string
     */
    public function getL18()
    {
        return $this->l18;
    }

    /**
     * Set l19
     *
     * @param string $l19
     *
     * @return sinasi
     */
    public function setL19($l19)
    {
        $this->l19 = $l19;

        return $this;
    }

    /**
     * Get l19
     *
     * @return string
     */
    public function getL19()
    {
        return $this->l19;
    }

    /**
     * Set l20
     *
     * @param string $l20
     *
     * @return sinasi
     */
    public function setL20($l20)
    {
        $this->l20 = $l20;

        return $this;
    }

    /**
     * Get l20
     *
     * @return string
     */
    public function getL20()
    {
        return $this->l20;
    }

    /**
     * Set l21
     *
     * @param string $l21
     *
     * @return sinasi
     */
    public function setL21($l21)
    {
        $this->l21 = $l21;

        return $this;
    }

    /**
     * Get l21
     *
     * @return string
     */
    public function getL21()
    {
        return $this->l21;
    }

    /**
     * Set l22
     *
     * @param string $l22
     *
     * @return sinasi
     */
    public function setL22($l22)
    {
        $this->l22 = $l22;

        return $this;
    }

    /**
     * Get l22
     *
     * @return string
     */
    public function getL22()
    {
        return $this->l22;
    }

    /**
     * Set l23
     *
     * @param string $l23
     *
     * @return sinasi
     */
    public function setL23($l23)
    {
        $this->l23 = $l23;

        return $this;
    }

    /**
     * Get l23
     *
     * @return string
     */
    public function getL23()
    {
        return $this->l23;
    }

    /**
     * Set l25
     *
     * @param string $l25
     *
     * @return sinasi
     */
    public function setL25($l25)
    {
        $this->l25 = $l25;

        return $this;
    }

    /**
     * @return string
     */
    public function getL24()
    {
        return $this->l24;
    }

    /**
     * @param string $l24
     * @return sinasi
     */
    public function setL24($l24)
    {
        $this->l24 = $l24;

        return $this;
    }



    /**
     * Get l25
     *
     * @return string
     */
    public function getL25()
    {
        return $this->l25;
    }

    /**
     * Set l26
     *
     * @param string $l26
     *
     * @return sinasi
     */
    public function setL26($l26)
    {
        $this->l26 = $l26;

        return $this;
    }

    /**
     * Get l26
     *
     * @return string
     */
    public function getL26()
    {
        return $this->l26;
    }

    /**
     * Set l27
     *
     * @param string $l27
     *
     * @return sinasi
     */
    public function setL27($l27)
    {
        $this->l27 = $l27;

        return $this;
    }

    /**
     * Get l27
     *
     * @return string
     */
    public function getL27()
    {
        return $this->l27;
    }

    /**
     * Set l28
     *
     * @param string $l28
     *
     * @return sinasi
     */
    public function setL28($l28)
    {
        $this->l28 = $l28;

        return $this;
    }

    /**
     * Get l28
     *
     * @return string
     */
    public function getL28()
    {
        return $this->l28;
    }

    /**
     * Set l29
     *
     * @param string $l29
     *
     * @return sinasi
     */
    public function setL29($l29)
    {
        $this->l29 = $l29;

        return $this;
    }

    /**
     * Get l29
     *
     * @return string
     */
    public function getL29()
    {
        return $this->l29;
    }

    /**
     * Set l30
     *
     * @param string $l30
     *
     * @return sinasi
     */
    public function setL30($l30)
    {
        $this->l30 = $l30;

        return $this;
    }

    /**
     * Get l30
     *
     * @return string
     */
    public function getL30()
    {
        return $this->l30;
    }

    /**
     * Set l31
     *
     * @param string $l31
     *
     * @return sinasi
     */
    public function setL31($l31)
    {
        $this->l31 = $l31;

        return $this;
    }

    /**
     * Get l31
     *
     * @return string
     */
    public function getL31()
    {
        return $this->l31;
    }

    /**
     * Set m1
     *
     * @param string $m1
     *
     * @return sinasi
     */
    public function setM1($m1)
    {
        $this->m1 = $m1;

        return $this;
    }

    /**
     * Get m1
     *
     * @return string
     */
    public function getM1()
    {
        return $this->m1;
    }

    /**
     * Set m2
     *
     * @param string $m2
     *
     * @return sinasi
     */
    public function setM2($m2)
    {
        $this->m2 = $m2;

        return $this;
    }

    /**
     * Get m2
     *
     * @return string
     */
    public function getM2()
    {
        return $this->m2;
    }

    /**
     * Set m3
     *
     * @param string $m3
     *
     * @return sinasi
     */
    public function setM3($m3)
    {
        $this->m3 = $m3;

        return $this;
    }

    /**
     * Get m3
     *
     * @return string
     */
    public function getM3()
    {
        return $this->m3;
    }

    /**
     * Set m4
     *
     * @param string $m4
     *
     * @return sinasi
     */
    public function setM4($m4)
    {
        $this->m4 = $m4;

        return $this;
    }

    /**
     * Get m4
     *
     * @return string
     */
    public function getM4()
    {
        return $this->m4;
    }

    /**
     * Set m5
     *
     * @param string $m5
     *
     * @return sinasi
     */
    public function setM5($m5)
    {
        $this->m5 = $m5;

        return $this;
    }

    /**
     * Get m5
     *
     * @return string
     */
    public function getM5()
    {
        return $this->m5;
    }

    /**
     * Set m6
     *
     * @param string $m6
     *
     * @return sinasi
     */
    public function setM6($m6)
    {
        $this->m6 = $m6;

        return $this;
    }

    /**
     * Get m6
     *
     * @return string
     */
    public function getM6()
    {
        return $this->m6;
    }

    /**
     * Set m7
     *
     * @param string $m7
     *
     * @return sinasi
     */
    public function setM7($m7)
    {
        $this->m7 = $m7;

        return $this;
    }

    /**
     * Get m7
     *
     * @return string
     */
    public function getM7()
    {
        return $this->m7;
    }

    /**
     * Set m8
     *
     * @param string $m8
     *
     * @return sinasi
     */
    public function setM8($m8)
    {
        $this->m8 = $m8;

        return $this;
    }

    /**
     * Get m8
     *
     * @return string
     */
    public function getM8()
    {
        return $this->m8;
    }

    /**
     * Set m9
     *
     * @param string $m9
     *
     * @return sinasi
     */
    public function setM9($m9)
    {
        $this->m9 = $m9;

        return $this;
    }

    /**
     * Get m9
     *
     * @return string
     */
    public function getM9()
    {
        return $this->m9;
    }

    /**
     * Set m10
     *
     * @param string $m10
     *
     * @return sinasi
     */
    public function setM10($m10)
    {
        $this->m10 = $m10;

        return $this;
    }

    /**
     * Get m10
     *
     * @return string
     */
    public function getM10()
    {
        return $this->m10;
    }

    /**
     * Set m11
     *
     * @param string $m11
     *
     * @return sinasi
     */
    public function setM11($m11)
    {
        $this->m11 = $m11;

        return $this;
    }

    /**
     * Get m11
     *
     * @return string
     */
    public function getM11()
    {
        return $this->m11;
    }

    /**
     * Set m12
     *
     * @param string $m12
     *
     * @return sinasi
     */
    public function setM12($m12)
    {
        $this->m12 = $m12;

        return $this;
    }

    /**
     * Get m12
     *
     * @return string
     */
    public function getM12()
    {
        return $this->m12;
    }

    /**
     * Set m13
     *
     * @param string $m13
     *
     * @return sinasi
     */
    public function setM13($m13)
    {
        $this->m13 = $m13;

        return $this;
    }

    /**
     * Get m13
     *
     * @return string
     */
    public function getM13()
    {
        return $this->m13;
    }

    /**
     * Set m14
     *
     * @param string $m14
     *
     * @return sinasi
     */
    public function setM14($m14)
    {
        $this->m14 = $m14;

        return $this;
    }

    /**
     * Get m14
     *
     * @return string
     */
    public function getM14()
    {
        return $this->m14;
    }

    /**
     * Set m15
     *
     * @param string $m15
     *
     * @return sinasi
     */
    public function setM15($m15)
    {
        $this->m15 = $m15;

        return $this;
    }

    /**
     * Get m15
     *
     * @return string
     */
    public function getM15()
    {
        return $this->m15;
    }

    /**
     * Set m16
     *
     * @param string $m16
     *
     * @return sinasi
     */
    public function setM16($m16)
    {
        $this->m16 = $m16;

        return $this;
    }

    /**
     * Get m16
     *
     * @return string
     */
    public function getM16()
    {
        return $this->m16;
    }

    /**
     * Set m17
     *
     * @param string $m17
     *
     * @return sinasi
     */
    public function setM17($m17)
    {
        $this->m17 = $m17;

        return $this;
    }

    /**
     * Get m17
     *
     * @return string
     */
    public function getM17()
    {
        return $this->m17;
    }

    /**
     * Set m18
     *
     * @param string $m18
     *
     * @return sinasi
     */
    public function setM18($m18)
    {
        $this->m18 = $m18;

        return $this;
    }

    /**
     * Get m18
     *
     * @return string
     */
    public function getM18()
    {
        return $this->m18;
    }

    /**
     * Set m19
     *
     * @param string $m19
     *
     * @return sinasi
     */
    public function setM19($m19)
    {
        $this->m19 = $m19;

        return $this;
    }

    /**
     * Get m19
     *
     * @return string
     */
    public function getM19()
    {
        return $this->m19;
    }

    /**
     * Set m20
     *
     * @param string $m20
     *
     * @return sinasi
     */
    public function setM20($m20)
    {
        $this->m20 = $m20;

        return $this;
    }

    /**
     * Get m20
     *
     * @return string
     */
    public function getM20()
    {
        return $this->m20;
    }

    /**
     * Set m21
     *
     * @param string $m21
     *
     * @return sinasi
     */
    public function setM21($m21)
    {
        $this->m21 = $m21;

        return $this;
    }

    /**
     * Get m21
     *
     * @return string
     */
    public function getM21()
    {
        return $this->m21;
    }

    /**
     * Set m22
     *
     * @param string $m22
     *
     * @return sinasi
     */
    public function setM22($m22)
    {
        $this->m22 = $m22;

        return $this;
    }

    /**
     * Get m22
     *
     * @return string
     */
    public function getM22()
    {
        return $this->m22;
    }

    /**
     * Set m23
     *
     * @param string $m23
     *
     * @return sinasi
     */
    public function setM23($m23)
    {
        $this->m23 = $m23;

        return $this;
    }

    /**
     * Get m23
     *
     * @return string
     */
    public function getM23()
    {
        return $this->m23;
    }

    /**
     * Set m24
     *
     * @param string $m24
     *
     * @return sinasi
     */
    public function setM24($m24)
    {
        $this->m24 = $m24;

        return $this;
    }

    /**
     * Get m24
     *
     * @return string
     */
    public function getM24()
    {
        return $this->m24;
    }

    /**
     * Set m25
     *
     * @param string $m25
     *
     * @return sinasi
     */
    public function setM25($m25)
    {
        $this->m25 = $m25;

        return $this;
    }

    /**
     * Get m25
     *
     * @return string
     */
    public function getM25()
    {
        return $this->m25;
    }

    /**
     * Set m26
     *
     * @param string $m26
     *
     * @return sinasi
     */
    public function setM26($m26)
    {
        $this->m26 = $m26;

        return $this;
    }

    /**
     * Get m26
     *
     * @return string
     */
    public function getM26()
    {
        return $this->m26;
    }

    /**
     * Set m27
     *
     * @param string $m27
     *
     * @return sinasi
     */
    public function setM27($m27)
    {
        $this->m27 = $m27;

        return $this;
    }

    /**
     * Get m27
     *
     * @return string
     */
    public function getM27()
    {
        return $this->m27;
    }

    /**
     * Set m28
     *
     * @param string $m28
     *
     * @return sinasi
     */
    public function setM28($m28)
    {
        $this->m28 = $m28;

        return $this;
    }

    /**
     * Get m28
     *
     * @return string
     */
    public function getM28()
    {
        return $this->m28;
    }

    /**
     * Set m29
     *
     * @param string $m29
     *
     * @return sinasi
     */
    public function setM29($m29)
    {
        $this->m29 = $m29;

        return $this;
    }

    /**
     * Get m29
     *
     * @return string
     */
    public function getM29()
    {
        return $this->m29;
    }

    /**
     * Set n1
     *
     * @param string $n1
     *
     * @return sinasi
     */
    public function setN1($n1)
    {
        $this->n1 = $n1;

        return $this;
    }

    /**
     * Get n1
     *
     * @return string
     */
    public function getN1()
    {
        return $this->n1;
    }

    /**
     * Set n2
     *
     * @param string $n2
     *
     * @return sinasi
     */
    public function setN2($n2)
    {
        $this->n2 = $n2;

        return $this;
    }

    /**
     * Get n2
     *
     * @return string
     */
    public function getN2()
    {
        return $this->n2;
    }

    /**
     * Set n3
     *
     * @param string $n3
     *
     * @return sinasi
     */
    public function setN3($n3)
    {
        $this->n3 = $n3;

        return $this;
    }

    /**
     * Get n3
     *
     * @return string
     */
    public function getN3()
    {
        return $this->n3;
    }

    /**
     * Set n4
     *
     * @param string $n4
     *
     * @return sinasi
     */
    public function setN4($n4)
    {
        $this->n4 = $n4;

        return $this;
    }

    /**
     * Get n4
     *
     * @return string
     */
    public function getN4()
    {
        return $this->n4;
    }

    /**
     * Set n5
     *
     * @param string $n5
     *
     * @return sinasi
     */
    public function setN5($n5)
    {
        $this->n5 = $n5;

        return $this;
    }

    /**
     * Get n5
     *
     * @return string
     */
    public function getN5()
    {
        return $this->n5;
    }

    /**
     * Set n6
     *
     * @param string $n6
     *
     * @return sinasi
     */
    public function setN6($n6)
    {
        $this->n6 = $n6;

        return $this;
    }

    /**
     * Get n6
     *
     * @return string
     */
    public function getN6()
    {
        return $this->n6;
    }

    /**
     * Set n7
     *
     * @param string $n7
     *
     * @return sinasi
     */
    public function setN7($n7)
    {
        $this->n7 = $n7;

        return $this;
    }

    /**
     * Get n7
     *
     * @return string
     */
    public function getN7()
    {
        return $this->n7;
    }

    /**
     * Set n8
     *
     * @param string $n8
     *
     * @return sinasi
     */
    public function setN8($n8)
    {
        $this->n8 = $n8;

        return $this;
    }

    /**
     * Get n8
     *
     * @return string
     */
    public function getN8()
    {
        return $this->n8;
    }

    /**
     * Set n9
     *
     * @param string $n9
     *
     * @return sinasi
     */
    public function setN9($n9)
    {
        $this->n9 = $n9;

        return $this;
    }

    /**
     * Get n9
     *
     * @return string
     */
    public function getN9()
    {
        return $this->n9;
    }

    /**
     * Set n10
     *
     * @param string $n10
     *
     * @return sinasi
     */
    public function setN10($n10)
    {
        $this->n10 = $n10;

        return $this;
    }

    /**
     * Get n10
     *
     * @return string
     */
    public function getN10()
    {
        return $this->n10;
    }

    /**
     * Set n11
     *
     * @param string $n11
     *
     * @return sinasi
     */
    public function setN11($n11)
    {
        $this->n11 = $n11;

        return $this;
    }

    /**
     * Get n11
     *
     * @return string
     */
    public function getN11()
    {
        return $this->n11;
    }

    /**
     * Set n12
     *
     * @param string $n12
     *
     * @return sinasi
     */
    public function setN12($n12)
    {
        $this->n12 = $n12;

        return $this;
    }

    /**
     * Get n12
     *
     * @return string
     */
    public function getN12()
    {
        return $this->n12;
    }

    /**
     * Set n13
     *
     * @param string $n13
     *
     * @return sinasi
     */
    public function setN13($n13)
    {
        $this->n13 = $n13;

        return $this;
    }

    /**
     * Get n13
     *
     * @return string
     */
    public function getN13()
    {
        return $this->n13;
    }

    /**
     * Set n14
     *
     * @param string $n14
     *
     * @return sinasi
     */
    public function setN14($n14)
    {
        $this->n14 = $n14;

        return $this;
    }

    /**
     * Get n14
     *
     * @return string
     */
    public function getN14()
    {
        return $this->n14;
    }

    /**
     * Set n15
     *
     * @param string $n15
     *
     * @return sinasi
     */
    public function setN15($n15)
    {
        $this->n15 = $n15;

        return $this;
    }

    /**
     * Get n15
     *
     * @return string
     */
    public function getN15()
    {
        return $this->n15;
    }

    /**
     * Set n16
     *
     * @param string $n16
     *
     * @return sinasi
     */
    public function setN16($n16)
    {
        $this->n16 = $n16;

        return $this;
    }

    /**
     * Get n16
     *
     * @return string
     */
    public function getN16()
    {
        return $this->n16;
    }

    /**
     * Set n17
     *
     * @param string $n17
     *
     * @return sinasi
     */
    public function setN17($n17)
    {
        $this->n17 = $n17;

        return $this;
    }

    /**
     * Get n17
     *
     * @return string
     */
    public function getN17()
    {
        return $this->n17;
    }

    /**
     * Set n18
     *
     * @param string $n18
     *
     * @return sinasi
     */
    public function setN18($n18)
    {
        $this->n18 = $n18;

        return $this;
    }

    /**
     * Get n18
     *
     * @return string
     */
    public function getN18()
    {
        return $this->n18;
    }

    /**
     * Set n19
     *
     * @param string $n19
     *
     * @return sinasi
     */
    public function setN19($n19)
    {
        $this->n19 = $n19;

        return $this;
    }

    /**
     * Get n19
     *
     * @return string
     */
    public function getN19()
    {
        return $this->n19;
    }

    /**
     * Set n20
     *
     * @param string $n20
     *
     * @return sinasi
     */
    public function setN20($n20)
    {
        $this->n20 = $n20;

        return $this;
    }

    /**
     * Get n20
     *
     * @return string
     */
    public function getN20()
    {
        return $this->n20;
    }

    /**
     * Set n21
     *
     * @param string $n21
     *
     * @return sinasi
     */
    public function setN21($n21)
    {
        $this->n21 = $n21;

        return $this;
    }

    /**
     * Get n21
     *
     * @return string
     */
    public function getN21()
    {
        return $this->n21;
    }

    /**
     * Set n22
     *
     * @param string $n22
     *
     * @return sinasi
     */
    public function setN22($n22)
    {
        $this->n22 = $n22;

        return $this;
    }

    /**
     * Get n22
     *
     * @return string
     */
    public function getN22()
    {
        return $this->n22;
    }

    /**
     * @return string
     */
    public function getN23()
    {
        return $this->n23;
    }

    /**
     * @return sinasi
     * @param string $n23
     */
    public function setN23($n23)
    {
        $this->n23 = $n23;

        return $this;
    }

    /**
     * @return string
     */
    public function getN24()
    {
        return $this->n24;
    }

    /**
     * @return sinasi
     * @param string $n24
     */
    public function setN24($n24)
    {
        $this->n24 = $n24;

        return $this;
    }

    /**
     * @return string
     */
    public function getN25()
    {
        return $this->n25;
    }

    /**
     * @return sinasi
     * @param string $n25
     */
    public function setN25($n25)
    {
        $this->n25 = $n25;

        return $this;
    }

    /**
     * @return string
     */
    public function getN26()
    {
        return $this->n26;
    }

    /**
     * @return sinasi
     * @param string $n26
     */
    public function setN26($n26)
    {
        $this->n26 = $n26;

        return $this;
    }

    /**
     * @return string
     */
    public function getN27()
    {
        return $this->n27;
    }

    /**
     * @return sinasi
     * @param string $n27
     */
    public function setN27($n27)
    {
        $this->n27 = $n27;

        return $this;
    }

    /**
     * @return string
     */
    public function getO1()
    {
        return $this->o1;
    }

    /**
     * @return string
     */
    public function getO2()
    {
        return $this->o2;
    }

    /**
     * @return string
     */
    public function getO3()
    {
        return $this->o3;
    }

    /**
     * @return string
     */
    public function getO4()
    {
        return $this->o4;
    }

    /**
     * @return string
     */
    public function getO5()
    {
        return $this->o5;
    }

    /**
     * @return string
     */
    public function getO6()
    {
        return $this->o6;
    }

    /**
     * @return string
     */
    public function getO7()
    {
        return $this->o7;
    }

    /**
     * @return string
     */
    public function getO8()
    {
        return $this->o8;
    }

    /**
     * @return string
     */
    public function getO9()
    {
        return $this->o9;
    }

    /**
     * @return string
     */
    public function getO10()
    {
        return $this->o10;
    }

    /**
     * @return string
     */
    public function getO11()
    {
        return $this->o11;
    }

    /**
     * @return string
     */
    public function getO12()
    {
        return $this->o12;
    }

    /**
     * @return string
     */
    public function getO13()
    {
        return $this->o13;
    }

    /**
     * @return string
     */
    public function getO14()
    {
        return $this->o14;
    }

    /**
     * @return string
     */
    public function getO15()
    {
        return $this->o15;
    }

    /**
     * @return string
     */
    public function getO16()
    {
        return $this->o16;
    }

    /**
     * @return string
     */
    public function getO17()
    {
        return $this->o17;
    }

    /**
     * @return string
     */
    public function getO18()
    {
        return $this->o18;
    }

    /**
     * @return string
     */
    public function getO19()
    {
        return $this->o19;
    }

    /**
     * @return string
     */
    public function getO20()
    {
        return $this->o20;
    }

    /**
     * @return string
     */
    public function getO21()
    {
        return $this->o21;
    }

    /**
     * @return string
     */
    public function getO22()
    {
        return $this->o22;
    }

    /**
     * @return string
     */
    public function getO23()
    {
        return $this->o23;
    }

    /**
     * @return string
     */
    public function getO24()
    {
        return $this->o24;
    }

    /**
     * @return string
     */
    public function getO25()
    {
        return $this->o25;
    }

    /**
     * @param string $o1
     * @return sinasi
     */
    public function setO1($o1)
    {
        $this->o1 = $o1;

        return $this;
    }

    /**
     * @param string $o2
     * @return sinasi
     */
    public function setO2($o2)
    {
        $this->o2 = $o2;

        return $this;
    }

    /**
     * @param string $o3
     * @return sinasi
     */
    public function setO3($o3)
    {
        $this->o3 = $o3;

        return $this;
    }

    /**
     * @param string $o4
     * @return sinasi
     */
    public function setO4($o4)
    {
        $this->o4 = $o4;

        return $this;
    }

    /**
     * @param string $o5
     * @return sinasi
     */
    public function setO5($o5)
    {
        $this->o5 = $o5;

        return $this;
    }

    /**
     * @param string $o6
     * @return sinasi
     */
    public function setO6($o6)
    {
        $this->o6 = $o6;

        return $this;
    }

    /**
     * @param string $o7
     * @return sinasi
     */
    public function setO7($o7)
    {
        $this->o7 = $o7;

        return $this;
    }

    /**
     * @param string $o8
     * @return sinasi
     */
    public function setO8($o8)
    {
        $this->o8 = $o8;

        return $this;
    }

    /**
     * @param string $o9
     * @return sinasi
     */
    public function setO9($o9)
    {
        $this->o9 = $o9;

        return $this;
    }

    /**
     * @param string $o10
     * @return sinasi
     */
    public function setO10($o10)
    {
        $this->o10 = $o10;

        return $this;
    }

    /**
     * @param string $o11
     * @return sinasi
     */
    public function setO11($o11)
    {
        $this->o11 = $o11;

        return $this;
    }

    /**
     * @param string $o12
     * @return sinasi
     */
    public function setO12($o12)
    {
        $this->o12 = $o12;

        return $this;
    }

    /**
     * @param string $o13
     * @return sinasi
     */
    public function setO13($o13)
    {
        $this->o13 = $o13;

        return $this;
    }

    /**
     * @param string $o14
     * @return sinasi
     */
    public function setO14($o14)
    {
        $this->o14 = $o14;

        return $this;
    }

    /**
     * @param string $o15
     * @return sinasi
     */
    public function setO15($o15)
    {
        $this->o15 = $o15;

        return $this;
    }

    /**
     * @param string $o16
     * @return sinasi
     */
    public function setO16($o16)
    {
        $this->o16 = $o16;

        return $this;
    }

    /**
     * @param string $o17
     * @return sinasi
     */
    public function setO17($o17)
    {
        $this->o17 = $o17;

        return $this;
    }

    /**
     * @param string $o18
     * @return sinasi
     */
    public function setO18($o18)
    {
        $this->o18 = $o18;

        return $this;
    }

    /**
     * @param string $o19
     * @return sinasi
     */
    public function setO19($o19)
    {
        $this->o19 = $o19;

        return $this;
    }

    /**
     * @param string $o20
     * @return sinasi
     */
    public function setO20($o20)
    {
        $this->o20 = $o20;

        return $this;
    }

    /**
     * @param string $o21
     * @return sinasi
     */
    public function setO21($o21)
    {
        $this->o21 = $o21;

        return $this;
    }

    /**
     * @param string $o22
     * @return sinasi
     */
    public function setO22($o22)
    {
        $this->o22 = $o22;

        return $this;
    }

    /**
     * @param string $o23
     * @return sinasi
     */
    public function setO23($o23)
    {
        $this->o23 = $o23;

        return $this;
    }

    /**
     * @param string $o24
     * @return sinasi
     */
    public function setO24($o24)
    {
        $this->o24 = $o24;

        return $this;
    }

    /**
     * @param string $o25
     * @return sinasi
     */
    public function setO25($o25)
    {
        $this->o25 = $o25;

        return $this;
    }

    /**
     * @return string
     */
    public function getP1()
    {
        return $this->p1;
    }

    /**
     * @return string
     */
    public function getP2()
    {
        return $this->p2;
    }

    /**
     * @return string
     */
    public function getP3()
    {
        return $this->p3;
    }

    /**
     * @return string
     */
    public function getP4()
    {
        return $this->p4;
    }

    /**
     * @return string
     */
    public function getP5()
    {
        return $this->p5;
    }

    /**
     * @return string
     */
    public function getP6()
    {
        return $this->p6;
    }

    /**
     * @return string
     */
    public function getP7()
    {
        return $this->p7;
    }

    /**
     * @return string
     */
    public function getP8()
    {
        return $this->p8;
    }

    /**
     * @return string
     */
    public function getP9()
    {
        return $this->p9;
    }

    /**
     * @return string
     */
    public function getP10()
    {
        return $this->p10;
    }

    /**
     * @return string
     */
    public function getP11()
    {
        return $this->p11;
    }

    /**
     * @return string
     */
    public function getP12()
    {
        return $this->p12;
    }

    /**
     * @return string
     */
    public function getP13()
    {
        return $this->p13;
    }

    /**
     * @return string
     */
    public function getP14()
    {
        return $this->p14;
    }

    /**
     * @return string
     */
    public function getP15()
    {
        return $this->p15;
    }

    /**
     * @return string
     */
    public function getP16()
    {
        return $this->p16;
    }

    /**
     * @return string
     */
    public function getP17()
    {
        return $this->p17;
    }

    /**
     * @return string
     */
    public function getP18()
    {
        return $this->p18;
    }

    /**
     * @return string
     */
    public function getP19()
    {
        return $this->p19;
    }

    /**
     * @return string
     */
    public function getP20()
    {
        return $this->p20;
    }

    /**
     * @return string
     */
    public function getP21()
    {
        return $this->p21;
    }

    /**
     * @return string
     */
    public function getP22()
    {
        return $this->p22;
    }

    /**
     * @return string
     */
    public function getP23()
    {
        return $this->p23;
    }

    /**
     * @return string
     */
    public function getP24()
    {
        return $this->p24;
    }

    /**
     * @return string
     */
    public function getP25()
    {
        return $this->p25;
    }

    /**
     * @param string $p1
     * @return sinasi
     */
    public function setP1($p1)
    {
        $this->p1 = $p1;

        return $this;
    }

    /**
     * @param string $p2
     * @return sinasi
     */
    public function setP2($p2)
    {
        $this->p2 = $p2;

        return $this;
    }

    /**
     * @param string $p3
     * @return sinasi
     */
    public function setP3($p3)
    {
        $this->p3 = $p3;

        return $this;
    }

    /**
     * @param string $p4
     * @return sinasi
     */
    public function setP4($p4)
    {
        $this->p4 = $p4;

        return $this;
    }

    /**
     * @param string $p5
     * @return sinasi
     */
    public function setP5($p5)
    {
        $this->p5 = $p5;

        return $this;
    }

    /**
     * @param string $p6
     * @return sinasi
     */
    public function setP6($p6)
    {
        $this->p6 = $p6;

        return $this;
    }

    /**
     * @return sinasi
     * @param string $p7
     */
    public function setP7($p7)
    {
        $this->p7 = $p7;

        return $this;
    }

    /**
     * @return sinasi
     * @param string $p8
     */
    public function setP8($p8)
    {
        $this->p8 = $p8;

        return $this;
    }

    /**
     * @return sinasi
     * @param string $p9
     */
    public function setP9($p9)
    {
        $this->p9 = $p9;

        return $this;
    }

    /**
     * @return sinasi
     * @param string $p10
     */
    public function setP10($p10)
    {
        $this->p10 = $p10;

        return $this;
    }

    /**
     * @return sinasi
     * @param string $p11
     */
    public function setP11($p11)
    {
        $this->p11 = $p11;

        return $this;
    }

    /**
     * @return sinasi
     * @param string $p12
     */
    public function setP12($p12)
    {
        $this->p12 = $p12;

        return $this;
    }

    /**
     * @return sinasi
     * @param string $p13
     */
    public function setP13($p13)
    {
        $this->p13 = $p13;

        return $this;
    }

    /**
     * @return sinasi
     * @param string $p14
     */
    public function setP14($p14)
    {
        $this->p14 = $p14;

        return $this;
    }

    /**
     * @return sinasi
     * @param string $p15
     */
    public function setP15($p15)
    {
        $this->p15 = $p15;

        return $this;
    }

    /**
     * @return sinasi
     * @param string $p16
     */
    public function setP16($p16)
    {
        $this->p16 = $p16;

        return $this;
    }

    /**
     * @return sinasi
     * @param string $p17
     */
    public function setP17($p17)
    {
        $this->p17 = $p17;

        return $this;
    }

    /**
     * @return sinasi
     * @param string $p18
     */
    public function setP18($p18)
    {
        $this->p18 = $p18;

        return $this;
    }

    /**
     * @return sinasi
     * @param string $p19
     */
    public function setP19($p19)
    {
        $this->p19 = $p19;

        return $this;
    }

    /**
     * @return sinasi
     * @param string $p20
     */
    public function setP20($p20)
    {
        $this->p20 = $p20;

        return $this;
    }

    /**
     * @return sinasi
     * @param string $p21
     */
    public function setP21($p21)
    {
        $this->p21 = $p21;

        return $this;
    }

    /**
     * @return sinasi
     * @param string $p22
     */
    public function setP22($p22)
    {
        $this->p22 = $p22;

        return $this;
    }

    /**
     * @return sinasi
     * @param string $p23
     */
    public function setP23($p23)
    {
        $this->p23 = $p23;

        return $this;
    }

    /**
     * @return sinasi
     * @param string $p24
     */
    public function setP24($p24)
    {
        $this->p24 = $p24;

        return $this;
    }

    /**
     * @return sinasi
     * @param string $p25
     */
    public function setP25($p25)
    {
        $this->p25 = $p25;

        return $this;
    }

    /**
     * @return string
     */
    public function getR1()
    {
        return $this->r1;
    }

    /**
     * @return string
     */
    public function getR2()
    {
        return $this->r2;
    }

    /**
     * @return string
     */
    public function getR3()
    {
        return $this->r3;
    }

    /**
     * @return string
     */
    public function getR4()
    {
        return $this->r4;
    }

    /**
     * @return string
     */
    public function getR5()
    {
        return $this->r5;
    }

    /**
     * @return string
     */
    public function getR6()
    {
        return $this->r6;
    }

    /**
     * @return string
     */
    public function getR7()
    {
        return $this->r7;
    }

    /**
     * @return string
     */
    public function getR8()
    {
        return $this->r8;
    }

    /**
     * @return string
     */
    public function getR9()
    {
        return $this->r9;
    }

    /**
     * @return string
     */
    public function getR10()
    {
        return $this->r10;
    }

    /**
     * @return string
     */
    public function getR11()
    {
        return $this->r11;
    }

    /**
     * @return string
     */
    public function getR12()
    {
        return $this->r12;
    }

    /**
     * @return string
     */
    public function getR13()
    {
        return $this->r13;
    }

    /**
     * @return string
     */
    public function getR14()
    {
        return $this->r14;
    }

    /**
     * @return string
     */
    public function getR15()
    {
        return $this->r15;
    }

    /**
     * @return string
     */
    public function getR16()
    {
        return $this->r16;
    }

    /**
     * @return string
     */
    public function getR17()
    {
        return $this->r17;
    }

    /**
     * @return string
     */
    public function getR18()
    {
        return $this->r18;
    }

    /**
     * @return string
     */
    public function getR19()
    {
        return $this->r19;
    }

    /**
     * @return string
     */
    public function getR20()
    {
        return $this->r20;
    }

    /**
     * @return string
     */
    public function getR21()
    {
        return $this->r21;
    }

    /**
     * @return string
     */
    public function getR22()
    {
        return $this->r22;
    }

    /**
     * @return string
     */
    public function getR23()
    {
        return $this->r23;
    }

    /**
     * @return string
     */
    public function getR24()
    {
        return $this->r24;
    }

    /**
     * @return string
     */
    public function getR25()
    {
        return $this->r25;
    }

    /**
     * @return sinasi
     * @param string $r1
     */
    public function setR1($r1)
    {
        $this->r1 = $r1;

        return $this;
    }

    /**
     * @return sinasi
     * @param string $r2
     */
    public function setR2($r2)
    {
        $this->r2 = $r2;

        return $this;
    }

    /**
     * @return sinasi
     * @param string $r3
     */
    public function setR3($r3)
    {
        $this->r3 = $r3;

        return $this;
    }

    /**
     * @return sinasi
     * @param string $r4
     */
    public function setR4($r4)
    {
        $this->r4 = $r4;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $r5
     */
    public function setR5($r5)
    {
        $this->r5 = $r5;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $r6
     */
    public function setR6($r6)
    {
        $this->r6 = $r6;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $r7
     */
    public function setR7($r7)
    {
        $this->r7 = $r7;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $r8
     */
    public function setR8($r8)
    {
        $this->r8 = $r8;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $r9
     */
    public function setR9($r9)
    {
        $this->r9 = $r9;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $r10
     */
    public function setR10($r10)
    {
        $this->r10 = $r10;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $r11
     */
    public function setR11($r11)
    {
        $this->r11 = $r11;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $r12
     */
    public function setR12($r12)
    {
        $this->r12 = $r12;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $r13
     */
    public function setR13($r13)
    {
        $this->r13 = $r13;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $r14
     */
    public function setR14($r14)
    {
        $this->r14 = $r14;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $r15
     */
    public function setR15($r15)
    {
        $this->r15 = $r15;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $r16
     */
    public function setR16($r16)
    {
        $this->r16 = $r16;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $r17
     */
    public function setR17($r17)
    {
        $this->r17 = $r17;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $r18
     */
    public function setR18($r18)
    {
        $this->r18 = $r18;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $r19
     */
    public function setR19($r19)
    {
        $this->r19 = $r19;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $r20
     */
    public function setR20($r20)
    {
        $this->r20 = $r20;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $r21
     */
    public function setR21($r21)
    {
        $this->r21 = $r21;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $r22
     */
    public function setR22($r22)
    {
        $this->r22 = $r22;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $r23
     */
    public function setR23($r23)
    {
        $this->r23 = $r23;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $r24
     */
    public function setR24($r24)
    {
        $this->r24 = $r24;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $r25
     */
    public function setR25($r25)
    {
        $this->r25 = $r25;
        return $this;
    }

    /**
     * @return string
     */
    public function getS1()
    {
        return $this->s1;
    }

    /**
     * @return string
     */
    public function getS2()
    {
        return $this->s2;
    }

    /**
     * @return string
     */
    public function getS3()
    {
        return $this->s3;
    }

    /**
     * @return string
     */
    public function getS4()
    {
        return $this->s4;
    }

    /**
     * @return string
     */
    public function getS5()
    {
        return $this->s5;
    }

    /**
     * @return string
     */
    public function getS6()
    {
        return $this->s6;
    }

    /**
     * @return string
     */
    public function getS7()
    {
        return $this->s7;
    }

    /**
     * @return string
     */
    public function getS8()
    {
        return $this->s8;
    }

    /**
     * @return string
     */
    public function getS9()
    {
        return $this->s9;
    }

    /**
     * @return string
     */
    public function getS10()
    {
        return $this->s10;
    }

    /**
     * @return string
     */
    public function getS11()
    {
        return $this->s11;
    }

    /**
     * @return string
     */
    public function getS12()
    {
        return $this->s12;
    }

    /**
     * @return string
     */
    public function getS13()
    {
        return $this->s13;
    }

    /**
     * @return string
     */
    public function getS14()
    {
        return $this->s14;
    }

    /**
     * @return string
     */
    public function getS15()
    {
        return $this->s15;
    }

    /**
     * @return string
     */
    public function getS16()
    {
        return $this->s16;
    }

    /**
     * @return string
     */
    public function getS17()
    {
        return $this->s17;
    }

    /**
     * @return string
     */
    public function getS18()
    {
        return $this->s18;
    }

    /**
     * @return string
     */
    public function getS19()
    {
        return $this->s19;
    }

    /**
     * @return string
     */
    public function getS20()
    {
        return $this->s20;
    }

    /**
     * @return string
     */
    public function getS21()
    {
        return $this->s21;
    }

    /**
     * @return string
     */
    public function getS22()
    {
        return $this->s22;
    }

    /**
     * @return string
     */
    public function getS23()
    {
        return $this->s23;
    }

    /**
     * @return sinasi
     * @param string $s1
     */
    public function setS1($s1)
    {
        $this->s1 = $s1;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $s2
     */
    public function setS2($s2)
    {
        $this->s2 = $s2;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $s3
     */
    public function setS3($s3)
    {
        $this->s3 = $s3;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $s4
     */
    public function setS4($s4)
    {
        $this->s4 = $s4;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $s5
     */
    public function setS5($s5)
    {
        $this->s5 = $s5;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $s6
     */
    public function setS6($s6)
    {
        $this->s6 = $s6;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $s7
     */
    public function setS7($s7)
    {
        $this->s7 = $s7;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $s8
     */
    public function setS8($s8)
    {
        $this->s8 = $s8;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $s9
     */
    public function setS9($s9)
    {
        $this->s9 = $s9;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $s10
     */
    public function setS10($s10)
    {
        $this->s10 = $s10;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $s11
     */
    public function setS11($s11)
    {
        $this->s11 = $s11;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $s12
     */
    public function setS12($s12)
    {
        $this->s12 = $s12;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $s13
     */
    public function setS13($s13)
    {
        $this->s13 = $s13;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $s14
     */
    public function setS14($s14)
    {
        $this->s14 = $s14;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $s15
     */
    public function setS15($s15)
    {
        $this->s15 = $s15;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $s16
     */
    public function setS16($s16)
    {
        $this->s16 = $s16;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $s17
     */
    public function setS17($s17)
    {
        $this->s17 = $s17;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $s18
     */
    public function setS18($s18)
    {
        $this->s18 = $s18;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $s19
     */
    public function setS19($s19)
    {
        $this->s19 = $s19;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $s20
     */
    public function setS20($s20)
    {
        $this->s20 = $s20;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $s21
     */
    public function setS21($s21)
    {
        $this->s21 = $s21;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $s22
     */
    public function setS22($s22)
    {
        $this->s22 = $s22;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $s23
     */
    public function setS23($s23)
    {
        $this->s23 = $s23;
        return $this;
    }

    /**
     * @return string
     */
    public function getT1()
    {
        return $this->t1;
    }

    /**
     * @return string
     */
    public function getT2()
    {
        return $this->t2;
    }

    /**
     * @return string
     */
    public function getT3()
    {
        return $this->t3;
    }

    /**
     * @return string
     */
    public function getT4()
    {
        return $this->t4;
    }

    /**
     * @return string
     */
    public function getT5()
    {
        return $this->t5;
    }

    /**
     * @return string
     */
    public function getT6()
    {
        return $this->t6;
    }

    /**
     * @return string
     */
    public function getT7()
    {
        return $this->t7;
    }

    /**
     * @return string
     */
    public function getT8()
    {
        return $this->t8;
    }

    /**
     * @return string
     */
    public function getT9()
    {
        return $this->t9;
    }

    /**
     * @return string
     */
    public function getT10()
    {
        return $this->t10;
    }

    /**
     * @return string
     */
    public function getT11()
    {
        return $this->t11;
    }

    /**
     * @return string
     */
    public function getT12()
    {
        return $this->t12;
    }

    /**
     * @return string
     */
    public function getT13()
    {
        return $this->t13;
    }

    /**
     * @return sinasi
     * @param string $t1
     */
    public function setT1($t1)
    {
        $this->t1 = $t1;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $t2
     */
    public function setT2($t2)
    {
        $this->t2 = $t2;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $t3
     */
    public function setT3($t3)
    {
        $this->t3 = $t3;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $t4
     */
    public function setT4($t4)
    {
        $this->t4 = $t4;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $t5
     */
    public function setT5($t5)
    {
        $this->t5 = $t5;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $t6
     */
    public function setT6($t6)
    {
        $this->t6 = $t6;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $t7
     */
    public function setT7($t7)
    {
        $this->t7 = $t7;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $t8
     */
    public function setT8($t8)
    {
        $this->t8 = $t8;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $t9
     */
    public function setT9($t9)
    {
        $this->t9 = $t9;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $t10
     */
    public function setT10($t10)
    {
        $this->t10 = $t10;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $t11
     */
    public function setT11($t11)
    {
        $this->t11 = $t11;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $t12
     */
    public function setT12($t12)
    {
        $this->t12 = $t12;
        return $this;
    }

    /**
     * @return sinasi
     * @param string $t13
     */
    public function setT13($t13)
    {
        $this->t13 = $t13;
        return $this;
    }

    /**
     * @return string
     */
    public function getU1()
    {
        return $this->u1;
    }

    /**
     * @param string $u1
     * @return sinasi
     */
    public function setU1($u1)
    {
        $this->u1 = $u1;

        return $this;
    }

    /**
     * @return string
     */
    public function getU2()
    {
        return $this->u2;
    }

    /**
     * @param string $u2
     * @return sinasi
     */
    public function setU2($u2)
    {
        $this->u2 = $u2;

        return $this;
    }

    /**
     * @return string
     */
    public function getU3()
    {
        return $this->u3;
    }

    /**
     * @param string $u3
     * @return sinasi
     */
    public function setU3($u3)
    {
        $this->u3 = $u3;

        return $this;
    }

    /**
     * @return string
     */
    public function getU4()
    {
        return $this->u4;
    }

    /**
     * @param string $u4
     * @return sinasi
     */
    public function setU4($u4)
    {
        $this->u4 = $u4;

        return $this;
    }

    /**
     * @return string
     */
    public function getU5()
    {
        return $this->u5;
    }

    /**
     * @param string $u5
     * @return sinasi
     */
    public function setU5($u5)
    {
        $this->u5 = $u5;

        return $this;
    }

    /**
     * @return string
     */
    public function getU6()
    {
        return $this->u6;
    }

    /**
     * @param string $u6
     * @return sinasi
     */
    public function setU6($u6)
    {
        $this->u6 = $u6;

        return $this;
    }

    /**
     * @return string
     */
    public function getU7()
    {
        return $this->u7;
    }

    /**
     * @param string $u7
     * @return sinasi
     */
    public function setU7($u7)
    {
        $this->u7 = $u7;

        return $this;
    }

    /**
     * @return string
     */
    public function getU8()
    {
        return $this->u8;
    }

    /**
     * @param string $u8
     * @return sinasi
     */
    public function setU8($u8)
    {
        $this->u8 = $u8;

        return $this;
    }

    /**
     * @return string
     */
    public function getU9()
    {
        return $this->u9;
    }

    /**
     * @param string $u9
     * @return sinasi
     */
    public function setU9($u9)
    {
        $this->u9 = $u9;

        return $this;
    }

    /**
     * @return string
     */
    public function getU10()
    {
        return $this->u10;
    }

    /**
     * @param string $u10
     * @return sinasi
     */
    public function setU10($u10)
    {
        $this->u10 = $u10;

        return $this;
    }

    /**
     * @return string
     */
    public function getU11()
    {
        return $this->u11;
    }

    /**
     * @param string $u11
     * @return sinasi
     */
    public function setU11($u11)
    {
        $this->u11 = $u11;

        return $this;
    }

    /**
     * @return string
     */
    public function getU12()
    {
        return $this->u12;
    }

    /**
     * @param string $u12
     * @return sinasi
     */
    public function setU12($u12)
    {
        $this->u12 = $u12;

        return $this;
    }

    /**
     * @return string
     */
    public function getU13()
    {
        return $this->u13;
    }

    /**
     * @param string $u13
     * @return sinasi
     */
    public function setU13($u13)
    {
        $this->u13 = $u13;

        return $this;
    }

    /**
     * @return string
     */
    public function getU14()
    {
        return $this->u14;
    }

    /**
     * @param string $u14
     * @return sinasi
     */
    public function setU14($u14)
    {
        $this->u14 = $u14;

        return $this;
    }

    /**
     * @return string
     */
    public function getU15()
    {
        return $this->u15;
    }

    /**
     * @param string $u15
     * @return sinasi
     */
    public function setU15($u15)
    {
        $this->u15 = $u15;

        return $this;
    }

}

