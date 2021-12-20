<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="default_index")
     */
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'MainController',
            'header'=> 'Nagłówek',
            'footer' => "Stopka",
            'tekst' => 'body/glowna.html.twig',
            'title' => "Najgorszy bank w polsce"

        ]);
    }

    /**
     * @Route("/karty/kartydokont", name="karty_do_kont")
     */
    public function kartydokont(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'MainController',
            'title' => "karty",
            'header'=> 'Nagłówek',
            'footer' => "Stopka",
            'tekst' =>  'body/kartykredytowe.html.twig'
            

        ]);
    }
    /**
     * @Route("/karty/kartydebetowe", name="karty_debetowe")
     */
    public function kartydebetowet(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'MainController',
            'title' => "karty debetowe",
            'header'=> 'Nagłówek',
            'footer' => "Stopka",
            'tekst' =>  'body/kartydebetowe.html.twig'
            

        ]);
    }
    /**
     * @Route("/przelewy", name="przelewy")
     */
    public function przelewy(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'MainController',
            'title' => "przzelewy",
            'header'=> 'Nagłówek',
            'footer' => "Stopka",
            'tekst' =>  'body/przelewy.html.twig'
            

        ]);
    }
    /**
     * @Route("/przelewy/przelewyKrajowe", name="przelewy_krajowe")
     */
    public function przelewykrajowe(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'MainController',
            'title' => "przelewy krajowe",
            'header'=> 'Nagłówek',
            'footer' => "Stopka",
            'tekst' =>  'body/przelewykrajowe.html.twig'
            

        ]);
    }
    /**
     * @Route("/przelewy/przelewyKrajowe/roaczunekObcy", name="przelewy_obcy")
     */
    public function przelewyobcy(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'MainController',
            'title' => "przelewy na rachunek obcy",
            'header'=> 'Nagłówek',
            'footer' => "Stopka",
            'tekst' =>  "body/glowna.html.twig"
            

        ]);
    }
    /**
     * @Route("/przelewy/przelewyKrajowe/roaczunekWlasny", name="przelewy_wlasne")
     */
    public function przelewywlasne(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'MainController',
            'title' => "przelewy na rachunek wlasny",
            'header'=> 'Nagłówek',
            'footer' => "Stopka",
            'tekst' =>  "body/glowna.html.twig"
            

        ]);
    }
    /**
     * @Route("/przelewy/{data}/{kwota}", name="listaprzelewy")
     */
    public function listaprzelewow(string $data, string $kwota): Response
    {
        return $this->render('sidebar.html.twig', [
            'controller_name' => 'MainController',
            'title' => "przelewy krajowe",
            'header'=> 'Nagłówek',
            'prawo' => 'prawo',
            'footer' => "Stopka",
            'tekst' =>  "$data , $kwota"
            

        ]);
    }
}
