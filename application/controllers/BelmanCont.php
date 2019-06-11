<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BelmanCont extends CI_Controller {

    public function __construct()
    {
		parent::__construct();
		//$this->load->helper('date','url','form');
		//$this->load->library('form_validation');
		$this->load->model('belman');
    }

    public function index()
    {
        $li=0;
        while ( $li < 9)
        {
            $res=$this->belman->banding();
            $i=0;
            foreach ($res as $key)
            {
                $row = $res[$i];
                $nilai=$row->nilai;
                $jarak=$row->jarak;
                $asal=$row->asal;
                $ket=$row->ket;
                $id=$row->id;

                $asalres=$this->belman->getasal($asal);
                $row = $asalres[0];
                $nilaiasal=$row->nilai;
                $ketasal=$row->ket;

                if($ketasal!=0||$nilaiasal>0)
                {
                    $nilaibaru=$nilaiasal+$jarak;

                    if ($nilaibaru<$nilai||$nilai<1)
                    {
                        $this->belman->editvalue($id,$nilaibaru);
                    }
                }
                $i++;
            }
            $li++;
        }
    }
}
?>
