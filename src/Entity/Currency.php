<?php
/**
 * Created by PhpStorm.
 * User: beathan
 * Date: 2019-03-10
 * Time: 14:47
 */

namespace App\Entity;

use App\Admin\CurrencyAdmin;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="currency")
 */

class Currency
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @ORM\Column(name="rate_buy", type="integer")
     */
    protected $rateBuy;
    /**
     * @ORM\Column(name="rate_sell", type="integer")
     */
    protected $rateSell;
    /**
     * @ORM\Column(name="reserve", type="integer")
     */
    protected $reserve;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): Currency
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): Currency
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRateBuy():?int
    {
        return $this->rateBuy;
    }

    /**
     * @param mixed $rateBuy
     */
    public function setRateBuy($rateBuy): Currency
    {
        $this->rateBuy = $rateBuy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRateSell():?int
    {
        return $this->rateSell;
    }

    /**
     * @param mixed $rateSell
     */
    public function setRateSell($rateSell): Currency
    {
        $this->rateSell = $rateSell;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReserve():?int
    {
        return $this->reserve;
    }

    /**
     * @param mixed $reserve
     */
    public function setReserve($reserve): Currency
    {
        $this->reserve = $reserve;
        return $this;
    }



}
