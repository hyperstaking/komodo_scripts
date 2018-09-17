<?php

echo '<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
<div class="container">
   <!-- (c) Decker, 2018 -->
   <h1>Notaries Addresses</h1>
   <table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
      <thead>
         <tr>
            <th>Index</th>
            <th>Name</th>
            <th>BTC</th>
            <th>KMD</th>
	    <th>GAME</th>
	    <th>HUSH</th>
         </tr>
      </thead>
      <tbody>';

$Notaries_elected1 = Array(
    "0dev1_jl777" => "03b7621b44118017a16043f19b30cc8a4cfe068ac4e42417bae16ba460c80f3828" ,
    "0dev2_kolo" => "030f34af4b908fb8eb2099accb56b8d157d49f6cfb691baa80fdd34f385efed961" ,
    "0dev3_kolo" => "025af9d2b2a05338478159e9ac84543968fd18c45fd9307866b56f33898653b014" ,
    "0dev4_decker" => "028eea44a09674dda00d88ffd199a09c9b75ba9782382cc8f1e97c0fd565fe5707" ,
    "a-team_SH" => "03b59ad322b17cb94080dc8e6dc10a0a865de6d47c16fb5b1a0b5f77f9507f3cce" ,
    "artik_AR" => "029acf1dcd9f5ff9c455f8bb717d4ae0c703e089d16cf8424619c491dff5994c90" ,
    "artik_EU" => "03f54b2c24f82632e3cdebe4568ba0acf487a80f8a89779173cdb78f74514847ce" ,
    "artik_NA" => "0224e31f93eff0cc30eaf0b2389fbc591085c0e122c4d11862c1729d090106c842" ,
    "artik_SH" => "02bdd8840a34486f38305f311c0e2ae73e84046f6e9c3dd3571e32e58339d20937" ,
    "badass_EU" => "0209d48554768dd8dada988b98aca23405057ac4b5b46838a9378b95c3e79b9b9e" ,
    "badass_NA" => "02afa1a9f948e1634a29dc718d218e9d150c531cfa852843a1643a02184a63c1a7" ,
    "batman_AR" => "033ecb640ec5852f42be24c3bf33ca123fb32ced134bed6aa2ba249cf31b0f2563" ,
    "batman_SH" => "02ca5898931181d0b8aafc75ef56fce9c43656c0b6c9f64306e7c8542f6207018c" ,
    "ca333_EU" => "03fc87b8c804f12a6bd18efd43b0ba2828e4e38834f6b44c0bfee19f966a12ba99" ,
    "chainmakers_EU" => "02f3b08938a7f8d2609d567aebc4989eeded6e2e880c058fdf092c5da82c3bc5ee" ,
    "chainmakers_NA" => "0276c6d1c65abc64c8559710b8aff4b9e33787072d3dda4ec9a47b30da0725f57a" ,
    "chainstrike_SH" => "0370bcf10575d8fb0291afad7bf3a76929734f888228bc49e35c5c49b336002153" ,
    "cipi_AR" => "02c4f89a5b382750836cb787880d30e23502265054e1c327a5bfce67116d757ce8" ,
    "cipi_NA" => "02858904a2a1a0b44df4c937b65ee1f5b66186ab87a751858cf270dee1d5031f18" ,
    "crackers_EU" => "03bc819982d3c6feb801ec3b720425b017d9b6ee9a40746b84422cbbf929dc73c3" ,
    "crackers_NA" => "03205049103113d48c7c7af811b4c8f194dafc43a50d5313e61a22900fc1805b45" ,
    "dwy_EU" => "0259c646288580221fdf0e92dbeecaee214504fdc8bbdf4a3019d6ec18b7540424" ,
    "emmanux_SH" => "033f316114d950497fc1d9348f03770cd420f14f662ab2db6172df44c389a2667a" ,
    "etszombi_EU" => "0281b1ad28d238a2b217e0af123ce020b79e91b9b10ad65a7917216eda6fe64bf7" ,
    "fullmoon_AR" => "03380314c4f42fa854df8c471618751879f9e8f0ff5dbabda2bd77d0f96cb35676" ,
    "fullmoon_NA" => "030216211d8e2a48bae9e5d7eb3a42ca2b7aae8770979a791f883869aea2fa6eef" ,
    "fullmoon_SH" => "03f34282fa57ecc7aba8afaf66c30099b5601e98dcbfd0d8a58c86c20d8b692c64" ,
    "goldenman_EU" => "02d6f13a8f745921cdb811e32237bb98950af1a5952be7b3d429abd9152f8e388d" ,
    "indenodes_AR" => "02ec0fa5a40f47fd4a38ea5c89e375ad0b6ddf4807c99733c9c3dc15fb978ee147" ,
    "indenodes_EU" => "0221387ff95c44cb52b86552e3ec118a3c311ca65b75bf807c6c07eaeb1be8303c" ,
    "indenodes_NA" => "02698c6f1c9e43b66e82dbb163e8df0e5a2f62f3a7a882ca387d82f86e0b3fa988" ,
    "indenodes_SH" => "0334e6e1ec8285c4b85bd6dae67e17d67d1f20e7328efad17ce6fd24ae97cdd65e" ,
    "jackson_AR" => "038ff7cfe34cb13b524e0941d5cf710beca2ffb7e05ddf15ced7d4f14fbb0a6f69" ,
    "jeezy_EU" => "023cb3e593fb85c5659688528e9a4f1c4c7f19206edc7e517d20f794ba686fd6d6" ,
    "karasugoi_NA" => "02a348b03b9c1a8eac1b56f85c402b041c9bce918833f2ea16d13452309052a982" ,
    "komodoninja_EU" => "038e567b99806b200b267b27bbca2abf6a3e8576406df5f872e3b38d30843cd5ba" ,
    "komodoninja_SH" => "033178586896915e8456ebf407b1915351a617f46984001790f0cce3d6f3ada5c2" ,
    "komodopioneers_SH" => "033ace50aedf8df70035b962a805431363a61cc4e69d99d90726a2d48fb195f68c" ,
    "libscott_SH" => "03301a8248d41bc5dc926088a8cf31b65e2daf49eed7eb26af4fb03aae19682b95" ,
    "lukechilds_AR" => "031aa66313ee024bbee8c17915cf7d105656d0ace5b4a43a3ab5eae1e14ec02696" ,
    "madmax_AR" => "03891555b4a4393d655bf76f0ad0fb74e5159a615b6925907678edc2aac5e06a75" ,
    "meshbits_AR" => "02957fd48ae6cb361b8a28cdb1b8ccf5067ff68eb1f90cba7df5f7934ed8eb4b2c" ,
    "meshbits_SH" => "025c6e94877515dfd7b05682b9cc2fe4a49e076efe291e54fcec3add78183c1edb" ,
    "metaphilibert_AR" => "02adad675fae12b25fdd0f57250b0caf7f795c43f346153a31fe3e72e7db1d6ac6" ,
    "metaphilibert_SH" => "0284af1a5ef01503e6316a2ca4abf8423a794e9fc17ac6846f042b6f4adedc3309" ,
    "patchkez_SH" => "0296270f394140640f8fa15684fc11255371abb6b9f253416ea2734e34607799c4" ,
    "pbca26_NA" => "0276aca53a058556c485bbb60bdc54b600efe402a8b97f0341a7c04803ce204cb5" ,
    "peer2cloud_AR" => "034e5563cb885999ae1530bd66fab728e580016629e8377579493b386bf6cebb15" ,
    "peer2cloud_SH" => "03396ac453b3f23e20f30d4793c5b8ab6ded6993242df4f09fd91eb9a4f8aede84" ,
    "polycryptoblog_NA" => "02708dcda7c45fb54b78469673c2587bfdd126e381654819c4c23df0e00b679622" ,
    "hyper_AR" => "020f2f984d522051bd5247b61b080b4374a7ab389d959408313e8062acad3266b4" ,
    "hyper_EU" => "03d00cf9ceace209c59fb013e112a786ad583d7de5ca45b1e0df3b4023bb14bf51" ,
    "hyper_SH" => "0383d0b37f59f4ee5e3e98a47e461c861d49d0d90c80e9e16f7e63686a2dc071f3" ,
    "hyper_NA" => "03d91c43230336c0d4b769c9c940145a8c53168bf62e34d1bccd7f6cfc7e5592de" ,
    "popcornbag_AR" => "02761f106fb34fbfc5ddcc0c0aa831ed98e462a908550b280a1f7bd32c060c6fa3" ,
    "popcornbag_NA" => "03c6085c7fdfff70988fda9b197371f1caf8397f1729a844790e421ee07b3a93e8" ,
    "alien_AR" => "0348d9b1fc6acf81290405580f525ee49b4749ed4637b51a28b18caa26543b20f0" ,
    "alien_EU" => "020aab8308d4df375a846a9e3b1c7e99597b90497efa021d50bcf1bbba23246527" ,
    "thegaltmines_NA" => "031bea28bec98b6380958a493a703ddc3353d7b05eb452109a773eefd15a32e421" ,
    "titomane_AR" => "029d19215440d8cb9cc6c6b7a4744ae7fb9fb18d986e371b06aeb34b64845f9325" ,
    "titomane_EU" => "0360b4805d885ff596f94312eed3e4e17cb56aa8077c6dd78d905f8de89da9499f" ,
    "titomane_SH" => "03573713c5b20c1e682a2e8c0f8437625b3530f278e705af9b6614de29277a435b" ,
    "webworker01_NA" => "03bb7d005e052779b1586f071834c5facbb83470094cff5112f0072b64989f97d7" ,
    "xrobesx_NA" => "03f0cc6d142d14a40937f12dbd99dbd9021328f45759e26f1877f2a838876709e1" ,
);

