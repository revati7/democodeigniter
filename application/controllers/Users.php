<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users extends CI_Controller {
function __construct()
{
parent::__construct();
$this->load->helper('url');
$this->load->model('user_model');
}
public function index()
{
$data['user_list'] = $this->user_model->get_all_users();
$this->load->view('show_user', $data);

}
public function add_form()
{
    $this->load->view('insert');
}
public function insert_user_db()

{

$udata['name'] = $this->input->post('name');

$udata['email'] = $this->input->post('email');

$udata['address'] = $this->input->post('address');

$udata['mobile'] = $this->input->post('mobile');

$res = $this->user_model->insert_users_to_db($udata);

if($res){

header('location:'.base_url()."index.php/users/".$this->index());

}
}

public function update()
{
$mdata['name'] = $_POST['name'];
$mdata['email'] = $_POST['email'];
$mdata['address'] = $_POST['address'];
$mdata['mobile'] = $_POST['mobile'];
$res = $this->user_model->update_info($mdata,$_POST['id']);
if($res){
header('location:'.base_url()."index.php/users/".$this->index());
}
}
}

