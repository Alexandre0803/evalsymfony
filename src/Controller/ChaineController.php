
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChaineController extends AbstractController
{
    /**
     * @Route("/chaine/{id}", name="chaine")
     */
    public function index($id): Response
    {
        // Logique pour récupérer et afficher les vidéos de la chaine avec l'id donné triées par date de publication
        return $this->render('chaine/index.html.twig');
    }

    // Autres actions pour /chaine/ajouter et /chaine/editer/id
}
