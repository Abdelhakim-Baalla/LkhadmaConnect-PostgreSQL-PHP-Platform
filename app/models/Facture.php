<?php
namespace App\Models;

use app\models\Contract;

class Facture {
    private int $id;
    private string $date;
    private float $budget;
    private bool $paid;
    private Contract  $contract;

    public function __construct(int $id, string $date, float $budget, bool $paid, string $contract) {
        $this->id = $id;
        $this->date = $date;
        $this->budget = $budget;
        $this->paid = $paid;
        $this->contract = $contract;
    }

 
    public function getId(): int {
        return $this->id;
    }

    public function getDate(): string {
        return $this->date;
    }

    public function getBudget(): float {
        return $this->budget;
    }

    public function isPaid(): bool {
        return $this->paid;
    }

    public function getContract(): Contract {
        return $this->contract;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setDate(string $date): void {
        $this->date = $date;
    }

    public function setBudget(float $budget): void {
        $this->budget = $budget;
    }

    public function setPaid(bool $paid): void {
        $this->paid = $paid;
    }

    public function setContract(Contract $contract): void {
        $this->contract = $contract;
    }

   
}
?>