function file_get_contents_curl($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);       


    $data["result"] = curl_exec($ch);
    $data["http_code"] = curl_getinfo($ch)["http_code"];
    curl_close($ch);

    return $data;
}


require_once 'BitcoinECDSA.php/src/BitcoinPHP/BitcoinECDSA/BitcoinECDSA.php';
use BitcoinPHP\BitcoinECDSA\BitcoinECDSA;

class BitcoinECDSADecker extends BitcoinECDSA {

    /***
     * Tests if the address is valid or not.
     *
     * @param string $address (base58)
     * @return bool
     */
    public function validateAddress($address)
    {
        $address    = hex2bin($this->base58_decode($address));

        /*
        if(strlen($address) !== 25)
            return false;
        $checksum   = substr($address, 21, 4);
        $rawAddress = substr($address, 0, 21);
	*/

	$len = strlen($address);
        $checksum   = substr($address, $len-4, 4);
        $rawAddress = substr($address, 0, $len-4);

        if(substr(hex2bin($this->hash256($rawAddress)), 0, 4) === $checksum)
            return true;
        else
            return false;
    }

    /**
     * Returns the current network prefix for WIF, '80' = main network, 'ef' = test network.
     *
     * @return string (hexa)
     */
    public function getPrivatePrefix($PrivatePrefix = 128){

        if($this->networkPrefix =='6f')
            return 'ef';
        else
           return sprintf("%02X",$PrivatePrefix);
    }
    /***
     * returns the private key under the Wallet Import Format
     *
     * @return string (base58)
     * @throws \Exception
     */

