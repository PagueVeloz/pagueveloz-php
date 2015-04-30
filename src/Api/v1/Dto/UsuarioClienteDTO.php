<?php

namespace PagueVeloz\Api\v1\Dto;


class UsuarioClienteDTO extends \PagueVeloz\AbstractDTO
{
    protected $Email;
    protected $Ativo;

    /**
     * Gets the value of Email.
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Sets the value of Email.
     *
     * @param mixed $Email the email
     *
     * @return self
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * Gets the value of Ativo.
     *
     * @return mixed
     */
    public function getAtivo()
    {
        return $this->Ativo;
    }

    /**
     * Sets the value of Ativo.
     *
     * @param mixed $Ativo the ativo
     *
     * @return self
     */
    public function setAtivo($Ativo)
    {
        $this->Ativo = $Ativo;

        return $this;
    }
}
