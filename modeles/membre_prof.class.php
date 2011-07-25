<?php

class Membre_prof extends Doctrine_Record
{
    public function setTableDefinition()
    {

        $this->setTableName('membre_prof');
		
        $this->hasColumn('id', 'integer', 8, array('primary' => true,
						   'autoincrement' => true));
        $this->hasColumn('name', 'string', 100);
	$this->hasColumn('lastname', 'string', 100);
	$this->hasColumn('niveau', 'string', 100);
        $this->hasColumn('etablissement_id', 'integer', 8);
    }
    
}
