<?php

namespace PagueVeloz\Api\Common;

class Auth
{
    protected $Email;
    protected $Senha;
    protected $Token;

    public function getAuthorization()
    {
        return 'Authorization: Basic '.base64_encode($this->getEmail().':'.$this->getToken());
    }

    public function getAuthorizationCartao()
    {
        return 'Authorization: Chave '.base64_encode($this->getEmail().':'.$this->getToken());
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
     * Gets the value of Senha.
     *
     * @return mixed
     */
    public function getSenha()
    {
        return $this->Senha;
    }

    /**
     * Sets the value of Senha.
     *
     * @param mixed $Senha the senha
     *
     * @return self
     */
    public function setSenha($Senha)
    {
        $this->Senha = $Senha;

        return $this;
    }

    /**
     * Gets the value of Token.
     *
     * @return mixed
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * Sets the value of Token.
     *
     * @param mixed $Token the token
     *
     * @return self
     */
    public function setToken($Token)
    {
        $this->Token = $Token;

        return $this;
    }
}
