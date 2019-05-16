<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>

                    </div>
                </div>
                <!-- /content -->
                <!-- side -->
                <div class="side">
					
					<?if($APPLICATION->GetCurPage(false) !== '/'):?>
                    <!-- side menu -->
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu",
						"left",
						Array(
							"COMPONENT_TEMPLATE" => "left",
							"ROOT_MENU_TYPE" => "left",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(),
							"MAX_LEVEL" => "1",
							"CHILD_MENU_TYPE" => "left",
							"USE_EXT" => "Y",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N"
						)
					);?>
                    <!-- /side menu -->
					<?endif;?>
					

					<!-- side anonse -->
					<?$APPLICATION->IncludeComponent("bitrix:main.include", "left_side_info", Array(
						"COMPONENT_TEMPLATE" => ".default",
							"AREA_FILE_SHOW" => "sect",	// Показывать включаемую область
							"AREA_FILE_SUFFIX" => "inc",	// Суффикс имени файла включаемой области
							"EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
							"AREA_FILE_RECURSIVE" => "N",	// Рекурсивное подключение включаемых областей разделов
						),
						false
					);?>
					<!-- /side anonse -->
					
					
                    <!-- side wrap -->
                    <div class="side-wrap">
                        <div class="item-wrap">
                            <!-- side action -->
                            <div class="side-block side-action">
                                <img src="<?=SITE_TEMPLATE_PATH;?>/img/side-action-bg.jpg" alt="" class="bg">
                                <div class="photo-block">
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/img/side-action.jpg" alt="">
                                </div>
                                <div class="text-block">
                                    <div class="title">Акция!</div>
                                    <p>Мебельная полка всего за 560 <span class="r">a</span>
                                    </p>
                                </div>
                                <a href="" class="btn-more">подробнее</a>
                            </div>
                            <!-- /side action -->
                        </div>
                                              
                       <!-- footer rew slider box -->
						<?$APPLICATION->IncludeComponent("bitrix:news.list", "left_side", Array(
							"COMPONENT_TEMPLATE" => ".default",
								"IBLOCK_TYPE" => "rews",	// Тип информационного блока (используется только для проверки)
								"IBLOCK_ID" => "5",	// Код информационного блока
								"NEWS_COUNT" => "2",	// Количество новостей на странице
								"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
								"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
								"SORT_BY2" => "NAME",	// Поле для второй сортировки новостей
								"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
								"FILTER_NAME" => "",	// Фильтр
								"FIELD_CODE" => array(	// Поля
									0 => "",
									1 => "",
								),
								"PROPERTY_CODE" => array(	// Свойства
									0 => "",
									1 => "",
								),
								"CHECK_DATES" => "N",	// Показывать только активные на данный момент элементы
								"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
								"AJAX_MODE" => "N",	// Включить режим AJAX
								"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
								"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
								"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
								"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
								"CACHE_TYPE" => "A",	// Тип кеширования
								"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
								"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
								"CACHE_GROUPS" => "N",	// Учитывать права доступа
								"PREVIEW_TRUNCATE_LEN" => "150",	// Максимальная длина анонса для вывода (только для типа текст)
								"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
								"SET_TITLE" => "N",	// Устанавливать заголовок страницы
								"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
								"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
								"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
								"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
								"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
								"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
								"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
								"PARENT_SECTION" => "",	// ID раздела
								"PARENT_SECTION_CODE" => "",	// Код раздела
								"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
								"DISPLAY_DATE" => "Y",	// Выводить дату элемента
								"DISPLAY_NAME" => "Y",	// Выводить название элемента
								"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
								"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
								"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
								"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
								"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
								"PAGER_TITLE" => "Новости",	// Название категорий
								"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
								"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
								"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
								"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
								"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
								"SET_STATUS_404" => "N",	// Устанавливать статус 404
								"SHOW_404" => "N",	// Показ специальной страницы
								"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
							),
							false
						);?>
						<!-- / footer rew slider box -->
						
						
                    </div>
                    <!-- /side wrap -->
                </div>
                <!-- /side -->
            </div>
            <!-- /content box -->
        </div>
        <!-- /page -->
        <div class="empty"></div>
    </div>
    <!-- /wrap -->
    <!-- footer -->
    <footer class="footer">
        <div class="inner-wrap">
			
			
            <nav class="main-menu">
				
			<?$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"bottom",
				Array(
					"COMPONENT_TEMPLATE" => ".default",
					"ROOT_MENU_TYPE" => "bottom",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => "",
					"MAX_LEVEL" => "1",
					"CHILD_MENU_TYPE" => "bottom",
					"USE_EXT" => "N",
					"DELAY" => "N",
					"ALLOW_MULTI_SELECT" => "N"
				)
			);?>
				
                <div class="item">
                    <div class="title-block">Каталог товаров</div>
                    <ul>
                        <li><a href="">Кухни</a>
                        </li>
                        <li><a href="">Гарнитуры</a>
                        </li>
                        <li><a href="">Спальни и матрасы</a>
                        </li>
                        <li><a href="">Столы и стулья</a>
                        </li>
                        <li><a href="">Раскладные диваны</a>
                        </li>
                        <li><a href="">Кресла</a>
                        </li>
                        <li><a href="">Кровати и кушетки</a>
                        </li>
                        <li><a href="">Тумобчки и прихожие</a>
                        </li>
                        <li><a href="">Аксессуары</a>
                        </li>
                        <li><a href="">Каталоги мебели</a>
                        </li>
                    </ul>
                </div>
            </nav>
			
			
            <div class="contacts-block">
                <div class="title-block"><?=GetMessage('CONTACT_INFO')?></div>
                <div class="loc-block">
                    <div class="address">ул. Летняя, стр.12, офис 512</div>
                    <div class="phone">
						<a href="tel:84952128506">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"COMPONENT_TEMPLATE" => ".default",
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "inc",
									"EDIT_TEMPLATE" => "",
									"PATH" => "/include/footer_phone.php"
								)
							);?>	
						</a>
                    </div>
                </div>
                <div class="main-soc-block">
                    <a href="" class="soc-item">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/icons/soc01.png" alt="">
                    </a>
                    <a href="" class="soc-item">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/icons/soc02.png" alt="">
                    </a>
                    <a href="" class="soc-item">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/icons/soc03.png" alt="">
                    </a>
                    <a href="" class="soc-item">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/icons/soc04.png" alt="">
                    </a>
                </div>
                <div class="copy-block">© 2000 - 2012 "Мебельный магазин"</div>
            </div>
        </div>
    </footer>
    <!-- /footer -->
</body>

</html>