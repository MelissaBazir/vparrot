<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Car;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\String\Slugger\SluggerInterface;

;

class CarFixture extends Fixture
{
    public function __construct(private SluggerInterface $slugger)
    {
        // $this->slugger = $slugger; only in PHP8
    }
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for($cars = 0; $cars < 10; $cars++) {
            $car = new Car();
            $car->setTitle($faker->words(3, true));
            $car->setSlug($this->slugger->slug($car->getTitle())->lower());
            $car->setYear($faker->year());
            $car->setMileage($faker->randomNumber(6));
            $car->setPrice($faker->randomNumber(5, true));
            $manager->persist($car);
        }
        $manager->flush();
    }
}