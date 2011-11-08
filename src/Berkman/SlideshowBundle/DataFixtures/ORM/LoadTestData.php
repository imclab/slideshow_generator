<?php

namespace Berkman\SlideshowBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Berkman\SlideshowBundle\Entity\Catalog;
use Berkman\SlideshowBundle\Entity\Person;
use Berkman\SlideshowBundle\Entity\Slideshow;
use Berkman\SlideshowBundle\Entity\Slide;
use Berkman\SlideshowBundle\Entity\Image;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

class LoadTestCatalogs implements FixtureInterface
{
	public function load($manager)
	{
		$via = new Catalog();
		$via->setId('VIA');
		$via->setName('Visual Information Access');
        $via->setCreated(new \DateTime('now'));
        $via->setUpdated(new \DateTime('now'));
        $via->setIsSearchable(true);
        $via->setCanImport(true);

        $oasis = new Catalog();
        $oasis->setId('OASIS');
        $oasis->setName('Online Archival Search Information System');
        $oasis->setCreated(new \DateTime('now'));
        $oasis->setUpdated(new \DateTime('now'));
        $oasis->setIsSearchable(true);
        $oasis->setCanImport(false);
        
        $ted = new Catalog();
        $ted->setId('TED');
        $ted->setName('Templated Databases');
        $ted->setCreated(new \DateTime('now'));
        $ted->setUpdated(new \DateTime('now'));
        $ted->setIsSearchable(true);
        $ted->setCanImport(false);

        $page = new Catalog();
        $page->setId('Page');
        $page->setName('Paged Objects');
        $page->setCreated(new \DateTime('now'));
        $page->setUpdated(new \DateTime('now'));
        $page->setIsSearchable(false);
        $page->setCanImport(false);

		$manager->persist($via);
        $manager->persist($oasis);
        $manager->persist($ted);
        $manager->persist($page);

        // create a user
        $user = new Person();
        $user->setUsername('justin');
        $user->setUsernameCanonical('justin');
        $user->setEmail('justin@example.com');
        $user->setEmailCanonical('justin@example.com');
        $user->setAlgorithm('sha512');
        $user->addRole('ROLE_USER');
        $user->setEnabled(true);
 
        // encode and set the password for the user,
        // these settings match our config
        $encoder = new MessageDigestPasswordEncoder();
        $password = $encoder->encodePassword('password', $user->getSalt());
        $user->setPassword($password);
 
        $manager->persist($user);

        $slideshow = new Slideshow();
        $slideshow->setName('Wilson, Ernest Henry | China');

        $images = array (
          array (
            $via,
             'olvwork291170',
             'ARB.JPLIB:895302',
             'olvwork291170',
             NULL,
             'ARB.JPLIB:895302',
             'ARB.JPLIB:895302?height=150&width=150',
          ),
          array (
            $via,
             'olvwork305312',
             'ARB.JPLIB:860804',
             'olvwork305312',
             NULL,
             'ARB.JPLIB:860804',
             'ARB.JPLIB:860753?height=150&width=150',
          ),
          array (
            $via,
             'olvwork305309',
             'ARB.JPLIB:860803',
             'olvwork305309',
             NULL,
             'ARB.JPLIB:860803',
             'ARB.JPLIB:860752?height=150&width=150',
          ),
          array (
            $via,
             'olvwork287994',
             'ARB.JPLIB:586903',
             'olvwork287994',
             NULL,
             'ARB.JPLIB:586903',
             'ARB.JPLIB:586903?height=150&width=150',
          ),
          array (
            $via,
             'olvwork293603',
             'ARB.JPLIB:682448',
             'olvwork293603',
             NULL,
             'ARB.JPLIB:682448',
             'ARB.JPLIB:682448?height=150&width=150',
          ),
          array (
            $via,
             'olvwork293634',
             'ARB.JPLIB:678428',
             'olvwork293634',
             NULL,
             'ARB.JPLIB:678428',
             'ARB.JPLIB:678428?height=150&width=150',
          ),
          array (
            $via,
             'olvwork289441',
             'ARB.JPLIB:593130',
             'olvwork289441',
             NULL,
             'ARB.JPLIB:593130',
             'ARB.JPLIB:593130?height=150&width=150',
          ),
          array (
            $via,
             'olvwork293690',
             'ARB.JPLIB:678464',
             'olvwork293690',
             NULL,
             'ARB.JPLIB:678464',
             'ARB.JPLIB:678464?height=150&width=150',
          ),
          array (
            $via,
             'olvwork293686',
             'ARB.JPLIB:678460',
             'olvwork293686',
             NULL,
             'ARB.JPLIB:678460',
             'ARB.JPLIB:678460?height=150&width=150',
          ),
          array (
            $via,
             'olvwork289957',
             'ARB.JPLIB:600581',
             'olvwork289957',
             NULL,
             'ARB.JPLIB:600581',
             'ARB.JPLIB:600581?height=150&width=150',
          ),
          array (
            $via,
             'olvwork289051',
             'ARB.JPLIB:590656',
             'olvwork289051',
             NULL,
             'ARB.JPLIB:590656',
             'ARB.JPLIB:590656?height=150&width=150',
          ),
          array (
            $via,
             'olvwork289353',
             'ARB.JPLIB:593122',
             'olvwork289353',
             NULL,
             'ARB.JPLIB:593122',
             'ARB.JPLIB:593122?height=150&width=150',
          ),
          array (
            $via,
             'olvwork289356',
             'ARB.JPLIB:593123',
             'olvwork289356',
             NULL,
             'ARB.JPLIB:593123',
             'ARB.JPLIB:593123?height=150&width=150',
          ),
          array (
            $via,
             'olvwork289430',
             'ARB.JPLIB:593125',
             'olvwork289430',
             NULL,
             'ARB.JPLIB:593125',
             'ARB.JPLIB:593125?height=150&width=150',
          ),
          array (
            $via,
             'olvwork290920',
             'ARB.JPLIB:866147',
             'olvwork290920',
             NULL,
             'ARB.JPLIB:866147',
             'ARB.JPLIB:866147?height=150&width=150',
          ),
          array (
            $via,
             'olvwork289601',
             'ARB.JPLIB:593172',
             'olvwork289601',
             NULL,
             'ARB.JPLIB:593172',
             'ARB.JPLIB:593172?height=150&width=150',
          ),
          array (
            $via,
             'olvwork293256',
             'ARB.JPLIB:682414',
             'olvwork293256',
             NULL,
             'ARB.JPLIB:682414',
             'ARB.JPLIB:682414?height=150&width=150',
          ),
          array (
            $via,
             'olvwork290255',
             'ARB.JPLIB:600638',
             'olvwork290255',
             NULL,
             'ARB.JPLIB:600638',
             'ARB.JPLIB:600638?height=150&width=150',
          ),
          array (
            $via,
             'olvwork287142',
             'ARB.JPLIB:587438',
             'olvwork287142',
             NULL,
             'ARB.JPLIB:587438',
             'ARB.JPLIB:587438?height=150&width=150',
          ),
          array (
            $via,
             'olvwork292629',
             'ARB.JPLIB:643466',
             'olvwork292629',
             NULL,
             'ARB.JPLIB:643466',
             'ARB.JPLIB:643466?height=150&width=150',
          ),
          array (
            $via,
             'olvwork293695',
             'ARB.JPLIB:866191',
             'olvwork293695',
             NULL,
             'ARB.JPLIB:866191',
             'ARB.JPLIB:866191?height=150&width=150',
          ),
          array (
            $via,
             'olvwork177712',
             'ARB.JPLIB:479197',
             'olvwork177712',
             NULL,
             'ARB.JPLIB:479197',
             'ARB.JPLIB:479197?height=150&width=150',
          ),
          array (
            $via,
             'olvwork292662',
             'ARB.JPLIB:643488',
             'olvwork292662',
             NULL,
             'ARB.JPLIB:643488',
             'ARB.JPLIB:643488?height=150&width=150',
          ),
          array (
            $via,
             'olvwork290917',
             'ARB.JPLIB:608322',
             'olvwork290917',
             NULL,
             'ARB.JPLIB:608322',
             'ARB.JPLIB:608322?height=150&width=150',
          ),
          array (
            $via,
             'olvwork287154',
             'ARB.JPLIB:587445',
             'olvwork287154',
             NULL,
             'ARB.JPLIB:587445',
             'ARB.JPLIB:587445?height=150&width=150',
          ),
          array (
            $via,
             'olvwork121745',
             'ARB.JPLIB:15158',
             'olvwork121745',
             NULL,
             'ARB.JPLIB:15158',
             'ARB.JPLIB:163325?height=150&width=150',
          ),
          array (
            $via,
             'olvwork287984',
             'ARB.JPLIB:586897',
             'olvwork287984',
             NULL,
             'ARB.JPLIB:586897',
             'ARB.JPLIB:586897?height=150&width=150',
          ),
          array (
            $via,
             'olvwork288022',
             'ARB.JPLIB:853329',
             'olvwork288022',
             NULL,
             'ARB.JPLIB:853329',
             'ARB.JPLIB:853291?height=150&width=150',
          ),
          array (
            $via,
             'olvwork306905',
             'ARB.JPLIB:832406',
             'olvwork306905',
             NULL,
             'ARB.JPLIB:832406',
             'ARB.JPLIB:832406?height=150&width=150',
          ),
          array (
            $via,
             'olvwork308582',
             'ARB.JPLIB:832425',
             'olvwork308582',
             NULL,
             'ARB.JPLIB:832425',
             'ARB.JPLIB:832425?height=150&width=150',
          ),
          array (
            $via,
             'olvwork292821',
             'ARB.JPLIB:621767',
             'olvwork292821',
             NULL,
             'ARB.JPLIB:621767',
             'ARB.JPLIB:621767?height=150&width=150',
          ),
          array (
            $via,
             'olvwork289448',
             'ARB.JPLIB:593135',
             'olvwork289448',
             NULL,
             'ARB.JPLIB:593135',
             'ARB.JPLIB:593135?height=150&width=150',
          ),
          array (
            $via,
             'olvwork289455',
             'ARB.JPLIB:853332',
             'olvwork289455',
             NULL,
             'ARB.JPLIB:853332',
             'ARB.JPLIB:853294?height=150&width=150',
          ),
          array (
            $via,
             'olvwork287190',
             'ARB.JPLIB:587471',
             'olvwork287190',
             NULL,
             'ARB.JPLIB:587471',
             'ARB.JPLIB:587471?height=150&width=150',
          ),
          array (
            $via,
             'olvwork293682',
             'ARB.JPLIB:678457',
             'olvwork293682',
             NULL,
             'ARB.JPLIB:678457',
             'ARB.JPLIB:678457?height=150&width=150',
          ),
          array (
            $via,
             'olvwork293683',
             'ARB.JPLIB:678458',
             'olvwork293683',
             NULL,
             'ARB.JPLIB:678458',
             'ARB.JPLIB:678458?height=150&width=150',
          ),
          array (
            $via,
             'olvwork308576',
             'ARB.JPLIB:832421',
             'olvwork308576',
             NULL,
             'ARB.JPLIB:832421',
             'ARB.JPLIB:832421?height=150&width=150',
          ),
          array (
            $via,
             'olvwork308578',
             'ARB.JPLIB:832422',
             'olvwork308578',
             NULL,
             'ARB.JPLIB:832422',
             'ARB.JPLIB:832422?height=150&width=150',
          ),
          array (
            $via,
             'olvwork288057',
             'ARB.JPLIB:586947',
             'olvwork288057',
             NULL,
             'ARB.JPLIB:586947',
             'ARB.JPLIB:586947?height=150&width=150',
          ),
          array (
            $via,
             'olvwork293681',
             'ARB.JPLIB:678456',
             'olvwork293681',
             NULL,
             'ARB.JPLIB:678456',
             'ARB.JPLIB:678456?height=150&width=150',
          ),
          array (
            $via,
             'olvwork289447',
             'ARB.JPLIB:593134',
             'olvwork289447',
             NULL,
             'ARB.JPLIB:593134',
             'ARB.JPLIB:593134?height=150&width=150',
          ),
          array (
            $via,
             'olvwork293707',
             'ARB.JPLIB:678477',
             'olvwork293707',
             NULL,
             'ARB.JPLIB:678477',
             'ARB.JPLIB:678477?height=150&width=150',
          ),
          array (
            $via,
             'olvwork293708',
             'ARB.JPLIB:678478',
             'olvwork293708',
             NULL,
             'ARB.JPLIB:678478',
             'ARB.JPLIB:678478?height=150&width=150',
          ),
          array (
            $via,
             'olvwork289454',
             'ARB.JPLIB:593140',
             'olvwork289454',
             NULL,
             'ARB.JPLIB:593140',
             'ARB.JPLIB:593140?height=150&width=150',
          ),
          array (
            $via,
             'olvwork289438',
             'ARB.JPLIB:593128',
             'olvwork289438',
             NULL,
             'ARB.JPLIB:593128',
             'ARB.JPLIB:593128?height=150&width=150',
          ),
          array (
            $via,
             'olvwork291024',
             'ARB.JPLIB:608370',
             'olvwork291024',
             NULL,
             'ARB.JPLIB:608370',
             'ARB.JPLIB:608370?height=150&width=150',
          ),
          array (
            $via,
             'olvwork308583',
             'ARB.JPLIB:832426',
             'olvwork308583',
             NULL,
             'ARB.JPLIB:832426',
             'ARB.JPLIB:832426?height=150&width=150',
          ),
          array (
            $via,
             'olvwork289292',
             'ARB.JPLIB:593113',
             'olvwork289292',
             NULL,
             'ARB.JPLIB:593113',
             'ARB.JPLIB:593113?height=150&width=150',
          ),
          array (
            $via,
             'olvwork288099',
             'ARB.JPLIB:586970',
             'olvwork288099',
             NULL,
             'ARB.JPLIB:586970',
             'ARB.JPLIB:586970?height=150&width=150',
          ),
          array (
            $via,
             'olvwork292801',
             'ARB.JPLIB:853340',
             'olvwork292801',
             NULL,
             'ARB.JPLIB:853340',
             'ARB.JPLIB:853302?height=150&width=150',
          ),
          array (
            $via,
             'olvwork292807',
             'ARB.JPLIB:621755',
             'olvwork292807',
             NULL,
             'ARB.JPLIB:621755',
             'ARB.JPLIB:621755?height=150&width=150',
          ),
          array (
            $via,
             'olvwork292816',
             'ARB.JPLIB:621763',
             'olvwork292816',
             NULL,
             'ARB.JPLIB:621763',
             'ARB.JPLIB:621763?height=150&width=150',
          ),
          array (
            $via,
             'olvwork293688',
             'ARB.JPLIB:678462',
             'olvwork293688',
             NULL,
             'ARB.JPLIB:678462',
             'ARB.JPLIB:678462?height=150&width=150',
          ),
          array (
            $via,
             'olvwork293692',
             'ARB.JPLIB:678466',
             'olvwork293692',
             NULL,
             'ARB.JPLIB:678466',
             'ARB.JPLIB:678466?height=150&width=150',
          ),
          array (
            $via,
             'olvwork293709',
             'ARB.JPLIB:678479',
             'olvwork293709',
             NULL,
             'ARB.JPLIB:678479',
             'ARB.JPLIB:678479?height=150&width=150',
          ),
          array (
            $via,
             'olvwork293710',
             'ARB.JPLIB:678480',
             'olvwork293710',
             NULL,
             'ARB.JPLIB:678480',
             'ARB.JPLIB:678480?height=150&width=150',
          ),
          array (
            $via,
             'olvwork287077',
             'ARB.JPLIB:587380',
             'olvwork287077',
             NULL,
             'ARB.JPLIB:587380',
             'ARB.JPLIB:587380?height=150&width=150',
          ),
          array (
            $via,
             'olvwork291158',
             'ARB.JPLIB:608378',
             'olvwork291158',
             NULL,
             'ARB.JPLIB:608378',
             'ARB.JPLIB:608378?height=150&width=150',
          ),
          array (
            $via,
             'olvwork288725',
             'ARB.JPLIB:590632',
             'olvwork288725',
             NULL,
             'ARB.JPLIB:590632',
             'ARB.JPLIB:590632?height=150&width=150',
          ),
          array (
            $via,
             'olvwork292659',
             'ARB.JPLIB:643485',
             'olvwork292659',
             NULL,
             'ARB.JPLIB:643485',
             'ARB.JPLIB:643485?height=150&width=150',
          ),
          array (
            $via,
             'olvwork293629',
             'ARB.JPLIB:678425',
             'olvwork293629',
             NULL,
             'ARB.JPLIB:678425',
             'ARB.JPLIB:678425?height=150&width=150',
          ),
          array (
            $via,
             'olvwork293631',
             'ARB.JPLIB:678426',
             'olvwork293631',
             NULL,
             'ARB.JPLIB:678426',
             'ARB.JPLIB:678426?height=150&width=150',
          ),
          array (
            $via,
             'olvwork289214',
             'ARB.JPLIB:593101',
             'olvwork289214',
             NULL,
             'ARB.JPLIB:593101',
             'ARB.JPLIB:593101?height=150&width=150',
          ),
          array (
            $via,
             'olvwork292587',
             'ARB.JPLIB:643456',
             'olvwork292587',
             NULL,
             'ARB.JPLIB:643456',
             'ARB.JPLIB:643456?height=150&width=150',
          ),
          array (
            $via,
             'olvwork293657',
             'ARB.JPLIB:678442',
             'olvwork293657',
             NULL,
             'ARB.JPLIB:678442',
             'ARB.JPLIB:678442?height=150&width=150',
          ),
          array (
            $via,
             'olvwork293266',
             'ARB.JPLIB:682422',
             'olvwork293266',
             NULL,
             'ARB.JPLIB:682422',
             'ARB.JPLIB:682422?height=150&width=150',
          ),
          array (
            $via,
             'olvwork293518',
             'ARB.JPLIB:682423',
             'olvwork293518',
             NULL,
             'ARB.JPLIB:682423',
             'ARB.JPLIB:682423?height=150&width=150',
          ),
          array (
            $via,
             'olvwork293522',
             'ARB.JPLIB:682425',
             'olvwork293522',
             NULL,
             'ARB.JPLIB:682425',
             'ARB.JPLIB:682425?height=150&width=150',
          ),
          array (
            $via,
             'olvwork292670',
             'ARB.JPLIB:643496',
             'olvwork292670',
             NULL,
             'ARB.JPLIB:643496',
             'ARB.JPLIB:643496?height=150&width=150',
          ),
          array (
            $via,
             'olvwork292681',
             'ARB.JPLIB:643507',
             'olvwork292681',
             NULL,
             'ARB.JPLIB:643507',
             'ARB.JPLIB:643507?height=150&width=150',
          ),
          array (
            $via,
             'olvwork292685',
             'ARB.JPLIB:643510',
             'olvwork292685',
             NULL,
             'ARB.JPLIB:643510',
             'ARB.JPLIB:643510?height=150&width=150',
          ),
          array (
            $via,
             'olvwork287200',
             'ARB.JPLIB:866105',
             'olvwork287200',
             NULL,
             'ARB.JPLIB:866105',
             'ARB.JPLIB:866105?height=150&width=150',
          ),
          array (
            $via,
             'olvwork288702',
             'ARB.JPLIB:590627',
             'olvwork288702',
             NULL,
             'ARB.JPLIB:590627',
             'ARB.JPLIB:590627?height=150&width=150',
          ),
          array (
            $via,
             'olvwork290701',
             'ARB.JPLIB:608305',
             'olvwork290701',
             NULL,
             'ARB.JPLIB:608305',
             'ARB.JPLIB:608305?height=150&width=150',
          ),
          array (
            $via,
             'olvwork290729',
             'ARB.JPLIB:608320',
             'olvwork290729',
             NULL,
             'ARB.JPLIB:608320',
             'ARB.JPLIB:608320?height=150&width=150',
          ),
          array (
            $via,
             'olvwork293696',
             'ARB.JPLIB:866192',
             'olvwork293696',
             NULL,
             'ARB.JPLIB:866192',
             'ARB.JPLIB:866192?height=150&width=150',
          ),
          array (
            $via,
             'olvwork290289',
             'ARB.JPLIB:600648',
             'olvwork290289',
             NULL,
             'ARB.JPLIB:600648',
             'ARB.JPLIB:600648?height=150&width=150',
          ),
          array (
            $via,
             'olvwork290264',
             'ARB.JPLIB:600645',
             'olvwork290264',
             NULL,
             'ARB.JPLIB:600645',
             'ARB.JPLIB:600645?height=150&width=150',
          ),
          array (
            $via,
             'olvwork292704',
             'ARB.JPLIB:643529',
             'olvwork292704',
             NULL,
             'ARB.JPLIB:643529',
             'ARB.JPLIB:643529?height=150&width=150',
          ),
          array (
            $via,
             'olvwork177707',
             'ARB.JPLIB:479192',
             'olvwork177707',
             NULL,
             'ARB.JPLIB:479192',
             'ARB.JPLIB:479192?height=150&width=150',
          ),
          array (
            $via,
             'olvwork289185',
             'ARB.JPLIB:590712',
             'olvwork289185',
             NULL,
             'ARB.JPLIB:590712',
             'ARB.JPLIB:590712?height=150&width=150',
          ),
        );

        foreach ($images as $image) {
            // make a reflection object 
            $reflectionObj = new \ReflectionClass('Berkman\SlideshowBundle\Entity\Image'); 

            // use Reflection to create a new instance, using the $args 
            $image = $reflectionObj->newInstanceArgs($image);
            $slide = new Slide($image);
            $slideshow->addSlide($slide);
        }
        $slideshow->setPerson($user);
        $slideshow->setCreated(new \DateTime('now'));
        $slideshow->setUpdated(new \DateTime('now'));
        $slideshow->setPublished(true);
        $manager->persist($slideshow);

		$manager->flush();
	}
}
