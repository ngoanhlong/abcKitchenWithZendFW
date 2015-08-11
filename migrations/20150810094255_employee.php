<?php

use Phinx\Migration\AbstractMigration;

class Employee extends AbstractMigration
{
    
    public function change()
    {
        $table = $this->table('employee', ['id'=>false, 'primary_key'=>['employeeNumber']]);
        $table
                ->addColumn('employeeNumber', 'integer', ['limit' => 8])
                ->addColumn('employeeName', 'integer', ['limit' => 32])
                ->addColumn('gender', 'boolean')
                ->addColumn('employeeType', 'string', ['limit' => 32])
                ->addColumn('registeredDate', 'date')
                ->addColumn('startedDate', 'date')
                ->create();
    }
}
