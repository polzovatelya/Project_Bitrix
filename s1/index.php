<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
global $popularSectionFilter;
$popularSectionFilter = [
        "UF_SHOW_ON_MAIN"=>true,
];
?>

    <div class="mb-5 pb-4">
        <div class="swiper-main">
            <div class="swiper-main__row">
                <div class=" swiper w-100">
                    <div class="swiper-wrapper">
                        <div class="swiper-main__col swiper-slide"><a class="card-banner" href="javascript:void(0)">
                                <div class="card-banner__image">
                                    <img class="img img_lazy lazyload object-fit-fill"
                                         src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                         alt="image" data-src="<?=DEFAULT_TEMPLATE_PATH?>/upload/card-banner/0.png">
                                </div>
                                <div class="card-banner__inner">
                                    <div class="card-banner__name">Диваны и кресла</div>
                                    <div class="card-banner__description">Новая комбинация для ТВ БЕСТО не просто предмет
                                        мебели она разработана, также, для мультимедии
                                    </div>
                                    <div class="card-banner__bottom">
									<span class="btn btn-white rounded-pill fw-semibold">
										<span class="px-2">
											Подробнее
											<i class="fa-solid fa-chevron-right ms-2"></i>
										</span>
									</span>
                                    </div>
                                </div>
                            </a></div>
                        <div class="swiper-main__col swiper-slide"><a class="card-banner" href="javascript:void(0)">
                                <div class="card-banner__image">
                                    <img class="img img_lazy lazyload object-fit-fill"
                                         src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                         alt="image" data-src="<?=DEFAULT_TEMPLATE_PATH?>/upload/card-banner/1.png">
                                </div>
                                <div class="card-banner__inner">
                                    <div class="card-banner__name">Новинки мебели для дома на выставке в Москве</div>
                                    <div class="card-banner__description">Новая комбинация для ТВ БЕСТО не просто предмет
                                        мебели она разработана, также, для мультимедии
                                    </div>
                                    <div class="card-banner__bottom">
									<span class="btn btn-white rounded-pill fw-semibold">
										<span class="px-2">
											Подробнее
											<i class="fa-solid fa-chevron-right ms-2"></i>
										</span>
									</span>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                    <div class="swiper-button-prev fa-solid fa-chevron-left d-none d-xl-block"></div>
                    <div class="swiper-button-next fa-solid fa-chevron-right d-none d-xl-block"></div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="mb-5 pb-4">
        <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"academy", 
	array(
		"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "popularSectionsFilter",
		"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "products",
		"RESIZE_IMG_HEIGHT" => "170",
		"RESIZE_IMG_WIDTH" => "170",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE",
		"COMPONENT_TEMPLATE" => "academy"
	),
	false
);?>
    </div>
    <div class="mb-5 pb-4">
        <h3 class="mb-4 pb-3">Хиты продаж</h3>
        <div class="swiper-product">
            <div class="swiper-product__row">
                <div class=" swiper w-100">
                    <div class="swiper-wrapper">
                        <div class="swiper-product__col swiper-slide"><a class="catalog-product" href="javascript:void(0)">
                                <div class="image image_size_410x190 text-center">
                                    <div class="image__inner">
                                        <img class="img img_lazy lazyload"
                                             src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                             alt="image"
                                             data-src="<?=DEFAULT_TEMPLATE_PATH?>/upload/catalog-product/0.png">
                                    </div>
                                </div>
                                <div class="catalog-product__name">Диван угловой тканевый Мускари</div>
                                <div class="catalog-product__price">32 300 ₽</div>
                            </a></div>
                        <div class="swiper-product__col swiper-slide"><a class="catalog-product" href="javascript:void(0)">
                                <div class="image image_size_410x190 text-center">
                                    <div class="image__inner">
                                        <img class="img img_lazy lazyload"
                                             src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                             alt="image"
                                             data-src="<?=DEFAULT_TEMPLATE_PATH?>/upload/catalog-product/1.png">
                                    </div>
                                </div>
                                <div class="catalog-product__name">Диван угловой тканевый Мускари</div>
                                <div class="catalog-product__price" data-badge="20%">32 300 ₽
                                    <del>40 900 ₽</del>
                                </div>
                            </a></div>
                        <div class="swiper-product__col swiper-slide"><a class="catalog-product" href="javascript:void(0)">
                                <div class="image image_size_410x190 text-center">
                                    <div class="image__inner">
                                        <img class="img img_lazy lazyload"
                                             src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                             alt="image"
                                             data-src="<?=DEFAULT_TEMPLATE_PATH?>/upload/catalog-product/2.png">
                                    </div>
                                </div>
                                <div class="catalog-product__name">Кровать Белла 160*200 велюр Monolit латте</div>
                                <div class="catalog-product__price">32 300 ₽</div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-5 pb-4">
        <h3 class="mb-4 pb-3">Новости</h3>
        <div class="swiper-news">
            <div class="swiper-news__row">
                <div class=" swiper w-100">
                    <div class="swiper-wrapper">
                        <div class="swiper-news__col swiper-slide"><a class="card-news" href="javascript:void(0)">
                                <div class="card-news__image">
                                    <div class="image image_size_630x320">
                                        <div class="image__inner">
                                            <img class="img img_lazy lazyload object-fit-cover"
                                                 src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                 alt="image"
                                                 data-src="<?=DEFAULT_TEMPLATE_PATH?>/upload/card-news/0.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-news__inner">
                                    <div class="card-news__date">30 августа 2023</div>
                                    <div class="card-news__body">
                                        <h4 class="card-news__name mt-0 mb-4 fw-normal">
                                            Открытие шоу-рума на Невском проспекте
                                        </h4>
                                    </div>
                                    <div class="card-news__bottom">
									<span class="btn btn-white rounded-pill fw-semibold">
										<span class="px-2">
											Подробнее
											<i class="fa-solid fa-chevron-right ms-2"></i>
										</span>
									</span>
                                    </div>
                                </div>
                            </a></div>
                        <div class="swiper-news__col swiper-slide"><a class="card-news" href="javascript:void(0)">
                                <div class="card-news__image">
                                    <div class="image image_size_630x320">
                                        <div class="image__inner">
                                            <img class="img img_lazy lazyload object-fit-cover"
                                                 src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                 alt="image"
                                                 data-src="<?=DEFAULT_TEMPLATE_PATH?>/upload/card-news/1.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-news__inner">
                                    <div class="card-news__date">30 августа 2023</div>
                                    <div class="card-news__body">
                                        <h4 class="card-news__name mt-0 mb-4 fw-normal">
                                            Новинки мебели для дома на выставке в Москве
                                        </h4>
                                    </div>
                                    <div class="card-news__bottom">
									<span class="btn btn-white rounded-pill fw-semibold">
										<span class="px-2">
											Подробнее
											<i class="fa-solid fa-chevron-right ms-2"></i>
										</span>
									</span>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-5 pb-4">
        <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"reviews_swiper", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "PREVIEW_PICTURE",
			2 => "Название",
			3 => "Начало активности (дата)",
			4 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "reviews",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "CITY",
			1 => "RATING",
			2 => "EXTERNAL_LINK",
			3 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "reviews_swiper"
	),
	false
);?>
    </div>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>