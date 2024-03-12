<?php

namespace Tygh\UpgradeCenter\Connectors\CscVerticalMenu;

use Tygh\Addons\SchemesManager;
use Tygh\Http;
use Tygh\Registry;
use Tygh\Settings;
use Tygh\Tools\Url;
use Tygh\UpgradeCenter\Connectors\BaseAddonConnector;
use Tygh\UpgradeCenter\Connectors\IConnector;

/**
 * Класс Connector реализует коннектор Центра обновлений для модуля Sample Add-on.
 *
 * @package Tygh\UpgradeCenter\Connectors\CscVerticalMenu
 */
class Connector extends BaseAddonConnector implements IConnector
{
    /**
     * @var string Имя параметра HTTP-запроса, который определяет, какое действие требуется от сервера обновлений
     */
    const ACTION_PARAM = 'dispatch';

    /**
     * @var string Значение параметра ACTION_PARAM, при котором сервер обновлений поймёт, что CS-Cart запрашивает проверку наличия обновлений
     */
    const ACTION_CHECK_UPDATES = 'updates.check';

    /**
     * @var string Значение параметра ACTION_PARAM, при котором сервер обновлений поймёт, что CS-Cart запрашивает скачивание пакета обнолвений
     */
    const ACTION_DOWNLOAD_PACKAGE = 'updates.download_package';

    /**
     * @var string Уникальный идентификатор модуля
     */
    protected $addon_id = 'csc_vertical_menu';

    /**
     * @var string Текущая версия модуля
     */
    protected $addon_version;

    /**
     * @var string URL магазина
     */
    protected $product_url;

    public function __construct()
    {
        parent::__construct();

        // адрес сервера обновлений нужно указывать в конструкторе Connector
        $this->updates_server = 'https://store.cs-coding.ru/';

        // данные модуля
        $addon = SchemesManager::getScheme($this->addon_id);

        $this->addon_version = $addon->getVersion() ? $addon->getVersion() : '1.0';
        // значение настройки 'license_number' модуля
        $this->license_number = (string) Settings::instance()->getValue('licensekey', $this->addon_id);

        // данные о магазине
        $this->product_name = 'CS-Coding';
        $this->product_version = PRODUCT_VERSION;
        //$this->product_build = PRODUCT_BUILD;
        //$this->product_edition = PRODUCT_EDITION;
        $this->product_url = $_SERVER['HTTP_HOST'];
    }

    /**
     * Пердоставляет данные для подключения к серверу обновлений модуля.
     * Вызывается при проверке на наличие доступных обновлений.
     *
     * @return array
     */
    public function getConnectionData()
    {
        // номер лицензии магазина можно получить через $this->uc_settings['license_number']

        $data = [
            self::ACTION_PARAM => self::ACTION_CHECK_UPDATES,
            'addon_id'         => $this->addon_id,
            'addon_version'    => $this->addon_version,
            'license_number'   => $this->license_number,
            'product_name'     => $this->product_name,
            'product_version'  => $this->product_version,
            //'product_build'    => $this->product_build,
            //'product_edition'  => $this->product_edition,
            'product_url'      => $this->product_url,
            'lang_code'      => DESCR_SL,
        ];

        $headers = [];

        return [
            'method'  => 'get',
            'url'     => $this->updates_server,
            'data'    => $data,
            'headers' => $headers,
        ];
    }

    /**
     * Скачивает пакет обновлений модуля.
     *
     * @param array  $schema           Схема пакета обновлений
     * @param string $package_path     Абсолютный путь на сервере, куда нужно поместить пакет обновлений
     *
     * @return array
     */
    public function downloadPackage($schema, $package_path)
    {
        $download_url = new Url($this->updates_server);

        $download_url->setQueryParams(array_merge($download_url->getQueryParams(), [
            self::ACTION_PARAM => self::ACTION_DOWNLOAD_PACKAGE,
            'package_id'       => $schema['package_id'],
            'addon_id'         => $this->addon_id,
            'license_number'   => $this->license_number,
        ]));

        $download_url = $download_url->build();

        $request_result = Http::get($download_url, [], [
            'write_to_file' => $package_path,
        ]);

        if (!$request_result || strlen($error = Http::getError())) {
            $download_result = [false, __('text_uc_cant_download_package')];

            fn_rm($package_path);
        } else {
            $download_result = [true, ''];
        }

        return $download_result;
    }
}