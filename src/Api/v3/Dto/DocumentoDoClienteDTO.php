<?php

namespace PagueVeloz\Api\v3\Dto;

class DocumentoDoClienteDTO extends \PagueVeloz\AbstractDTO
{
    const TIPO_DOC_OUTROS = 0;
    const TIPO_DOC_FISICA_DOCUMENTO = 1;
    const TIPO_DOC_FISICA_COMPROVANTEENDERECO = 2;
    const TIPO_DOC_JURIDICA_CONTRATOSOCIAL = 3;
    const TIPO_DOC_JURIDICA_COMPROVANTEENDERECO = 4;
    const TIPO_DOC_JURIDICA_DOCUMENTOSOCIO = 5;
    const TIPO_DOC_JURIDICA_DOCUMENTOADMINISTRADOR = 6;
    const TIPO_DOC_TERMO_CONTABANCARIATERCEIROS = 20;
    const TIPO_DOC_TERMO_CHARGEBACKCARTAO = 21;

    protected $NomeArquivo;
    protected $ConteudoArquivoBase64;
    protected $Id;

    public function getRequestInArrayJSON()
    {
        $request = json_decode($this->getRequest());

        return json_encode([$request]);
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
