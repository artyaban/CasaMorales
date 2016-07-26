<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	private $usuario;

	public function index()
	{
		$this->load->view('header');
		$this->load->view('inicio');
		$this->load->view('footer');
	
	}
	public function registro()
	{
		$this->load->view('header');
		$this->load->view('registro');
		$this->load->view('footer');
	}

	public function Nosotros()
	{
		$this->load->view('header');
		$this->load->view('nosotros');
		$this->load->view('footer');
	}
	public function Contactanos()
	{
		$this->load->view('header');
		$this->load->view('contactanos');
		$this->load->view('footer');
	}
	public function Diseniador()
	{
		$this->load->view('header');
		$this->load->view('diseniador');
		$this->load->view('footer');
	}
	public function Informacion()
	{
		$this->load->view('header');
		$this->load->view('info');
		$this->load->view('footer');
	}
	public function nuevousuario()
	{
		$nombre= $this->input->post('nombre');
		$apellido= $this->input->post('apellido');
		$correo= $this->input->post('correo');
		$tel= $this->input->post('tel');
		$cel= $this->input->post('cel');
		$usuario= $this->input->post('usuario');
		$pass1= $this->input->post('pass1');

		$this->load->model('inicio','usuarios',TRUE);
		$data['usuario']=$this->usuarios->insertarUsuario($nombre,$apellido,$correo,$tel,$cel,$usuario,$pass1);

		$this->load->view('header');
		$this->load->view('usuario');
		$this->load->view('footer');
	}
	public function accesousuario ()
	{
		$this->load->view('header');
		$this->load->view('acceso');
		$this->load->view('footer');

	}
	public function comprueba()
	{
	$usuario= $this->input->post('usuario');
	$pass= $this->input->post('pass');
	$this->usuario=$usuario;
	$this->load->model('inicio','administrador',TRUE);
	$data['query']=$this->administrador->get_user($usuario,$pass);

	$usuario1='';
	$password1='';
	foreach ($data['query'] as $row)
	{
    $usuario1= $row->usuario;
    $password1=$row->contrasenia;
	}
		
	if($usuario1!=''and $password1!='')
	{

	$this->load->view('header');
	$this->load->view('datosusuarios',$data);	
	$this->load->view('footer');

	}else
	{
		$this->load->view('header');
		$this->load->view('acceso');
	    echo "<script>alert('Usuario Incorrecto....Intenta de nuevo');</script>";
		$this->load->view('footer');
		}


	}



}
