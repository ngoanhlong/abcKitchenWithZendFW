<?php

use Phinx\Migration\AbstractMigration;

class BackupEmployee extends AbstractMigration
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
        $table = $this->table('backupEmployee', ['id'=>false, 'primary_key'=>['sequenceNumber']]);
        $table
                ->addColumn('sequenceNumber', 'integer', ['limit' => 8])
                ->addColumn('employeeNumber', 'integer', ['limit' => 8])
                ->addColumn('employeeName', 'integer', ['limit' => 32])
                ->addColumn('gender', 'boolean')
                ->addColumn('employeeType', 'string', ['limit' => 32])
                ->addColumn('registeredDate', 'date')
                ->addColumn('startedDate', 'date')
                ->create();
        $sql = 'ALTER TABLE backupEmployee MODIFY COLUMN sequenceNumber int auto_increment';
        $this->execute($sql);
    }
}
