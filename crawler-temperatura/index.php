<?php
	
	require_once 'C:/PHP/crawler-php/simplehtmldom/simple_html_dom.php';

	class Temperatura {

		public function __construct(){
			$this->getTemperatura('https://www.diegobrocanelli.com.br/php/testes-de-forma-simples-facil-e-robusta-em-sistemas-php-com-phpunit/');
		}

		public function getTemperatura($url){
			
			$html = file_get_html($url);

			//echo $html;
			preg_match_all('/<time class=\"post-time posted-on published\">(.*?)<\/time>/', $html, $result);
			//echo 'Temperatura em petrolina ' . $result[1][2];

			echo $result;
			//$temperatura = explode('°',$result[1][2]);

			//echo json_encode(
			//	array(
			//		"Sensação Térmica" => $temperatura[0]				
				//	)
			//);

		}
	}

	$t = new Temperatura();
?>