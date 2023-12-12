// src/Controller/ChaineController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Chaine;
use App\Form\ChaineType;
use App\Repository\ChaineRepository;

class ChaineController extends AbstractController
{
    // ...

    /**
     * @Route("/chaine/ajouter", name="chaine_ajouter")
     */
    public function ajouter(Request $request): Response
    {
        $chaine = new Chaine();
        $form = $this->createForm(ChaineType::class, $chaine);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($chaine);
            $entityManager->flush();

            // Rediriger vers la page de liste des chaînes ou une autre page
            return $this->redirectToRoute('accueil');
        }

        return $this->render('chaine/ajouter.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/chaine/editer/{id}", name="chaine_editer")
     */
    public function editer(Request $request, $id, ChaineRepository $chaineRepository): Response
    {
        $chaine = $chaineRepository->find($id);

        if (!$chaine) {
            // Gérer le cas où la chaîne n'est pas trouvée
        }

        $form = $this->createForm(ChaineType::class, $chaine);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            // Rediriger vers la page de liste des chaînes ou une autre page
            return $this->redirectToRoute('accueil');
        }

        return $this->render('chaine/editer.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
