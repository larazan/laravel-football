<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\PaymentMethodController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PlayerStatisticController;
use App\Http\Controllers\Admin\ReportController;

use App\Http\Controllers\ArticleController as News;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\StandingController;
use App\Http\Controllers\SquadController;
use App\Http\Controllers\NewsController as Media;
use App\Http\Controllers\CkeditorFileUploadController;
use App\Http\Controllers\LineupTest;
// Livewire
use App\Http\Livewire\Admin\AboutUs;
use App\Http\Livewire\Admin\PrivacyPolicy;
use App\Http\Livewire\Admin\TermCondition;
use App\Http\Livewire\Admin\RefundPolicy;
use App\Http\Livewire\Admin\ShippingPolicy;
use App\Http\Livewire\Admin\AdvertisingIndex;
use App\Http\Livewire\Admin\AdvSegmentIndex;
use App\Http\Livewire\Admin\ArticleIndex;
use App\Http\Livewire\Admin\AttributeIndex;
use App\Http\Livewire\Admin\AttributeOptionIndex;
use App\Http\Livewire\Admin\AwardIndex;
use App\Http\Livewire\Admin\BrandIndex;
use App\Http\Livewire\Admin\CategoryIndex;
use App\Http\Livewire\Admin\CategoryArticleIndex;
use App\Http\Livewire\Admin\CategoryFaqIndex;
use App\Http\Livewire\Admin\ClubIndex;
use App\Http\Livewire\Admin\CompetitionIndex;
use App\Http\Livewire\Admin\ContactIndex;
use App\Http\Livewire\Admin\CouponIndex;
use App\Http\Livewire\Admin\CurrencyIndex;
use App\Http\Livewire\Admin\CustomerDetail;
use App\Http\Livewire\Admin\CustomerIndex;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Admin\FaqIndex;
use App\Http\Livewire\Admin\LeagueIndex;
use App\Http\Livewire\Admin\TeamLeagueIndex;
use App\Http\Livewire\Admin\MatchGalleryIndex;
use App\Http\Livewire\Admin\MatchIndex;
use App\Http\Livewire\Admin\MatchLineup;
use App\Http\Livewire\Admin\MatchReportIndex;
use App\Http\Livewire\Admin\MatchStatisticIndex;
use App\Http\Livewire\Admin\MediaIndex;
use App\Http\Livewire\Admin\NotificationIndex;
use App\Http\Livewire\Admin\OrderIndex;
use App\Http\Livewire\Admin\PartnerIndex;
use App\Http\Livewire\Admin\PlayerIndex;
use App\Http\Livewire\Admin\PermissionIndex;
use App\Http\Livewire\Admin\PositionIndex;
use App\Http\Livewire\Admin\ProductIndex;
use App\Http\Livewire\Admin\ProductSliderIndex;
use App\Http\Livewire\Admin\RoleIndex;
use App\Http\Livewire\Admin\ScheduleIndex;
use App\Http\Livewire\Admin\SettingIndex;
use App\Http\Livewire\Admin\SlideIndex;
use App\Http\Livewire\Admin\SocialMediaIndex;
use App\Http\Livewire\Admin\SquadIndex;
use App\Http\Livewire\Admin\StadionIndex;
use App\Http\Livewire\Admin\StaffIndex;
use App\Http\Livewire\Admin\StatisticIndex;
use App\Http\Livewire\Admin\SubscribeIndex;
use App\Http\Livewire\Admin\TrainingIndex;
use App\Http\Livewire\Admin\TrainingTypeIndex;
use App\Http\Livewire\Admin\TrainingSessionIndex;
use App\Http\Livewire\Admin\TrophyIndex;
use App\Http\Livewire\Admin\UserIndex;
use App\Http\Livewire\Admin\JuniorFootBall;
use App\Http\Livewire\Admin\WomenFootBall;
use App\Http\Livewire\Admin\TestIndex;

use App\Http\Livewire\Calendar;
use App\Http\Livewire\SearchSelect;
use App\Http\Livewire\MultiSelect;
use App\Http\Livewire\Tags;
use App\Http\Livewire\Trix;
use App\Models\TrainingSession;
use App\Models\TrainingType;

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

// FRONTEND
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/news', [News::class, 'index'])->name('news');
Route::get('/news/{slug}', [News::class, 'show']);
Route::get('/news/tag/{tag}', [News::class, 'showByTag']);

