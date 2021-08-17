<?php
class ModelCeloe extends CI_Model
{

	public function login($Data)
	{
		$data = $this->db->where('username',$this->input->post('username'))
						  ->where('password',$this->input->post('password'))
						  ->get('login');
		if ($data->num_rows() == 1) {
			$array = array(
				
				'username'	=> $this->input->post('username'),
				'password'	=> $data->row()->password,
			);
			
			$this->session->set_userdata( $array );

			return TRUE;
		} else {
			return FALSE;
		}
	}

}
