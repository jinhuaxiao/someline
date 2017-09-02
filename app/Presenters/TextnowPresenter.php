<?php

namespace Someline\Presenters;

use Someline\Transformers\TextnowTransformer;

/**
 * Class TextnowPresenter
 *
 * @package namespace Someline\Presenters;
 */
class TextnowPresenter extends BasePresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new TextnowTransformer();
    }
}
