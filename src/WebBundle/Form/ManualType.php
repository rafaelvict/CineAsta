<?php
namespace WebBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
class ManualType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('transaction',null,array("label"=>"Detalhes da transação de pagamento :"));
        $builder->add('infos',null,array("label"=>"Detalhes da transação de pagamento :"));
        $builder->add('file');

    }
    public function getName()
    {
        return 'Subscription';
    }
}
?>