<?php 
interface iItem{
	public function insert_item($uN, $sNo, $mNo, $pD, $caID, $coID, $oS, $ramS, $romS, $roomN, $mDesc);
	public function update_item($uN, $sNo, $mNo, $pD, $caID, $coID, $oS, $ramS, $romS, $roomN, $mDesc, $iID);
	public function get_item($id);
	public function get_all_items();
	public function item_categories();
	public function item_conditions();
	public function item_report($choice);
}


