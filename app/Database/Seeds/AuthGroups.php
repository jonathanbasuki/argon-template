<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AuthGroups extends Seeder
{
	public function run()
	{
		$data = [
			'name' => 'admin',
			'description' => 'Role Administrator',
		];

		$this->db->table('auth_groups')->insert($data);

		$data = [
			'name' => 'petugas',
			'description' => 'Role Petugas',
		];

		$this->db->table('auth_groups')->insert($data);

		$data = [
			'name' => 'siswa',
			'description' => 'Role Siswa',
		];

		$this->db->table('auth_groups')->insert($data);
	}
}
