<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends MX_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->form_validation->CI =& $this;
        $this->load->model('backend/stock_model');
        $this->load->helper('file');
        if(!$this->helper_model->validate_admin_session()){
          redirect(base_url() . 'backend');
        }
    }

    public function index() {
        if(!empty($_FILES['csv_file']['name'])){
            $uploaddir = realpath(CSV_DIR);
            $filename = genRandomString(8).'_'.date('Y-m-d').'.xls';
            $uploadfile = $uploaddir .'/'.basename($filename);

            $fileDir= $uploaddir.'/'.$filename;
            if (move_uploaded_file($_FILES['csv_file']['tmp_name'], $uploadfile)) {
                $file = $fileDir;
                $this->load->library('excel');
                $objPHPExcel = PHPExcel_IOFactory::load($file);

                //get only the Cell Collection
                $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();

                //extract to a PHP readable array format
                foreach ($cell_collection as $cell) {
                    $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
                    $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
                    $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();

                    //header will/should be in row 1 only. of course this can be modified to suit your need.

                    if ($row == 2) {
                        $header[$row][$column] = $data_value;
                    } else {
                        $arr_data[$row][$column] = $data_value;
                    }
                }

                //send the data in an array format
                $data['header'] = $header;
                $data['values'] = $arr_data;

                foreach ($data['values'] as $key => $value) {
                    $arrData = array(
                        'company'               => $value['A'],
                        'no_of_transactions'    => $value['B'],
                        'max_price'             => $value['C'],
                        'min_price'             => $value['D'],
                        'closing_price'         => $value['E'],
                        'traded_shares'         => $value['F'],
                        'amount'                => $value['G'],
                        'previous_closing'      => $value['H'],
                        'difference'            => $value['I'],
                        'added_date'            => date('Y-m-d H:i:s'),
                    );

                    $this->stock_model->add($arrData);
                    // $allData = $this->stock_model->get_all();
                    // foreach ($allData as $key => $stockData) {
                    //     $stock_id =  $stockData['id'];
                    //     $this->stock_model->update($arrData,$stock_id);
                    // }
                }
                
                $this->session->set_userdata( 'flash_msg_type', "success" );
                $this->session->set_flashdata('flash_msg', 'Stock upload sucessfully.');
                redirect(ADMIN_PATH . '/stock', 'refresh');
            }
        }
        
        $data['main'] = 'backend/stock/index';
        $data['title'] = 'Upload Stock Data';
        $data['subtitle'] = 'Upload Stock Information here.';
        $this->load->view('backend/admin', $data);
    }

}

