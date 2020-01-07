<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("less2");

if (CModule::IncludeModule("iblock")){
  $res = CIBlockElement::GetList(Array(), Array("IBLOCK_ID"=>1));
  while($ob = $res->GetNext()){
	  ?><main role="main">


<pre><?print_r("------------" );?></pre><?
    ?><pre><?print_r($ob["NAME"] );?></pre><? 
	?><pre><?print_r($ob["DETAIL_TEXT"] );?></pre><? 

	  }
}
?>

</main><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>