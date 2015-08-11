<?php

use Phinx\Migration\AbstractMigration;

class DishOrderDetail extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function change()
    {
        $table = $this->table('dishOrderDetail', ['id'=>false]);
        $table
                ->addColumn('userName', 'string', ['limit' => 32])
                ->addColumn('ID', 'integer', ['limit' => 8])
                ->addColumn('menuForDate', 'date')
                ->addColumn('dishNumber', 'integer', ['limit' => 8])
                ->addColumn('dishName', 'string', ['limit'=>32])
                ->addColumn('price', 'integer', ['limit' => 12])
                ->addColumn('description', 'string', ['limit' => 1000])
                ->addColumn('imageName', 'string', ['limit' => 32])
                ->create();
        
    }
}
