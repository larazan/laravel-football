<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
// Livewire
use App\Http\Livewire\ArticleIndex;
use App\Http\Livewire\AwardIndex;
use App\Http\Livewire\CategoryIndex;
use App\Http\Livewire\CategoryArticleIndex;
use App\Http\Livewire\ClubIndex;
use App\Http\Livewire\CompetitionIndex;
use App\Http\Livewire\ContactIndex;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\FaqIndex;
use App\Http\Livewire\LeagueIndex;
use App\Http\Livewire\TeamLeagueIndex;
use App\Http\Livewire\MatchGalleryIndex;
use App\Http\Livewire\MatchIndex;
use App\Http\Livewire\MatchLineup;
use App\Http\Livewire\MatchReportIndex;
use App\Http\Livewire\MatchStatisticIndex;
use App\Http\Livewire\MediaIndex;
use App\Http\Livewire\PlayerIndex;
use App\Http\Livewire\PermissionIndex;
use App\Http\Livewire\RoleIndex;
use App\Http\Livewire\ScheduleIndex;
use App\Http\Livewire\SettingIndex;
use App\Http\Livewire\SlideIndex;
use App\Http\Livewire\SponsorIndex;
use App\Http\Livewire\StadionIndex;
use App\Http\Livewire\StaffIndex;
use App\Http\Livewire\StatisticIndex;
use App\Http\Livewire\SubscribeIndex;
use App\Http\Livewire\UserIndex;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', Dashboard::class);

    Route::get('articles', ArticleIndex::class)->name('articles.index');
    // 
    Route::get('articles/create', [ArticleController::class, 'create']);
    Route::post('articles/store', [ArticleController::class, 'store']);
    Route::get('articles/edit/{articleID}', [ArticleController::class, 'edit']);
    Route::put('articles/update', [ArticleController::class, 'update'])->name('updateArticle');
    Route::get('articles', ArticleIndex::class)->name('articles.index');
    //

    Route::get('awards', AwardIndex::class)->name('awards.index');
    Route::get('category-article', CategoryArticleIndex::class)->name('category-article.index');
    Route::get('clubs', ClubIndex::class)->name('clubs.index');
    Route::get('competitions', CompetitionIndex::class)->name('competitions.index');
    Route::get('contacts', ContactIndex::class)->name('contacts.index');
    Route::get('faqs', FaqIndex::class)->name('faqs.index');
    Route::get('leagues', LeagueIndex::class)->name('leagues.index');
    Route::get('team-leagues', TeamLeagueIndex::class)->name('team-leagues.index');
    Route::get('matchs', MatchIndex::class)->name('matchs.index');
    Route::get('matchs/{matchId}/match-gallery', MatchGalleryIndex::class)->name('match-gallery.index');
    Route::get('matchs/{matchId}/match-lineup', MatchLineup::class)->name('match-lineup.index');
    Route::get('matchs/{matchId}/match-report', MatchReportIndex::class)->name('match-report.index');
    Route::get('matchs/{matchId}/match-statistic', MatchStatisticIndex::class)->name('match-statistic.index');
    Route::get('medias', MediaIndex::class)->name('medias.index');
    Route::get('players', PlayerIndex::class)->name('players.index');
    Route::get('permissions', PermissionIndex::class)->name('permissions.index');
    Route::get('roles', RoleIndex::class)->name('roles.index');
    Route::get('schedules', ScheduleIndex::class)->name('schedules.index');
    Route::get('sponsors', SponsorIndex::class)->name('sponsors.index');
    Route::get('stadions', StadionIndex::class)->name('stadions.index');
    Route::get('staffs', StaffIndex::class)->name('staffs.index');
    Route::get('statistics', StatisticIndex::class)->name('statistics.index');
    Route::get('subscribers', SubscribeIndex::class)->name('subscribers.index');
    Route::get('settings', SettingIndex::class)->name('settings.index');
    Route::get('slides', SlideIndex::class)->name('slides.index');
    Route::get('users', UserIndex::class)->name('users.index');

    Route::get('users', [UserController::class, 'show'])->name('users.show');
    Route::post('users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    Route::delete('users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
    Route::post('users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
    Route::delete('users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');
});

// Contact
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Comment
Route::post('{post}/comment/store', [CommentController::class, 'show'])->name('comment.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
