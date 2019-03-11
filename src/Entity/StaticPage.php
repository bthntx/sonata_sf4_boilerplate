<?php
/**
 * Created by PhpStorm.
 * User: beathan
 * Date: 2019-03-10
 * Time: 13:01
 */

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Sonata\TranslationBundle\Model\Gedmo\AbstractPersonalTranslatable;
use Sonata\TranslationBundle\Model\Gedmo\TranslatableInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="static_pages")
 * @Gedmo\TranslationEntity(class="App\Entity\PageTranslation")
 */

class StaticPage extends AbstractPersonalTranslatable implements TranslatableInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(name="title", type="string")
     */
    private $title;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(name="body", type="text")
     */
    private $body;

    /**
     * @var bool
     *
     * @ORM\Column(name="published", type="boolean")
     */
    private $published = false;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(
     *     targetEntity="App\Entity\PageTranslation",
     *     mappedBy="object",
     *     cascade={"persist", "remove"}
     * )
     */
    protected $translations;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return StaticPage
     */
    public function setId($id): StaticPage
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return StaticPage
     */
    public function setTitle(string $title): StaticPage
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getBody(): ?string
    {
        return $this->body;
    }

    /**
     * @param string $body
     * @return StaticPage
     */
    public function setBody(string $body): StaticPage
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPublished(): bool
    {
        return $this->published;
    }

    /**
     * @param bool $published
     * @return StaticPage
     */
    public function setPublished(bool $published): StaticPage
    {
        $this->published = $published;
        return $this;
    }







}
