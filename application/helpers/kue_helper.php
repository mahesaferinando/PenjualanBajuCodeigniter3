<?php

function is_logged_in()
{
	$kue = get_instance();
	if (!$kue->session->userdata('email')) {
		redirect('auth');
	} else {
		$role_id = $kue->session->userdata('role_id');
		$menu = $kue->uri->segment(1);

		$queryMenu = $kue->db->get_where('user_menu', ['menu' => $menu])->row_array();
		$menu_id = $queryMenu['id'];

		$userAccess = $kue->db->get_where(
			'user_access_menu',
			[
				'role_id'  => $role_id,
				'menu_id' => $menu_id
			]
		);

		if ($userAccess->num_rows() < 1) {
			redirect('auth/blokir');
		}
	}
}
