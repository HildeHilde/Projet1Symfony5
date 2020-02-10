<?php

namespace App\Controller;

use PhpParser\Node\Expr\FuncCall;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExemplesRoutingController extends AbstractController
{
    /**
     * @route ("/afficher/message/accueil")
     */
    public function afficherMessageAccueil()
    {
        return new Response("Bonjour à toutes");
    }

    /**
     * @route ("/afficher/message/adieu")
     */

    public function afficherMessageAdieu()
    {
        return new Response("A bientôt --> " . date(DATE_RFC2822));
    }

    /**
     * @route ("/afficher/bonjour/personne/{nom}/{prenom}")
     */

    public function AfficheBjrPersonne(Request $req)
    {
        $nom = $req->get("nom");
        $prenom = $req->get('prenom');
        return new Response("Bonjour " . $prenom . " " . $nom);
    }

    /**
     * @route ("/afficher/TVAC/{prix}")
     */

    public function AfficherTVAC(Request $request)
    {
        $prix = $request->get("prix");
        $resultat = ($prix / 100) * 21;

        return new Response("TVAC de " . $prix . " = " . $resultat);
    }

    /**
     * @route ("/afficher/moyenne/{nb1}/{nb2}/{nb3}")
     */

    public function AfficherMoyenne(Request $re)
    {
        $nb1 = $re->get("nb1");
        $nb2 = $re->get("nb2");
        $nb3 = $re->get("nb3");
        $moyenne = ($nb1 + $nb2 + $nb3) / 3;

        return new Response("la moyenne est de " . $moyenne);
    }

    /**
     * @route ("/exemple/redirect/imdb/{titre}")
     */
    public function ExempleRedirect(Request $reqUrl)
    {
        $titre = $reqUrl->get("titre");
        $url = "https://www.imdb.com/find?q=".$titre."&ref_=nv_sr_sm";
        return $this->redirect($url);
    }
}
