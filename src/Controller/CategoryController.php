<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Program;
use Doctrine\ORM\Mapping\OrderBy;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
* @Route("/category", name="category_")
*/
class CategoryController extends AbstractController
{
    /**
     * @Route("", name="index")
     */
    public function index(): Response
    {

        $category = $this->getDoctrine()
             ->getRepository(Category::class)
             ->findAll();

         return $this->render(
             'category/index.html.twig',
             ['categories' => $category]
         );
    }

    /**
     * Getting a list of three programs by category
     *
     * @Route("/{category}", name="show")
     * @return Response
     */
    public function show(string $category): Response
    {
        $program = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findOneBy(['name' => $category ]);

        $category =  $program->getId();

        $programs = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findBy(['category' => $category] , ['id' => 'desc'] , 3);
            
        if (!$program) {
            throw $this->createNotFoundException(
                'No program in category : '.$category.' found in program\'s table.'
            );
        }
        return $this->render('category/show.html.twig', [
            'programs' => $programs,
        ]);
    }
}