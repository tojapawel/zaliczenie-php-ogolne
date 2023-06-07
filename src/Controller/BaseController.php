<?php

namespace App\Controller;

use App\Entity\Zgloszenie;
use App\Entity\Kategoria;
use App\Repository\ZgloszenieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Security\Core\Security;
use App\Form\Type\ZgloszenieType;
use App\Form\Type\KategoriaType;
use DateTime;

class BaseController extends AbstractController
{
    #[Route('/')]
    public function home(): Response
    {
        return $this->render('index.html.twig', []);
    }

    #[Route('/zgloszenia')]
    public function zgloszenia(EntityManagerInterface $entityManager, ZgloszenieRepository $repository, Security $security): Response
    {
        if (!$security->isGranted('ROLE_ADMIN')) {
            return $this->render('404.html.twig');
        }

        $zgloszenia = $entityManager->getRepository(Zgloszenie::class)->findAll();

        return $this->render('zgloszenia.html.twig', [
            'zgloszenia' => $zgloszenia
        ]);
    }

    #[Route('/nowezgloszenie')]
    public function nowezgloszenie(Request $request, EntityManagerInterface $entityManager, Security $security)
    {
        if (!$security->isGranted('ROLE_USER')) {
            return $this->render('404.html.twig');
        }

        $zgloszenie = new Zgloszenie();
        $formzgloszenia = $this->createForm(ZgloszenieType::class, $zgloszenie);

        $formzgloszenia->handleRequest($request);
        if ($formzgloszenia->isSubmitted() && $formzgloszenia->isValid()) {
            $zgloszenie = $formzgloszenia->getData();
            $zgloszenie->setCzasDodania(new DateTime());
            $zgloszenie->setStatus("Nowe Zgłoszenie");
            $user = $security->getUser();
            $zgloszenie->setDodanePrzez($user);
            $entityManager->persist($zgloszenie);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        $userid = $security->getUser();

        return $this->render('nowezgloszenie.html.twig', [
            'formzgloszenia' => $formzgloszenia
        ]);
    }

    #[Route('/nowakategoria')]
    public function nowakategoria(Request $request, EntityManagerInterface $entityManager, Security $security)
    {
        if (!$security->isGranted('ROLE_ADMIN')) {
            return $this->render('404.html.twig');
        }

        $kategoria = new Kategoria();
        $formkategoria = $this->createForm(KategoriaType::class, $kategoria);

        $formkategoria->handleRequest($request);
        if ($formkategoria->isSubmitted() && $formkategoria->isValid()) {
            $kategoria = $formkategoria->getData();
            $kategoria->setCzasDodania(new DateTime());
            $user = $security->getUser();
            $kategoria->setDodanePrzez($user);
            $entityManager->persist($kategoria);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('nowakategoria.html.twig', [
            'formkategoria' => $formkategoria
        ]);
    }

    #[Route('/zgloszenie/{id}')]
    public function zgloszenie(EntityManagerInterface $entityManager, ZgloszenieRepository $repository, int $id, Security $security): Response
    {

        $user = $security->getUser();
        $zgloszenie = $repository->find($id);

        if(is_null($user)){
            return $this->render('404.html.twig');
        }else if ($security->isGranted('ROLE_ADMIN') or $zgloszenie->getDodanePrzez()->getId() == $user->getId()) {
            return $this->render('zgloszenie.html.twig', [
                'zgloszenie' => $zgloszenie
            ]);
        }

        return $this->render('404.html.twig');
    }

    #[Route('/mojezgloszenia')]
    public function mojezgloszenia(EntityManagerInterface $entityManager, ZgloszenieRepository $repository, Security $security): Response
    {

        if (!$security->isGranted('ROLE_USER')) {
            return $this->render('404.html.twig');
        }

        $zgloszenia = $entityManager->getRepository(Zgloszenie::class)->findBy(['dodane_przez' => $security->getUser()->getId()]);

        return $this->render('mojezgloszenia.html.twig', [
            'zgloszenia' => $zgloszenia
        ]);
    }
}