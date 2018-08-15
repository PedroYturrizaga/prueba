<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitud extends CI_Controller {

	function __construct() {
		parent::__construct();
        $this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
	}

	public function index (){
	// 		$html .= '<tr>
	// 				      <td class="text-left">'.$key->pais.'</td>
 //                          <td class="text-left">'.$key->documento.'</td>
 //                          <td class="text-left">'.$key->fecha.'</td>
 //                          <td class="text-center"> '.$key->puntos_cotizados.' </td>
 //                          <td class="text-center"> '.$key->puntos_facturados.' </td>
 //                          <td class="text-center"> '.$key->puntos_total.' </td> 
 //                      </tr>';
	// 	$data['html'] = $html;
		$this->load->view('v_solicitud');//, $data);
	}
}