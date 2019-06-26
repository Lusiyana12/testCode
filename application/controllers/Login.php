<?php if (!defined('BASEPATH'))
{
	exit('No direct script acces allowed');
}
Class Login extends MY_Controller
{
	public function index()
	{
		if (!$_POST)
		{
			$input = (object) $this->login->getDefaultValues();
		}
		else
		{
			$input = (object) $this->input->post(null, true);
		}

		if ($this->login->($input))
		{
			redirect(base_url());
		}
		else
		{
			$this->session->set_flashdata('error', 'Username atau password salah, atau akun anda sedang diblokir');
		}
		redirect('login');
	}
	public function logout()
	{
		$this->login->logout();
		redirect(base_url());
	}