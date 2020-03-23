<?php
   class Template {
     protected $_ci;
	function __construct() {
	$this->_ci = &get_instance(); 		
	}
   function views($template = NULL, $data = NULL) {
	if ($template != NULL) {
	// Bagian $data['head'] untuk memanggil file head.php dari folder admin/partial/
        // ['head'] data yang kita panggil dari file template.php dari folder admin/partial/
	$data['head'] = $this->_ci->load->view('admin/partial/head', $data, TRUE);
        
        // Bagian $data['topbar'] untuk memanggil file topbar.php dari folder admin/partial/
        // ['topbar'] data yang kita panggil dari file template.php dari folder admin/partial/
	$data['topbar'] = $this->_ci->load->view('admin/partial/topbar', $data, TRUE);

        // Bagian $data['sidebar'] untuk memanggil file sidebar.php dari folder admin/partial/
        // ['sidebae'] data yang kita panggil dari file template.php dari folder admin/partial/
	$data['sidebar'] = $this->_ci->load->view('admin/partial/sidebar', $data, TRUE);
	
        // Bagian $data['content'] untuk memanggil file content.php dari folder admin/partial/
        // ['content'] data yang kita panggil dari file template.php dari folder admin/partial/
	$data['content'] = $this->_ci->load->view('admin/partial/content', $data, TRUE);
	
        // Bagian $data['footer'] untuk memanggil file footer.php dari folder admin/partial/
        // ['footer'] data yang kita panggil dari file template.php dari folder admin/partial/
	$data['footer'] = $this->_ci->load->view('admin/partial/footer', $data, TRUE);
	
        // Bagian $data['js'] untuk memanggil file js.php dari folder admin/partial/
        // ['js'] data yang kita panggil dari file js.php dari folder admin/partial/
	$data['js'] = $this->_ci->load->view('admin/partial/js', $data, TRUE);
         
        // Bagian $data['template'] untuk menampilkan file template.php dari folder admin/partial/
        // view('admin/partial/Template', $data, TRUE); untuk memanggil $data diatas seperti $data['head'], dll
        echo $data['Template'] 		= $this->_ci->load->view('admin/partial/Template', $data, TRUE);
       }
    }
}
?>
