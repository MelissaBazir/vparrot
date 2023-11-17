<?php

namespace App\DataFixtures;

use App\Entity\Opening;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;;

class OpeningFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $weekdays = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
        $i = 1;
        foreach ($weekdays as $weekday) {
            $opening = new Opening();
            $opening->setDay($weekday);
            $opening->setDayOrder($i);
            $opening->setAmOpening('9h');
            $opening->setAmClosing('12h');
            $opening->setPmOpening('14h');
            $opening->setPmClosing('18h');

            // Get reference to company
            $company = $this->getReference('company');
            $opening->setCompany($company);

            $manager->persist($opening);
            $i++;
        }
        unset($i);

        $manager->flush();
    }
}