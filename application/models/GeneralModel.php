<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class GeneralModel extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  function get_pengguna()
  {
    $query = $this->db->query("SELECT * FROM corenet_pengguna WHERE status_pengguna = '1'");
    return $query->result();
  }

  function get_general($table)
  {
    $query = $this->db->get($table);
    return $query->result();
  }

  function create_general($table, $data)
  {
    return $this->db->insert($table, $data);
  }

  function get_by_id_general($table, $id, $val)
  {
    $query = $this->db->where($id, $val)->get($table);
    return $query->result();
  }

  function update_general($table, $id, $val, $data)
  {
    $this->db->where($id, $val);
    return $this->db->update($table, $data);
  }

  function delete_general($table, $id, $val)
  {
    $this->db->where($id, $val);
    return $this->db->delete($table);
  }

  

}