Route::get('/media', [Media::class, 'index'])->name('media');
Route::get('/media/{slug}', [Media::class, 'show']);

Route::get('/match', [MatchController::class, 'index'])->name('match');
Route::get('/match/{slug}', [MatchController::class, 'show']);
Route::get('/match/{slug}/lineup', [MatchController::class, 'lineup']);
Route::get('/match/{slug}/statistic', [MatchController::class, 'statistic']);

Route::get('/standing', [StandingController::class, 'index'])->name('standing');

Route::get('/team', [SquadController::class, 'index'])->name('team');
Route::get('/team/{slug}', [SquadController::class, 'show']);

Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/faqs', [PagesController::class, 'faqs']);
Route::get('/policy', [PagesController::class, 'policy']);
Route::get('/terms', [PagesController::class, 'terms']);

Route::feeds();

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified', 'role:admin|author|sales'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('lineup', [LineupTest::class, 'index']);
    
    Route::get('about-us', AboutUs::class)->name('about-us.index');
    Route::get('privacy-policy', PrivacyPolicy::class)->name('privacy-policy.index');
    Route::get('term-condition', TermCondition::class)->name('term-condition.index');
    Route::get('refund-policy', RefundPolicy::class)->name('refund-policy.index');
    Route::get('shipping-policy', ShippingPolicy::class)->name('shipping-policy.index');
    Route::get('adv-segments', AdvSegmentIndex::class)->name('adv-segments.index');
    Route::get('advertisings', AdvertisingIndex::class)->name('advertisings.index');
    // 
    Route::get('articles/create', [ArticleController::class, 'create']);
    Route::post('articles/store', [ArticleController::class, 'store']);
    Route::get('articles/edit/{articleID}', [ArticleController::class, 'edit']);
    Route::put('articles/update', [ArticleController::class, 'update'])->name('updateArticle');
    Route::get('articles', ArticleIndex::class)->name('articles.index');
    //
    Route::get('attributes', AttributeIndex::class)->name('attributes.index');
    // Route::get('attributes/{attributeId}/options', AttributeOptionIndex::class)->name('attribute-options.index');
    Route::get('attributes/{attributeID}/options', [AttributeController::class, 'options'])->name('attributes.options');
    Route::get('attributes/{attributeID}/add-option', [AttributeController::class, 'add_option'])->name('attributes.add_option');
    Route::post('attributes/options/{attributeID}', [AttributeController::class, 'store_option'])->name('attributes.store_option');
    Route::delete('attributes/options/{optionID}', [AttributeController::class, 'remove_option'])->name('attributes.remove_option');
    Route::get('attributes/options/{optionID}/edit', [AttributeController::class, 'edit_option'])->name('attributes.edit_option');
    Route::put('attributes/options/{optionID}', [AttributeController::class, 'update_option'])->name('attributes.update_option');
    
    Route::get('awards', AwardIndex::class)->name('awards.index');
    Route::get('brands', BrandIndex::class)->name('brands.index');
    Route::get('category-article', CategoryArticleIndex::class)->name('category-article.index');
    Route::get('category-faq', CategoryFaqIndex::class)->name('category-faq.index');
    Route::get('categories', CategoryIndex::class)->name('categories.index');
    Route::get('clubs', ClubIndex::class)->name('clubs.index');
    Route::get('competitions', CompetitionIndex::class)->name('competitions.index');
    Route::get('contacts', ContactIndex::class)->name('contacts.index');
    Route::get('coupons', CouponIndex::class)->name('coupons.index');
    Route::get('currencies', CurrencyIndex::class)->name('currencies.index');
    Route::get('customers', CustomerIndex::class)->name('customers.index');
    Route::get('customers/{customerId}', CustomerDetail::class)->name('customer-view');
    Route::get('faqs', FaqIndex::class)->name('faqs.index');
    Route::get('leagues', LeagueIndex::class)->name('leagues.index');
    Route::get('team-leagues', TeamLeagueIndex::class)->name('team-leagues.index');
    Route::get('matchs', MatchIndex::class)->name('matchs.index');
    Route::get('matchs/{matchId}/match-gallery', MatchGalleryIndex::class)->name('match-gallery.index');
    Route::get('matchs/{matchId}/match-lineup', MatchLineup::class)->name('match-lineup.index');
    Route::get('matchs/{matchId}/match-report', MatchReportIndex::class)->name('match-report.index');
    Route::get('matchs/{matchId}/match-statistic', MatchStatisticIndex::class)->name('match-statistic.index');
    Route::get('matchs/{matchId}/player/{playerId}', StatisticIndex::class)->name('player-statistic.index');
    
    // 
    Route::get('medias/create', [MediaController::class, 'create']);
    Route::post('medias/store', [MediaController::class, 'store']);
    Route::get('medias/edit/{mediaID}', [MediaController::class, 'edit']);
    Route::put('medias/update', [MediaController::class, 'update'])->name('updateMedia');
    Route::get('medias', MediaIndex::class)->name('medias.index');
    //

    Route::get('notifications', NotificationIndex::class)->name('notifications.index');

    Route::get('payment-method', [PaymentMethodController::class, 'payment_index'])->name('payment-method');
    Route::post('payment-method-update/{payment_method}', [PaymentMethodController::class, 'payment_update'])->name('payment-method-update');
    Route::get('partners', PartnerIndex::class)->name('partners.index');
    Route::get('players', PlayerIndex::class)->name('players.index');
    Route::get('womens', WomenFootBall::class)->name('womens.index');
    Route::get('unders', JuniorFootBall::class)->name('unders.index');
    Route::get('orders', OrderIndex::class)->name('orders.index');
    Route::get('permissions', PermissionIndex::class)->name('permissions.index');
    Route::get('positions', PositionIndex::class)->name('positions.index');
    Route::get('products', ProductIndex::class)->name('products.index');
    Route::get('product-slide', ProductSliderIndex::class)->name('product-slider.index');
    Route::get('roles', RoleIndex::class)->name('roles.index');
    Route::get('schedules', ScheduleIndex::class)->name('schedules.index');
    Route::get('squads', SquadIndex::class)->name('squads.index');
    Route::get('stadions', StadionIndex::class)->name('stadions.index');
    Route::get('staffs', StaffIndex::class)->name('staffs.index');
    Route::get('subscribers', SubscribeIndex::class)->name('subscribers.index');
    Route::get('settings', SettingIndex::class)->name('settings.index');
    Route::get('slides', SlideIndex::class)->name('slides.index');
    Route::get('social-medias', SocialMediaIndex::class)->name('social-medias.index');
    Route::get('trainings', TrainingIndex::class)->name('trainings.index');
    Route::get('training-type', TrainingTypeIndex::class)->name('training-type.index');
    Route::get('training-session', TrainingSessionIndex::class)->name('training-session.index');
    Route::get('trophies', TrophyIndex::class)->name('trophies.index');
    Route::get('users', UserIndex::class)->name('users.index');

    Route::get('users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::post('users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    Route::delete('users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
    Route::post('users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
    Route::delete('users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');

    Route::get('reports/player', [ReportController::class, 'export_player']);

    Route::get('calendar', Calendar::class)->name('calendar.index');
    Route::get('multi', MultiSelect::class)->name('multi.index');
    Route::get('select', SearchSelect::class)->name('select.index');
    Route::get('tag', Tags::class)->name('tag.index');
    Route::get('trix', Trix::class)->name('trix.index');

    Route::resource('events', EventController::class);
    Route::get('events/list', [EventController::class, 'listEvent'])->name('events.list');
});

Route::get('/tes', [DashboardController::class, 'index'])->name('tes.index');
Route::get('/eve', [DashboardController::class, 'tesEvents'])->name('eve.index');
Route::get('/pesan', [DashboardController::class, 'testMessage'])->name('tes.pesan');

// Contact
// Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
// Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

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

// CKEDITOR IMAGE STORE
Route::post('ckeditor', [CkeditorFileUploadController::class, 'store'])->name('ckeditor.upload');

Route::prefix('schedule')->group(function () {
    Route::get('/index', \App\Http\Livewire\Schedule\Index::class)->name('schedule.index');
});

Route::get('search', function() {
    $query = ''; // <-- Change the query for testing.

    $articles = App\Models\Article::search($query)->get();

    $players = App\Models\Player::search($query)->paginate(10);
        // ->where('level', 'senior')
        // ->where('gender', 'men')
        // ->orderBy('name', 'asc')
        // ->paginate(10);

    // return $articles;
    return $players;
});

