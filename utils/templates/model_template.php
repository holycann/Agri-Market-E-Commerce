<?php
return <<<PHP
<?php

require_once __DIR__ . '/../core/BaseModel.php';

class {{className}} extends BaseModel
{
    public int \$id;
    
    public string \$created_at;
    public string \$updated_at;

    public function __construct(array \$data = [])
    {
        parent::__construct(\$data);
    }
}
PHP;
