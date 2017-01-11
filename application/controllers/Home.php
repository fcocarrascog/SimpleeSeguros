<?php
	class Home extends CI_controller
	{
		public function Index()
		{
			$data['titulo'] = 'Página principal';

			$this->load->view('Plantilla/Header', $data);
			$this->load->view('Formulario/Index');
			$this->load->view('Plantilla/Footer');
		}
	}
?>