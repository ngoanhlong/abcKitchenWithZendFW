<?php

use Phinx\Migration\AbstractMigration;

class Menu extends AbstractMigration
{
    
    public function change()
    {
        $table = $this->table('menu');
        $table
                ->addColumn('menuForDate', 'date')
                ->addColumn('dishNumber', 'integer', ['limit' => 8])
                ->addColumn('createdDate', 'date')
                ->addColumn('userName', 'string', ['limit' => 32])
                ->create();
    }
}
