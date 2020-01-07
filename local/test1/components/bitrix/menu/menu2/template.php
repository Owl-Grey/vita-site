<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="nav justify-content-center nav-fill mx-5-mt-5" style="background-color: white;" >

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li class="nav-item"><a class="nav-link" href="<?=$arItem["LINK"]?>"class="selected"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li class="nav-item"><a class="nav-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>

</ul>
<?endif?>



