<?php

namespace PagueVeloz\Api\Cartao\v1\Dto;

use \PagueVeloz\Api\Cartao\v1\Dto\ProprietarioCartaoDTO;

class TransacaoDTO extends \PagueVeloz\AbstractDTO
{
	protected $NSU;
    protected $ValorServico;
    protected $ValorTransacao;
    protected $Parcelas;
    protected $Bandeira;
    protected $Descricao;
    protected $ProprietarioCartao;

    public function __construct()
    {
        $this->setProprietarioCartao(new ProprietarioCartaoDTO);
    }

    public function getNotEmpty()
    {
        return [
                    'NSU',
                    'ValorServico',
                    'ValorTransacao',
                    'Parcelas',
                    'Bandeira',
                    'Descricao',
                    'ProprietarioCartao',
                ];
    }

    /**
     * Gets the value of NSU.
     *
     * @return mixed
     */
    public function getNSU()
    {
        return $this->NSU;
    }

    /**
     * Sets the value of NSU.
     *
     * @param mixed $NSU the
     *
     * @return self
     */
    public function setNSU($NSU)
    {
        $this->NSU = $NSU;

        return $this;
    }

    /**
     * Gets the value of ValorServico.
     *
     * @return mixed
     */
    public function getValorServico()
    {
        return $this->ValorServico;
    }

    /**
     * Sets the value of ValorServico.
     *
     * @param mixed $ValorServico the valor servico
     *
     * @return self
     */
    public function setValorServico($ValorServico)
    {
        $this->ValorServico = $ValorServico;

        return $this;
    }

    /**
     * Gets the value of ValorTransacao.
     *
     * @return mixed
     */
    public function getValorTransacao()
    {
        return $this->ValorTransacao;
    }

    /**
     * Sets the value of ValorTransacao.
     *
     * @param mixed $ValorTransacao the valor transacao
     *
     * @return self
     */
    public function setValorTransacao($ValorTransacao)
    {
        $this->ValorTransacao = $ValorTransacao;

        return $this;
    }

    /**
     * Gets the value of Parcelas.
     *
     * @return mixed
     */
    public function getParcelas()
    {
        return $this->Parcelas;
    }

    /**
     * Sets the value of Parcelas.
     *
     * @param mixed $Parcelas the parcelas
     *
     * @return self
     */
    public function setParcelas($Parcelas)
    {
        $this->Parcelas = $Parcelas;

        return $this;
    }

    /**
     * Gets the value of Bandeira.
     *
     * @return mixed
     */
    public function getBandeira()
    {
        return $this->Bandeira;
    }

    /**
     * Sets the value of Bandeira.
     *
     * @param mixed $Bandeira the bandeira
     *
     * @return self
     */
    public function setBandeira($Bandeira)
    {
        $this->Bandeira = $Bandeira;

        return $this;
    }

    /**
     * Gets the value of Descricao.
     *
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->Descricao;
    }

    /**
     * Sets the value of Descricao.
     *
     * @param mixed $Descricao the descricao
     *
     * @return self
     */
    public function setDescricao($Descricao)
    {
        $this->Descricao = $Descricao;

        return $this;
    }

    /**
     * Gets the value of ProprietarioCartao.
     *
     * @return mixed
     */
    public function getProprietarioCartao()
    {
        return $this->ProprietarioCartao;
    }

    /**
     * Sets the value of ProprietarioCartao.
     *
     * @param mixed $ProprietarioCartao the proprietario cartao
     *
     * @return self
     */
    public function setProprietarioCartao(ProprietarioCartaoDTO $ProprietarioCartao)
    {
        $this->ProprietarioCartao = $ProprietarioCartao;

        return $this;
    }
}
