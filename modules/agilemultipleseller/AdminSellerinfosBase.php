<?php /*
///-build_id: 2015031920.2559
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/store/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///
*/
${"\x47\x4c\x4fBA\x4cS"}["\x66\x74vy\x61\x72\x72\x6f\x65"]="\x6d\x6f\x64\x75l\x65";${"\x47\x4cO\x42\x41\x4cS"}["b\x6c\x6f\x69\x78\x75\x7a"]="l\x6fg\x6f\x5f\x66\x6fl\x64e\x72";${"G\x4c\x4f\x42A\x4cS"}["\x6f\x7a\x66\x67\x72\x6e\x78\x6e"]="\x6fbj\x65\x63\x74";${"\x47L\x4fB\x41\x4c\x53"}["\x66\x61\x70\x64\x74\x70"]="\x63\x6f\x75\x6e\x74\x72\x79";include_once(dirname(__FILE__)."/agi\x6cem\x75\x6ctipl\x65\x73\x65l\x6ce\x72.\x70h\x70");include_once(dirname(__FILE__)."/S\x65lle\x72I\x6ef\x6f\x2ephp");if(Module::isInstalled("ag\x69\x6ce\x6dult\x69\x70\x6ce\x73\x68o\x70")){include_once(dirname(__FILE__)."/../\x61gi\x6cem\x75lt\x69\x70le\x73h\x6f\x70/S\x65l\x6ce\x72\x54y\x70\x65\x2ep\x68p");}class AdminSellerinfosBase extends ModuleAdminController{protected$position_identifier='id_sellerinfo';protected$link;public function __construct(){$this->table="s\x65\x6c\x6c\x65\x72inf\x6f";$this->identifier="i\x64_se\x6cler\x69nfo";$this->className="S\x65\x6c\x6ce\x72Info";$this->lang=false;$this->bulk_actions=array();parent::__construct();}public function initToolbar(){parent::initToolbar();unset($this->toolbar_btn["n\x65w"]);}public function processSave(){$jlvgbvqxiei="cou\x6e\x74\x72\x79";${$jlvgbvqxiei}=new Country((int)$_POST["\x69d\x5fco\x75\x6etr\x79"]);if(Validate::isLoadedObject(${${"G\x4c\x4fB\x41L\x53"}["\x66a\x70dtp"]})&&!$country->contains_states)$_POST["i\x64_\x73t\x61te"]=0;if(Tools::isSubmit("s\x75b\x6di\x74A\x64ds\x65\x6cl\x65\x72\x69n\x66o")){if(!isset($_POST["\x65m\x61il"])OR empty($_POST["\x65m\x61i\x6c"]))$this->errors[]=Tools::displayError("\x46ront\x20\x73\x74\x6f\x72\x65 a\x63co\x75\x6e\x74\x20\x65ma\x69l\x20is \x72\x65qu\x69\x72\x65\x64.");if(!isset($_POST["\x73\x65l\x6c\x65\x72\x5f\x65\x6d\x70\x6co\x79e\x65\x5f\x65mai\x6c"])OR empty($_POST["s\x65\x6cle\x72\x5fe\x6dpl\x6f\x79\x65e_\x65\x6dai\x6c"]))$this->errors[]=Tools::displayError("\x42a\x63\x6b o\x66\x66\x69ce\x20ac\x63\x6f\x75\x6e\x74\x20em\x61\x69l\x20\x69\x73 \x72e\x71u\x69re\x64.");}if(!empty($this->errors)){$this->redirect_after=false;return false;}parent::processSave();}protected function afterAdd($object){$this->processLogoUpload(${${"G\x4c\x4fB\x41\x4c\x53"}["\x6f\x7a\x66\x67r\x6e\x78\x6e"]});return true;}protected function afterUpdate($object){${"G\x4c\x4fBALS"}["\x77\x78\x61\x67\x77\x65"]="\x6fb\x6a\x65ct";$this->processLogoUpload(${${"\x47\x4c\x4f\x42\x41LS"}["w\x78\x61\x67\x77e"]});return true;}public function processLogoUpload($sellerInfo){$bjgxat="\x6c\x6fgo_\x66ol\x64e\x72";$cldhxdkxsql="se\x6c\x6c\x65\x72I\x6e\x66\x6f";if(!Validate::isLoadedObject(${$cldhxdkxsql}))return;${$bjgxat}=SellerInfo::get_logo_folder();if(!empty($_FILES["\x6c\x6f\x67\x6f"]["\x6e\x61\x6d\x65"])){${"GL\x4f\x42\x41\x4c\x53"}["iq\x68ft\x74\x69\x6a\x61\x66hx"]="\x66il\x65\x6e\x61m\x65";$peuwuuwuavs="\x66i\x6cenam\x65";${$peuwuuwuavs}=${${"\x47\x4cO\x42A\x4c\x53"}["\x62\x6c\x6f\x69\x78\x75z"]}.$sellerInfo->id.".\x6apg";if(!move_uploaded_file($_FILES["\x6c\x6f\x67o"]["tm\x70\x5fname"],${${"\x47L\x4fB\x41\x4c\x53"}["\x69q\x68\x66t\x74\x69\x6a\x61\x66\x68\x78"]})){};}}public function initContent(){if($this->action=="\x73el\x65\x63\x74\x5fd\x65\x6c\x65\x74e")$this->context->smarty->assign(array("\x64\x65\x6ce\x74e\x5f\x66o\x72\x6d"=>true,"\x75\x72l\x5fd\x65\x6ce\x74\x65"=>htmlentities($_SERVER["\x52E\x51U\x45\x53T\x5f\x55\x52\x49"]),"\x62\x6fx\x65\x73"=>$this->boxes,));if(Module::isInstalled("\x61g\x69le\x6dulti\x70\x6c\x65s\x65\x6c\x6c\x65\x72")){include_once(_PS_ROOT_DIR_."/m\x6f\x64ules/\x61\x67\x69\x6cem\x75l\x74\x69pl\x65\x73\x65lle\x72/ag\x69\x6cemu\x6ctip\x6c\x65s\x65\x6cl\x65r.\x70hp");${${"G\x4cO\x42\x41L\x53"}["f\x74\x76y\x61\x72roe"]}=new AgileMultipleSeller();$this->displayWarning($module->getL("\x48o\x77\x20\x54o C\x72\x65a\x74e\x20S\x65\x6cle\x72 \x48\x69nt"));}parent::initContent();}}
?>