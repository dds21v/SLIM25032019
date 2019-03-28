<?php

namespace App\Repository;

use App\Entity\Project;
use App\Database\Connection;

class ProjectRepository
{
    /**
     * @var Connection
     */
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
    *Retourne un projet si le slug a été trouvé en base de données
    *@param string $slug - Slug récupéré dans l'URL
    *@return Project\null
    */

    public function findBySlug(string $slug): $Project
    {
        // Former la requête
        $query = "SELECT * FROM project WHERE slug = :slug";
        // Demander le résultat de la requête à la classe Connection
        $resultat = $this->Connection->queryPrepared(
            $query,
            [':slug'=> $slug],
            Project::class,
            false
        );
        // Retourner le projet s'il a été trouvé
        return $resultat;

    }
}
