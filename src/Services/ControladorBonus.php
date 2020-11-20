<?php 

namespace Alura\Banco\Services;

use Alura\Banco\Models\Funcionario\Funcionario;

class ControladorBonus 
{
    private $totalBonus = 0;

    public function adicionarBonus(Funcionario $funcionario) {
        $this->totalBonus += $funcionario->calculaBonus();
    }

    public function recuperarTotalBonus(): float
    {
        return $this->totalBonus;
    }

}