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
        
        $review = new Review();
        $review->setTitle('service gagnant');
        $review->setTextReview('Contact très rapide. Dépôts du dossier photo tres facile. Réponse éclair en 24 h. Contrat d’achat complet et rapide.');
        $review->setScore(4);
        $review->setIsApproved(false);
        $review->setEmail($faker->email);
        // get user reference
        $user = $this->getReference('usr-' . rand(1, 5));
        $review->setUser($user);
        $manager->persist($review);

        $review = new Review();
        $review->setTitle('toujours aussi efficace');
        $review->setTextReview('Toujours aussi efficace et aimable Arrivé le 11 novembre à 17h45 avec un pneu crevé qui s’est avéré irréparable, reparti avec deux pneus neufs une heure plus tard. Merci');
        $review->setScore(4);
        $review->setIsApproved(false);
        $review->setEmail($faker->email);
        $user = $this->getReference('usr-' . rand(1, 5));
        $review->setUser($user);
        $manager->persist($review);

        $review = new Review();
        $review->setTitle('très bon accueil');
        $review->setTextReview('Très bon accueil. Bonne impression à nouveau (2eme visite).');
        $review->setScore(3);
        $review->setIsApproved(false);
        $review->setEmail($faker->email);
        $user = $this->getReference('usr-' . rand(1, 5));
        $review->setUser($user);
        $manager->persist($review);

        $review = new Review();
        $review->setTitle('accueil sympathique');
        $review->setTextReview('Accueil bien sympa, et personnels pro. Voiture faite dans les temps, je reviendrai.');
        $review->setScore(4);
        $review->setIsApproved(false);
        $review->setEmail($faker->email);
        $user = $this->getReference('usr-' . rand(1, 5));
        $review->setUser($user);
        $manager->persist($review);

        $review = new Review();
        $review->setTitle('très bien');
        $review->setTextReview('Très bien, efficace et rapide... attention même de ne pas aller trop vite pour éviter des petites erreurs ! En tout cas, serviables, polis, souriant et chaleureux !');
        $review->setScore(3);
        $review->setIsApproved(false);
        $review->setEmail($faker->email);
        $user = $this->getReference('usr-' . rand(1, 5));
        $review->setUser($user);
        $manager->persist($review);

        $review = new Review();
        $review->setTitle('Prestation parfaite');
        $review->setTextReview('Prestation faite correctement, RDV très rapide, explications complètes et bonne écoute. En plus tarif compétitif !');
        $review->setScore(4);
        $review->setIsApproved(false);
        $review->setEmail($faker->email);
        $user = $this->getReference('usr-' . rand(1, 5));
        $review->setUser($user);
        $manager->persist($review);

        $review = new Review();
        $review->setTitle('Changement de pneus');
        $review->setTextReview('RdV par téléphone, très bien. Accueil très sympathique. Prestation de qualité');
        $review->setScore(4);
        $review->setIsApproved(false);
        $review->setEmail($faker->email);
        $user = $this->getReference('usr-' . rand(1, 5));
        $review->setUser($user);
        $manager->persist($review);

        $review = new Review();
        $review->setTitle('très satisfait');
        $review->setTextReview('J\'ai été très satisfait : besoin de changer en urgence 2 pneus + conseils sur l\'achat d\'un chargeur de batterie. L\'équipe était efficace et sympa. Je recommande');
        $review->setScore(4);
        $review->setIsApproved(false);
        $review->setEmail($faker->email);
        $user = $this->getReference('usr-' . rand(1, 5));
        $review->setUser($user);
        $manager->persist($review);
        

        // for ($i = 0; $i < 21; $i++) {
        //     $review = new Review();
        //     $review->setTitle($faker->words(3, true));
        //     $review->setTextReview($faker->sentences(3, true));
        //     $review->setScore(rand(3, 4));
        //     $review->setIsApproved(false);
        //     $review->setEmail($faker->email);

        //     // get user reference
        //     $user = $this->getReference('usr-' . rand(1, 5));
        //     $review->setUser($user);

        //     $manager->persist($review);
        // }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            UserFixture::class,
        ];
    }
}