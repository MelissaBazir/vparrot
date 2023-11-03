<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Service;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
;

class ServiceFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

    for ($serv = 0; $serv < 10; $serv++) {
        $service = new Service();
        $service->setTitle($faker->words(3, true)); 
        $service->setDescription($faker->sentences(3, true));

        // Go finding company reference
        $company = $this->getReference('company');
        $service->setCompany($company);
        
        $manager->persist($service);
    }

        $manager->flush();
    }
}