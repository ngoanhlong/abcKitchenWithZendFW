<?php

use Phinx\Migration\AbstractMigration;

class BackupDish extends AbstractMigration
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
        $table = $this->table('backupDish', ['id'=>false, 'primary_key'=>['sequenceNumber']]);
        $table
                ->addColumn('sequenceNumber', 'integer', ['limit'=>8])
                ->addColumn('dishNumber', 'integer', ['limit' => 8])
                ->addColumn('dishName', 'string', ['limit' => 32])
                ->addColumn('createDate', 'date')
                ->addColumn('price', 'integer', ['limit' => 12])
                ->addColumn('description', 'string', ['limit' => 1000])
                ->addColumn('userName', 'string', ['limit' => 32])
                ->addColumn('deleteOn', 'date')
                ->addColumn('imageName', 'string', ['limit' => 32])
                ->create();
        $sql = 'ALTER TABLE backupDish MODIFY COLUMN sequenceNumber int auto_increment';
        $this->execute($sql);
    }
    
}
