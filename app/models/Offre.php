<?php
namespace app\models;

use app\models\Project;
use app\models\Utilisateur;

class Offre {
    private int $id;
    private string $status;
    private Utilisateur $client;
    private Project $project;

    public function __construct(int $id, string $status, Utilisateur $client, Project $project) {
        $this->id = $id;
        $this->status = $status;
        $this->client = $client;
        $this->project = $project;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function getClient(): Utilisateur {
        return $this->client;
    }

    public function getProject(): Project {
        return $this->project;
    }

  
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setStatus(string $status): void {
        $this->status = $status;
    }

    public function setClient(Utilisateur $client): void {
        $this->client = $client;
    }

    public function setProject(Project $project): void {
        $this->project = $project;
    }

  
}
?>