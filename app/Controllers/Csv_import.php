<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Csv_import extends CI_Controller {
 
 public function __construct()
 {
  parent::__construct();
  $this->load->model('csv_import_model');
  $this->load->library('csvimport');
 }

 function index()
 {
    $this->load->view('csv_import');
 }

 function import()
 {
  $file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
  foreach($file_data as $row)
  {
   $data[] = array(
    'first_name' => $row["First Name"],
          'last_name'  => $row["Last Name"],
          'phone'   => $row["Phone"],
          'email'   => $row["Email"]
   );
  }
    $this->csv_import_model->insert($data);
 }
 
  
}
