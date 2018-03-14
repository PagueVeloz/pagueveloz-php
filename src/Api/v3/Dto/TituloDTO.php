<?php

namespace PagueVeloz\Api\v3\Dto;

use PagueVeloz\Api\v3\Dto\TituloDTO;

final class TituloDTO extends \PagueVeloz\AbstractDTO
{
    protected $NomeDoArquivo;
    protected $ConteudoEmBytes;
    protected $ConteudoEmBase64;

    /**
     * @return mixed
     */
    public function getNomeDoArquivo()
    {
        return $this->NomeDoArquivo;
    }

    /**
     * @param mixed $NomeDoArquivo
     *
     * @return self
     */
    public function setNomeDoArquivo($NomeDoArquivo)
    {
        $this->NomeDoArquivo = $NomeDoArquivo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getConteudoEmBytes()
    {
        return $this->ConteudoEmBytes;
    }

    /**
     * @param mixed $ConteudoEmBytes
     *
     * @return self
     */
    public function setConteudoEmBytes($ConteudoEmBytes)
    {
        $this->ConteudoEmBytes = $ConteudoEmBytes;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getConteudoEmBase64()
    {
        return $this->ConteudoEmBase64;
    }

    /**
     * @param mixed $ConteudoEmBase64
     *
     * @return self
     */
    public function setConteudoEmBase64($ConteudoEmBase64)
    {
        $this->ConteudoEmBase64 = $ConteudoEmBase64;

        return $this;
    }
}
