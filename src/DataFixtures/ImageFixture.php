<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\Image;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
;

class ImageFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create();

        for ($img = 1; $img <= 20; $img++) {
            $image = new Image();
            $image->setURL('https://picsum.photos/300/200');
            $image->setIsMain($faker->boolean());
            $car = $this->getReference('car-'.rand(1,9));
            $image->setCar($car);

            $manager->persist($image);
        }
        $manager->flush();
    }
}