<?php

use Phinx\Migration\AbstractMigration;

class Expense extends AbstractMigration
{
    
    public function change()
    {
        $table = $this->table('expense', ['id'=>false, 'primary_key'=>['expenseNumber']]);
        $table
                ->addColumn('expenseNumber', 'integer', ['limit' => 8])
                ->addColumn('expenseName', 'string', ['limit' => 32])
                ->addColumn('createdDate', 'date')
                ->addColumn('fee', 'integer', ['limit' => 12])
                ->addColumn('note', 'string', ['limit' => 1000])
                ->addColumn('userName', 'string', ['limit' => 32])
                ->addColumn('expenseType', 'boolean')
                ->create();
        $sql = 'ALTER TABLE expense MODIFY COLUMN expenseNumber int auto_increment';
        $this->execute($sql);
    }
}
