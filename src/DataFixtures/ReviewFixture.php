<?php

namespace App\DataFixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker\Factory;
use App\Entity\Review;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ReviewFixture extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $review = new Review();
            $review->setTitle($faker->words(3, true));
            $review->setTextReview($faker->sentences(3, true));
            $review->setScore(rand(3, 4));
            $review->setIsApproved(false);

            // get user reference
            $user = $this->getReference('usr-' . rand(1, 5));
            $review->setUser($user);

            $manager->persist($review);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            UserFixture::class,
        ];
    }
}
