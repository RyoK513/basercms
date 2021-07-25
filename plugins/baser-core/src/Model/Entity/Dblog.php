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

namespace BaserCore\Model\Entity;

use Cake\ORM\Entity as EntityAlias;
use Cake\I18n\Time as TimeAlias;
use BaserCore\Annotation\UnitTest;
use BaserCore\Annotation\NoTodo;
use BaserCore\Annotation\Checked;

/**
 * Class Dblog
 * @package BaserCore\Model\Entity
 * @property int $id
 * @property string $message
 * @property string $user_id
 * @property string $controller
 * @property string $action
 * @property TimeAlias $created
 * @property TimeAlias $modified
 */
class Dblog extends EntityAlias
{

    /**
     * Accessible
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

}
