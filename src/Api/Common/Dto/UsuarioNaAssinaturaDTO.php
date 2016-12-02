<?php

namespace PagueVeloz\Api\Common\Dto;

class UsuarioNaAssinaturaDTO extends \PagueVeloz\AbstractDTO
{
    protected $Nome;
    protected $Email;
    protected $Senha;
    protected $ConfirmacaoSenha;
    protected $Id;

    public function getNotEmpty()
    {
        return ['Nome', 'Email', 'Senha', 'ConfirmacaoSenha'];
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
     * Gets the value of Senha.
     *
     * @return mixed
     */
    public function getSenha()
    {
        return $this->Senha;
    }

    /**
     * Sets the value of Senha.
     *
     * @param mixed $Senha the senha
     *
     * @return self
     */
    public function setSenha($Senha)
    {
        $this->Senha = $Senha;

        return $this;
    }

    /**
     * Gets the value of ConfirmacaoSenha.
     *
     * @return mixed
     */
    public function getConfirmacaoSenha()
    {
        return $this->ConfirmacaoSenha;
    }

    /**
     * Sets the value of ConfirmacaoSenha.
     *
     * @param mixed $ConfirmacaoSenha the confirmacao senha
     *
     * @return self
     */
    public function setConfirmacaoSenha($ConfirmacaoSenha)
    {
        $this->ConfirmacaoSenha = $ConfirmacaoSenha;

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
