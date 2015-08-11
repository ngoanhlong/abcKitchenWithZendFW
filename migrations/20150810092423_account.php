<?php

use Phinx\Migration\AbstractMigration;

class Account extends AbstractMigration
{
    
    public function change()
    {
        $table = $this->table('account', ['id'=>false, 'primary_key'=>['employeeNumber', 'userName']]);
        $table
                ->addColumn('employeeNumber', 'integer', ['limit' => 8])
                ->addColumn('userName', 'string', ['limit' => 32])
                ->addColumn('password', 'string', ['limit' => 32])
                ->addColumn('passwordLv2', 'string', ['limit' => 32])
                ->addColumn('registeredDate', 'date')
                ->addColumn('accountType', 'string', ['limit' => 32])
                ->create();
    }
}
