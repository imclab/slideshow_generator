<?php
namespace Berkman\CatalogBundle\Form\Finder;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Doctrine\ORM\EntityRepository;
use Berkman\CatalogBundle\Entity\Finder;
use Berkman\CatalogBundle\Form\Finder\DataTransformer\FinderToCatalogsTransformer;

class SearchType extends AbstractType
{
    /*private $choices;

    public function __construct(Finder $finder)
    {
        foreach($finder->getCatalogs() as $catalog) {
            if ($catalog->hasImageSearch() || $catalog->hasImageGroupSearch()) {
                $this->choices[$catalog->getId()] = $catalog->getName();
            }
        }
    }
     */

    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('keyword', 'text', array( 'label' => 'Keyword'))
            ->add('catalogs', 'catalog_selector', $options)
        ;
    }

    public function getName()
    {
        return 'finder_search';
    }
}