<?php

namespace PagueVeloz\Api\v3\Dto;

class BoletoDTO extends \PagueVeloz\AbstractDTO
{
	protected $Valor;
    protected $Vencimento;
    protected $SeuNumero;
    protected $Sacado;
    protected $CPFCNPJSacado;
    protected $Parcela;
    protected $Linha1;
    protected $Linha2;
    protected $CPFCNPJCedente;
    protected $Cedente;
    protected $DataPagamento;
    protected $Pdf;
    protected $Id;

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
     * Gets the value of CPFCNPJCedente.
     *
     * @return mixed
     */
    public function getCPFCNPJCedente()
    {
        return $this->CPFCNPJCedente;
    }

    /**
     * Sets the value of CPFCNPJCedente.
     *
     * @param mixed $CPFCNPJCedente the jcedente
     *
     * @return self
     */
    public function setCPFCNPJCedente($CPFCNPJCedente)
    {
        $this->CPFCNPJCedente = $CPFCNPJCedente;

        return $this;
    }

    /**
     * Gets the value of Cedente.
     *
     * @return mixed
     */
    public function getCedente()
    {
        return $this->Cedente;
    }

    /**
     * Sets the value of Cedente.
     *
     * @param mixed $Cedente the cedente
     *
     * @return self
     */
    public function setCedente($Cedente)
    {
        $this->Cedente = $Cedente;

        return $this;
    }

    /**
     * Gets the value of DataPagamento.
     *
     * @return mixed
     */
    public function getDataPagamento()
    {
        return $this->DataPagamento;
    }

    /**
     * Sets the value of DataPagamento.
     *
     * @param mixed $DataPagamento the data pagamento
     *
     * @return self
     */
    public function setDataPagamento($DataPagamento)
    {
        $this->DataPagamento = $DataPagamento;

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
}
