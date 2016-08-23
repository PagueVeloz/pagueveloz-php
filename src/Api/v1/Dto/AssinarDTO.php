<?php

namespace PagueVeloz\Api\v1\Dto;

class AssinarDTO extends \PagueVeloz\AbstractDTO
{
    protected $Nome;
    protected $Documento;
    protected $TipoPessoa = 0; // 0=NaoDefinido|1=Fisica|2=Juridica
    protected $LoginUsuarioDefault;
    protected $Email;
    protected $UrlNotificacao;
    protected $Id;

    public function getNotEmpty()
    {
        return [
                'Nome',
                'Documento',
                'TipoPessoa',
                'LoginUsuarioDefault',
                'Email',
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
     * Gets the value of Documento.
     *
     * @return mixed
     */
    public function getDocumento()
    {
        return $this->Documento;
    }

    /**
     * Sets the value of Documento.
     *
     * @param mixed $Documento the documento
     *
     * @return self
     */
    public function setDocumento($Documento)
    {
        $this->Documento = $Documento;

        return $this;
    }

    /**
     * Gets the value of TipoPessoa.
     *
     * @return mixed
     */
    public function getTipoPessoa()
    {
        return $this->TipoPessoa;
    }

    /**
     * Sets the value of TipoPessoa.
     *
     * @param mixed $TipoPessoa the tipo pessoa
     *
     * @return self
     */
    public function setTipoPessoa($TipoPessoa)
    {
        $this->TipoPessoa = $TipoPessoa;

        return $this;
    }

    /**
     * Gets the value of LoginUsuarioDefault.
     *
     * @return mixed
     */
    public function getLoginUsuarioDefault()
    {
        return $this->LoginUsuarioDefault;
    }

    /**
     * Sets the value of LoginUsuarioDefault.
     *
     * @param mixed $LoginUsuarioDefault the login usuario default
     *
     * @return self
     */
    public function setLoginUsuarioDefault($LoginUsuarioDefault)
    {
        $this->LoginUsuarioDefault = $LoginUsuarioDefault;

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
     * Gets the value of UrlNotificacao.
     *
     * @return mixed
     */
    public function getUrlNotificacao()
    {
        return $this->UrlNotificacao;
    }

    /**
     * Sets the value of UrlNotificacao.
     *
     * @param mixed $UrlNotificacao the url notificacao
     *
     * @return self
     */
    public function setUrlNotificacao($UrlNotificacao)
    {
        $this->UrlNotificacao = $UrlNotificacao;

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
