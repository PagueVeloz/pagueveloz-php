<?php

namespace PagueVeloz\Api\v5\Dto;

class SplitDoBoletoDTO extends \PagueVeloz\AbstractDTO
{

    protected $CpfCnpjCliente;
    protected $ValorFixo;
    protected $ValorPercentual;
    protected $ValorTarifaFixo;
    protected $ValorTarifaPercentual;

    /**
     * Gets the value of CpfCnpjCliente.\
     *
     * @return mixed
     */
    public function getCpfCnpjCliente()
    {
        return $this->CpfCnpjCliente;
    }

    /**
     * Sets the value of CpfCnpjCliente.
     *
     * @param mixed $CpfCnpjCliente the cpfCnpjCliente
     *
     * @return self
     */
    public function setCpfCnpjCliente($CpfCnpjCliente)
    {
        $this->CpfCnpjCliente = $CpfCnpjCliente;

        return $this;
    }
    /**
     * Gets the value of ValorFixo.
     *
     * @return mixed
     */
    public function getValorFixo()
    {
        return $this->ValorFixo;
    }

    /**
     * Sets the value of ValorFixo.
     *
     * @param mixed $ValorFixo the ValorFixo
     *
     * @return self
     */
    public function setValorFixo($ValorFixo)
    {
        $this->ValorFixo = $ValorFixo;

        return $this;
    }

    /**
     * Gets the value of ValorPercentual.
     *
     * @return mixed
     */
    public function getValorPercentual()
    {
        return $this->ValorPercentual;
    }

    /**
     * Sets the value of ValorPercentual.
     *
     * @param mixed $ValorPercentual the ValorPercentual
     *
     * @return self
     */
    public function setValorPercentual($ValorPercentual)
    {
        $this->ValorPercentual = $_ValorPercentual->format('Y-m-d');

        return $this;
    }

    /**
     * Gets the value of ValorTarifaFixo.
     *
     * @return mixed
     */
    public function getValorTarifaFixo()
    {
        return $this->ValorTarifaFixo;
    }

    /**
     * Sets the value of ValorTarifaFixo.
     *
     * @param mixed $ValorTarifaFixo the ValorTarifaFixo
     *
     * @return self
     */
    public function setValorTarifaFixo($ValorTarifaFixo)
    {
        $this->ValorTarifaFixo = $ValorTarifaFixo;

        return $this;
    }

    /**
     * Gets the value of ValorTarifaPercentual.
     *
     * @return mixed
     */
    public function getValorTarifaPercentual()
    {
        return $this->ValorTarifaPercentual;
    }

    /**
     * Sets the value of ValorTarifaPercentual.
     *
     * @param mixed $ValorTarifaPercentual the ValorTarifaPercentual
     *
     * @return self
     */
    public function setValorTarifaPercentual($ValorTarifaPercentual)
    {
        $this->ValorTarifaPercentual = $ValorTarifaPercentual;

        return $this;
    }
}
