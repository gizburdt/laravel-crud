<?php

namespace Appstract\Crud\Console\Properties;

trait HasFillable
{
    /**
     * [getTableNameInput description]
     * @return [type] [description]
     */
    protected function getFillableInput()
    {
        return $this->getOption('fillable');
    }

    /**
     * Parse fillable.
     *
     * @return string
     */
    protected function getFillable()
    {
        if (! $this->getFillableInput()) {
            return "['']";
        }

        $explode = explode(';', $this->getFillableInput());

        return $this->wrapWithBrackets(implode("', '", $explode));
    }
}