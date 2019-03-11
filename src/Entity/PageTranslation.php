<?php
/**
 * Created by PhpStorm.
 * User: beathan
 * Date: 2019-03-11
 * Time: 09:04
 */

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use Sonata\TranslationBundle\Model\Gedmo\AbstractPersonalTranslation;

/**
 * @ORM\Entity
 * @ORM\Table(name="static_pages_translation",
 *     uniqueConstraints={@ORM\UniqueConstraint(name="lookup_unique_static_page_translation_idx", columns={
 *         "locale", "object_id", "field"
 *     })}
 * )
 */
class PageTranslation extends AbstractPersonalTranslation
{
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\StaticPage", inversedBy="translations")
     * @ORM\JoinColumn(name="object_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $object;
}
