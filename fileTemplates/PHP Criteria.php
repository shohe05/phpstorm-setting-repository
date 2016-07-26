<?php

namespace App\Repositories\Criteria;

use App\Repositories\Contracts\RepositoryInterface as Repository;
use App\Repositories\Criteria\Criteria;
use Eloquent;

class ${NAME} extends Criteria
{
    /**
     * @param Eloquent \$model
     * @param Repository \$repository
     * @return \$this|Eloquent
     */
    public function apply(\$model, Repository \$repository)
    {
        \$model = \$model->where();
    
        return \$model;
    }
}