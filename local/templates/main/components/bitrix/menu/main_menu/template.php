<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="left-menu">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
	<li id="menu_active"><a href="<?=$arItem["LINK"]?>"><span><span><?=$arItem["TEXT"]?></span></span></a>
		<!--<li><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></li>-->
	<?else:?>
	<li><a href="<?=$arItem["LINK"]?>"><span><span><?=$arItem["TEXT"]?></span></span></a></li>
		<!--<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>-->
	<?endif?>
	
<?endforeach?>

</ul>
<?endif?>