<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Program;
use App\Entity\Episode;
use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use PhpParser\Node\Stmt\Catch_;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Walking Deas seasons
        $season_WD_1 = new Season();

        $season_WD_1->setNumber(1);
        $season_WD_1->setYear(2002);
        $season_WD_1->setDescription("Première saison de la très célèbres series sur les Zombies");
        $season_WD_1->setProgram($this->getReference('program_Walking Dead'));
        $manager->persist($season_WD_1);

        $season_WD_2 = new Season();

        $season_WD_2->setNumber(2);
        $season_WD_2->setYear(2004);
        $season_WD_2->setDescription("Deuxième saison de la très célèbres series sur les Zombies");
        $season_WD_2->setProgram($this->getReference('program_Walking Dead'));
        $manager->persist($season_WD_2);

        $season_WD_3 = new Season();

        $season_WD_3->setNumber(3);
        $season_WD_3->setYear(2006);
        $season_WD_3->setDescription("Dernière saison de la très célèbres series sur les Zombies");
        $season_WD_3->setProgram($this->getReference('program_Walking Dead'));
        $manager->persist($season_WD_3);

        $manager->flush($season_WD_1);
        $manager->flush($season_WD_2);
        $manager->flush($season_WD_3);

        // The Haunting Of Hill House seasons
    }

    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
          ProgramFixtures::class,
        ];
    }
}