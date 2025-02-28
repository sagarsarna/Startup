<?php
namespace App\Model\Table;
use Cake\ORM\Table;
class HarmonysTable extends Table
{

    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->setTable('harmonys');
        $this->setPrimaryKey('id');
    
    }
}


?>