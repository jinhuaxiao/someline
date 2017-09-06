<?php

namespace Someline\Repositories\Eloquent;

use Someline\Repositories\Criteria\RequestCriteria;
use Someline\Repositories\Interfaces\EbayAccountRepository;
use Someline\Models\EbayAccount;
use Someline\Validators\EbayAccountValidator;
use Someline\Presenters\EbayAccountPresenter;

/**
 * Class EbayAccountRepositoryEloquent
 * @package namespace Someline\Repositories\Eloquent;
 */
class EbayAccountRepositoryEloquent extends BaseRepository implements EbayAccountRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return EbayAccount::class;
    }

    

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
