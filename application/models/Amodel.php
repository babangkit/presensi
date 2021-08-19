<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Amodel extends CI_Model
{
    public function getMatkul()
    {
        
        $user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $query =   "SELECT `matkul`.`id`, `nama_matkul`, `prodi`, `tahun`
                    FROM `matkul` JOIN `akses_matkul`
                    ON `matkul`.`id` = `akses_matkul`.`id_matkul`
                    WHERE `akses_matkul`.`id_user` = ". $user['id']."
                    ORDER BY`akses_matkul`.`id_matkul` ASC";

        return $this->db->query($query)->result_array();
    }

    public function getIdMatkul($id)
    {
                
        $query =   "SELECT `akses_matkul`.`id_user`
                    FROM `akses_matkul`
                    WHERE `akses_matkul`.`id_matkul` = ".$id."";

        return $this->db->query($query)->row_array();
    }

    public function getAllMatkul()
    {
        
        $query =   "SELECT `matkul`.`id`, `nama_matkul`, `prodi`, `tahun`
                    FROM `matkul`
                    ORDER BY  `matkul`.`id` ASC";

        return $this->db->query($query)->result_array();
    }

    public function getNameMatkul($id)
    {

        $query =   "SELECT `matkul`.`id`, `matkul`.`nama_matkul`
                    FROM `matkul`
                    WHERE `id` = $id";

        return $this->db->query($query)->result_array();
    }

    public function getPresensi($id)
    {

        $query =   "SELECT `user`.`name`, `user`.`nim`, `user`.`kelas`, `absensi`.`id`, `absensi`.`mk_ttp`, `absensi`.`mk_pg`, `absensi`.`total`, `absensi`.`ttd`
                    FROM `user`
                    JOIN `absensi`
                    ON `user`.`id` = `absensi`.`id_user`
                    WHERE `absensi`.`id_matkul` = $id
                    ORDER BY `absensi`.`id_matkul` ASC";

        return $this->db->query($query)->result_array();
    }

    
    public function getData($id)
    {

        $query =   "SELECT `user`.`id`, `user`.`name`, `user`.`nim`, `user`.`kelas`, `absensi`.`id_matkul`, `absensi`.`mk_ttp`, `absensi`.`mk_pg`, `absensi`.`total`, `absensi`.`ttd`
                    FROM `user`
                    JOIN `absensi`
                    ON `user`.`id` = `absensi`.`id_user`
                    WHERE `absensi`.`id` = $id
                    ORDER BY `user`.`id` ASC";

        return $this->db->query($query)->result_array();
    }
}