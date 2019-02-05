<?php

namespace PagueVeloz\Api\v5\Dto;

use PagueVeloz\Api\v5\Dto\DescontoDTO;
use PagueVeloz\Api\v5\Dto\SplitDoBoletoDTO;

class BoletoDTO extends \PagueVeloz\AbstractDTO
{
    protected $Sacado;
    protected $CPFCNPJSacado;
    protected $Vencimento;
    protected $Valor;
    protected $SeuNumero;
    protected $Parcela;
    protected $Linha1;
    protected $Linha2;
    protected $Email;
    protected $DataEnvioEmail;
    protected $Pdf;
    protected $Desconto;
    protected $Split;
    protected $Id;
    protected $Status;

    public function __construct()
    {
        $this->setSplit([]);
    }

    public function getNotEmpty()
    {
        return [
            'Sacado',
            'CPFCNPJSacado',
            'Vencimento',
            'Valor',
            ];
    }

    /**
     * Gets the value of Sacado.
     *
     * @return mixed
     */
    public function getSacado()
    {
        return $this->Sacado;
    }

    /**
     * Sets the value of Sacado.
     *
     * @param mixed $Sacado the sacado
     *
     * @return self
     */
    public function setSacado($Sacado)
    {
        $this->Sacado = $Sacado;

        return $this;
    }

    /**
     * Gets the value of CPFCNPJSacado.
     *
     * @return mixed
     */
    public function getCPFCNPJSacado()
    {
        return $this->CPFCNPJSacado;
    }

    /**
     * Sets the value of CPFCNPJSacado.
     *
     * @param mixed $CPFCNPJSacado the jsacado
     *
     * @return self
     */
    public function setCPFCNPJSacado($CPFCNPJSacado)
    {
        $this->CPFCNPJSacado = $CPFCNPJSacado;

        return $this;
    }

    /**
     * Gets the value of Vencimento.
     *
     * @return mixed
     */
    public function getVencimento()
    {
        return $this->Vencimento;
    }

    /**
     * Sets the value of Vencimento.
     *
     * @param mixed $Vencimento the vencimento
     *
     * @return self
     */
    public function setVencimento($Vencimento)
    {
        $_vencimento = new \DateTime($Vencimento);

        $this->Vencimento = $_vencimento->format('Y-m-d');

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
     * Gets the value of SeuNumero.
     *
     * @return mixed
     */
    public function getSeuNumero()
    {
        return $this->SeuNumero;
    }

    /**
     * Sets the value of SeuNumero.
     *
     * @param mixed $SeuNumero the seu numero
     *
     * @return self
     */
    public function setSeuNumero($SeuNumero)
    {
        $this->SeuNumero = $SeuNumero;

        return $this;
    }

    /**
     * Gets the value of Parcela.
     *
     * @return mixed
     */
    public function getParcela()
    {
        return $this->Parcela;
    }

    /**
     * Sets the value of Parcela.
     *
     * @param mixed $Parcela the parcela
     *
     * @return self
     */
    public function setParcela($Parcela)
    {
        $this->Parcela = $Parcela;

        return $this;
    }

    /**
     * Gets the value of Linha1.
     *
     * @return mixed
     */
    public function getLinha1()
    {
        return $this->Linha1;
    }

    /**
     * Sets the value of Linha1.
     *
     * @param mixed $Linha1 the linha1
     *
     * @return self
     */
    public function setLinha1($Linha1)
    {
        $this->Linha1 = $Linha1;

        return $this;
    }

    /**
     * Gets the value of Linha2.
     *
     * @return mixed
     */
    public function getLinha2()
    {
        return $this->Linha2;
    }

    /**
     * Sets the value of Linha2.
     *
     * @param mixed $Linha2 the linha2
     *
     * @return self
     */
    public function setLinha2($Linha2)
    {
        $this->Linha2 = $Linha2;

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
     * @param mixed $Email the Email
     *
     * @return self
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * Sets the value of DataEnvioEmail.
     *
     * @param mixed $DataEnvioEmail the data pagamento
     *
     * @return self
     */
    public function setDataEnvioEmail($DataEnvioEmail)
    {
        $_dataEnvioEmail = new \DateTime($DataEnvioEmail);

        $this->DataEnvioEmail = $_dataEnvioEmail->format('Y-m-d');

        return $this;
    }

    /**
     * Gets the value of DataEnvioEmail.
     *
     * @return mixed
     */
    public function getDataEnvioEmail()
    {
        return $this->DataEnvioEmail;
    }

    /**
     * Gets the value of Pdf.
     *
     * @return mixed
     */
    public function getPdf()
    {
        return $this->Pdf;
    }

    /**
     * Sets the value of Pdf.
     *
     * @param mixed $Pdf the pdf
     *
     * @return self
     */
    public function setPdf($Pdf)
    {
        $this->Pdf = $Pdf;

        return $this;
    }

    /**
     * Gets the value of Desconto.
     *
     * @return mixed
     */
    public function getDesconto()
    {
        return $this->Desconto;
    }

    /**
     * Sets the value of Desconto.
     *
     * @param mixed $Desconto the desconto
     *
     * @return self
     */
    public function setDesconto(DescontoDTO $Desconto)
    {
        $this->Desconto = $Desconto;

        return $this;
    }

    /**
     * Gets the value of Split.
     *
     * @return mixed
     */
    public function getSplit()
    {
        return $this->Split;
    }

    /**
     * Sets the value of Split.
     *
     * @param mixed $Split the split
     *
     * @return self
     */
    public function setSplit(array $Split)
    {
        $this->Split = $Split;

        return $this;
    }

    /**
     * Add the value of Split.
     *
     * @param mixed $Split the split
     *
     * @return self
     */
    public function addSplit(SplitDoBoletoDTO $Split)
    {
        $this->Split[] = $Split;

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
}
