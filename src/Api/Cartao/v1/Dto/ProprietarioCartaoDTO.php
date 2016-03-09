<?php

namespace PagueVeloz\Api\Cartao\v1\Dto;

class ProprietarioCartaoDTO extends \PagueVeloz\AbstractDTO
{
    protected $Nome;
    protected $CPF;
    protected $RG;
    protected $TelefoneFixo;
    protected $TelefoneCelular;

    public function getNotEmpty()
    {
        return [
                'Nome',
                'CPF',
                'RG',
                'TelefoneFixo',
                'TelefoneCelular',
                ];
    }

    /**
     * Gets the value of Nome.
     *
     * @return mixed
     */
    public function getNome()
    {
        return $this->Nome;
    }

    /**
     * Sets the value of Nome.
     *
     * @param mixed $Nome the nome
     *
     * @return self
     */
    public function setNome($Nome)
    {
        $this->Nome = $Nome;

        return $this;
    }

    /**
     * Gets the value of CPF.
     *
     * @return mixed
     */
    public function getCPF()
    {
        return $this->CPF;
    }

    /**
     * Sets the value of CPF.
     *
     * @param mixed $CPF the
     *
     * @return self
     */
    public function setCPF($CPF)
    {
        $this->CPF = $CPF;

        return $this;
    }

    /**
     * Gets the value of RG.
     *
     * @return mixed
     */
    public function getRG()
    {
        return $this->RG;
    }

    /**
     * Sets the value of RG.
     *
     * @param mixed $RG the
     *
     * @return self
     */
    public function setRG($RG)
    {
        $this->RG = $RG;

        return $this;
    }

    /**
     * Gets the value of TelefoneFixo.
     *
     * @return mixed
     */
    public function getTelefoneFixo()
    {
        return $this->TelefoneFixo;
    }

    /**
     * Sets the value of TelefoneFixo.
     *
     * @param mixed $TelefoneFixo the telefone fixo
     *
     * @return self
     */
    public function setTelefoneFixo($TelefoneFixo)
    {
        $this->TelefoneFixo = $TelefoneFixo;

        return $this;
    }

    /**
     * Gets the value of TelefoneCelular.
     *
     * @return mixed
     */
    public function getTelefoneCelular()
    {
        return $this->TelefoneCelular;
    }

    /**
     * Sets the value of TelefoneCelular.
     *
     * @param mixed $TelefoneCelular the telefone celular
     *
     * @return self
     */
    public function setTelefoneCelular($TelefoneCelular)
    {
        $this->TelefoneCelular = $TelefoneCelular;

        return $this;
    }
}
