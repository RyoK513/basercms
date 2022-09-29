<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Plugins seed.
 */
class PluginsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'name' => 'BcSpaSample',
                'title' => 'SPAサンプル',
                'version' => NULL,
                'status' => '0',
                'db_init' => '1',
                'priority' => '1',
                'created' => NULL,
                'modified' => '2022-10-01 09:00:00',
            ],
            [
                'id' => '2',
                'name' => 'BcBlog',
                'title' => 'ブログ',
                'version' => '1.0.0',
                'status' => '1',
                'db_init' => '1',
                'priority' => '2',
                'created' => '2022-10-01 09:00:00',
                'modified' => '2022-10-01 09:00:00',
            ],
            [
                'id' => '3',
                'name' => 'BcSearchIndex',
                'title' => 'サイト内検索',
                'version' => '1.0.0',
                'status' => '1',
                'db_init' => '1',
                'priority' => '3',
                'created' => '2022-10-01 09:00:00',
                'modified' => '2022-10-01 09:00:00',
            ],
        ];

        $table = $this->table('plugins');
        $table->insert($data)->save();
    }
}
