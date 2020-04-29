<?php

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         spriganx
 * @category        company-profile
 * @author          Burhan Mafazi | burhanmafazi@gmail.com
 * @link            https://burhanmafazi.xyz
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Visitor extends CI_Model 
{
	public function visitors()
	{
        $query = $this->db->query("SELECT DATE_FORMAT(visit,'%d') AS access, COUNT(ip) AS ip FROM visitors WHERE MONTH(visit) = MONTH(CURDATE()) GROUP BY DATE(visit)");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $result[] = $data;
            }

            return $result;
        }
    }
}