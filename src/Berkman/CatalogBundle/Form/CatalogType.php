<?php

namespace Berkman\SlideshowBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CatalogType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
    }

    public function getName()
    {
        return 'catalog';
    }
}
