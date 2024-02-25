<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Note extends CI_Controller {

	// -----------------ini tampilan notes-------------- 
	public function index()
	{
		$email= $this->session->userdata('email');
		$data['title'] = 'Notes User';
 		$data['subtitle'] = 'Notes User';
 		$data['listNotes'] =$this->GeneralModel->get_by_id_general('note','email',$email);
		$this->load->view('panel/note/index',$data);
	}

	// ---------------------- ini tambah note--------------
	public function createListNotes($param1=''){
		if ($param1=='do_create') {
			$data = array(
				'judul_note' => $this->input->post('judul_note'),
				'deskripsi' => $this->input->post('deskripsi'),
				'created_time' => date('Y-m-d H:i:s'),
				'email' => $this->session->userdata('email'),

				
			);
	   
			if ($this->GeneralModel->create_general('note',$data) == TRUE) {
				$this->session->set_flashdata('notif','<div class="alert alert-success">Data Kategori Notes berhasil ditambahkan</div>');
				// var_dump($data);die;
				redirect('index.php/note/index/');
			}else{
				$this->session->set_flashdata('notif','<div class="alert alert-danger">Data kategori Notes gagal ditambahkan</div>');
				redirect('index.php/note/index/');
			}
	   
		}else {
			$data['subtitle'] = 'Tambah  Notes';
			$data['content'] = 'panel/note/create';
			$this->load->view('panel/note/create',$data);
		}
	}

	// ----------------- ini edit note ----------
	public function updateListNotes($param1='',$param2='')
{
 if ($param1=='do_update') {
     $id_note = $this->input->post('id_note');
     $data = array(
         'judul_note' => $this->input->post('judul_note'),
         'deskripsi' => $this->input->post('deskripsi'),
         'updated_time' => date('Y-m-d H:i:s')
     );
     if ($this->GeneralModel->update_general('note','id_note',$id_note,$data) == TRUE) {
            $this->session->set_flashdata('notif','<div class="alert alert-success">Data Kategori To Do List berhasil diperbarui</div>');
           redirect('index.php/note/index/');
        }else{
            $this->session->set_flashdata('notif','<div class="alert alert-danger">Data Kategori To Do List gagal diperbarui</div>');
            redirect('index.php/note/index/');
        }





     
 }else {
     $data['subtitle'] = 'Update Notes';
     $data['notes'] = $this->GeneralModel->get_by_id_general('note','id_note',$param1,'d');
     $data['content'] = 'panel/note/update';
     $data['id_note'] = $param1;
     $this->load->view('panel/note/update',$data);
 }
}


// ------------------------ ini hapus note  -------------
public function deleteListNotes(){
  $id_note = $this->input->get('id');
  $this->GeneralModel->delete_general('note','id_note',$id_note);
  $this->session->set_flashdata('notif','<div class="alert alert-success">Data Kategori FAQ berhasil dihapus</div>');
  redirect('index.php/note/index/');
}


















}
