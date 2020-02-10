<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ExemplesRenderController extends AbstractController
{
    /**
     * @Route("/exemples/render", name="exemples_render")
     */
    public function index()
    {
        return $this->render('exemples_render/index.html.twig', [
            'controller_name' => 'ExemplesRenderController',
        ]);
    }

    /**
     * @route ("/envoyer/ville/")
     */

    public function EnvoyerVille()
    {
        $ville = "Brussels";
        return $this->render("/exemples_render/envoyer_ville.html.twig", ['paramVille' => $ville]);
    }

    /**
     * @route ("/envoyer/array/villes")
     */
    public function EnvoyerArrayVille()
    {
        $villes = ["Brussels", "Seoul", "Turin"];
        return $this->render("/exemples_render/envoyer_array_villes.html.twig", ['lesVilles' => $villes]);
    }

    /**
     * @route ("/envoyer/ville/alt")
     */

    public function EnvoyerVilleAlt()
    {
        $ville = "Brussels";
        $message = "";
        if ($ville == "Brussels")
        {
            $message = "C'est la ville que je préfère";
        }
        else {
            $message = "Turin me manque un peu";
        }
        return $this->render("/exemples_render/envoyer_ville_alt.html.twig", ['paramVille' => $ville, 'message'=>$message]);
    }
}
