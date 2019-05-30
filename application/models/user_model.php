<?php
class User_model extends CI_Model{
     public function __construct()
{
parent::__construct();

$this->load->database();

}
public function get_all_users()
{
#$this->load->database();
$query = $this->db->get('users');
return $query->result();
}

public function insert_users_to_db($data)
{
return $this->db->insert('users', $data);
}

public function getById($id)
{
$query = $this->db->get_where('users',array('id'=> $id));
return $query->$row_array();
}

public function edit()
{
     $id=$this->uri->segment(3);
     $data['users']->$this->user_model->getById($id);
     $this->load->view('edit',$data);
}

public function update_info($data,$id)
{
$this->db->where('users.id',$id);
return $this->db->update('users',$data);
}
}
?>
