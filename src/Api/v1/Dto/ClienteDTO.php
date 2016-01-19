<?php

namespace PagueVeloz\Api\v1\Dto;

use \PagueVeloz\Api\Common\Dto\CepDTO;

class ClienteDTO extends \PagueVeloz\AbstractDTO
{
    protected $NomeArquivo;
    protected $ConteudoArquivoBase64;
    protected $Id;

	public function getNotEmpty()
	{
		return [
				'NomeArquivo',
				'ConteudoArquivoBase64',
				];
	}


    /**
     * Gets the value of NomeArquivo.
     *
     * @return mixed
     */
    public function getNomeArquivo()
    {
        return $this->NomeArquivo;
    }

    /**
     * Sets the value of NomeArquivo.
     *
     * @param mixed $NomeArquivo the nome arquivo
     *
     * @return self
     */
    public function setNomeArquivo($NomeArquivo)
    {
        $this->NomeArquivo = $NomeArquivo;

        return $this;
    }

    /**
     * Gets the value of ConteudoArquivoBase64.
     *
     * @return mixed
     */
    public function getConteudoArquivoBase64()
    {
        return $this->ConteudoArquivoBase64;
    }

    /**
     * Sets the value of ConteudoArquivoBase64.
     *
     * @param mixed $ConteudoArquivoBase64 the conteudo arquivo base64
     *
     * @return self
     */
    public function setConteudoArquivoBase64($ConteudoArquivoBase64)
    {
        $this->ConteudoArquivoBase64 = $ConteudoArquivoBase64;

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
