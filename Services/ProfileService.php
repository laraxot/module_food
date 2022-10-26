<?php

declare(strict_types=1);

namespace Modules\Food\Services;

use Illuminate\Http\Request;
// ------ models ------
use Modules\Food\Http\Requests\StoreProfile;
use Modules\Food\Models\Profile;
use Modules\Lang\Models\Post;
use Modules\LU\Models\PermUser;
// ----- requests ------
use Modules\LU\Models\User;

class ProfileService {
    public static function checkGuid(string $guid): ?object {
        $user = User::where('handle', $guid)->first();
        if (null == $user) {
            return null;
        }
        $lang = \App::getLocale();
        $row = Post::firstOrCreate(['guid' => $user->handle, 'lang' => $lang, 'type' => 'profile'], ['title' => ''.$user->handle]);
        $linked = $row->linkedOrCreate()->first();
        $linked->user_id = $user->user_id;
        $linked->save();

        return $row;
    }

    // StoreProfile o Request ?
    public static function store(Request $request): object {
        $data = $request->all();
        $lang = \App::getLocale();
        $linkedPrv = $data['linked'];
        if (isset($data['handle'])) {
            $data['handle'] = str_slug($data['handle']);
            $data['guid'] = $data['handle'];
        }
        $user = User::create($data);
        $perm = PermUser::firstOrCreate(['user_id' => $user->user_id]); // creo permesso, next creare tipologia utente
        $data['type'] = 'profile';
        $data['lang'] = $lang;
        $data['author_id'] = $user->user_id;
        $data['user_id'] = $user->user_id;
        $data['post_id'] = $user->user_id;
        $data['guid'] = str_slug($user->handle);

        $row = Profile::create($data);
        $row->update($linkedPrv);
        $post = $row->post()->create($data);
        /*
        $row = Post::create($data);
        $linked = $row->linkedOrCreate;
        $linked->user_id = $user->user_id;
        $linked->save();
        $linked->update($linkedPrv);
        */
        return $row;
    }

    public static function activate(Request $request): void {
        $data = $request->all();
        // $lang = \App::getLocale();

        $user = User::firstOrFail('token_check', '=', $data['verifyToken']);

        if (1 == $user->is_verified) {
            // Utente già attivo
        } else {
            $user->is_verified = 1;
            $user->save();
        }
    }
}
