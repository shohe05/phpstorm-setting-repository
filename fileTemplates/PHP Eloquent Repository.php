<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\BaseRepositoryAbstract;
use App\Repositories\Contracts\\${NAME}Interface;
use App\Models\\${MODEL_NAME};

class ${NAME} extends BaseRepositoryAbstract implements ${NAME}Interface
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ${MODEL_NAME}::class;
    }

}
