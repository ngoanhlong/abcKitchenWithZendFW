<?php

use Phinx\Migration\AbstractMigration;

class Dish extends AbstractMigration
{
    
    public function change()
    {
        $table = $this->table('dish', ['id' => false, 'primary_key' => ['dishNumber']]);
        $table
                ->addColumn('dishNumber', 'integer', ['limit' => 8])
                ->addColumn('dishName', 'string', ['limit' => 32])
                ->addColumn('createDate', 'date')
                ->addColumn('price', 'integer', ['limit' => 12])
                ->addColumn('description', 'string', ['limit' => 1000])
                ->addColumn('userName', 'string', ['limit' => 32])
                ->addColumn('imageName', 'string', ['limit' => 32])
                ->create();
                
        
    }
}
