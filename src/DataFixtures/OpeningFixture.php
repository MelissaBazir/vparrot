<?php

namespace App\DataFixtures;

use App\Entity\Opening;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
;

class OpeningFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        $weekdays = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];

        foreach ($weekdays as $weekday) {
            $opening = new Opening();
            $opening->setDay($weekday);
            $opening->setAmOpening('9');
            $opening->setAmClosing('12');
            $opening->setPmOpening('14');
            $opening->setPmClosing('18');

            // Get reference to company
            $company = $this->getReference('company');
            $opening->setCompany($company);

            $manager->persist($opening);
        }
        

        $manager->flush();
    }
}