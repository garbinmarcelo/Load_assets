<?php

/**
 * Load assets(CSS/JS/JS Code) class
 * Classe utilizada para carregar arquivos .css/.js e códigos js, dinamicamente no template HTML.
 * Basta apenas informar local dos arquivos(opcional) e o nome do mesmo, esta classe gera código HTML(link/script) para a chamada dos arquivos. 
 * 
 * @author Marcelo Garbin <marcelo@sistemasplanejados.com.br>
 * @version 1.0
 * @link   https://bitbucket.org/marcelogarbin/load_assets
 * 
 */
class Load_assets{

	/**
	* Variáveis da classe
	*/
	private $pathCSS; 
	private $pathJS; 

	/**
	* Define o caminho para a pasta de arquivos CSS
	*/
	public function base_pathCSS($path = NULL){
		if(isset($path)){
			$this->pathCSS = $path;
		}else{
			$this->pathCSS = NULL;
		}
	}

	/**
	* Define o caminho para a pasta de arquivos JS
	*/
	public function base_pathJS($path = NULL){
		if(isset($path)){
			$this->pathJS = $path;
		}else{
			$this->pathJS = NULL;
		}
	}

	/**
	* Gera os links CSS utilizados no template
	*
	*/
	public function CSSLinks($links = NULL){
		// Faz a limpeza do array
		$links = array_filter($links);
		if(isset($links) && is_array($links)){
			if(count($links) > 0){
				$html  = "";
				$count = 0;
					foreach($links as $key => $value){
						// Verifica se a string no array possui cabeçalho http/https
						// Se tiver cabeçalho o caminho do diretorio é removido
						$cabecalho = substr($value, 0, strripos($value, ':'));
						if($cabecalho === 'http' || $cabecalho === 'https'){
							$html .= "<link rel='stylesheet' type='text/css' href='" . $value . ".css' />";
						}else{
							$html .= "<link rel='stylesheet' type='text/css' href='" . $this->pathCSS . $value . ".css' />";
						}					
						$html .= ($count >= 0) ? "\n\t" : "\t";
						$count++;
					}
				return $html;
			}else{
				return NULL;
			}
		}else{
			return "\nErro ao Carregar Arquivos .CSS (Verificar Parâmetro).\n";
		}
	}
	 
	/**
	* Gera os links JS utilizados no template
	*
	*/
	public function JSLinks($links = NULL){
		// Faz a limpeza do array
		$links = array_filter($links);
		if(isset($links) && is_array($links)){
			if(count($links) > 0){
				$html  = "";
				$count = 0;
					foreach($links as $key => $value){
						// Verifica se a string no array possui cabeçalho http/https
						// Se tiver cabeçalho o caminho do diretorio é removido
						$cabecalho = substr($value, 0, strripos($value, ':'));
						if($cabecalho === 'http' || $cabecalho === 'https'){
						$html .= "<script src='" . $value . ".js'></script>";
						}else{
							$html .= "<script src='" . $this->pathJS . $value . ".js'></script>";
						}				
						$html .= ($count >= 0) ? "\n\t" : "\t";
						$count++;
					}
				return $html;
			}else{
				return NULL;
			}
		}else{
			return "\nErro ao Carregar Arquivos .JS (Verificar Parâmetro).\n";
		}
	}

	/**
	* Gera os código JS utilizados no template após os links JS
	*
	*/
	public function JSCodes($codes = NULL){
		// Faz a limpeza do array
		$codes = array_filter($codes);
		if(isset($codes) && is_array($codes)){
			if(count($codes) > 0){
				$html  = "";
				$count = 0;
				foreach($codes as $key => $value){
					$html .= "<script>\n\t\t" . $value . "\n\t</script>";
					$html .= ($count >= 0) ? "\n\t" : "\t";
					$count++;
				}
				return $html;
			}else{
				return NULL;
			}
		}else{
			return "\nErro ao Carregar Código Javascript (Verificar Parâmetro).\n";
		}
	}
}