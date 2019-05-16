<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


<div class="item-wrap">
	  <div class="rew-footer-carousel">
		 
		 <?foreach($arResult["ITEMS"] as $arItem):?>
		 <div class="item">
			 <div class="side-block side-opin">
				 <div class="inner-block">
					 <div class="title">
						 <div class="photo-block">
						<?if(is_array($arItem["PREVIEW_PICTURE"])):?>
								<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
								<img
										src="
										<?
$file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>64, 'height'=>56), BX_RESIZE_IMAGE_PROPORTIONAL, true);                
										?>
										<?=$file['src']?>
										"
										alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
								></a>
						<?else:?>
								<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
								<img
										src="<?=SITE_TEMPLATE_PATH;?>/img/no_photo_left_block.jpg"
										alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
								></a>								
						<?endif?>
						 </div>
						 <div class="name-block">
							<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
								<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
									<?echo $arItem["NAME"]?>
								</a>
							<?endif;?>
						 </div>
						 <div class="pos-block">
							<?$arProps = [];?>
							<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
								<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
									<?$arProps[] =$arProperty["DISPLAY_VALUE"];?>
								<?endif?>
							<?endforeach;?>
							<?=implode(", /&nbsp;", $arProps);?>
						 </div>
					 </div>
					 <div class="text-block">
					<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
						<?echo $arItem["PREVIEW_TEXT"];?>
					<?endif;?>
					 </div>
				 </div>
			 </div>
		 </div>
		<?endforeach;?>
	 
	 </div>
 </div>


<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
