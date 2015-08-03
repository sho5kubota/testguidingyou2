<?php
/*
///-build_id: 2015031920.2559
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/store/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///
*/
${"GLOBALS"}["hucfeetehe"]            = "key";
${"GLOBALS"}["tupdle"]             = "specific_price_priorities";
${"GLOBALS"}["ojfggiuyn"]          = "fixed_price";
${"GLOBALS"}["qeyondtkko"]         = "currencies";
${"GLOBALS"}["judupfn"]                  = "price";
${"GLOBALS"}["valsyupb"]              = "customer_full_name";
${"GLOBALS"}["mcehpjcdvu"]         = "customer";
${"GLOBALS"}["qwfludjdg"]       = "rule_name";
${"GLOBALS"}["dkpnrhqmdel"]  = "attributes_name";
${"GLOBALS"}["nmduzbby"]           = "attribute";
${"GLOBALS"}["tecppiwmy"]             = "attributes";
${"GLOBALS"}["zcpltzs"]                  = "period";
${"GLOBALS"}["lbhedgts"]           = "current_specific_currency";
${"GLOBALS"}["uaxmvunoy"]          = "impact";
${"GLOBALS"}["oudwfbvcvoj"]                 = "specific_price";
${"GLOBALS"}["eqiehjn"]                  = "i";
${"GLOBALS"}["oxbcew"]                      = "group";
${"GLOBALS"}["myyouyoez"]             = "groups";
${"GLOBALS"}["kroabu"]                      = "countries";
${"GLOBALS"}["dtehljxk"]                    = "country";
${"GLOBALS"}["qwffcfylwvlg"] = "currency";
${"GLOBALS"}["lazfnitt"]                 = "shops";
${"GLOBALS"}["bdtyklee"]        = "tmp";
${"GLOBALS"}["ixsaqwcye"]                   = "specific_prices";
${"GLOBALS"}["nkvjzc"]                = "content";
include_once(_PS_ROOT_DIR_ . "/modules/agilemultipleseller/controllers/front/sellerproductdetailbase.php");
class AgileMultipleSellerSellerProductDetailModuleFrontController extends AgileMultipleSellerSellerProductDetailModuleFrontControllerBase
{
    public function __construct()
    {
        parent::__construct();
        $this->product_menus[] = array(
            "id" => 1,
            "name" => $this->l('1. Information')
        );
        $this->product_menus[] = array(
            "id" => 2,
            "name" => $this->l('2. Images')
        );
        $this->product_menus[] = array(
            "id" => 3,
            "name" => $this->l('3. Features')
        );
        $this->product_menus[] = array(
            "id" => 4,
            "name" => $this->l('4. Associations')
        );
        $this->product_menus[] = array(
            "id" => 5,
            "name" => $this->l('5. Prices(Discounts)')
        );
        $this->product_menus[] = array(
            "id" => 6,
            "name" => $this->l('6. Quantity(Stock)')
        );
        $this->product_menus[] = array(
            "id" => 7,
            "name" => $this->l('7. Combinations')
        );
        $this->product_menus[] = array(
            "id" => 8,
            "name" => $this->l('8. Virtual Product')
        );
        $this->product_menus[] = array(
            "id" => 9,
            "name" => $this->l('9. Shipping')
        );
        $this->product_menus[] = array(
            "id" => 10,
            "name" => $this->l('10. Attachments')
        );
        $this->table           = "product";
        $this->identifier      = "id_product";
        $this->className       = "Product";
    }
    protected function _displaySpecificPriceModificationForm($defaultCurrency, $shops, $currencies, $countries, $groups)
    {
        $lpdesmvcrvu                                                       = "\x73p\x65\x63\x69\x66\x69\x63\x5f\x70\x72\x69c\x65\x5fp\x72i\x6f\x72\x69\x74ie\x73";
        ${"\x47\x4c\x4fBA\x4c\x53"}["\x67\x77\x76\x6cvn\x68g\x66"]         = "g\x72\x6f\x75\x70";
        $plkmtiqjex                                                        = "\x73pe\x63\x69\x66\x69c_p\x72\x69ce\x5f\x70\x72\x69\x6f\x72\x69t\x69e\x73";
        ${"\x47L\x4f\x42\x41\x4cS"}["\x65\x72t\x62\x68\x71\x71\x77a\x76l"] = "t\x6d\x70";
        ${"\x47\x4c\x4f\x42\x41\x4cS"}["gl\x79bi\x79\x62\x72\x6amv"]       = "\x67\x72\x6fu\x70";
        ${"GL\x4f\x42ALS"}["\x6e\x69hfj\x6e"]                              = "\x74m\x70";
        $ivhgohevles                                                       = "\x74\x61\x78R\x61te";
        ${${"\x47L\x4f\x42A\x4c\x53"}["\x6e\x6bv\x6az\x63"]}               = "";
        ${"GL\x4f\x42\x41\x4c\x53"}["\x75\x6b\x61n\x73\x73\x79"]           = "\x63\x75rr\x65n\x63i\x65\x73";
        if (!$this->object)
            return;
        ${"\x47\x4c\x4f\x42\x41\x4cS"}["\x74\x66\x75\x66\x77\x75\x71\x6e\x62\x67\x78c"] = "\x74mp";
        ${${"\x47\x4c\x4f\x42A\x4c\x53"}["\x69x\x73\x61\x71w\x63ye"]}                   = SpecificPrice::getByProductId((int) $this->object->id);
        $rarsexno                                                                       = "\x73\x68o\x70";
        $vrcmtksat                                                                      = "\x73\x68op";
        $gedaion                                                                        = "\x73p\x65\x63\x69\x66i\x63_pr\x69\x63\x65_\x70r\x69\x6fri\x74ie\x73";
        ${"G\x4c\x4f\x42AL\x53"}["\x78srb\x77sm"]                                       = "s\x68o\x70s";
        ${$lpdesmvcrvu}                                                                 = SpecificPrice::getPriority((int) $this->object->id);
        ${$ivhgohevles}                                                                 = $this->object->getTaxesRate(Address::initialize());
        $uhzkmfbqi                                                                      = "\x73\x68\x6f\x70";
        $ahuedic                                                                        = "s\x70ec\x69fic\x5fp\x72\x69c\x65\x5f\x70\x72\x69\x6f\x72\x69t\x69e\x73";
        ${${"\x47\x4c\x4fBA\x4c\x53"}["\x62dt\x79\x6bl\x65\x65"]}                       = array();
        foreach (${${"\x47L\x4fB\x41LS"}["\x78\x73\x72\x62\x77s\x6d"]} as ${$uhzkmfbqi})
            ${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x62\x64t\x79\x6b\x6c\x65\x65"]}[${$rarsexno}["\x69d\x5f\x73\x68o\x70"]] = ${$vrcmtksat};
        $rbdspr                                                = "\x63\x75\x72\x72e\x6e\x63\x69\x65\x73";
        ${"\x47\x4c\x4fBA\x4c\x53"}["rui\x75biw\x79"]          = "\x63\x6f\x75\x6et\x72\x69\x65\x73";
        $nyuyhmkcene                                           = "co\x6et\x65\x6et";
        ${${"\x47\x4c\x4f\x42\x41L\x53"}["la\x7a\x66\x6eitt"]} = ${${"\x47\x4c\x4fB\x41\x4c\x53"}["\x62\x64\x74\x79\x6b\x6c\x65\x65"]};
        $hcdvvpbef                                             = "t\x6d\x70";
        $wdrtujtw                                              = "\x63ur\x72\x65\x6ecy";
        ${${"\x47\x4cOB\x41L\x53"}["\x6e\x69\x68\x66j\x6e"]}   = array();
        foreach (${$rbdspr} as ${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x71\x77\x66fc\x66\x79\x6c\x77v\x6c\x67"]})
            ${${"G\x4c\x4f\x42\x41L\x53"}["\x62\x64\x74\x79\x6ble\x65"]}[${$wdrtujtw}["i\x64_\x63ur\x72\x65\x6e\x63y"]] = ${${"\x47\x4c\x4f\x42A\x4c\x53"}["\x71wf\x66\x63\x66yl\x77\x76lg"]};
        ${${"G\x4cO\x42\x41L\x53"}["\x75ka\x6ess\x79"]}                           = ${${"G\x4c\x4f\x42\x41\x4cS"}["e\x72\x74\x62hqq\x77\x61\x76\x6c"]};
        ${${"\x47LO\x42\x41\x4c\x53"}["\x74\x66\x75\x66\x77\x75\x71nbg\x78\x63"]} = array();
        foreach (${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x72\x75i\x75\x62i\x77\x79"]} as ${${"G\x4c\x4f\x42ALS"}["\x64\x74e\x68l\x6a\x78\x6b"]})
            ${${"G\x4c\x4fB\x41\x4cS"}["bdty\x6bl\x65e"]}[${${"GLOB\x41\x4cS"}["\x64\x74ehl\x6a\x78\x6b"]}["i\x64\x5fcoun\x74r\x79"]] = ${${"GL\x4f\x42A\x4c\x53"}["dte\x68\x6c\x6a\x78k"]};
        $tclsxk                                  = "\x73\x70e\x63\x69\x66i\x63\x5f\x70r\x69\x63\x65_\x70\x72\x69\x6f\x72i\x74i\x65\x73";
        ${${"\x47LO\x42A\x4cS"}["\x6broab\x75"]} = ${${"\x47\x4c\x4fB\x41\x4c\x53"}["b\x64\x74\x79k\x6c\x65e"]};
        ${$hcdvvpbef}                            = array();
        foreach (${${"G\x4cO\x42ALS"}["\x6dyy\x6f\x75\x79\x6f\x65z"]} as ${${"\x47\x4c\x4fBA\x4c\x53"}["\x67w\x76l\x76\x6e\x68g\x66"]})
            ${${"\x47L\x4f\x42\x41\x4c\x53"}["\x62\x64\x74\x79\x6bl\x65e"]}[${${"\x47L\x4f\x42\x41LS"}["\x6f\x78bc\x65w"]}["\x69\x64_g\x72\x6fup"]] = ${${"GL\x4fB\x41\x4cS"}["\x67\x6c\x79\x62\x69\x79b\x72j\x6dv"]};
        ${"\x47\x4c\x4fB\x41\x4c\x53"}["\x63\x70\x74\x78p\x77q\x73g\x7ao"] = "c\x6f\x6e\x74e\x6e\x74";
        ${${"\x47L\x4f\x42\x41\x4c\x53"}["my\x79\x6f\x75\x79oe\x7a"]}      = ${${"G\x4c\x4fB\x41\x4c\x53"}["\x62\x64\x74\x79\x6b\x6cee"]};
        if (!is_array(${${"\x47LO\x42ALS"}["i\x78sa\x71w\x63\x79\x65"]}) || !count(${${"\x47\x4c\x4f\x42AL\x53"}["i\x78\x73\x61\x71\x77\x63y\x65"]}))
            ${${"G\x4c\x4f\x42A\x4c\x53"}["n\x6bvj\x7a\x63"]} .= "\n\t\t\t\t<\x74r>\n\t\t\t\t\t\x3ctd \x63ol\x73p\x61n\x3d\x22\x313\x22>" . $this->l('No specific prices') . "</\x74d>\n\t\t\t\t\x3c/tr\x3e";
        else {
            ${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x69\x78\x76r\x65qo"] = "\x73\x70\x65ci\x66\x69\x63\x5fp\x72\x69\x63\x65s";
            ${${"\x47\x4cOBA\x4c\x53"}["e\x71i\x65\x68\x6a\x6e"]}    = 0;
            ${"\x47\x4cO\x42\x41\x4c\x53"}["\x78\x77j\x70\x6f\x6b"]  = "s\x70\x65c\x69fic_\x70r\x69c\x65";
            foreach (${${"\x47L\x4fB\x41L\x53"}["ixvr\x65\x71\x6f"]} as ${${"\x47\x4c\x4fB\x41\x4cS"}["\x78\x77\x6a\x70\x6f\x6b"]}) {
                ${"\x47\x4cOBA\x4cS"}["\x6ag\x6b\x6f\x65\x6edj\x6c\x70\x74"]         = "\x73\x70\x65\x63\x69\x66i\x63_p\x72\x69c\x65";
                $sdpwvfzmwy                                                          = "\x63u\x72\x72e\x6e\x74\x5f\x73\x70\x65c\x69fi\x63\x5f\x63\x75r\x72\x65\x6e\x63\x79";
                ${"\x47\x4cOBA\x4cS"}["\x64\x72ap\x78\x71\x6bxj\x66\x77"]            = "\x63\x75\x73\x74\x6fme\x72\x5f\x66\x75\x6c\x6c\x5f\x6e\x61\x6d\x65";
                ${"G\x4c\x4f\x42\x41\x4cS"}["w\x72ef\x62rz"]                         = "s\x70e\x63\x69\x66i\x63_\x70r\x69\x63\x65";
                $ywnqxjizw                                                           = "\x69\x6d\x70\x61\x63\x74";
                $pmhlqxsivhg                                                         = "\x63\x75\x72\x72e\x6e\x63\x69\x65s";
                ${"\x47\x4c\x4f\x42\x41LS"}["\x6c\x6e\x71b\x70\x76\x78\x78\x75\x77"] = "\x69";
                $qndkwpcllv                                                          = "\x73p\x65\x63\x69fi\x63\x5f\x70\x72\x69\x63\x65";
                ${"\x47\x4c\x4fB\x41\x4c\x53"}["cf\x62v\x6a\x7a\x6a\x66\x7a"]        = "\x73\x70\x65\x63\x69\x66i\x63_\x70\x72\x69c\x65";
                ${"G\x4cO\x42\x41L\x53"}["\x68y\x69\x6ae\x64\x6cr\x65\x6f"]          = "\x73\x70e\x63\x69\x66ic\x5f\x70\x72\x69\x63e";
                ${"\x47L\x4f\x42\x41\x4cS"}["b\x64\x6e\x76me\x64\x70\x6c\x6c\x77"]   = "\x63us\x74\x6f\x6d\x65r_\x66u\x6cl_\x6e\x61\x6d\x65";
                ${"\x47L\x4fBA\x4c\x53"}["\x79on\x78\x78\x67gu\x76\x79c"]            = "s\x68\x6f\x70\x73";
                ${"G\x4cO\x42\x41\x4cS"}["\x62\x72\x70\x6b\x69\x71jc\x74\x7a"]       = "\x73\x70e\x63\x69f\x69c_\x70ri\x63e";
                ${"\x47\x4cO\x42AL\x53"}["\x63ub\x69ilo"]                            = "c\x75\x73\x74\x6f\x6de\x72\x5ff\x75l\x6c\x5f\x6e\x61m\x65";
                $msgvsejfwpg                                                         = "\x73\x70e\x63\x69f\x69\x63\x5f\x70\x72\x69\x63e";
                ${"\x47LOB\x41L\x53"}["\x69\x68\x78\x72y\x78\x64\x79\x70i"]          = "\x67r\x6f\x75\x70\x73";
                $frcvwum                                                             = "r\x75le";
                $fpsxqukp                                                            = "pr\x69\x63\x65";
                ${"\x47\x4cOBA\x4c\x53"}["\x75cfg\x69\x77\x64\x62\x66\x76\x67\x65"]  = "per\x69\x6f\x64";
                ${"\x47\x4c\x4f\x42A\x4c\x53"}["\x70\x6a\x69g\x6c\x61\x64sg"]        = "\x66\x69\x78\x65\x64\x5f\x70\x72i\x63\x65";
                ${"\x47\x4c\x4f\x42\x41L\x53"}["\x71\x72cs\x79n\x61"]                = "s\x70e\x63\x69\x66\x69c\x5fp\x72\x69\x63e";
                $nwumqlplzzwc                                                        = "\x73\x70\x65\x63\x69\x66i\x63_\x70rice";
                $tihycjulltff                                                        = "\x69\x6d\x70\x61c\x74";
                ${$sdpwvfzmwy}                                                       = ${$pmhlqxsivhg}[(${${"G\x4c\x4f\x42\x41LS"}["\x6fudw\x66\x62\x76c\x76\x6f\x6a"]}["id\x5f\x63\x75\x72\x72e\x6e\x63\x79"] ? ${${"\x47\x4c\x4fBA\x4c\x53"}["\x63\x66b\x76j\x7a\x6afz"]}["\x69d_c\x75\x72\x72e\x6ecy"] : $defaultCurrency->id)];
                ${"GL\x4fB\x41\x4c\x53"}["\x77xttw\x6e\x73gf"]                       = "\x73\x70\x65\x63i\x66\x69c\x5f\x70\x72\x69c\x65";
                if (${${"G\x4c\x4f\x42\x41\x4c\x53"}["\x6f\x75d\x77\x66\x62\x76c\x76\x6f\x6a"]}["re\x64\x75\x63\x74i\x6f\x6e_\x74\x79pe"] == "pe\x72\x63e\x6etage")
                    ${$ywnqxjizw} = "-\x20" . (${${"\x47\x4c\x4f\x42AL\x53"}["\x6f\x75\x64\x77\x66\x62\x76\x63\x76\x6f\x6a"]}["red\x75\x63\x74\x69o\x6e"] * 100) . "\x20%";
                elseif (${${"G\x4c\x4f\x42\x41\x4c\x53"}["\x6f\x75d\x77f\x62\x76\x63\x76o\x6a"]}["\x72\x65duc\x74ion"] > 0)
                    ${${"\x47\x4c\x4fB\x41LS"}["\x75\x61xmv\x75\x6e\x6f\x79"]} = "- " . Tools::displayPrice(Tools::ps_round(${$nwumqlplzzwc}["re\x64\x75\x63\x74io\x6e"], 2), ${${"\x47L\x4fB\x41\x4cS"}["lb\x68e\x64\x67\x74s"]});
                else
                    ${$tihycjulltff} = "--";
                ${"\x47LO\x42\x41\x4c\x53"}["n\x77so\x6f\x72\x6b\x69v"] = "\x69\x6d\x70a\x63t";
                if (${${"G\x4c\x4f\x42A\x4cS"}["\x6ag\x6b\x6fen\x64\x6a\x6cp\x74"]}["f\x72\x6fm"] == "\x3000\x30-\x300-\x30\x30 \x30\x30:0\x30:0\x30" && ${${"G\x4cO\x42\x41LS"}["\x6f\x75\x64wf\x62v\x63\x76\x6f\x6a"]}["t\x6f"] == "\x30\x30\x30\x30-\x300-0\x30\x2000:\x30\x30:\x30\x30")
                    ${${"\x47\x4c\x4fB\x41L\x53"}["\x7a\x63pl\x74\x7as"]} = $this->l('Unlimited');
                else
                    ${${"\x47\x4c\x4f\x42\x41L\x53"}["z\x63pl\x74\x7as"]} = $this->l('From') . " " . (${${"\x47LO\x42\x41\x4c\x53"}["wx\x74\x74w\x6e\x73\x67\x66"]}["\x66ro\x6d"] != "0000-00-\x300 0\x30:0\x30:\x30\x30" ? ${${"G\x4c\x4fB\x41\x4cS"}["ou\x64\x77\x66bv\x63\x76\x6fj"]}["fr\x6fm"] : "\x30000-0\x30-00 0\x30:0\x30:0\x30") . "\x3c\x62\x72\x20/\x3e" . $this->l('To') . "\x20" . (${${"GL\x4fB\x41LS"}["\x6f\x75dw\x66bv\x63voj"]}["\x74o"] != "0\x30\x300-\x30\x30-00\x200\x30:0\x30:0\x30" ? ${${"\x47\x4cO\x42A\x4c\x53"}["\x6f\x75\x64\x77\x66\x62vc\x76o\x6a"]}["\x74o"] : "0\x300\x30-0\x30-\x300\x20\x300:0\x30:\x30\x30");
                if (${${"\x47\x4cO\x42\x41\x4c\x53"}["\x6f\x75dw\x66\x62v\x63\x76\x6f\x6a"]}["id_pr\x6fd\x75\x63\x74_\x61t\x74ri\x62\x75te"]) {
                    ${"\x47\x4c\x4f\x42\x41\x4cS"}["\x79\x73y\x79\x62wj\x74l\x6el\x72"]                = "a\x74\x74\x72\x69b\x75\x74\x65\x73_n\x61m\x65";
                    $supdob                                                                            = "\x61t\x74ri\x62\x75\x74es\x5fn\x61me";
                    $nwznli                                                                            = "\x61\x74t\x72\x69\x62\x75t\x65";
                    ${"\x47\x4cO\x42\x41\x4cS"}["\x75\x63o\x76\x77p\x66\x72\x67"]                      = "\x73\x70\x65\x63i\x66\x69\x63_p\x72i\x63e";
                    $ghrcpselphnv                                                                      = "\x63\x6f\x6d\x62i\x6e\x61\x74\x69o\x6e";
                    $gyrrgbrm                                                                          = "\x61\x74\x74\x72\x69\x62\x75t\x65\x73";
                    ${$ghrcpselphnv}                                                                   = new Combination((int) ${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x75\x63o\x76\x77\x70frg"]}["i\x64\x5fpr\x6f\x64\x75ct_at\x74r\x69\x62u\x74\x65"]);
                    ${$gyrrgbrm}                                                                       = $combination->getAttributesName((int) $this->context->language->id);
                    ${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x79\x73y\x79\x62\x77\x6at\x6c\x6e\x6c\x72"]} = "";
                    foreach (${${"G\x4c\x4fBAL\x53"}["\x74\x65c\x70\x70\x69\x77m\x79"]} as ${${"G\x4c\x4fB\x41\x4cS"}["\x6em\x64uzb\x62\x79"]})
                        ${${"\x47\x4c\x4f\x42\x41\x4cS"}["dk\x70\x6erhq\x6dd\x65\x6c"]} .= ${$nwznli}["nam\x65"] . "\x20- ";
                    ${$supdob} = rtrim(${${"GLOBALS"}["\x64\x6b\x70\x6e\x72h\x71\x6d\x64\x65l"]}, "\x20-\x20");
                } else
                    ${${"G\x4cOB\x41L\x53"}["\x64\x6b\x70\x6er\x68\x71\x6d\x64\x65\x6c"]} = $this->l('All combinations');
                $seqiqveynpjq                                           = "s\x70\x65\x63i\x66i\x63\x5f\x70\x72\x69\x63\x65";
                ${$frcvwum}                                             = new SpecificPriceRule((int) ${${"\x47\x4c\x4fBAL\x53"}["o\x75\x64w\x66\x62\x76\x63\x76\x6f\x6a"]}["\x69d_sp\x65c\x69\x66\x69\x63\x5fp\x72ice_\x72\x75\x6c\x65"]);
                ${${"\x47\x4cOB\x41\x4c\x53"}["\x71\x77fl\x75d\x6adg"]} = ($rule->id ? $rule->name : "--");
                if (${${"G\x4c\x4f\x42A\x4c\x53"}["\x6f\x75d\x77\x66b\x76\x63\x76\x6fj"]}["id_\x63u\x73tomer"]) {
                    ${"\x47\x4c\x4fB\x41\x4cS"}["oy\x71ws\x61\x67\x64\x73"]                       = "\x63us\x74\x6f\x6de\x72";
                    $zdwishb                                                                      = "c\x75\x73\x74\x6fm\x65\x72";
                    ${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x6d\x63\x65\x68\x70\x6a\x63\x64v\x75"]} = new Customer((int) ${${"\x47\x4cO\x42A\x4cS"}["o\x75d\x77\x66b\x76\x63v\x6f\x6a"]}["\x69\x64_cus\x74\x6fmer"]);
                    if (Validate::isLoadedObject(${$zdwishb}))
                        ${${"G\x4cO\x42\x41\x4cS"}["\x76\x61\x6c\x73\x79\x75\x70\x62"]} = $customer->firstname . "\x20" . $customer->lastname;
                    unset(${${"\x47LO\x42\x41\x4c\x53"}["\x6f\x79qw\x73\x61\x67d\x73"]});
                }
                ${${"\x47LO\x42\x41LS"}["\x6a\x75du\x70f\x6e"]}               = Tools::ps_round(${$qndkwpcllv}["\x70r\x69\x63\x65"], 2);
                ${${"\x47LO\x42\x41L\x53"}["\x70\x6ai\x67l\x61d\x73\x67"]}    = (${${"\x47\x4cO\x42\x41\x4c\x53"}["\x6au\x64u\x70\x66\x6e"]} == Tools::ps_round($this->object->price, 2) || ${${"\x47\x4cOB\x41\x4cS"}["oud\x77f\x62v\x63\x76\x6f\x6a"]}["pr\x69c\x65"] == -1) ? "--" : Tools::displayPrice(${$fpsxqukp});
                ${"\x47LOB\x41\x4c\x53"}["\x72\x74\x76\x61\x79\x74\x7ab\x73"] = "s\x70e\x63\x69\x66\x69c_\x70\x72\x69\x63\x65";
                ${${"\x47L\x4f\x42\x41\x4c\x53"}["\x6e\x6b\x76\x6a\x7a\x63"]} .= "\n\t\t\t\t<tr\x20" . (${${"\x47\x4c\x4fBAL\x53"}["e\x71\x69e\x68j\x6e"]} % 2 ? "\x63\x6c\x61\x73\x73=\"\x61\x6c\x74\x5f\x72ow\"" : "") . ">\n\t\t\t\t\t<\x74\x64 cl\x61s\x73=\"\x63ell \x62\x6frd\x65r\x22>" . ${${"\x47\x4c\x4f\x42\x41L\x53"}["\x71\x77\x66\x6c\x75d\x6a\x64\x67"]} . "</td\x3e\n\t\t\t\t\t\x3c\x74d \x63la\x73\x73=\x22\x63el\x6c b\x6frde\x72\"\x3e" . ${${"\x47\x4c\x4f\x42A\x4cS"}["dkpn\x72h\x71\x6dd\x65\x6c"]} . "\x3c/td>\n\t\t\t\t\t" . (Shop::isFeatureActive() ? "<td c\x6c\x61\x73\x73=\x22\x63e\x6c\x6c \x62\x6f\x72de\x72\"\x3e" . (${${"\x47\x4c\x4f\x42AL\x53"}["\x72t\x76\x61\x79t\x7ab\x73"]}["\x69d\x5fsh\x6f\x70"] ? ${${"G\x4c\x4fBAL\x53"}["\x79\x6f\x6e\x78\x78g\x67uvyc"]}[${$msgvsejfwpg}["i\x64\x5fsh\x6f\x70"]]["n\x61m\x65"] : $this->l('All shops')) . "\x3c/t\x64\x3e" : "") . "\n\t\t\t\t\t\x3c\x74d\x20clas\x73=\x22cell b\x6f\x72\x64\x65\x72\">" . (${${"\x47LOB\x41\x4c\x53"}["\x6f\x75\x64\x77f\x62\x76\x63\x76\x6f\x6a"]}["i\x64\x5f\x63\x75\x72ren\x63\x79"] ? ${${"\x47\x4c\x4fBA\x4cS"}["q\x65\x79\x6f\x6edtk\x6b\x6f"]}[${$seqiqveynpjq}["i\x64\x5fc\x75rr\x65\x6e\x63\x79"]]["\x6eame"] : $this->l('All currencies')) . "</td\x3e\n\t\t\t\t\t\x3c\x74d\x20c\x6c\x61\x73s=\"ce\x6cl \x62o\x72\x64\x65\x72\">" . (${${"GL\x4f\x42A\x4c\x53"}["oud\x77\x66\x62vc\x76\x6f\x6a"]}["i\x64_\x63\x6f\x75\x6etr\x79"] ? ${${"\x47\x4c\x4f\x42AL\x53"}["k\x72\x6f\x61\x62\x75"]}[${${"\x47\x4c\x4f\x42ALS"}["w\x72\x65\x66\x62\x72\x7a"]}["i\x64\x5fc\x6f\x75\x6etry"]]["\x6e\x61me"] : $this->l('All countries')) . "</t\x64\x3e\n\t\t\t\t\t<t\x64\x20\x63\x6c\x61\x73s\x3d\x22c\x65\x6c\x6c\x20b\x6f\x72\x64e\x72\">" . (${${"\x47\x4cOBA\x4c\x53"}["br\x70k\x69\x71\x6a\x63\x74z"]}["i\x64\x5fg\x72\x6fu\x70"] ? ${${"G\x4c\x4f\x42\x41\x4c\x53"}["\x69\x68\x78\x72\x79\x78d\x79p\x69"]}[${${"G\x4c\x4f\x42\x41L\x53"}["\x6f\x75\x64\x77\x66b\x76c\x76o\x6a"]}["i\x64_\x67\x72\x6fup"]]["\x6e\x61\x6de"] : $this->l('All groups')) . "</t\x64>\n\t\t\t\t\t<\x74\x64 c\x6cass\x3d\x22\x63\x65\x6cl\x20bord\x65r\"\x20\x74\x69t\x6c\x65=\"" . $this->l('ID:') . "\x20" . ${${"\x47\x4cO\x42\x41\x4c\x53"}["\x6f\x75\x64w\x66\x62vc\x76\x6f\x6a"]}["i\x64\x5fc\x75\x73to\x6der"] . "\">" . (isset(${${"\x47\x4cO\x42ALS"}["\x63\x75\x62\x69\x69l\x6f"]}) ? ${${"\x47\x4c\x4f\x42\x41LS"}["b\x64\x6ev\x6d\x65\x64\x70\x6c\x6cw"]} : $this->l('All customers')) . "</\x74\x64\x3e\n\t\t\t\t\t\x3c\x74\x64 c\x6c\x61\x73s=\"\x63e\x6cl\x20bor\x64\x65\x72\x22>" . ${${"\x47LOBALS"}["oj\x66gg\x69\x75\x79\x6e"]} . "</td>\n\t\t\t\t\t\x3c\x74\x64\x20c\x6ca\x73\x73=\"\x63ell\x20bo\x72\x64\x65r\x22\x3e" . ${${"G\x4cO\x42ALS"}["\x6e\x77s\x6f\x6fr\x6b\x69\x76"]} . "\x3c/t\x64\x3e\n\t\t\t\t\t<t\x64 \x63\x6ca\x73\x73\x3d\x22\x63e\x6c\x6c\x20\x62\x6f\x72\x64er\x22\x3e" . ${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x75\x63\x66gi\x77\x64b\x66\x76g\x65"]} . "</\x74\x64\x3e\n\t\t\t\t\t<t\x64 \x63las\x73=\x22\x63e\x6c\x6c\x20\x62o\x72\x64er\">" . ${${"\x47L\x4f\x42\x41LS"}["\x68\x79\x69\x6a\x65\x64\x6c\x72\x65o"]}["\x66r\x6fm_q\x75\x61\x6eti\x74\x79"] . "</\x74h\x3e\n\t\t\t\t\t<\x74\x64 \x63la\x73\x73=\"ce\x6c\x6c\x20\x62\x6f\x72de\x72\x22>" . (!$rule->id ? "\x3ca \x6e\x61m\x65\x3d\"delete\x5f\x6c\x69\x6ek\x22 hr\x65\x66\x3d\x22" . __PS_BASE_URI__ . "mod\x75\x6c\x65\x73/\x61g\x69\x6c\x65\x6d\x75lti\x70l\x65s\x65\x6cler/a\x6aa\x78\x5fpr\x6fd\x75\x63\x74\x73\x2eph\x70?\x61ct\x69\x6f\x6e=Dele\x74eSp\x65cif\x69c\x50\x72\x69ce&i\x64_\x70r\x6f\x64\x75\x63\x74\x3d" . $this->id_object . "\x26id_\x73\x70e\x63\x69f\x69c_pr\x69\x63\x65\x3d" . (int) (${${"G\x4c\x4f\x42A\x4c\x53"}["\x71\x72\x63\x73\x79n\x61"]}["\x69\x64\x5fs\x70e\x63if\x69\x63\x5fpr\x69\x63e"]) . "\x22><img sr\x63\x3d\x22" . __PS_BASE_URI__ . "i\x6dg/\x61dmin/d\x65le\x74e.\x67if\" a\x6c\x74=\x22" . $this->l('Delete') . "\" /\x3e\x3c/\x61\x3e" : "") . "</t\x64\x3e\n\t\t\t\t\x3c/t\x72\x3e";
                ${${"GL\x4f\x42A\x4cS"}["\x6c\x6eq\x62pv\x78x\x75\x77"]}++;
                unset(${${"G\x4c\x4fB\x41\x4c\x53"}["d\x72\x61\x70\x78q\x6bxj\x66\x77"]});
            }
        }
        $dvylzfofp = "\x63\x75\x72\x72\x65nc\x79";
        ${${"G\x4c\x4f\x42\x41\x4c\x53"}["\x6e\x6b\x76\x6a\x7ac"]} .= "\n\t\t\t\t</tbo\x64y>\n\t\t\t\x3c/\x74able>\n\t\t</div>";
        ${${"G\x4c\x4f\x42\x41L\x53"}["\x6e\x6bvjz\x63"]} .= "\n\t\t<sc\x72i\x70t \x74\x79\x70\x65=\"tex\x74/j\x61\x76a\x73crip\x74\x22>\n\t\t\tv\x61r \x63\x75r\x72\x65n\x63\x69\x65s\x20\x3d \x6eew\x20\x41\x72\x72a\x79();\n\t\t\t\x63\x75rr\x65\x6e\x63\x69\x65s[\x30]\x20\x3d\x20ne\x77 A\x72\x72\x61\x79();\n\t\t\t\x63urre\x6e\x63i\x65s[0][\x22s\x69\x67n\"]\x20=\x20\"" . $defaultCurrency->sign . "\"\x3b\n\t\t\t\x63\x75r\x72\x65\x6ec\x69es[\x30][\x22fo\x72m\x61t\x22]\x20= " . $defaultCurrency->format . "\x3b\n\t\t\t";
        foreach (${${"G\x4c\x4fB\x41L\x53"}["\x71\x65y\x6f\x6ed\x74\x6b\x6b\x6f"]} as ${$dvylzfofp}) {
            ${"\x47\x4c\x4f\x42\x41\x4cS"}["\x6f\x72ynu\x6e\x6bn\x69"] = "\x63\x75\x72re\x6e\x63\x79";
            $glvdhrwfpl                                                = "c\x75rr\x65\x6e\x63\x79";
            $dnugvdxrefxp                                              = "cu\x72\x72\x65\x6e\x63\x79";
            $jtxjbwyjntp                                               = "\x63\x6f\x6e\x74\x65\x6e\x74";
            $gocuffop                                                  = "c\x75r\x72\x65n\x63y";
            ${$jtxjbwyjntp} .= "\n\t\t\t\tc\x75rr\x65\x6e\x63ies[" . ${$glvdhrwfpl}["id_\x63\x75\x72\x72\x65\x6e\x63y"] . "] \x3d ne\x77 A\x72r\x61y();\n\t\t\t\t\x63u\x72rencie\x73[" . ${${"\x47LO\x42\x41\x4c\x53"}["\x6f\x72y\x6e\x75n\x6b\x6e\x69"]}["i\x64_c\x75r\x72e\x6ecy"] . "][\"sig\x6e\x22] = \x22" . ${${"\x47\x4c\x4f\x42\x41L\x53"}["\x71\x77\x66fc\x66yl\x77\x76l\x67"]}["\x73\x69\x67n"] . "\";\n\t\t\t\tc\x75r\x72e\x6e\x63ies[" . ${$dnugvdxrefxp}["\x69d\x5f\x63\x75r\x72\x65\x6e\x63\x79"] . "][\x22\x66\x6f\x72m\x61\x74\"] \x3d\x20" . ${$gocuffop}["f\x6f\x72ma\x74"] . ";\n\t\t\t\t";
        }
        ${${"\x47LO\x42\x41\x4c\x53"}["\x6ekvj\x7ac"]} .= "\n\t\t</s\x63ri\x70\x74>\n\t\t";
        $djpchkks                                                      = "\x73\x70\x65ci\x66\x69\x63_\x70\x72\x69ce\x5f\x70r\x69o\x72\x69\x74\x69\x65s";
        ${"\x47\x4c\x4f\x42AL\x53"}["b\x6b\x76\x6b\x6e\x77h\x6dm\x6b"] = "\x73\x70e\x63\x69\x66i\x63\x5f\x70r\x69\x63\x65_p\x72\x69\x6f\x72\x69\x74i\x65\x73";
        $pecvkmoo                                                      = "\x73\x70\x65\x63\x69\x66i\x63\x5f\x70\x72\x69\x63e\x5f\x70\x72\x69o\x72\x69\x74\x69\x65s";
        ${"\x47\x4c\x4fBA\x4cS"}["\x63\x73o\x76ww\x6c\x75"]            = "\x73\x70e\x63\x69fic_p\x72\x69\x63\x65_\x70\x72\x69ori\x74\x69\x65\x73";
        if (${$plkmtiqjex}[0] == "\x69\x64\x5fcustomer")
            unset(${$djpchkks}[0]);
        
        ${${"G\x4c\x4f\x42A\x4cS"}["\x74\x75pd\x6c\x65"]} = array_values(${${"GLOB\x41L\x53"}["\x74up\x64\x6ce"]});
        ${$nyuyhmkcene} .= "\x3c\x64i\x76\x20id\x3d\x22\x61\x67\x69l\x65\x22c\x6c\x61\x73\x73=\"p\x61\x6ee\x6c\"\x3e\n\t\t\x3ch\x33\x3e" . $this->l('Priority management') . "</\x68\x33>\n\t\t<\x64i\x76 \x63l\x61\x73s\x3d\"\x61l\x65rt\x20a\x6cer\x74-i\x6ef\x6f\">\n\t\t\t\t" . $this->l('Sometimes one customer can fit into multiple price rules. Priorities allow you to define which rule applies to the customer.') . "\n\t\t\x3c/\x64iv\x3e";
        ${${"\x47\x4cOBAL\x53"}["\x63\x70t\x78\x70\x77qs\x67\x7a\x6f"]} .= "\n\t\t<\x64i\x76 cla\x73s=\"form-g\x72\x6fu\x70\"\x3e\n\t\t\t<\x6c\x61b\x65l \x63las\x73=\"\x63on\x74r\x6fl-la\x62e\x6c \x61g\x69l\x65-\x63ol-sm-\x33\x20\x61\x67i\x6ce-\x63ol-m\x64-3\x20a\x67i\x6c\x65-\x63o\x6c-lg-\x33\x20a\x67\x69\x6c\x65-c\x6fl-\x78\x6c-3\" \x66\x6fr\x3d\"spec\x69f\x69cP\x72ic\x65Pr\x69\x6fr\x69\x74y1\x22>" . $this->l('Priorities:') . "</\x6c\x61\x62e\x6c>\n\t\t\t<\x64\x69\x76 c\x6cass=\x22inpu\x74-g\x72\x6f\x75\x70  \x61gile-\x63o\x6c-\x73m-\x39\x20\x20a\x67\x69le-\x63o\x6c-\x6d\x649\x20\x63ol-lg-\x39  \x61\x67\x69l\x65-\x63o\x6c-x\x6c-\x39\">\n\t\t\t\t\x3c\x73\x65l\x65\x63\x74 i\x64\x3d\x22s\x70e\x63i\x66\x69c\x50r\x69c\x65\x50\x72\x69\x6frit\x791\" na\x6de\x3d\x22specif\x69\x63\x50\x72\x69ce\x50\x72\x69or\x69ty[]\x22\x3e\n\t\t\t\t\t<\x6fpt\x69on va\x6c\x75e=\"\x69d_\x73h\x6fp\x22" . (${${"\x47\x4c\x4f\x42\x41L\x53"}["t\x75\x70\x64\x6c\x65"]}[0] == "id\x5f\x73h\x6fp" ? " s\x65l\x65c\x74\x65d\x3d\"se\x6ce\x63ted\"" : "") . ">" . $this->l('Shop') . "\x3c/\x6f\x70t\x69\x6f\x6e\x3e\n\t\t\t\t\t<\x6fpt\x69\x6f\x6e\x20value\x3d\x22\x69\x64\x5f\x63\x75r\x72\x65n\x63y\"" . (${$gedaion}[0] == "i\x64_c\x75\x72r\x65\x6ec\x79" ? " \x73elec\x74\x65\x64=\"s\x65\x6ce\x63\x74e\x64\"" : "") . "\x3e" . $this->l('Currency') . "\x3c/\x6f\x70\x74i\x6fn>\n\t\t\t\t\t<o\x70\x74i\x6fn v\x61\x6c\x75e\x3d\"id_\x63\x6f\x75\x6e\x74\x72y\x22" . (${${"\x47\x4cO\x42ALS"}["t\x75\x70d\x6c\x65"]}[0] == "\x69d_\x63\x6f\x75nt\x72\x79" ? "\x20sel\x65\x63\x74ed\x3d\"sele\x63te\x64\x22" : "") . ">" . $this->l('Country') . "\x3c/\x6fp\x74\x69\x6f\x6e\x3e\n\t\t\t\t\t\x3c\x6fp\x74ion v\x61\x6c\x75\x65=\x22\x69d_\x67rou\x70\x22" . (${${"\x47L\x4f\x42\x41\x4c\x53"}["\x74\x75pd\x6ce"]}[0] == "i\x64_gr\x6f\x75\x70" ? "\x20\x73\x65le\x63\x74ed\x3d\x22\x73e\x6c\x65\x63t\x65d\"" : "") . "\x3e" . $this->l('Group') . "</opt\x69on>\n\t\t\t\t</s\x65l\x65c\x74>\n\t\t\t\t\x3c\x73\x70\x61\x6e\x20c\x6c\x61ss\x3d\"\x69n\x70\x75\x74-g\x72\x6f\x75p-\x61dd\x6fn\"><\x69 \x63\x6cas\x73\x3d\x22ic\x6f\x6e-\x63\x68\x65\x76ro\x6e-r\x69\x67ht\x22>\x3c/i>\x3c/s\x70a\x6e\x3e\n\t\t\t\t<se\x6c\x65\x63\x74 na\x6de=\x22s\x70e\x63\x69\x66\x69cP\x72i\x63eP\x72\x69o\x72i\x74y[]\x22>\n\t\t\t\t\t\x3co\x70\x74io\x6e\x20val\x75\x65=\"\x69d\x5fs\x68o\x70\x22" . (${$pecvkmoo}[1] == "\x69d\x5fsh\x6f\x70" ? "\x20s\x65lected\x3d\"s\x65\x6cec\x74\x65d\"" : "") . "\x3e" . $this->l('Shop') . "\x3c/\x6f\x70\x74i\x6fn\x3e\n\t\t\t\t\t<o\x70tio\x6e v\x61\x6cu\x65=\x22i\x64_c\x75\x72r\x65n\x63y\"" . (${${"\x47\x4c\x4fB\x41\x4c\x53"}["\x63s\x6fv\x77\x77\x6cu"]}[1] == "\x69d_\x63urre\x6ec\x79" ? "\x20se\x6cected\x3d\"\x73e\x6ce\x63\x74e\x64\"" : "") . ">" . $this->l('Currency') . "\x3c/\x6f\x70\x74i\x6fn\x3e\n\t\t\t\t\t<\x6f\x70\x74i\x6fn\x20\x76\x61\x6cue=\"id\x5f\x63ou\x6etr\x79\x22" . (${${"G\x4c\x4fB\x41LS"}["\x74\x75\x70\x64\x6ce"]}[1] == "\x69d_co\x75n\x74r\x79" ? " \x73el\x65c\x74\x65\x64=\x22\x73\x65\x6c\x65cted\"" : "") . ">" . $this->l('Country') . "</\x6f\x70t\x69\x6fn\x3e\n\t\t\t\t\t\x3c\x6fpt\x69o\x6e\x20\x76\x61\x6c\x75\x65=\"i\x64\x5f\x67rou\x70\"" . (${${"G\x4cOB\x41\x4c\x53"}["\x74u\x70\x64\x6c\x65"]}[1] == "id\x5fgr\x6f\x75p" ? " se\x6cect\x65\x64=\"se\x6cec\x74\x65\x64\"" : "") . ">" . $this->l('Group') . "</o\x70ti\x6fn>\n\t\t\t\t</se\x6ce\x63t\x3e\n\t\t\t\t<\x73\x70an cl\x61s\x73=\x22i\x6ep\x75t-\x67\x72oup-a\x64d\x6fn\x22\x3e\x3c\x69\x20\x63\x6c\x61\x73\x73\x3d\x22\x69\x63\x6f\x6e-chev\x72\x6fn-rig\x68\x74\x22\x3e\x3c/i\x3e\x3c/spa\x6e\x3e\n\t\t\t\t\x3cs\x65\x6c\x65c\x74 \x6eame\x3d\x22sp\x65\x63if\x69\x63P\x72ice\x50ri\x6f\x72\x69ty[]\"\x3e\n\t\t\t\t\t<o\x70\x74io\x6e valu\x65=\x22id\x5f\x73h\x6f\x70\x22" . (${${"\x47LO\x42A\x4cS"}["\x74\x75\x70dle"]}[2] == "\x69\x64\x5fs\x68\x6fp" ? "\x20\x73\x65l\x65\x63\x74\x65d\x3d\"s\x65l\x65c\x74\x65\x64\"" : "") . "\x3e" . $this->l('Shop') . "\x3c/\x6fp\x74i\x6fn>\n\t\t\t\t\t\x3c\x6fpti\x6f\x6e\x20v\x61l\x75\x65\x3d\x22i\x64_\x63u\x72rency\"" . (${${"\x47\x4c\x4fB\x41L\x53"}["\x74u\x70d\x6c\x65"]}[2] == "id\x5f\x63u\x72r\x65nc\x79" ? " \x73e\x6ce\x63ted\x3d\x22\x73\x65l\x65\x63\x74\x65d\x22" : "") . "\x3e" . $this->l('Currency') . "</\x6f\x70\x74i\x6fn\x3e\n\t\t\t\t\t\x3co\x70t\x69\x6fn\x20va\x6cue=\"id_\x63ou\x6et\x72y\"" . (${${"\x47\x4c\x4f\x42A\x4c\x53"}["t\x75\x70d\x6c\x65"]}[2] == "i\x64\x5fcou\x6et\x72\x79" ? " se\x6cected=\x22s\x65le\x63\x74e\x64\x22" : "") . "\x3e" . $this->l('Country') . "\x3c/o\x70ti\x6f\x6e\x3e\n\t\t\t\t\t<op\x74\x69\x6f\x6e \x76\x61\x6cu\x65\x3d\"\x69\x64\x5fgro\x75p\x22" . (${${"G\x4c\x4fB\x41\x4cS"}["\x74u\x70\x64l\x65"]}[2] == "i\x64_grou\x70" ? " \x73\x65l\x65ct\x65d=\"\x73\x65\x6cec\x74ed\x22" : "") . "\x3e" . $this->l('Group') . "</\x6f\x70t\x69on\x3e\n\t\t\t\t\x3c/s\x65le\x63\x74>\n\t\t\t\t<\x73p\x61\x6e clas\x73\x3d\x22inp\x75t-\x67\x72oup-\x61\x64d\x6f\x6e\"\x3e\x3c\x69\x20c\x6c\x61ss\x3d\"i\x63o\x6e-c\x68evr\x6fn-r\x69\x67ht\"\x3e\x3c/\x69></s\x70\x61\x6e>\n\t\t\t\t<sele\x63t\x20\x6ea\x6de\x3d\"s\x70\x65ci\x66\x69cPri\x63e\x50\x72\x69\x6fr\x69\x74\x79[]\x22>\n\t\t\t\t\t\x3co\x70ti\x6f\x6e value\x3d\x22i\x64_s\x68\x6fp\x22" . (${${"GL\x4f\x42\x41\x4c\x53"}["\x62k\x76\x6b\x6ew\x68\x6dm\x6b"]}[3] == "\x69\x64_\x73\x68\x6f\x70" ? " \x73\x65l\x65\x63\x74\x65\x64=\x22se\x6ce\x63\x74\x65\x64\"" : "") . "\x3e" . $this->l('Shop') . "</op\x74\x69\x6fn\x3e\n\t\t\t\t\t<\x6fp\x74\x69\x6fn\x20va\x6cue=\"i\x64_\x63urrenc\x79\x22" . (${$ahuedic}[3] == "id_cu\x72\x72en\x63\x79" ? " \x73e\x6c\x65\x63te\x64\x3d\x22select\x65d\"" : "") . ">" . $this->l('Currency') . "</o\x70\x74\x69on>\n\t\t\t\t\t\x3c\x6f\x70ti\x6f\x6e \x76\x61lue=\x22i\x64\x5f\x63o\x75\x6e\x74r\x79\"" . (${${"\x47\x4c\x4f\x42A\x4c\x53"}["\x74\x75p\x64l\x65"]}[3] == "id\x5f\x63\x6f\x75n\x74r\x79" ? "\x20selec\x74\x65d=\x22se\x6ce\x63\x74e\x64\x22" : "") . ">" . $this->l('Country') . "\x3c/\x6f\x70\x74\x69on>\n\t\t\t\t\t\x3copti\x6fn v\x61lu\x65=\"id_g\x72o\x75\x70\"" . (${$tclsxk}[3] == "\x69\x64_\x67ro\x75p" ? "\x20\x73el\x65c\x74\x65\x64=\x22sel\x65cte\x64\"" : "") . ">" . $this->l('Group') . "\x3c/o\x70\x74io\x6e\x3e\n\t\t\t\t\x3c/se\x6ce\x63\x74>\n\t\t\t\x3c/\x64iv>\n\t\t\x3c/d\x69v>\n\t\t\x3c\x64\x69v\x20\x63la\x73s=\"f\x6f\x72m-\x67r\x6f\x75\x70\x22\x3e\n\t\t\t\x3c\x64i\x76\x20cl\x61s\x73\x3d\" \x61g\x69le-co\x6c-\x73\x6d-9\x20 a\x67i\x6c\x65-\x73m-o\x66f\x73\x65\x74-\x33 \x20agil\x65-\x63\x6f\x6c-\x6dd-9\x20\x20ag\x69l\x65-\x6dd-\x6f\x66f\x73e\x74-\x33\x20co\x6c-\x6c\x67-\x39 co\x6c-l\x67-o\x66f\x73e\x74-3\x20 \x61g\x69l\x65-col-xl-9 \x20\x61\x67i\x6ce-\x78l-\x6foffse\x74-3\x22\x3e\n\t\t\t\t<\x70\x20\x63\x6ca\x73s\x3d\"che\x63\x6b\x62ox\">\n\t\t\t\t\t\x3cl\x61be\x6c\x20\x66\x6fr\x3d\x22spe\x63if\x69\x63\x50\x72\x69\x63\x65P\x72i\x6f\x72\x69\x74y\x54\x6fA\x6c\x6c\x22\x3e<inp\x75\x74 \x74\x79\x70e\x3d\x22\x63h\x65ck\x62ox\"\x20\x6eam\x65\x3d\x22\x73\x70e\x63ifi\x63\x50r\x69\x63\x65P\x72i\x6fr\x69\x74yTo\x41\x6cl\"\x20i\x64=\"sp\x65ci\x66i\x63P\x72ic\x65\x50ri\x6fr\x69t\x79\x54\x6f\x41\x6c\x6c\"\x20/>" . $this->l('Apply to all products') . "</l\x61be\x6c\x3e\n\t\t\t\t</p>\n\t\t\t\x3c/div>\n\t\t\x3c/\x64i\x76>\n\t\t</d\x69\x76>\n\t\t";
        return ${${"G\x4cOB\x41\x4c\x53"}["n\x6b\x76\x6a\x7a\x63"]};
    }
    public function getMessage($key)
    {
        ${"\x47\x4c\x4f\x42\x41\x4cS"}["\x79\x70\x65\x6c\x69\x64\x69nv\x6a\x6d\x71"]    = "mes\x73a\x67\x65s";
        ${"G\x4cOB\x41L\x53"}["\x65\x71\x6a\x78\x72\x6a\x76\x79"]                       = "m\x65\x73sage\x73";
        ${${"\x47\x4c\x4f\x42\x41L\x53"}["y\x70\x65\x6c\x69\x64\x69\x6e\x76j\x6d\x71"]} = array(
            "\x50\x72ic\x65\x20\x72ule\x20s\x75\x63c\x65s\x73\x66\x75\x6cl\x79\x20u\x70\x64a\x74\x65d" => $this->l('Price rule successfully updated'),
            "\x49\x66\x20you\x20w\x69\x73h\x20\x74\x6f\x20\x75s\x65\x20t\x68\x65\x20\x61dv\x61nc\x65\x64 st\x6f\x63\x6b manag\x65me\x6et,\x20\x79o\x75 \x68\x61ve \x74o:" => $this->l('If you wish to use the advanced stock management, you have to:'),
            "ass\x6fcia\x74e\x20\x79\x6fu\x72 \x70rod\x75\x63\x74s\x20with \x77ar\x65hou\x73\x65\x73" => $this->l('associate your products with warehouses'),
            "\x61s\x73o\x63i\x61te\x20\x79\x6f\x75r \x77a\x72\x65\x68\x6f\x75\x73\x65\x73\x20\x77ith\x20\x63a\x72\x72\x69\x65rs" => $this->l('associate your warehouses with carriers'),
            "asso\x63i\x61\x74e \x79\x6fu\x72\x20w\x61r\x65\x68\x6fu\x73e\x73 \x77i\x74h t\x68\x65 a\x70p\x72op\x72iate sho\x70s" => $this->l('associate your warehouses with the appropriate shops'),
            "\x59\x6fu m\x75s\x74 have\x20\x61 c\x6fm\x6do\x6e\x20w\x61re\x68ouse be\x74w\x65\x65n\x20t\x68\x69s \x70a\x63k\x20\x61\x6e\x64 \x69t\x73 \x70r\x6f\x64uc\x74\x2e" => $this->l('You must have a common warehouse between this pack and its product.'),
            "Y\x6f\x75 \x6d\x75\x73t\x20s\x61\x76\x65 \x74h\x69\x73 \x70\x72\x6f\x64uct be\x66o\x72e\x20\x6da\x6e\x61g\x69\x6eg \x71u\x61n\x74i\x74ies." => $this->l('You must save this product before managing quantities.'),
            "\x59\x6fu \x6du\x73\x74 \x73a\x76e \x74hi\x73 \x70r\x6fduc\x74 \x62\x65f\x6f\x72\x65 \x61\x64d\x69ng s\x70\x65c\x69\x66\x69\x63\x20\x70\x72i\x63es" => $this->l('You must save this product before adding specific prices'),
            "This\x20\x66\x65\x61\x74\x75r\x65 \x68\x61s\x20\x62\x65\x65n\x20\x64i\x73\x61b\x6c\x65\x64,\x20yo\x75 \x63a\x6e\x20a\x63\x74\x69va\x74e\x20th\x69\x73 f\x65atur\x65 at \x74h\x69s p\x61ge:" => $this->l('This feature has been disabled, you can activate this feature at this page:'),
            "\x6ci\x6e\x6b\x20to \x50er\x66o\x72\x6dan\x63e\x73" => $this->l('link to Performances'),
            "\x41 \x76\x69r\x74\x75a\x6c\x20\x70rod\x75ct \x63\x61n\x6e\x6ft ha\x76\x65\x20c\x6fm\x62ina\x74\x69\x6fns." => $this->l('A virtual product cannot have combinations.'),
            "\x59ou\x20\x6du\x73\x74\x20s\x61\x76\x65 this\x20pr\x6f\x64u\x63\x74\x20b\x65\x66or\x65\x20\x61d\x64ing\x20c\x6fmb\x69\x6ea\x74ions\x2e" => $this->l('You must save this product before adding combinations.')
        );
        return ${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x65q\x6axr\x6a\x76\x79"]}[${${"\x47\x4c\x4f\x42\x41\x4cS"}["h\x75c\x66\x65\x65\x74\x65\x68\x65"]}];
    }

    
}
?>