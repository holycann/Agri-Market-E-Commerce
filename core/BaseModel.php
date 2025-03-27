<?php

class BaseModel
{
    public function __construct(array $data = [])
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    // Convert object ke array
    public function toArray()
    {
        return get_object_vars($this);
    }
}
