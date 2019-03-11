<?php
/**
 * Created by PhpStorm.
 * User: beathan
 * Date: 2019-03-10
 * Time: 13:15
 */

namespace App\Admin;

use App\Entity\StaticPage;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\TranslationBundle\Filter\TranslationFieldFilter;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class StaticPageAdmin extends AbstractAdmin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('title', TextType::class);
        $formMapper->add('body', CKEditorType::class);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('title', TranslationFieldFilter::class);
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('title');
    }

    public function toString($object)
    {
        return $object instanceof StaticPage
            ? $object->getTitle()
            : 'Static page'; // shown in the breadcrumb on the create view
    }

}
