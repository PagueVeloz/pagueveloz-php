<?php

namespace PagueVeloz\Api\v1\Dto;

use \PagueVeloz\Api\Common\Dto\CepDTO;

class ClienteDTO extends \PagueVeloz\AbstractDTO
{
    protected $Tipo = NULL;
    protected $Email = NULL;
    protected $EnviarEmailBoletosPagos = NULL;
    protected $Endereco = NULL;
    protected $Id = NULL;
	
    public function __construct()
    {
        $this->setEndereco(new CepDTO);
    }

	public function getNotEmpty()
	{
		return [
				'Nome',
				'Email',
				//'EnviarEmailBoletosPagos',
				'Endereco',
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
    public function setEndereco(CepDTO $Endereco)
    {
        $this->Endereco = $Endereco;

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
