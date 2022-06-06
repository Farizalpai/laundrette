<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['books']= $this->db->get('list_buku')->result();
		// echo '<pre>';
		// print_r($data);
		// die;
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('index', $data);
		$this->load->view('templates/footer');
		// echo 'hello';
	}

	public function book(){
		// $data['books']= $this->db->get('list_buku')->result();
		$this->db->select('*');
		$this->db->from('list_buku');
		$this->db->join('kategori','kategori.id_kategori = list_buku.kategori');
		$this->db->where('list_buku.kategori = kategori.id_kategori',);
		$data['books']= $this->db->get()->result();
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('book', $data);
		$this->load->view('templates/footer');
	}

	public function tambah(){
		$data['kategories']= $this->db->get('kategori')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('tambah', $data);
		$this->load->view('templates/footer');
	}

	public function prosestambah(){
		
		
		$data = [

			'id_buku'    => $this->input->post('id_buku'),
			'judul_buku' => $this->input->post('judul_buku'),
			'kategori'   => $this->input->post('kategori'),
			'harga_sewa' => $this->input->post('harga_sewa')
		];

		$query = $this->db->insert('list_buku', $data);
		if($query){
			redirect('dashboard');
		} else {
			redirect('dashboard/book');
		}
	}

	public function proseshapus(){

		$kate =  $this->input->post('checklist');
		// print_r($kate);
		// foreach($kate as $k){
		// 	// echo $k;
		// }
		$this->db->where_in('id_listbuku', $kate);
		$data = $this->db->delete('list_buku');
		if($data){
			redirect('dashboard/book');
		} else{
			redirect('dashboard/book');
		}
		die;
		
		
	}

	public function sewa(){
		
		$data['books']= $this->db->get('list_buku')->result();
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('sewa', $data);
		$this->load->view('templates/footer');
	}

	public function totalharga(){
		$id = $this->input->post('id');
		;
		$data['harga'] = $this->db->get_where('list_buku', array('id_listbuku' => $id))->result();
		
		echo json_encode($data);
	}

	public function prosessewa(){
		
		
		$id1 = $this->input->post('id1');
		$id2 = $this->input->post('id2');
		$id3 = $this->input->post('id3');
		$id4 = $this->input->post('id4');
		$id5 = $this->input->post('id5');

		$mix = array($id1,$id2,$id3,$id4,$id5);
		$data = array();
		print_r($mix);
		if($mix[0]){
			
			array_push($data,$mix[0]);
		}
		
		if($mix[1]) {
		
			array_push($data,$mix[1]);
		}
		
		if($mix[2]) {
		
			array_push($data,$mix[2]);
		} 

		if($mix[3]) {
			
			array_push($data,$mix[3]);
		} 
		
		if($mix[4]) {
			
			array_push($data,$mix[4]);
		}
		
		// print_r($data);

		// foreach($data as $a){
			// }
			$pisah = implode(",",$data);
			$data = [
				'nama'    => $this->input->post('nama_penyewa'),
				'nohp' => $this->input->post('nohp'),
				'alamat'   => $this->input->post('alamat'),
				'id_listbuku' => $pisah,
				'total_harga' => $this->input->post('total_harga')
			];
			$query = $this->db->insert('transaksi_sewa', $data);
			
				
			if($query){
				echo 'berhasil';
			} else {
				echo 'gagal';
			}

	}

}
