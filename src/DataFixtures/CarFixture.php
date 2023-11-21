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
            $car = new Car();
            $car->setTitle('NISSAN QASHQAI');
            $car->setSlug($this->slugger->slug($car->getTitle())->lower());
            $car->setYear(2019);
            $car->setMileage(33991);
            $car->setPrice(22990);
            $car->setImage('NISSAN QASHQAI III.jpg');
            $manager->persist($car);

            $car = new Car();
            $car->setTitle('OPEL ASTRA');
            $car->setSlug($this->slugger->slug($car->getTitle())->lower());
            $car->setYear(2019);
            $car->setMileage(82100);
            $car->setPrice(13990);
            $car->setImage('OPEL ASTRA V.jpg');
            $manager->persist($car);
            
            $car = new Car();
            $car->setTitle('VOLVO XC60 phase 2');
            $car->setSlug($this->slugger->slug($car->getTitle())->lower());
            $car->setYear(2022);
            $car->setMileage(45057);
            $car->setPrice(59900);
            $car->setImage('VOLVO XC60 II phase 2.jpg');
            $manager->persist($car);
            
            $car = new Car();
            $car->setTitle('PEUGEOT 308');
            $car->setSlug($this->slugger->slug($car->getTitle())->lower());
            $car->setYear(2023);
            $car->setMileage(1);
            $car->setPrice(27460);
            $car->setImage('PEUGEOT 308 III.jpg');
            $manager->persist($car);
        
            $car = new Car();
            $car->setTitle('PEUGEOT 3008 (2E GENERATION)');
            $car->setSlug($this->slugger->slug($car->getTitle())->lower());
            $car->setYear(2022);
            $car->setMileage(14174);
            $car->setPrice(32470);
            $car->setImage('PEUGEOT 3008 (2E GENERATION).jpg');
            $manager->persist($car);
        
            $car = new Car();
            $car->setTitle('CITROEN C3 phase 2');
            $car->setSlug($this->slugger->slug($car->getTitle())->lower());
            $car->setYear(2021);
            $car->setMileage(19250);
            $car->setPrice(18490);
            $car->setImage('CITROEN C3 III phase 2.jpg');
            $manager->persist($car);
        
            $car = new Car();
            $car->setTitle('RENAULT MEGANE');
            $car->setSlug($this->slugger->slug($car->getTitle())->lower());
            $car->setYear(2019);
            $car->setMileage(83594);
            $car->setPrice(12900);
            $car->setImage('RENAULT MEGANE IV.jpg');
            $manager->persist($car);
        
            $car = new Car();
            $car->setTitle('AUDI Q8');
            $car->setSlug($this->slugger->slug($car->getTitle())->lower());
            $car->setYear(2023);
            $car->setMileage(6395);
            $car->setPrice(98990);
            $car->setImage('AUDI Q8.jpg');
            $manager->persist($car);
        
            $car = new Car();
            $car->setTitle('PORSCHE PANAMERA');
            $car->setSlug($this->slugger->slug($car->getTitle())->lower());
            $car->setYear(2018);
            $car->setMileage(133000);
            $car->setPrice(69990);
            $car->setImage('PORSCHE PANAMERA II.jpg');
            $manager->persist($car);
        
            $car = new Car();
            $car->setTitle('BMW SERIE 2 F46 GRAN TOURER');
            $car->setSlug($this->slugger->slug($car->getTitle())->lower());
            $car->setYear(2017);
            $car->setMileage(79990);
            $car->setPrice(26890);
            $car->setImage('BMW SERIE 2 F46 GRAN TOURER.jpg');
            $manager->persist($car);
        
            $car = new Car();
            $car->setTitle('MINI 3P phase 2');
            $car->setSlug($this->slugger->slug($car->getTitle())->lower());
            $car->setYear(2013);
            $car->setMileage(74974);
            $car->setPrice(10580);
            $car->setImage('MINI MINI II 3P phase 2.jpg');
            $manager->persist($car);
        
            $car = new Car();
            $car->setTitle('CITROEN C4 CACTUS');
            $car->setSlug($this->slugger->slug($car->getTitle())->lower());
            $car->setYear(2017);
            $car->setMileage(89919);
            $car->setPrice(13990);
            $car->setImage('CITROEN C4 CACTUS.jpg');
            $manager->persist($car);

        


        
        // $faker = Factory::create();

        // for($cars = 1; $cars <= 21; $cars++) {
        //     $car = new Car();
        //     $car->setTitle($faker->words(3, true));
        //     $car->setSlug($this->slugger->slug($car->getTitle())->lower());
        //     $car->setYear($faker->year());
        //     $car->setMileage($faker->randomNumber(6));
        //     $car->setPrice($faker->randomNumber(5, true));
        //     $car->setImage('https://picsum.photos/200/100');
        //     $manager->persist($car);

        //     $this->addReference('car-'.$this->counter, $car);
        //     $this->counter++;
        // }
        $manager->flush();
    }
}