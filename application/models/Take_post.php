<?php
class Take_post extends CI_Model
{

  function get_posting()
  {
    $result = $this->db->get('atabled');
    return $result;
  }

  function save_post($judul, $isi)
  {
    $data = array(
      'judul' => $judul,
      'isi' => $isi
    );
    $this->db->insert('atabled', $data);
  }

  function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('atabled');
  }

  function login($table, $where)
  {
    return $this->db->get_where($table, $where);
  }

  function upd_data($id, $judul, $isi)
  {
    $data = array(
      'judul' => $judul,
      'isi' => $isi
    );
    $this->db->replace('atabled', $data);
  }

  public function show_item($table)
  {
    return $this->db->get($table);
  }

  public function add_items($data, $table)
  {
    $this->db->insert($table, $data);
  }

  public function deleteitem($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function getId($where, $table)
  {
    return $this->db->get_where($table, $where);
  }

  public function updateData($where, $data, $table)
  {

    $this->db->where($where);
    return $this->db->update($table, $data);
  }
}
