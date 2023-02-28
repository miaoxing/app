<?php

namespace Miaoxing\App\Model;

use Miaoxing\App\Service\GroupModel;

/**
 * @property GroupModel $group
 */
trait BelongsToGroupTrait
{
    public function group(): GroupModel
    {
        return $this->belongsTo(GroupModel::class);
    }
}
