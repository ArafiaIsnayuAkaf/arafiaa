<?php namespace App\Database\Seeds;

class ProdukSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data =[
                [
                        'nama_produk' => 'Softcase',
                        'deskripsi_produk'    => 'Ini adalah Softcase Handphone Fullprint Premium'
                ],
                [
                        'nama_produk' => 'Hardcase',
                        'deskripsi_produk'    => 'Ini adalah Hardcase Handphone Fullprint Premium'
                ],
                
                ];

                // Simple Queries
                // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)",
                //         $data
                // );

                // Using Query Builder
                $this->db->table('produk')->insertBatch($data);
        }
}