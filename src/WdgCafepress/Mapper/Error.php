<?php
namespace WdgCafepress\Mapper;

class Error extends Base
{
    public function hasError()
    {
        if($this->simpleXmlElement)
            echo "test";
    }
}