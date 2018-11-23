<?php

namespace PagueVeloz\Api\v5\Dto;

class DescontoDTO extends \PagueVeloz\AbstractDTO
{
    const TIPO_DESCONTO_ISENTO = 0;
    const TIPO_DESCONTO_VALOR_FIXO_ATE_DATA = 1;
    const TIPO_DESCONTO_VALOR_PERCENTUAL_ATE_DATA = 2;

    protected $Tipo;
    protected $Valor;
    protected $DataLimite;

    /**
     * Gets the value of Tipo.
     *
     * @return mixed
     */
    public function getTipo()
    {
        return $this->Tipo;
    }

    /**
     * Sets the value of Tipo.
     *
     * @param mixed $Tipo the tipo
     *
     * @return self
     */
    public function setTipo($Tipo)
    {
        if (!in_array($Tipo, [TIPO_DESCONTO_ISENTO, TIPO_DESCONTO_VALOR_FIXO_ATE_DATA, TIPO_DESCONTO_VALOR_PERCENTUAL_ATE_DATA])) {
            throw new \Exception("Tipo não é válido");
        }
        $this->Tipo = $Tipo;

        return $this;
    }
    /**
     * Gets the value of Valor.
     *
     * @return mixed
     */
    public function getValor()
    {
        return $this->Valor;
    }

    /**
     * Sets the value of Valor.
     *
     * @param mixed $Valor the valor
     *
     * @return self
     */
    public function setValor($Valor)
    {
        $this->Valor = $Valor;

        return $this;
    }

    /**
     * Gets the value of DataLimite.
     *
     * @return mixed
     */
    public function getDataLimite()
    {
        return $this->DataLimite;
    }

    /**
     * Sets the value of DataLimite.
     *
     * @param mixed $DataLimite the vencimento
     *
     * @return self
     */
    public function setDataLimite($DataLimite)
    {
        $_dataLimite = new \DateTime($DataLimite);

        $this->DataLimite = $_dataLimite->format('Y-m-d');

        return $this;
    }
}
