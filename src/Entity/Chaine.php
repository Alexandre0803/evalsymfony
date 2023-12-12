// src/Entity/Chaine.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Chaine
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $diffuseur;

    // Getter and Setter methods for each property
}
