<?php
/**
 * Created by PhpStorm.
 * User: asus)
 * Date: 01.11.2018
 * Time: 18:52
 */

namespace App\Form;

use App\Entity\MicroPost;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MicroPostType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder->add('text', TextareaType::class, ['label'=>false])
                ->add('save', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults([
            'data_class'=>MicroPost::class
        ]);
    }
}