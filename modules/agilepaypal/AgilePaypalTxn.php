<?php /*
///-build_id: 2015013020.5255
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/store/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///
*/
${"\x47L\x4f\x42AL\x53"}["\x66\x6b\x6d\x71\x73\x65\x64"]="p\x61\x79pa\x6c_\x74\x78n";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x64\x68\x6dr\x6d\x67\x73v\x73\x65v"]="\x73\x71\x6c";${"\x47\x4c\x4fB\x41\x4cS"}["\x73\x6f\x78\x78\x77\x62\x77j"]="fie\x6c\x64\x73";${"GLO\x42A\x4c\x53"}["\x68ib\x76\x66\x6bm\x72\x78"]="\x69d\x5f\x61\x64d\x72\x65ss";class AgilePaypalTxn extends ObjectModel{public$id_carrier;public$remark;public$paypal_txn;public$id_cart;public$id_order;public$subscr_id;public$date_add;protected$fieldsRequired=array('id_cart','id_order','paypal_txn');protected$fieldsSize=array();protected$fieldsValidate=array('id_cart'=>'isUnsignedId','id_order'=>'isUnsignedId');protected$table='agilepaypal_txn';protected$identifier='id_agilepaypal_txn';protected$_includeContainer=false;public	function __construct($id_address=NULL){parent::__construct(${${"G\x4c\x4f\x42ALS"}["hi\x62\x76fk\x6d\x72\x78"]});}public function delete(){return parent::delete();}public function getFields(){${"\x47\x4c\x4fB\x41L\x53"}["s\x77\x6fra\x6fy\x71an"]="f\x69e\x6c\x64\x73";${"G\x4cO\x42A\x4c\x53"}["\x64\x68h\x6a\x68\x6ch\x6e\x74"]="\x66i\x65\x6c\x64\x73";parent::validateFields();if(isset($this->id))${${"\x47\x4c\x4fB\x41\x4cS"}["sw\x6f\x72\x61\x6f\x79\x71\x61\x6e"]}["\x69\x64\x5fa\x67ilepa\x79\x70\x61\x6c\x5ftx\x6e"]=intval($this->id);${${"\x47L\x4f\x42A\x4c\x53"}["s\x6f\x78\x78\x77bw\x6a"]}["i\x64_car\x74"]=intval($this->id_cart);${${"\x47\x4cOBALS"}["\x73\x6f\x78\x78wb\x77\x6a"]}["id_o\x72\x64er"]=intval($this->id_order);${${"G\x4c\x4fBAL\x53"}["\x73o\x78\x78w\x62w\x6a"]}["pa\x79pal_\x74\x78n"]=pSQL($this->paypal_txn);${${"\x47\x4c\x4fB\x41L\x53"}["d\x68\x68\x6a\x68\x6c\x68\x6e\x74"]}["s\x75b\x73\x63\x72\x5f\x69\x64"]=pSQL($this->subscr_id);${${"\x47\x4c\x4f\x42\x41LS"}["\x73\x6fx\x78\x77b\x77j"]}["\x72\x65ma\x72\x6b"]=pSQL($this->remark);${${"G\x4c\x4f\x42\x41\x4c\x53"}["\x73ox\x78wbwj"]}["d\x61\x74\x65_a\x64\x64"]=pSQL($this->date_add);return${${"GLO\x42\x41\x4c\x53"}["\x73o\x78\x78\x77b\x77j"]};}public static function search($subscr_id,$paypal_txn=NULL){$hmrhkiu="\x73\x71l";${"GLO\x42\x41\x4c\x53"}["\x64\x62dv\x72uo"]="\x72\x65\x73\x75\x6c\x74";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["mj\x75\x69ju\x76"]="\x73\x71\x6c";${"\x47\x4c\x4fB\x41LS"}["\x67\x6eg\x7at\x62\x72\x74or\x6a"]="s\x75bsc\x72_\x69d";${"G\x4c\x4f\x42\x41L\x53"}["\x77\x64\x72i\x6f\x6c\x75\x74"]="r\x65\x73\x75l\x74";${"\x47L\x4f\x42\x41LS"}["s\x77\x6d\x70mp\x68c\x6c\x66"]="s\x71\x6c";$icxwqpcq="\x73\x71\x6c";${"G\x4cO\x42\x41\x4c\x53"}["h\x6cz\x75\x70r\x69"]="\x70ayp\x61\x6c\x5f\x74\x78\x6e";${${"\x47\x4c\x4f\x42\x41\x4cS"}["d\x68\x6d\x72mg\x73vs\x65\x76"]}="S\x45\x4c\x45\x43\x54\x20* FR\x4f\x4d \x20`"._DB_PREFIX_."\x61\x67\x69\x6c\x65\x70\x61y\x70\x61l\x5ft\x78n\x60\x20W\x48\x45R\x45\x20\x73u\x62s\x63r\x5f\x69d=\x27".${${"G\x4c\x4f\x42ALS"}["\x67\x6e\x67\x7at\x62r\x74o\x72\x6a"]}."\x27";$ohosiyiniyk="\x70\x61y\x70\x61l_\x74x\x6e";if(isset(${${"G\x4c\x4f\x42\x41\x4cS"}["\x68\x6c\x7a\x75\x70\x72i"]})AND!empty(${${"\x47\x4c\x4f\x42AL\x53"}["f\x6b\x6dq\x73e\x64"]}))${$icxwqpcq}=${${"\x47LO\x42\x41LS"}["\x64h\x6d\x72m\x67\x73v\x73e\x76"]}." AND\x20payp\x61\x6c\x5ft\x78n\x3d\x27".${$ohosiyiniyk}."'";${${"\x47LO\x42\x41L\x53"}["\x73\x77\x6d\x70\x6d\x70hc\x6c\x66"]}=${${"\x47LOB\x41\x4c\x53"}["\x6dj\x75\x69j\x75v"]}."\x20\x4cI\x4dIT\x200,\x31";${${"G\x4c\x4f\x42\x41\x4cS"}["\x77d\x72\x69\x6f\x6c\x75\x74"]}=Db::getInstance()->ExecuteS(${$hmrhkiu});return${${"\x47\x4c\x4fB\x41\x4c\x53"}["d\x62d\x76\x72\x75\x6f"]};}}
?>