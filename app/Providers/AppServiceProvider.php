<?php

namespace App\Providers;

use App\Http\Controllers\DetailController;
use App\Models\Blog;
use App\Models\Categoryblog;
use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models\Categoryjob;
use App\Models\Detail;
use App\Models\Posts;
use App\Models\Role;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $Categoryjob = Categoryjob::all();
        View::share('Categoryjob', $Categoryjob);

        $Categoryblog = Categoryblog::all();
        View::share('Categoryblog', $Categoryblog);

        $Users = User::all();
        View::share('Users', $Users);

        $Role = Role::all();
        View::share('Role', $Role);

        $CountCV = DB::table('ungvien')->count();
        view::share('CountCV', $CountCV);

        $Post = DB::table('posts')->join('categoryjobs', 'posts.categoryjob_id', '=', 'categoryjobs.id_cate_post')->get();
        View::share('Post', $Post);

        $getBlogCate = DB::table('blogs')->join('categoryblogs', 'blogs.cateblog_id', '=', 'categoryblogs.id')->get();
        View::share('getBlogCate', $getBlogCate);
    }
}
