<?php

namespace Someline\Transformers;

use Someline\Models\Textnow;

/**
 * Class TextnowTransformer
 * @package namespace Someline\Transformers;
 */
class TextnowTransformer extends BaseTransformer
{

    /**
     * Transform the Textnow entity
     * @param Textnow $model
     *
     * @return array
     */
    public function transform(Textnow $model)
    {
        return [
            'id' => (int) $model->id,

            /* place your other model properties here */

            'created_at' => (string) $model->created_at,
            'updated_at' => (string) $model->updated_at
        ];
    }
}
