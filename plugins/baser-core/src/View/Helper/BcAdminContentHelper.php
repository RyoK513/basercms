<?php
/**
 * baserCMS :  Based Website Development Project <https://basercms.net>
 * Copyright (c) baserCMS User Community <https://basercms.net/community/>
 *
 * @copyright     Copyright (c) baserCMS User Community
 * @link          https://basercms.net baserCMS Project
 * @since         5.0.0
 * @license       http://basercms.net/license/index.html MIT License
 */
namespace BaserCore\View\Helper;

use Cake\View\Helper;
use BaserCore\Utility\BcUtil;
use BaserCore\Annotation\NoTodo;
use BaserCore\Annotation\Checked;
use BaserCore\Annotation\UnitTest;
use BaserCore\Utility\BcContainerTrait;
use BaserCore\Service\UsersServiceInterface;
use BaserCore\Service\ContentsService;
use BaserCore\Service\ContentsServiceInterface;

/**
 * BcAdminContentHelper
 * @property ContentsService $ContentService
 */
class BcAdminContentHelper extends Helper
{

    /**
     * Trait
     */
    use BcContainerTrait;

    /**
     * initialize
     * @param array $config
     * @checked
     * @noTodo
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->ContentService = $this->getService(ContentsServiceInterface::class);
    }

    /**
     * 登録されているタイプの一覧を取得する
     * @return array
     * @checked
     * @noTodo
     * @unitTest
     */
    public function getTypes(): array
    {
        $createdSettings = BcUtil::getContentsItem();
        $types = [];
        foreach($createdSettings as $key => $value) {
            $types[$key] = $value['title'];
        }
        return $types;
    }

    /**
     * コンテンツの作成者一覧を取得
     * @return array
     */
    public function getAuthors(): array
    {
        $users = $this->getService(UsersServiceInterface::class);
        return $users->getList();
    }
}
