<?php
	App::import('Vendor','TCPDF', array('file' => 'tcpdf/tcpdf.php'));
	
	class PdfHelper extends AppHelper{
    var $core;
 
    function PdfHelper() {
        $this->core = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    }
	}
?>