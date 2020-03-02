<?php
	
	require_once 'crawlers/lib/simple_html_dom.php';

	class Temperatura {

		public function __construct(){
			$this->getTemperatura('http://www.tempoagora.com.br/previsao-do-tempo/brasil/Petrolina-PE');
		}

		public function getTemperatura($url){
			
			$html = file_get_html($url);

			preg_match_all('/<p class=\"pb-5 bold\">(.*?)<\/p>/', $html, $result);
			//echo 'Temperatura em petrolina ' . $result[1][2];

			$temperatura = explode('°',$result[1][2]);

			echo json_encode(
				array(
					"temperatura" => $temperatura[0]				
					)
			);

		}
	}

	$t = new Temperatura();
?>