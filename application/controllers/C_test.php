<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_test extends CI_Controller {
    public function index() {
        $noInduk = '2010140419';
        $sql = "SELECT * FROM clients WHERE id = ?";
 
        $q = $this->db->conn_id->prepare($sql);
 
        //binding option using PDO
        $q->bindValue(1, 1, PDO::PARAM_INT);
        $q->execute();
        print_r($q->fetch(PDO::FETCH_ASSOC));
    }
}
/* End of file c_test.php */
/* Location: ./application/controllers/c_test.php */