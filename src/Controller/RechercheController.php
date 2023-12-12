// src/Controller/RechercheController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ChaineRepository;

class RechercheController extends AbstractController
{
    /**
     * @Route("/recherche", name="recherche")
     */
    public function index(ChaineRepository $chaineRepository): Response
    {
        // Récupérer la liste des chaînes (ou effectuer la recherche en fonction des paramètres)

        return $this->render('recherche/index.html.twig');
    }
}
