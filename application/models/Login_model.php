<?php if (!defined('BASEPATH'))
{
	exit('No direct script acces allowed');
}
Class Login_model extends MY_Model
{
	public $table ='user';
	public function getValidationRules()
	{
		$validationRules = [
		[
			'field' => 'username',
			'label' => 'Username',
			'rules' => 'trim|required'
		],
		[
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'trim|required'
		]

		];
		return $validationRules;
	}
	public function getValidationRules()
	{
		return [
			'username' => '',
			'password' => ''
		];
	}
}

public function login($input)
{
	$input->password = md5($input->password);

	$user = $this->db->where('username', $input->username)
					 ->where('password', $input->password)
					 ->where('is_blokir', 'n')
					 ->limit(1)
					 ->get($this->table)
					 ->row();
if (count($user))
{
	$data = [
		'username' => null,
		'level'    => null,
		'is_login' => null,
	];
	$this->session->unset_userdata($data);
	$this->session->sess_destory();
	}
}
