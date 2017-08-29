<?php

namespace Someline\Repositories\Eloquent;

use Someline\Repositories\Criteria\RequestCriteria;
use Someline\Repositories\Interfaces\TextnowRepository;
use Someline\Models\Textnow;
use Someline\Validators\TextnowValidator;
use Someline\Presenters\TextnowPresenter;

/**
 * Class TextnowRepositoryEloquent
 * @package namespace Someline\Repositories\Eloquent;
 */
class TextnowRepositoryEloquent extends BaseRepository implements TextnowRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Textnow::class;
    }

    

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
