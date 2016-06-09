<?php

namespace PagueVeloz\Api\v3\Dto;

use PagueVeloz\Api\Common\Dto\CepV2DTO;
use PagueVeloz\Api\Common\Dto\TelefoneDTO;

class ClienteDTO extends \PagueVeloz\AbstractDTO
{
    const TIPO_PESSOA_NAODEFINIDO = 0;
    const TIPO_PESSOA_FISICA = 1;
    const TIPO_PESSOA_JURIDICA = 2;

    protected $Endereco;
    protected $OptanteSimples;
    protected $InscricaoEstadual;
    protected $InscricaoMunicipal;
    protected $Telefones;
    protected $TipoPessoa;
    protected $DataNascimento;
    protected $Nome;
    protected $Email;
    protected $EnviarEmailBoletosPagos;
    protected $Id;

    public function __construct()
    {
        $this->setEndereco(new CepV2DTO());
        $this->setTelefones([]);
    }

    public function getDTOTelefone()
    {
        return new TelefoneDTO();
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
     * Gets the value of OptanteSimples.
     *
     * @return mixed
     */
    public function getOptanteSimples()
    {
        return $this->OptanteSimples;
    }

    /**
     * Sets the value of OptanteSimples.
     *
     * @param mixed $OptanteSimples the optante simples
     *
     * @return self
     */
    public function setOptanteSimples($OptanteSimples)
    {
        $this->OptanteSimples = $OptanteSimples;

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
     * Gets the value of EnviarEmailBoletosPagos.
     *
     * @return mixed
     */
    public function getEnviarEmailBoletosPagos()
    {
        return $this->EnviarEmailBoletosPagos;
    }

    /**
     * Sets the value of EnviarEmailBoletosPagos.
     *
     * @param mixed $EnviarEmailBoletosPagos the enviar email boletos pagos
     *
     * @return self
     */
    public function setEnviarEmailBoletosPagos($EnviarEmailBoletosPagos)
    {
        $this->EnviarEmailBoletosPagos = $EnviarEmailBoletosPagos;

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
