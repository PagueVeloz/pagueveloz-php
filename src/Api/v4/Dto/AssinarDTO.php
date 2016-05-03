<?php

namespace PagueVeloz\Api\v4\Dto;

use PagueVeloz\Api\Common\Dto\CepV2DTO;
use PagueVeloz\Api\Common\Dto\TelefoneDTO;
use PagueVeloz\Api\Common\Dto\UsuarioNaGravacaoDTO;

class AssinarDTO extends \PagueVeloz\AbstractDTO
{
    const TIPO_PESSOA_NAODEFINIDO = 0;
    const TIPO_PESSOA_FISICA = 1;
    const TIPO_PESSOA_JURIDICA = 2;

    protected $Id = null;
    protected $Nome = null;
    protected $Documento = null;
    protected $TipoPessoa = 0;
    protected $Email = null;
    protected $UrlNotificacao = null;
    protected $Endereco = null;
    protected $Cupom = null;
    protected $Telefones = null;
    protected $InscricaoEstadual = null;
    protected $InscricaoMunicipal = null;
    protected $Usuario = null;
    protected $DataNascimento = null;

    public function __construct()
    {
        $this->setEndereco(new CepV2DTO());
        $this->setUsuario(new UsuarioNaGravacaoDTO());
        $this->setTelefones([]);
    }

    public function getNotEmpty()
    {
        return [
                'Nome',
                'Documento',
                'TipoPessoa',
                'LoginUsuarioDefault',
                'Email',
                'Endereco',
                'Telefones',
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
     * Gets the value of Endereco.
     *
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->Endereco;
    }

    /**
     * Sets the value of Endereco.
     *
     * @param mixed $Endereco the endereco
     *
     * @return self
     */
    public function setEndereco(CepV2DTO $Endereco)
    {
        $this->Endereco = $Endereco;

        return $this;
    }

    /**
     * Gets the value of Cupom.
     *
     * @return mixed
     */
    public function getCupom()
    {
        return $this->Cupom;
    }

    /**
     * Sets the value of Cupom.
     *
     * @param mixed $Cupom the cupom
     *
     * @return self
     */
    public function setCupom($Cupom)
    {
        $this->Cupom = $Cupom;

        return $this;
    }

    /**
     * Gets the value of Telefones.
     *
     * @return mixed
     */
    public function getTelefones()
    {
        return $this->Telefones;
    }

    /**
     * Sets the value of Telefones.
     *
     * @param mixed $Telefones the telefones
     *
     * @return self
     */
    public function setTelefones(array $Telefones)
    {
        $this->Telefones = $Telefones;

        return $this;
    }

    /**
     * Gets the value of InscricaoEstadual.
     *
     * @return mixed
     */
    public function getInscricaoEstadual()
    {
        return $this->InscricaoEstadual;
    }

    /**
     * Sets the value of InscricaoEstadual.
     *
     * @param mixed $InscricaoEstadual the inscricao estadual
     *
     * @return self
     */
    public function setInscricaoEstadual($InscricaoEstadual)
    {
        $this->InscricaoEstadual = $InscricaoEstadual;

        return $this;
    }

    /**
     * Gets the value of InscricaoMunicipal.
     *
     * @return mixed
     */
    public function getInscricaoMunicipal()
    {
        return $this->InscricaoMunicipal;
    }

    /**
     * Sets the value of InscricaoMunicipal.
     *
     * @param mixed $InscricaoMunicipal the inscricao municipal
     *
     * @return self
     */
    public function setInscricaoMunicipal($InscricaoMunicipal)
    {
        $this->InscricaoMunicipal = $InscricaoMunicipal;

        return $this;
    }

    /**
     * Gets the value of Usuario.
     *
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->Usuario;
    }

    /**
     * Sets the value of Usuario.
     *
     * @param mixed $Usuario the usuario
     *
     * @return self
     */
    public function setUsuario(UsuarioNaGravacaoDTO $Usuario)
    {
        $this->Usuario = $Usuario;

        return $this;
    }

    /**
     * Gets the value of DataNascimento.
     *
     * @return mixed
     */
    public function getDataNascimento()
    {
        return $this->DataNascimento;
    }

    /**
     * Sets the value of DataNascimento.
     *
     * @param mixed $DataNascimento the data nascimento
     *
     * @return self
     */
    public function setDataNascimento($DataNascimento)
    {
        $this->DataNascimento = $DataNascimento;

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
