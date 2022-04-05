<?php

declare(strict_types=1);

namespace Modules\Food\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Str;
///--- models ----
use Modules\Lang\Models\Post;

/**
 * Class TitleSlugUnique.
 */
class TitleSlugUnique implements Rule {
    public string $post_type;

    /**
     * TitleSlugUnique constructor.
     */
    public function __construct(string $post_type) {
        $this->post_type = $post_type;
    }

    /**
     * @param string $attribute
     * @param mixed  $value
     *
     * @return bool
     */
    public function passes($attribute, $value) {
        //ddd(\Request::getMethod());//PUT
        $lang = app()->getLocale();
        $guid = Str::slug($value);
        $q = Post::query()
            ->where('post_type', $this->post_type)
            ->where('guid', $guid)
            ->where('lang', $lang)
            ->count();
        if (in_array(\Request::getMethod(), ['PUT']) && $q <= 1) { //edit
            return true;
        }
        if (0 == $q) {
            return true;
        }

        return false;
    }

    /**
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Translation\Translator|string|null
     */
    public function message() {
        return trans('pub_theme::txt.The :attribute just exists.');
    }
}//end class
