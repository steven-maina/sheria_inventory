<?php

require_once('../database/Database.php');
require_once('../interface/iItem.php');

class Item extends Database implements iItem{
	public function __construct()
	{
		parent:: __construct();
		
	}

	public function insert_item($uN, $sNo, $mNo, $pD, $caID, $coID, $oS, $ramS, $romS, $roomN, $mDesc){ 
		$sql = "INSERT INTO tbl_item(
		username,
		item_serno,
		 item_modno,
		 item_purdate,
		 cat_id,
		 con_id,
		 o_s, 
		ram_size,
		rom_size, 
		 room_no,
			more_description)
				VALUES(?,?,?,?,?,?,?,?,?,?,?);
		";
		
		$result = $this->insertRow($sql, [$uN, $sNo, $mNo, $pD, $caID, $coID, $oS, $ramS, $romS, $roomN, $mDesc]);

	echo ($result);
		return $result;
	
	}


	public function update_item($uN, $sNo, $mNo, $pD, $caID, $coID, $oS, $ramS, $romS, $roomN, $mDesc, $iID)
	{	
		$sql="UPDATE tbl_item
			  SET 
			  username, 
		item_serno =?,
		 item_modno =?, 
		 room_no=?,
		  item_purdate =?,
		   emp_id =?,
		    cat_id =?, 
			con_id =?,
			ram_size =?,
			rom_size =?,
			o_s =?,
			more_description=?
			  WHERE item_id = ?
		";
		$result = $this->updateRow($sql, [$uN, $sNo, $mNo, $pD, $caID, $coID, $oS, $ramS, $romS, $roomN, $mDesc, $iID]);
		return $result;
	}

	public function get_item($id)
	{
		$sql="SELECT *
			  FROM tbl_item i
			  INNER JOIN tbl_employee e
			  ON i.emp_id = e.emp_id
			  INNER JOIN tbl_off o
			  ON e.off_id = o.off_id
			  INNER JOIN tbl_con c 
			  ON c.con_id = i.con_id
			  INNER JOIN tbl_cat ca
			  ON ca.cat_id = i.cat_id
			  WHERE i.item_id = ?
		";
		$result = $this->getRow($sql, [$id]);
		return $result;
	}

	public function get_all_items()
	{
		/*get all items with the office nga naa sa emp*/
		$sql = "SELECT *
				FROM tbl_item i
				INNER JOIN tbl_employee e
				ON i.emp_id = e.emp_id
				INNER JOIN tbl_off o
				ON e.off_id = o.off_id
				INNER JOIN tbl_con c 
				ON c.con_id = i.con_id
				INNER JOIN tbl_cat ca
				ON ca.cat_id = i.cat_id
				ORDER by i.item_modno
		";
		$result = $this->getRows($sql);
		return $result;
	}

	public function item_categories()
	{
		$sql = "SELECT * FROM tbl_cat";
		return $this->getRows($sql);
	}

	public function item_conditions()
	{
		$sql = "SELECT * FROM tbl_con";
		return $this->getRows($sql);
	}


	public function item_report($choice)
	{
		$sql = "";
		if($choice == 'all'){
			$sql = "SELECT *
					FROM tbl_item i 
					INNER JOIN tbl_employee e 
					ON i.emp_id = e.emp_id
					INNER JOIN tbl_cat c 
					ON i.cat_id = c.cat_id
					INNER JOIN tbl_con co 
					ON i.con_id = co.con_id
					INNER JOIN tbl_off o 
					ON o.off_id = e.off_id";
			return $this->getRows($sql);
		}else if($choice == 'working'){
			$sql = "SELECT *
					FROM tbl_item i 
					INNER JOIN tbl_employee e 
					ON i.emp_id = e.emp_id
					INNER JOIN tbl_cat c 
					ON i.cat_id = c.cat_id
					INNER JOIN tbl_con co 
					ON i.con_id = co.con_id
					INNER JOIN tbl_off o 
					ON o.off_id = e.off_id
					WHERE i.con_id = ?";
			return $this->getRows($sql, [1]);
		}else if($choice == 'spoiled'){
			//condemed
			$sql = "SELECT *
					FROM tbl_item i 
					INNER JOIN tbl_employee e 
					ON i.emp_id = e.emp_id
					INNER JOIN tbl_cat c 
					ON i.cat_id = c.cat_id
					INNER JOIN tbl_con co 
					ON i.con_id = co.con_id
					INNER JOIN tbl_off o 
					ON o.off_id = e.off_id
					WHERE i.con_id = ?
					ORDER BY i.item_modno ASC";
			return $this->getRows($sql, [2]);
		}else{
			//not being used
			$sql = "SELECT *
					FROM tbl_item i 
					INNER JOIN tbl_employee e 
					ON i.emp_id = e.emp_id
					INNER JOIN tbl_cat c 
					ON i.cat_id = c.cat_id
					INNER JOIN tbl_con co 
					ON i.con_id = co.con_id
					INNER JOIN tbl_off o 
					ON o.off_id = e.off_id
					WHERE i.con_id = ?
					ORDER BY i.item_modno ASC";
			return $this->getRows($sql, [3]);

		}
	}//end item_report
}

$item = new Item();

/* End of file Item.php */
/* Location: .//D/xampp/htdocs/deped/class/Item.php */

