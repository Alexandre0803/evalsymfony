// src/Controller/AccueilController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ChaineRepository;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(ChaineRepository $chaineRepository): Response
    {
        // Récupérer la liste des chaînes depuis la base de données
        $chaines = $chaineRepository->findAll();

        return $this->render('accueil/index.html.twig', ['chaines' => $chaines]);
    }
}
