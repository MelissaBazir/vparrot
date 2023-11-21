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

    $service = new Service();
    $service->setTitle('Révision & Vidange');
    $service->setDescription('Changement des filtres et du liquide de refroidissement');
    $company = $this->getReference('company');
    // Go finding company reference
    $service->setCompany($company);
    $manager->persist($service);

    $service = new Service();
    $service->setTitle('Freinage');
    $service->setDescription('Disques et plaquettes de frein');
    $company = $this->getReference('company');
    $service->setCompany($company);
    $manager->persist($service);

    $service = new Service();
    $service->setTitle('Changement de pneus');
    $service->setDescription('Montage, rééquilibrage et réparation de pneu');
    $company = $this->getReference('company');
    $service->setCompany($company);
    $manager->persist($service);

    // for ($serv = 0; $serv < 3; $serv++) {
    //     $service = new Service();
    //     $service->setTitle($faker->words(3, true));
    //     $service->setDescription($faker->sentences(3, true));
    // Go finding company reference
    // $service->setCompany($company);
    // $manager->persist($service);
    // } 

        $manager->flush();
    }

}