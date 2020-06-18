<?php
/** \file
 *  \brief Classe model for tests table.
 *
 *  \ingroup  models
 *  \author   Luciano Fuza - luciano@fuza.com.br
 */

use Springy\Model;

class Test extends Model
{
    protected $tableName = 'tests';
    protected $writableColumns = ['id', 'name', 'created_at', 'update_at', 'deleted'];
    protected $insertDateColumn = 'created_at';
    protected $updateDateColumn = 'updated_at';
    protected $deletedColumn = 'deleted';

    public function getAll()
    {
        $result = [];
        try {
            $this->execute("SELECT * FROM tests ORDER BY id");
            $result = $this->fetchAll();
        } catch (Exception $e) {
        }

        return $result;
    }

}