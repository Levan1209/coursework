<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="news-list">
	<div class="news-list">
		<!-- <? echo '<div style="background-color:#fff;"><pre>' . print_r($arResult, "true") . '</pre></div>'; ?> -->
		<?if (!empty($arResult)):?>
			<?foreach($arResult["ITEMS"] as $key => $arItem):?>
				<li><a href="<?=$arItem["PROPERTIES"]["URL"]["VALUE"];?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" alt="pic"></a></li>
			<?endforeach;?>
		<?endif?>
	</div>

</div>
