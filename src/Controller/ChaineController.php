// src/Controller/ChaineController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ChaineRepository;
use App\Repository\VideoRepository;

class ChaineController extends AbstractController
{
    /**
     * @Route("/chaine/{id}", name="chaine")
     */
    public function index($id, ChaineRepository $chaineRepository, VideoRepository $videoRepository): Response
    {
        // Récupérer la chaîne spécifique depuis la base de données
        $chaine = $chaineRepository->find($id);

        // Récupérer les vidéos de la chaîne triées par date de publication
        $videos = $videoRepository->findBy(['chaine' => $chaine], ['datePublication' => 'ASC']);

        return $this->render('chaine/index.html.twig', ['chaine' => $chaine, 'videos' => $videos]);
    }

    // Autres actions pour /chaine/ajouter et /chaine/editer/id
}