    public function getWIF($compressed = true, $PrivatePrefix = 128)
    {
        if(!isset($this->k))
        {
            throw new \Exception('No Private Key was defined');
        }

        $k          = $this->k;
        
        while(strlen($k) < 64)
            $k = '0' . $k;
        
        $secretKey  =  $this->getPrivatePrefix($PrivatePrefix) . $k;
        
        if($compressed) {
            $secretKey .= '01';
        }
        
        $secretKey .= substr($this->hash256(hex2bin($secretKey)), 0, 8);

        return $this->base58_encode($secretKey);
    }
}


$bitcoinECDSA = new BitcoinECDSADecker();

$index = 0;
foreach ($Notaries_elected1 as $key => $value) {

	$bitcoinECDSA->setNetworkPrefix(sprintf("%02X", 0)); // 0 - Bitcoin
        $btc_address = $bitcoinECDSA->getUncompressedAddress(true, $value);
	$bitcoinECDSA->setNetworkPrefix(sprintf("%02X", 60)); // 60 - Komodo
        $kmd_address = $bitcoinECDSA->getUncompressedAddress(true, $value);
	$bitcoinECDSA->setNetworkPrefix(sprintf("%02X", 38)); // 38 - GameCredits
        $game_address = $bitcoinECDSA->getUncompressedAddress(true, $value);

	$bitcoinECDSA->setNetworkPrefix("1cb8"); // Hush
        $hush_address = $bitcoinECDSA->getUncompressedAddress(true, $value);

	$bitcoinECDSA->setNetworkPrefix(sprintf("%02X", 33)); // 33 - EMC2
        $emc2_address = $bitcoinECDSA->getUncompressedAddress(true, $value);

	//echo "[".sprintf("%02d",$index)."] ". sprintf("%20s",$key) . "" . sprintf("%36s",$address) . PHP_EOL;

    echo '
         <tr>
	    <td>'.sprintf("%02d",$index).'</td>
            <td>'.$key.'</td>
            <td><a href="https://blockchain.info/address/'.$btc_address.'" target="_blank">'.$btc_address.'</a></td>
            <td><a href="https://kmdexplorer.io/address/'.$kmd_address.'" target="_blank">'.$kmd_address.'</a></td>
	    <td><a href="https://prohashing.com/explorerJson/getAddress?address='.$game_address.'&coin_id=121" target="_blank">'.$game_address.'</a></td>
            <!--<td><a href="https://blockexplorer.gamecredits.com/addresses/'.$game_address.'" target="_blank">'.$game_address.'</a></td>-->
            <td><a href="https://explorer.myhush.org/address/'.$hush_address.'" target="_blank">'.$hush_address.'</a></td>
            <td><a href="https://chainz.cryptoid.info/emc2/address.dws?'.$emc2_address.'.htm" target="_blank">'.$emc2_address.'</a></td>
         </tr>
';

	$index++;

	
}

echo '      </tbody>
   </table>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script>
$(document).ready(function() {
  $("#example").DataTable();
});';

echo '
</script>
';

?>