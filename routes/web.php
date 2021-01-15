<?php

use App\Http\Livewire\Counter;
use App\Models\Post;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Static templates routes

Route::get('/', function () {
    return view('welcome1');
})->name('inicio');

Route::get('/escuela-para-padres', function () {
    return view('static/escuela-para-padres');
})->name('escuela-para-padres');

Route::get('/avisos', function () {
    return view('static/avisos');
})->name('avisos');

Route::get('/blog', function () {
    return view('static/blog');
})->name('blog');

Route::get('/quienes-somos', function () {
    return view('static/quienes-somos');
})->name('quienes-somos');

Route::get('/inicio', function () {
    return view('static/inicio');
})->name('inicio');


// Blog templates routes

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');











// Tests, just ignore them

Route::middleware(['auth:sanctum', 'verified'])->get('/test', function () {
    $user = Auth::user();
    $posts = Post::where('user_id', '=', $user->id)->get();
    $templates = Template::all();
    return view('test', [
        'templates' => $templates,
        'posts' => $posts
    ]);
})->name('test');

Route::middleware(['auth:sanctum', 'verified'])->get('/template/{id}', function ($id) {
    $template = Template::find($id);
    // return view('test_templates.'.$template->name, ['data' => null]);
    return view('test_templates.input', ['data' => null]);
})->name('template.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/post/{id}', function ($id) {
    $post = Post::join('templates', 'posts.template_id', '=', 'templates.id')
                ->where('posts.id', '=', $id)
                ->select('posts.*', 'templates.name')
                ->get();

    $templateName = $post[0]->name;
    return view('test_templates.'.$templateName, [
        'data' => json_decode($post[0]->data)
    ]);
})->name('post.show');

Route::post('/post/{id}', function (Request $request, $id) {
    $post = new Post;
    $data = $request->input('input');
    $user = Auth::user();

    $post->data = json_encode($data);
    $post->template_id = $id;
    $post->user_id = $user->id;
    $post->save();
    return redirect('test');
    // return $request->input('input');
})->name('post.submit');

// Livewire tests

// Route::get('/counter', function () {
//     return view('livewiretest');
// });

Route::get('/counter', Counter::class);