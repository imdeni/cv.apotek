<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Excel extends CI_Controller {
	public function __construct() {
        parent::__construct();
		$this->load->model('Obat');
    }    
	
	public function createExcel() {

        if ($this->input->post('tanggal1') != NULL) {
            if ($this->input->post('tanggal2') != NULL) {
                if ($this->input->post('tanggal2') > $this->input->post('tanggal1')) {
                   

        $fileName = 'laporan_penjualan.xlsx';  
        $data = $this->Obat->excelpenjualan();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $styleArray = [
            'font' => [
                'bold' => true,

            ]
        ];

        $borde = array(
        'borders' => array(
            'outline' => array(
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                'color' => array('argb' => '00000000'),
            ),
        ),
    );

        $spreadsheet->getActiveSheet()->getStyle('A4:L4')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('00FF7F');
        

        
        $sheet->getStyle('A4:L4')->applyFromArray($styleArray);  
        $sheet->getStyle('A4:L4')->applyFromArray($borde);  
        $sheet->setCellValue('A1','Laporan Penjualan');
        $sheet->setCellValue('A2','Tanggal '.$this->input->post('tanggal1').' sampai tanggal '.$this->input->post('tanggal2'));
        $sheet->setCellValue('A4', 'Nama Obat');
        $sheet->setCellValue('B4', 'Kategori Obat');
        $sheet->setCellValue('C4', 'Stok');
        $sheet->setCellValue('D4', 'Jumlah Terjual');
        $sheet->setCellValue('E4', 'Harga /pcs');
        $sheet->setCellValue('F4', 'Stok Aktual'); 
        $sheet->setCellValue('G4', 'Saldo');     
        $sheet->setCellValue('H4', 'Tanggal');  
        $sheet->setCellValue('I4', 'Tanggal Kadaluarsa');
        $sheet->setCellValue('J4', 'Status');       
        $sheet->setCellValue('K4', 'Suplier');
        $sheet->setCellValue('L4', 'Total Penjualan');
        for ($i = 'A'; $i !=  $spreadsheet->getActiveSheet()->getHighestColumn(); $i++) 
        {
            $spreadsheet->getActiveSheet()->getColumnDimension($i)->setAutoSize(TRUE);
        }                     
        $rows = 5;
        foreach ($data as $val){
            $spreadsheet->getActiveSheet()->getStyle('A'.$rows.':L'.$rows)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('93CAED');
            $sheet->setCellValue('A' . $rows, $val['nama']);
            $sheet->setCellValue('B' . $rows, $val['kategori']);
            $sheet->setCellValue('C' . $rows, $val['stok']);
            $sheet->setCellValue('D' . $rows, $val['jumlah']);
            $sheet->setCellValue('E' . $rows, $val['harga']);
            $sheet->setCellValue('F' . $rows, $val['stokaktual']); 
            $sheet->setCellValue('G' . $rows, $val['saldo']);     
            $sheet->setCellValue('H' . $rows, $val['tgl']);
            $sheet->setCellValue('I' . $rows, $val['tgl_exp']);       
            $sheet->setCellValue('J' . $rows, $val['status']);
            $sheet->setCellValue('K' . $rows, $val['suplier']);
            $sheet->setCellValue('L' . $rows, $val['penjualan']);
            
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
        $writer->save("upload/".$fileName);
        header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."/upload/".$fileName);


                }else{
                    echo "<script>alert('Silahkan pilih tanggal dengan benar!!');
                    window.location.href='reload';
                    </script>";
                }
            
        }else{
            echo "<script>alert('Silahkan pilih tanggal!!');
            window.location.href='reload';
            </script>";
        }
        }else{
            echo "<script>alert('Silahkan pilih tanggal!!');
            window.location.href='reload';
            </script>";
        }

		              
    }


    public function createExcel2() {

        if ($this->input->post('tanggal1') != NULL) {
            if ($this->input->post('tanggal2') != NULL) {
                if ($this->input->post('tanggal2') > $this->input->post('tanggal1')) {
                   

        $fileName = 'laporan_pembelian.xlsx';  
        $data = $this->Obat->excelpembelian();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $styleArray = [
            'font' => [
                'bold' => true,

            ]
        ];

        $borde = array(
        'borders' => array(
            'outline' => array(
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                'color' => array('argb' => '00000000'),
            ),
        ),
    );

        $spreadsheet->getActiveSheet()->getStyle('A4:L4')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('00FF7F');
        

        
        $sheet->getStyle('A4:L4')->applyFromArray($styleArray);  
        $sheet->getStyle('A4:L4')->applyFromArray($borde);  
        $sheet->setCellValue('A1','Laporan Pembelian');
        $sheet->setCellValue('A2','Tanggal '.$this->input->post('tanggal1').' sampai tanggal '.$this->input->post('tanggal2'));
        $sheet->setCellValue('A4', 'Nama Obat');
        $sheet->setCellValue('B4', 'Kategori Obat');
        $sheet->setCellValue('C4', 'Stok');
        $sheet->setCellValue('D4', 'Jumlah Terjual');
        $sheet->setCellValue('E4', 'Harga /pcs');
        $sheet->setCellValue('F4', 'Stok Aktual'); 
        $sheet->setCellValue('G4', 'Saldo');     
        $sheet->setCellValue('H4', 'Tanggal');  
        $sheet->setCellValue('I4', 'Tanggal Kadaluarsa');
        $sheet->setCellValue('J4', 'Status');       
        $sheet->setCellValue('K4', 'Suplier');
        $sheet->setCellValue('L4', 'Total Pembelian');
        for ($i = 'A'; $i !=  $spreadsheet->getActiveSheet()->getHighestColumn(); $i++) 
        {
            $spreadsheet->getActiveSheet()->getColumnDimension($i)->setAutoSize(TRUE);
        }                     
        $rows = 5;
        foreach ($data as $val){
            $spreadsheet->getActiveSheet()->getStyle('A'.$rows.':L'.$rows)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('93CAED');
            $sheet->setCellValue('A' . $rows, $val['nama']);
            $sheet->setCellValue('B' . $rows, $val['kategori']);
            $sheet->setCellValue('C' . $rows, $val['stok']);
            $sheet->setCellValue('D' . $rows, $val['jumlah']);
            $sheet->setCellValue('E' . $rows, $val['harga']);
            $sheet->setCellValue('F' . $rows, $val['stokaktual']); 
            $sheet->setCellValue('G' . $rows, $val['saldo']);     
            $sheet->setCellValue('H' . $rows, $val['tgl']);
            $sheet->setCellValue('I' . $rows, $val['tgl_exp']);       
            $sheet->setCellValue('J' . $rows, $val['status']);
            $sheet->setCellValue('K' . $rows, $val['suplier']);
            $sheet->setCellValue('L' . $rows, $val['pembelian']);
            
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
        $writer->save("upload/".$fileName);
        header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."/upload/".$fileName);


                }else{
                    echo "<script>alert('Silahkan pilih tanggal dengan benar!!');
                    window.location.href='reload1';
                    </script>";
                }
            
        }else{
            echo "<script>alert('Silahkan pilih tanggal!!');
            window.location.href='reload1';
            </script>";
        }
        }else{
            echo "<script>alert('Silahkan pilih tanggal!!');
            window.location.href='reload1';
            </script>";
        }

                      
    }    



    public function createExcel3() {

        if ($this->input->post('tanggal1') != NULL) {
            if ($this->input->post('tanggal2') != NULL) {
                if ($this->input->post('tanggal2') > $this->input->post('tanggal1')) {
                   

        $fileName = 'laporan_penjualan_pembelian.xlsx';  
        $data = $this->Obat->excelpenjualanpembelian();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $styleArray = [
            'font' => [
                'bold' => true,

            ]
        ];

        $borde = array(
        'borders' => array(
            'outline' => array(
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                'color' => array('argb' => '00000000'),
            ),
        ),
    );

        $spreadsheet->getActiveSheet()->getStyle('A4:M4')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('00FF7F');
        

        
        $sheet->getStyle('A4:M4')->applyFromArray($styleArray);  
        $sheet->getStyle('A4:M4')->applyFromArray($borde);  
        $sheet->setCellValue('A1','Laporan Penjualan dan Pembelian');
        $sheet->setCellValue('A2','Tanggal '.$this->input->post('tanggal1').' sampai tanggal '.$this->input->post('tanggal2'));
        $sheet->setCellValue('A4', 'Nama Obat');
        $sheet->setCellValue('B4', 'Kategori Obat');
        $sheet->setCellValue('C4', 'Stok');
        $sheet->setCellValue('D4', 'Jumlah transaksi');
        $sheet->setCellValue('E4', 'Harga /pcs');
        $sheet->setCellValue('F4', 'Stok Aktual'); 
        $sheet->setCellValue('G4', 'Saldo');     
        $sheet->setCellValue('H4', 'Tanggal');  
        $sheet->setCellValue('I4', 'Tanggal Kadaluarsa');
        $sheet->setCellValue('J4', 'Status');       
        $sheet->setCellValue('K4', 'Suplier');
        $sheet->setCellValue('L4', 'Total Pembelian');
        $sheet->setCellValue('M4', 'Total Penjualan');
        for ($i = 'A'; $i !=  $spreadsheet->getActiveSheet()->getHighestColumn(); $i++) 
        {
            $spreadsheet->getActiveSheet()->getColumnDimension($i)->setAutoSize(TRUE);
        }                     
        $rows = 5;
        foreach ($data as $val){
            $spreadsheet->getActiveSheet()->getStyle('A'.$rows.':M'.$rows)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('93CAED');
            $sheet->setCellValue('A' . $rows, $val['nama']);
            $sheet->setCellValue('B' . $rows, $val['kategori']);
            $sheet->setCellValue('C' . $rows, $val['stok']);
            $sheet->setCellValue('D' . $rows, $val['jumlah']);
            $sheet->setCellValue('E' . $rows, $val['harga']);
            $sheet->setCellValue('F' . $rows, $val['stokaktual']); 
            $sheet->setCellValue('G' . $rows, $val['saldo']);     
            $sheet->setCellValue('H' . $rows, $val['tgl']);
            $sheet->setCellValue('I' . $rows, $val['tgl_exp']);       
            $sheet->setCellValue('J' . $rows, $val['status']);
            $sheet->setCellValue('K' . $rows, $val['suplier']);
            $sheet->setCellValue('L' . $rows, $val['pembelian']);
            $sheet->setCellValue('M' . $rows, $val['penjualan']);
            
            $rows++;
        } 
        $writer = new Xlsx($spreadsheet);
        $writer->save("upload/".$fileName);
        header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."/upload/".$fileName);


                }else{
                    echo "<script>alert('Silahkan pilih tanggal dengan benar!!');
                    window.location.href='reload2';
                    </script>";
                }
            
        }else{
            echo "<script>alert('Silahkan pilih tanggal!!');
            window.location.href='reload2';
            </script>";
        }
        }else{
            echo "<script>alert('Silahkan pilih tanggal!!');
            window.location.href='reload2';
            </script>";
        }

                      
    }    



    function reload(){
    redirect(base_url("index.php/Admin/penjualan"));

    }


    function reload1(){
    redirect(base_url("index.php/Admin/penjualan"));

    }

    function reload2(){
    redirect(base_url("index.php/Admin/penjualan_pembelian"));

    }

}
?>