<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

// ----------------- ini edit note ----------
    public function updateUser($param1='',$param2='')
{
 if ($param1=='do_update') {
     $id_user = $this->input->post('id');
     $data = array(
         'name' => $this->input->post('name'),
         'password' => $this->input->post('name')
     );
     if ($this->GeneralModel->update_general('user','id',$id_user,$data) == TRUE) {
         $this->session->set_flashdata('notif','<div class="alert alert-success">Data User berhasil diperbarui</div>');
        //  var_dump($id_notes);die;
        redirect('note');
     }else{
         $this->session->set_flashdata('notif','<div class="alert alert-danger">Data User gagal diperbarui</div>');
         redirect('index.php/note/index/');
     }

 }else {
     $data['subtitle'] = 'Update User';
     $data['user'] = $this->GeneralModel->get_general('user');
     $data['content'] = 'user/update';
     $data['id_notes'] = $param1;
     $this->load->view('user/edit',$data);
 }
}







}