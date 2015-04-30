<?php

namespace PagueVeloz\Api;

interface InterfaceApi
{
	public function Get();
	public function GetById($id);
	public function Post();
	public function Put($id);
	public function Delete($id);
}