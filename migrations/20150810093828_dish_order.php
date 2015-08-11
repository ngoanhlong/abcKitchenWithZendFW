<?php

use Phinx\Migration\AbstractMigration;

class DishOrder extends AbstractMigration
{
    
    public function change()
    {
        $table = $this->table('dishOrder', ['id'=>false, 'primary_key'=>['userName', 'ID']]);
        $table
                ->addColumn('userName', 'string', ['limit' => 32])
                ->addColumn('ID', 'integer', ['limit' => 8])
                ->create();
    }
}
