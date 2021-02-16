<<<<<<< HEAD
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::prefix('aaaa')->group(function () {
    Route::get('/', 'FoodController@index');
});
//*/

/*
Route::domain('{guid}.food.local')->group(function () {
    Route::get('/test', function ($guid) {
        $lang = app()->getLocale();
        //if(1){
        $item = \Modules\Food\Models\Restaurant::with('post')
            ->whereHas('post',
                function ($query) use ($guid,$lang) {
                    $query->where('guid', 'like', $guid)
                        ->where('lang', $lang);
                }
            )->first();
        //} else {
        //    $post = \Modules\Blog\Models\Post::where('guid', 'like', $guid)
        //    ->where('lang', $lang)->first();
        //    $item = $post->linkable;
        //}
        $panel = \Modules\Xot\Jobs\Crud\ShowJob::dispatchNow('restaurant', $item);
        $view = 'pub_theme::restaurant.show';

        return \Modules\Theme\Services\ThemeService::view($view)
            //->with('view', $view)
            ->with('row', $panel->row)
            ->with('_panel', $panel)
            ->with('lang', $lang);
    });
});
*/
=======
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::prefix('aaaa')->group(function () {
    Route::get('/', 'FoodController@index');
});
//*/

/*
Route::domain('{guid}.food.local')->group(function () {
    Route::get('/test', function ($guid) {
        $lang = app()->getLocale();
        //if(1){
        $item = \Modules\Food\Models\Restaurant::with('post')
            ->whereHas('post',
                function ($query) use ($guid,$lang) {
                    $query->where('guid', 'like', $guid)
                        ->where('lang', $lang);
                }
            )->first();
        //} else {
        //    $post = \Modules\Blog\Models\Post::where('guid', 'like', $guid)
        //    ->where('lang', $lang)->first();
        //    $item = $post->linkable;
        //}
        $panel = \Modules\Xot\Jobs\Crud\ShowJob::dispatchNow('restaurant', $item);
        $view = 'pub_theme::restaurant.show';

        return \Modules\Theme\Services\ThemeService::view($view)
            //->with('view', $view)
            ->with('row', $panel->row)
            ->with('_panel', $panel)
            ->with('lang', $lang);
    });
});
*/
>>>>>>> a6dde0f (first)
