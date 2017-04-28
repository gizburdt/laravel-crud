<?php

namespace Appstract\Crud\Console\Properties;

trait HasPrimaryKey
{
    /**
     * [getTableNameInput description]
     * @return [type] [description]
     */
    protected function getPrimaryKeyInput()
    {
        return $this->getOption('primary', 'id');
    }

    /**
     * Parse fillable.
     *
     * @return string
     */
    protected function getPrimaryKey()
    {
        return $this->getPrimaryKeyInput();
    }
}