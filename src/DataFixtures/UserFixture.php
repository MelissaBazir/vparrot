<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixture extends Fixture
{
    private $counter = 1;
    public function __construct(private UserPasswordHasherInterface $passwordEncoder, private SluggerInterface $slugger)
    {
    }
    public function load(ObjectManager $manager): void
    {

        $admin = new User();
        $admin->setEmail('contact.vparrot@gmail.com');
        $admin->setLastname('PARROT');
        $admin->setFirstname('Vincent');
        $admin->setTelephone('0561222308');
        $admin->setPassword(
            $this->passwordEncoder->hashPassword($admin, 'admin')
        );
        $admin->setRoles(['ROLE_ADMIN']);

        $company = $this->getReference('company');
        $admin->setCompany($company);

        $manager->persist($admin);

        $faker = Faker\Factory::create('fr_FR');

        for ($usr = 1; $usr <= 22; $usr++) {
            $user = new User();
            $user->setEmail($faker->email);
            $user->setLastname($faker->lastName);
            $user->setFirstname($faker->firstName);
            $user->setTelephone($faker->serviceNumber);
            $user->setPassword(
                $this->passwordEncoder->hashPassword($user, 'user')
            );
            // Go finding company reference
            $company = $this->getReference('company');
            $user->setCompany($company);

            $manager->persist($user);

            //reference a user for review fixture
            $this->addReference('usr-' . $this->counter, $user);
            $this->counter++;
        }

        $manager->flush();
    }
}