<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/* Created by: CodeCoding.ID
 * thanks for visit my website
 * www.codecoding.id
 */
 
class Shopping_cart extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_cart');
  }
 
  public function index(){
 
    $data['product'] = $this->M_cart->get()->result();
    $data['cart'] = $this->cart->contents();
    $this->load->view('index',$data);
  }
 
  public function beli(){
    $data = array(
            'id' => $this->input->post('id'),
      'name' => $this->input->post('nama'),
      'price' => $this->input->post('harga'),
      'gambar' => $this->input->post('gambar'),
      'qty' =>$this->input->post('qty')
      );
  $this->cart->insert($data);
    redirect('Shopping_cart');
  }
 
  public function keranjang_belanja(){
    $data['cart'] = $this->cart->contents();
    $this->load->view('keranjang_belanja',$data);
  }
}