<?php

namespace App\DataFixtures;

use App\Entity\Company;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
;

class CompanyFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $company = new Company();
        $company->setName('V. PARROT');
        $company->setEmail('contact@vparrot.fr');
        $company->setTelephone('0561222308');
        $company->setAddress('1 place du Capitole');
        $company->setZipcode('31000');
        $company->setCity('Toulouse');
        $manager->persist($company);
        
        // stocking company reference for re-use in user, service and opening fixtures
        $this->addReference('company', $company);
        

        $manager->flush();
    }
}