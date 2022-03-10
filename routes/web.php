<?php

use Illuminate\Support\Facades\Route;
use Spatie\LaravelMarkdown\MarkdownRenderer;

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

$markdown = Storage::get('public/samples/test.md');
$html = app(Spatie\LaravelMarkdown\MarkdownRenderer::class)->toHtml($markdown);

$skills = ['Laravel', 'PHP', 'Node.js', 'C++', 'JavaScript', 'Vue.js', 'HTML5', 'CSS', 'Adobe Creative Suite', 'Microsoft Office',
'Final Cut Pro', 'Stripe API', 'Headless CMS', 'Chicago Manual of Style', 'AP Style Guide', 'Elements of Style'];

Route::view('/', 'welcome', ['markdown' => $markdown]);
Route::view('/cv', 'cv', ['skills' => $skills]);

Route::get('/portfolio', function () {
    return view('portfolio');
});

