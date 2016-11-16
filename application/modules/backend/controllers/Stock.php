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

                $allData = $this->stock_model->get_all();
                if(isset($allData) && !empty($allData)){
                    $this->stock_model->delete();
                }

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

    public function add_live_stock_info() {
        $url = "http://nepalstock.com.np/api/livedata";

        //initiate curl
        $curl = curl_init();

        // Curl Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_USERPWD, "kccstd:oTdKz7wp8B7W04G");
        curl_setopt($ch, CURLOPT_HTTPHEADER,array('Accept:application/json'));
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);
        curl_close($curl);

        $result = json_decode($result);

        $allData = $this->stock_model->get_all('tbl_nepse_api_data');
        if(isset($allData) && !empty($allData)){
            $this->stock_model->delete('tbl_nepse_api_data');
        }

        foreach ($result as $key => $value) {
            $arrData = array(
                'api_id'                                        => $value->ID,
                'date'                                          => $value->Date,
                'time'                                          => $value->Time,
                'stock_symbol'                                  => $value->StockSymbol,
                'opening_price'                                 => $value->OpeningPrice,
                'last_trade_price'                              => $value->LastTradePrice,
                'last_trade_time'                               => $value->LastTradeTime,
                'daily_stock_stats_average_price'               => $value->DailyStockStatsAveragePrice,
                'daily_stock_stats_52_week_high'                => $value->DailyStockStats52WeekHigh,
                'daily_stock_stats_52_week_low'                 => $value->DailyStockStats52WeekLow,
                'daily_stock_stats_highest_price'               => $value->DailyStockStatsHighestPrice,
                'daily_stock_stats_lowest_price'                => $valueDailyStockStatsLowestPrice,
                'daily_stock_stats_percentage_change_in_price'  => $valueDailyStockStatsPercentageChangeInPrice,
                'daily_stock_stats_last_trade_volume'           => $valueDailyStockStatsLastTradeVolume,
                'daily_stock_stats_last_highest_volume'         => $valueDailyStockStatsHighestVolume,
                'daily_stock_stats_last_lowest_volume'          => $valueDailyStockStatsLowestVolume,
                'daily_stock_stats_total_traded_volume'         => $valueDailyStockStatsTotalTradedVolume,
                'daily_stock_stats_percentage_change_in_volume' => $valueDailyStockStatsPercentageChangeInVolume,
                'daily_stock_stats_total_no_of_trades'          => $valueDailyStockStatsTotalNoOfTrades,
                'daily_stock_stats_turn_over'                   => $valueDailyStockStatsTurnOver,
                'daily_stock_stats_adsolute_change_in_price'    => $valueDailyStockStatsAdsoluteChangeInPrice,
                'daily_stock_price_movement_id'                 => $valueDailyStockPriceMovementID,
                'contract_type'                                 => $valueContractType,
                'daily_stock_stats_previous_day_closing_price'  => $valueDailyStockStatsPreviousDayClosingPrice,
                'stock_name'                                    => $valueDailyStockStats52WeekHigh,
                'pulled_datetime'                               => $valueDailyStockStats52WeekHigh,
                
            );
            $this->stock_model->add($arrData,'tbl_nepse_api_data');
        }
           
        $this->session->set_userdata( 'flash_msg_type', "success" );
        $this->session->set_flashdata('flash_msg', 'Stock upload sucessfully.');
        redirect(ADMIN_PATH . '/stock', 'refresh');

    
    }

}

