<?php

namespace PagueVeloz\Api\v1\Dto;

class DepositoDTO extends \PagueVeloz\AbstractDTO
{
    protected $Banco;
    protected $Status;
    protected $Valor;
    protected $DataSolicitacao;
    protected $DataProcessamento;
    protected $Comentarios;
    protected $ComprovanteBase64;
    protected $NomeArquivoComprovante;
    protected $ContaBancaria;
    protected $Id;

    public function __construct()
    {
        $this->setContaBancaria(new ContaBancariaDTO());
    }

    /**
     * Gets the value of Banco.
     *
     * @return mixed
     */
    public function getBanco()
    {
        return $this->Banco;
    }

    /**
     * Sets the value of Banco.
     *
     * @param mixed $Banco the banco
     *
     * @return self
     */
    public function setBanco($Banco)
    {
        $this->Banco = $Banco;

        return $this;
    }

    /**
     * Gets the value of Status.
     *
     * @return mixed
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Sets the value of Status.
     *
     * @param mixed $Status the status
     *
     * @return self
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;

        return $this;
    }

    /**
     * Gets the value of Valor.
     *
     * @return mixed
     */
    public function getValor()
    {
        return $this->Valor;
    }

    /**
     * Sets the value of Valor.
     *
     * @param mixed $Valor the valor
     *
     * @return self
     */
    public function setValor($Valor)
    {
        $this->Valor = $Valor;

        return $this;
    }

    /**
     * Gets the value of DataSolicitacao.
     *
     * @return mixed
     */
    public function getDataSolicitacao()
    {
        return $this->DataSolicitacao;
    }

    /**
     * Sets the value of DataSolicitacao.
     *
     * @param mixed $DataSolicitacao the data solicitacao
     *
     * @return self
     */
    public function setDataSolicitacao($DataSolicitacao)
    {
        $this->DataSolicitacao = $DataSolicitacao;

        return $this;
    }

    /**
     * Gets the value of DataProcessamento.
     *
     * @return mixed
     */
    public function getDataProcessamento()
    {
        return $this->DataProcessamento;
    }

    /**
     * Sets the value of DataProcessamento.
     *
     * @param mixed $DataProcessamento the data processamento
     *
     * @return self
     */
    public function setDataProcessamento($DataProcessamento)
    {
        $this->DataProcessamento = $DataProcessamento;

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

    /**
     * Gets the value of Comentarios.
     *
     * @return mixed
     */
    public function getComentarios()
    {
        return $this->Comentarios;
    }

    /**
     * Sets the value of Comentarios.
     *
     * @param mixed $Comentarios the comentarios
     *
     * @return self
     */
    public function setComentarios($Comentarios)
    {
        $this->Comentarios = $Comentarios;

        return $this;
    }

    /**
     * Gets the value of ComprovanteBase64.
     *
     * @return mixed
     */
    public function getComprovanteBase64()
    {
        return $this->ComprovanteBase64;
    }

    /**
     * Sets the value of ComprovanteBase64.
     *
     * @param mixed $ComprovanteBase64 the comprovante base64
     *
     * @return self
     */
    public function setComprovanteBase64($ComprovanteBase64)
    {
        $this->ComprovanteBase64 = $ComprovanteBase64;

        return $this;
    }

    /**
     * Gets the value of NomeArquivoComprovante.
     *
     * @return mixed
     */
    public function getNomeArquivoComprovante()
    {
        return $this->NomeArquivoComprovante;
    }

    /**
     * Sets the value of NomeArquivoComprovante.
     *
     * @param mixed $NomeArquivoComprovante the nome arquivo comprovante
     *
     * @return self
     */
    public function setNomeArquivoComprovante($NomeArquivoComprovante)
    {
        $this->NomeArquivoComprovante = $NomeArquivoComprovante;

        return $this;
    }

    /**
     * Gets the value of ContaBancaria.
     *
     * @return mixed
     */
    public function getContaBancaria()
    {
        return $this->ContaBancaria;
    }

    /**
     * Sets the value of ContaBancaria.
     *
     * @param mixed $ContaBancaria the conta bancaria
     *
     * @return self
     */
    public function setContaBancaria(ContaBancariaDTO $ContaBancaria)
    {
        $this->ContaBancaria = $ContaBancaria;

        return $this;
    }
}
