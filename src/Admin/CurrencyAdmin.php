<?php
/**
 * Created by PhpStorm.
 * User: beathan
 * Date: 2019-03-10
 * Time: 13:15
 */

namespace App\Admin;


use App\Entity\Currency;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class CurrencyAdmin extends AbstractAdmin
{
    protected $baseRouteName='currency_list';
    protected $baseRoutePattern = 'currency_list';

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('name', TextType::class);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('name');
    }

    public function toString($object)
    {
        return $object instanceof Currency
            ? $object->getName()
            : 'Currency'; // shown in the breadcrumb on the create view
    }

}
