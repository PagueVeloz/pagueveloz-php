<?php

namespace PagueVeloz\Api\Common\Dto;

class CidadeDTO extends \PagueVeloz\AbstractDTO
{
    protected $Nome;
    protected $Estado;

    public function getNotEmpty()
    {
        return [];
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
     * Gets the value of Estado.
     *
     * @return mixed
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * Sets the value of Estado.
     *
     * @param mixed $Estado the estado
     *
     * @return self
     */
    public function setEstado($Estado)
    {
        $this->Estado = $Estado;

        return $this;
    }
}
