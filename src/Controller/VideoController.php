// src/Controller/VideoController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\VideoRepository;

class VideoController extends AbstractController
{
    /**
     * @Route("/videos", name="videos")
     */
    public function index(VideoRepository $videoRepository): Response
    {
        // Récupérer la liste des vidéos depuis la base de données triées par titre
        $videos = $videoRepository->findBy([], ['titre' => 'ASC']);

        return $this->render('video/index.html.twig', ['videos' => $videos]);
    }
}
