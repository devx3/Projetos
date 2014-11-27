<?php

class Contato
{

	protected $nome;
	protected $fone;
	protected $emailDestino;
	protected $emailOrigem;
	protected $mensagem;
	protected $assunto;


	/******************* SETTERS ******************/

	public function setNome($var)
	{
		$this->nome = $var;
	}

	public function setFone($var)
	{
		$this->fone = $var;
	}
	public function setEmailDestino($var)
	{
		$this->emailDestino = $var;
	}

	public function setEmailOrigem($var)
	{
		$this->emailOrigem = $var;
	}

	public function setMensagem($var)
	{
		$this->mensagem = $var;
	}

	public function setAssunto($var)
	{
		$this->assunto = $var;
	}

	public function setSmtp($var)
	{
		$this->smtp = $var;
	}
	public function setUsuario($var)
	{
		$this->usuario = $var;
	}
	public function setSenha($var)
	{
		$this->senha = $var;
	}


	/******************* GETTERS ******************/

	public function getNome()
	{
		return $this->nome;
	}
	public function getFone()
	{
		return $this->fone;
	}
	public function getEmailDestino()
	{
		return $this->emailDestino;
	}
	public function getEmailOrigem()
	{
		return $this->emailOrigem;
	}
	public function getMensagem()
	{
		return $this->mensagem;
	}
	public function getAssunto()
	{
		return $this->assunto;
	}


	public function getSmtp()
	{
		return $this->smtp;
	}
	public function getUsuario()
	{
		return $this->usuario;
	}
	public function getSenha()
	{
		return $this->senha;
	}


	/*********************************************/

	public function send($resposta = true)
	{

		if($resposta)
		{
			$email = "

			Nome: 	  ". $this->getNome() . "
			Telefone: ". $this->getFone() . "
			Email: 	  ". $this->getEmailOrigem() . "
			Assunto:  ". $this->getAssunto() . "
			Mensagem: ". $this->getMensagem();
		}
		else 
			$email = $this->getMensagem();

		$header = "MIME-Version: 1.0\n"; 
		$header .= "Content-type: text/html; charset=iso-8859-1\n"; 
		$header .= "From: {$this->getEmailOrigem()}\n";
		$header .= "Reply-to: {$this->getEmailDestino()}\n";
	

		mail($this->getEmailDestino(), $this->getAssunto() , $email, $header);
		//$this->sendMail();
		return true;
	}


	
}

