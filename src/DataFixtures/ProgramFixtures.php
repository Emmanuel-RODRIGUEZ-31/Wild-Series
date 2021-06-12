<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use PhpParser\Node\Stmt\Catch_;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $program1 = new Program();

        $program1->setTitle("Walking Dead");
        $program1->setSummary( "Le policier Rick Grimes se réveille après un long coma. Il découvre avec effarement que le monde, ravagé par une épidémie, est envahi par les morts-vivants.");
        $program1->setPoster("https://m.media-amazon.com/images/M/MV5BZmFlMTA0MmUtNWVmOC00ZmE1LWFmMDYtZTJhYjJhNGVjYTU5XkEyXkFqcGdeQXVyMTAzMDM4MjM0._V1_.jpg");
        $program1->setCategory($this->getReference('category_0'));
        $this->addReference('program_' . $program1->getTitle(), $program1 );
        $manager->persist($program1);

        $program2 = new Program();

        $program2->setTitle("The Haunting Of Hill House");
        $program2->setSummary("Plusieurs frères et sœurs qui, enfants, ont grandi dans la demeure qui allait devenir la maison hantée la plus célèbre des États-Unis, sont contraints de se réunir pour finalement affronter les fantômes de leur passé.");
        $program2->setPoster("https://m.media-amazon.com/images/M/MV5BMTU4NzA4MDEwNF5BMl5BanBnXkFtZTgwMTQxODYzNjM@._V1_SY1000_CR0,0,674,1000_AL_.jpg");
        $program2->setCategory($this->getReference('category_4'));
        $this->addReference('program_' . $program2->getTitle(), $program2 );
        $manager->persist($program2);

        $program3 = new Program();

        $program3->setTitle("American Horror Story");
        $program3->setSummary("A chaque saison, son histoire. American Horror Story nous embarque dans des récits à la fois poignants et cauchemardesques, mêlant la peur, le gore et le politiquement correct.");
        $program3->setPoster("https://m.media-amazon.com/images/M/MV5BODZlYzc2ODYtYmQyZS00ZTM4LTk4ZDQtMTMyZDdhMDgzZTU0XkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_SY1000_CR0,0,666,1000_AL_.jpg");
        $program3->setCategory($this->getReference('category_4'));
        $this->addReference('program_' . $program3->getTitle(), $program3 );
        $manager->persist($program3);

        $program4 = new Program();

        $program4->setTitle("Love Death And Robots");
        $program4->setSummary("Un yaourt susceptible, des soldats lycanthropes, des robots déchaînés, des monstres-poubelles, des chasseurs de primes cyborgs, des araignées extraterrestres et des démons assoiffés de sang : tout ce beau monde est réuni dans 18 courts métrages animés déconseillés aux âmes sensibles.");
        $program4->setPoster("https://m.media-amazon.com/images/M/MV5BMTc1MjIyNDI3Nl5BMl5BanBnXkFtZTgwMjQ1OTI0NzM@._V1_SY1000_CR0,0,674,1000_AL_.jpg");
        $program4->setCategory($this->getReference('category_3'));
        $this->addReference('program_' . $program4->getTitle(), $program4 );
        $manager->persist($program4);

        $program5 = new Program();

        $program5->setTitle("Penny Dreadful");
        $program5->setSummary("Dans le Londres ancien, Vanessa Ives, une jeune femme puissante aux pouvoirs hypnotiques, allie ses forces à celles d Ethan, un garçon rebelle et violent aux allures de cowboy, et de Sir Malcolm, un vieil homme riche aux ressources inépuisables.  Ensemble, ils combattent un ennemi inconnu, presque invisible, qui ne semble pas humain et qui massacre la population.");
        $program5->setPoster("https://m.media-amazon.com/images/M/MV5BNmE5MDE0ZmMtY2I5Mi00Y2RjLWJlYjMtODkxODQ5OWY1ODdkXkEyXkFqcGdeQXVyNjU2NjA5NjM@._V1_SY1000_CR0,0,695,1000_AL_.jpg");
        $program5->setCategory($this->getReference('category_3'));
        $this->addReference('program_' . $program5->getTitle(), $program5 );
        $manager->persist($program5);

        $program6 = new Program();

        $program6->setTitle("Fear The Walking Dead");
        $program6->setSummary("La série se déroule au tout début de l épidémie relatée dans la série-mère The Walking Dead et se passe dans la ville de Los Angeles, et non à Atlanta. Madison est conseillère dans un lycée de Los Angeles. Depuis la mort de son mari, elle élève seule ses deux enfants : Alicia, excellente élève qui découvre les premiers émois amoureux, et son grand frère Nick qui a quitté la fac et a sombré dans la drogue.");
        $program6->setPoster("https://m.media-amazon.com/images/M/MV5BYWNmY2Y1NTgtYTExMS00NGUxLWIxYWQtMjU4MjNkZjZlZjQ3XkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_SY1000_CR0,0,666,1000_AL_.jpg");
        $program6->setCategory($this->getReference('category_4'));
        $this->addReference('program_' . $program6->getTitle(), $program6 );
        $manager->persist($program6);

        $manager->flush($program1);
        $manager->flush($program2);
        $manager->flush($program3);
        $manager->flush($program4);
        $manager->flush($program5);
        $manager->flush($program6);

    }

    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
          CategoryFixtures::class,
        ];
    }
}