<?php

namespace PagueVeloz\Api\v1\Dto;


class DefaultBoletoDTO extends \PagueVeloz\AbstractDTO
{
    protected $Linha1;
    protected $Linha2;
    protected $Vencimento;
    protected $Id;

    /**
     * Gets the value of Linha1.
     *
     * @return mixed
     */
    public function getLinha1()
    {
        return $this->Linha1;
    }

    /**
     * Sets the value of Linha1.
     *
     * @param mixed $Linha1 the linha1
     *
     * @return self
     */
    public function setLinha1($Linha1)
    {
        $this->Linha1 = $Linha1;

        return $this;
    }

    /**
     * Gets the value of Linha2.
     *
     * @return mixed
     */
    public function getLinha2()
    {
        return $this->Linha2;
    }

    /**
     * Sets the value of Linha2.
     *
     * @param mixed $Linha2 the linha2
     *
     * @return self
     */
    public function setLinha2($Linha2)
    {
        $this->Linha2 = $Linha2;

        return $this;
    }

    /**
     * Gets the value of Vencimento.
     *
     * @return mixed
     */
    public function getVencimento()
    {
        return $this->Vencimento;
    }

    /**
     * Sets the value of Vencimento.
     *
     * @param mixed $Vencimento the vencimento
     *
     * @return self
     */
    public function setVencimento($Vencimento)
    {
        $this->Vencimento = $Vencimento;

        return $this;
    }

    /**
     * Gets the value of Id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Sets the value of Id.
     *
     * @param mixed $Id the id
     *
     * @return self
     */
    public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }
}
