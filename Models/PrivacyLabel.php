<?php

declare(strict_types=1);

namespace Modules\Food\Models;

/*
use Illuminate\Database\Eloquent\Model;
//--------- models --------
use Modules\Lang\Models\Post;
//------ traits ----
use Modules\Extend\Traits\Updater;
use Modules\Lang\Models\Traits\LinkedTrait;
*/
class PrivacyLabel extends BaseModel {
    // use Updater;
    protected $fillable = ['checkbox_label'];
}
