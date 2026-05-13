<?php
//
class Caminhao extends Veiculo
{

    public function __construct(
        string $placa = "",
        string $modelo = "",
        float $capacidade_carga = 0.00,
        private int $numero_eixos = 0,
        private string $tipo_carroceria = "",
        string $tipo_combustivel = "",
        string $potencia = "",
        private array $centro_distribuicao = array()

    )

    {
        parent::__construct($placa, $modelo, $capacidade_carga);
        $this->motor[] = new Motor($tipo_combustivel, $tipo_carroceria);
    }

    //metodos getters

    public function getNumeroEixos()
    {
        return $this->numero_eixos;
    }

    public function getTipoCarroceria()
    {
        return $this->tipo_carroceria;
    }

    public function getMotor()
    {
        return $this->motor;
    }

    public function getCentroDistribuicao()
    {
        return $this->centro_distribuicao;
    }

    // metodos setters

    public function setNumeroEixos($numero_eixos)
    {
        $this->numero_eixos = $numero_eixos;
    }

    public function setTipoCarroceria($tipo_carroceria)
    {
        $this->tipo_carroceria = $tipo_carroceria;
    }

    public function setMotor($tipo_combustivel, $tipo_carroceria)
    {
        $this->motor[] = new Motor($tipo_combustivel, $tipo_carroceria);
    }

    public function setCentroDistribuicao($centro_distribuicao)
    {
        $this->centro_distribuicao[] = $centro_distribuicao;
    }
}

?>