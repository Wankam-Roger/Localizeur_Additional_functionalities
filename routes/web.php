<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProxvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/fr');
});


Route::get('/register_user', [\App\Http\Controllers\FrontEndController::class, 'register_user'])
    ->middleware(['guest:'.config('fortify.guard')])
    ->name('register_user');


Route::group(['prefix' => '{language}'], function () {


    Route::get('/community', [\App\Http\Controllers\FrontEndController::class, 'blog_page'])->name('community-page');


    Route::get('/index-3', function () {
        return view('frontend.pages.home-page');
    })->name('index-3');

    Route::get('/', [\App\Http\Controllers\FrontEndController::class, 'index_page'])->name('index');



    Route::get('/search-sector', [\App\Http\Controllers\FrontEndController::class, 'search_by_sector'] )->name('search-sector');

    Route::get('/search-sector-ajax', [\App\Http\Controllers\FrontEndController::class, 'search_by_sector_ajax'] )->name('search-sector-ajax');

    Route::get('/all-companies', [\App\Http\Controllers\FrontEndController::class, 'all_companies_page'] )->name('companies');

    Route::get('/sector/{sectorId}', [\App\Http\Controllers\FrontEndController::class, 'comapanies_by_sector'] )->name('sector-company');

    Route::get('/country/{countryId}', [\App\Http\Controllers\FrontEndController::class, 'comapanies_by_country'] )->name('country-company');

    Route::get('/town/{townId}', [\App\Http\Controllers\FrontEndController::class, 'companies_by_town'])->name('town-company');

    Route::get('/street/{streetId}', [\App\Http\Controllers\FrontEndController::class, 'comapanies_by_street'] )->name('street-company');

    Route::get('/all-business-sectors', [\App\Http\Controllers\FrontEndController::class, 'all_sectors_page'] )->name('business-sectors');

    Route::get('/company/{companyID}', [\App\Http\Controllers\FrontEndController::class, 'single_comapany_page'] )->name('single-company');

    Route::get('/about', [\App\Http\Controllers\FrontEndController::class, 'about_page'])->name('about');

    Route::get('/top-10', [\App\Http\Controllers\FrontEndController::class, 'top_10_companies_page'])->name('top_10_companies_page');

    Route::get('/top-30', [\App\Http\Controllers\FrontEndController::class, 'top_30_companies_page'])->name('top_30_companies_page');

    Route::get('/top-50', [\App\Http\Controllers\FrontEndController::class, 'top_50_companies_page'])->name('top_50_companies_page');

    Route::get('/pricing', [\App\Http\Controllers\FrontEndController::class, 'pricing_page'])->name('pricing_page');

    Route::get('/books', [\App\Http\Controllers\FrontEndController::class, 'books_page'])->name('books_page');

    Route::get('/add_community', [\App\Http\Controllers\FrontEndController::class, 'add_community_page'])->name('add_community_page');

    Route::get('/book/{book_id}', [\App\Http\Controllers\FrontEndController::class, 'single_book_page'])->name('single_book_page');

    /*Route::get('/index-2', function () {
        return view('frontend.layout.main-layout');
    })->name('index-2');*/

    /*Route::get('/about', function () {
        return view('frontend.pages.about-page');
    })->name('about');*/

//-------------------------------------- E N T R E P R I S E   R O U T E S   B E G I N -------------------------------------//



    //--------------------------------------   C  O  M  M  E  N  T      R O U T E S   E N D  -------------------------------------//


    /* ---------------------- S U B S C R I B E R M A I L     R O U T E S     B E G I N  -------------------------- */

    Route::get('/admin_show_subscriber_mails', [\App\Http\Controllers\SubscriberMailController::class, 'index'])->name('admin_show_subscriber_mails_page');
    Route::get('/admin_create_subscriber_mail/', [\App\Http\Controllers\SubscriberMailController::class, 'create'])->name('admin_create_subscriber_mail_page');
    Route::post('/admin_store_subscriber_mail/', [\App\Http\Controllers\SubscriberMailController::class, 'store'])->name('admin_store_subscriber_mail_page');
    Route::post('/admin_store_ajax_subscriber_mail/', [\App\Http\Controllers\SubscriberMailController::class, 'store_ajax'])->name('admin_store_ajax_subscriber_mail_page');
    Route::get('/admin_show_subscriber_mail/{subscriber_mail}', [\App\Http\Controllers\SubscriberMailController::class, 'show'])->name('admin_show_subscriber_mail_page');
    Route::get('/admin_edit_subscriber_mail/{subscriber_mail}', [\App\Http\Controllers\SubscriberMailController::class, 'edit'])->name('admin_edit_subscriber_mail_page');
    Route::post('/admin_update_subscriber_mail', [\App\Http\Controllers\SubscriberMailController::class, 'update'])->name('admin_update_subscriber_mail_page');
    Route::post('/admin_delete_subscriber_mail', [\App\Http\Controllers\SubscriberMailController::class, 'destroy'])->name('admin_delete_subscriber_mail_page');

    Route::post('/admin_store_journal/', [\App\Http\Controllers\PostController::class, 'store'])->name('admin_store_journal_page');

    /* ---------------------- S U B S C R I B E R M A I L     R O U T E S    E N D  -------------------------- */

    Route::post('/store_book_subscriber', [\App\Http\Controllers\SubscriberBookController::class, 'store_frontend'])->name('store_book_subscriber_page');

    Route::middleware([
        'auth:sanctum',
        'verified'
    ])->group(function () {

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::get('/localizer-dashboard', function () {
            return view('backend/pages/initial');
        })->name('localizer-dashboard');

        Route::get('/home', function () {
            return view('backend.pages.home');
        })->name('home');

        /** Enterprises */
        Route::resource('enterprises', \App\Http\Controllers\EnterpriseController::class);

        /** Videos */
        Route::resource('advideos', \App\Http\Controllers\AdvideoController::class);

        /** Users */
        Route::resource('users', \App\Http\Controllers\UserController::class);

        /** Secteurs D'activité */
        Route::resource('secteurs', \App\Http\Controllers\SecteurActiviteController::class);

        /** Quartiers */
        Route::resource('streets', \App\Http\Controllers\StreetController::class);

        /** Profiles */
        Route::resource('communityprofiles', \App\Http\Controllers\CommunityprofileController::class);

        Route::get('/dash', [\App\Http\Controllers\FrontendController::class, 'index_dashboard'])->name('admin_panel');


        /* ---------------------- J O U R N A L S   B A C K E N D  B E G I N  -------------------------- */

        Route::get('/admin_show_journals', [\App\Http\Controllers\PostController::class, 'index'])->name('admin_show_journals_page');
        Route::get('/admin_create_journal/', [\App\Http\Controllers\PostController::class, 'create'])->name('admin_create_journal_page');

        Route::get('/admin_show_journal/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('admin_show_journal_page');
        Route::get('/admin_edit_journal/{post}', [\App\Http\Controllers\PostController::class, 'edit'])->name('admin_edit_journal_page');
        Route::post('/admin_update_journal/{post}', [\App\Http\Controllers\PostController::class, 'update'])->name('admin_update_journal_page');
        Route::post('/admin_delete_journal', [\App\Http\Controllers\PostController::class, 'destroy'])->name('admin_delete_journal_page');

        /* ---------------------- J O U R N A L S   B A C K E N D  E N D  -------------------------- */

        //-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        /* ---------------------- C A T E G O R I E S      B A C K E N D     B E G I N  -------------------------- */

        Route::get('/admin_show_categories',[\App\Http\Controllers\CategoryController::class, 'index'] )->name('admin_show_categories_page');
        Route::get('/admin_create_category/',[\App\Http\Controllers\CategoryController::class, 'create'] )->name('admin_create_category_page');
        Route::post('/admin_store_category/',[\App\Http\Controllers\CategoryController::class, 'store'] )->name('admin_store_category_page');
        Route::get('/admin_show_category/{category}',[\App\Http\Controllers\CategoryController::class, 'show'] )->name('admin_show_category_page');
        Route::get('/admin_edit_category/{category}',[\App\Http\Controllers\CategoryController::class, 'edit'] )->name('admin_edit_category_page');
        Route::post('/admin_update_category',[\App\Http\Controllers\CategoryController::class, 'update'] )->name('admin_update_category_page');
        Route::post('/admin_delete_category',[\App\Http\Controllers\CategoryController::class, 'destroy'] )->name('admin_delete_category_page');

        /* ---------------------- C A T E G O R I E S      B A C K E N D     E N D  -------------------------- */

        //-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


        /* ---------------------- T A G S      B A C K E N D     B E G I N  -------------------------- */

        Route::get('/admin_show_tags',[\App\Http\Controllers\TagController::class, 'index'] )->name('admin_show_tags_page');
        Route::get('/admin_create_tag/', [\App\Http\Controllers\TagController::class, 'create'])->name('admin_create_tag_page');
        Route::post('/admin_store_tag/', [\App\Http\Controllers\TagController::class, 'store'])->name('admin_store_tag_page');
        Route::get('/admin_show_tag/{category}', [\App\Http\Controllers\TagController::class, 'show'])->name('admin_show_tag_page');
        Route::get('/admin_edit_tag/{category}', [\App\Http\Controllers\TagController::class, 'edit'])->name('admin_edit_tag_page');
        Route::post('/admin_update_tag', [\App\Http\Controllers\TagController::class, 'update'])->name('admin_update_tag_page');
        Route::post('/admin_delete_tag', [\App\Http\Controllers\TagController::class, 'destroy'])->name('admin_delete_tag_page');

        /* ---------------------- T A G S     B A C K E N D     E N D  -------------------------- */


        /* ---------------------- B O O K S    R O U T E S     B E G I N  -------------------------- */

        Route::get('/admin_show_books', [\App\Http\Controllers\BookController::class, 'index'])->name('admin_show_books_page');
        Route::get('/admin_create_book', [\App\Http\Controllers\BookController::class, 'create'])->name('admin_create_book_page');
        Route::post('/admin_store_book', [\App\Http\Controllers\BookController::class, 'store'])->name('admin_store_book_page');
        Route::post('/admin_store_ajax_book', [\App\Http\Controllers\BookController::class, 'store_ajax'])->name('admin_store_ajax_book_page');
        Route::get('/admin_show_book/{book}', [\App\Http\Controllers\BookController::class, 'show'])->name('admin_show_book_page');
        Route::get('/admin_edit_book/{book}', [\App\Http\Controllers\BookController::class, 'edit'])->name('admin_edit_book_page');
        Route::post('/admin_update_book', [\App\Http\Controllers\BookController::class, 'update'])->name('admin_update_book_page');
        Route::post('/admin_delete_book/{book}', [\App\Http\Controllers\BookController::class, 'destroy'])->name('admin_delete_book_page');

        /* ---------------------- B O O K S    R O U T E S    E N D  -------------------------- */

        /* ---------------------- B O O K S  T A G S   R O U T E S     B E G I N  -------------------------- */

        Route::get('/admin_show_book_tags', [\App\Http\Controllers\BookTagController::class, 'index'])->name('admin_show_book_tags_page');
        Route::get('/admin_create_book_tag', [\App\Http\Controllers\BookTagController::class, 'create'])->name('admin_create_book_tag_page');
        Route::post('/admin_store_book_tag', [\App\Http\Controllers\BookTagController::class, 'store'])->name('admin_store_book_tag_page');
        Route::post('/admin_store_ajax_book_tag', [\App\Http\Controllers\BookTagController::class, 'store_ajax'])->name('admin_store_ajax_book_tag_page');
        Route::get('/admin_show_book_tag/{book_tag}', [\App\Http\Controllers\BookTagController::class, 'show'])->name('admin_show_book_tag_page');
        Route::get('/admin_edit_book_tag/{book_tag}', [\App\Http\Controllers\BookTagController::class, 'edit'])->name('admin_edit_book_tag_page');
        Route::post('/admin_update_book_tag', [\App\Http\Controllers\BookTagController::class, 'update'])->name('admin_update_book_tag_page');
        Route::post('/admin_delete_book_tag', [\App\Http\Controllers\BookTagController::class, 'destroy'])->name('admin_delete_book_tag_page');

        /* ---------------------- B O O K S T A G S   R O U T E S    E N D  -------------------------- */

        /* ---------------------- B O O K S  T A G S   R O U T E S     B E G I N  -------------------------- */

        Route::get('/admin_show_book_categories', [\App\Http\Controllers\BookCategoryController::class, 'index'])->name('admin_show_book_categories_page');
        Route::get('/admin_create_book_category', [\App\Http\Controllers\BookCategoryController::class, 'create'])->name('admin_create_book_category_page');
        Route::post('/admin_store_book_category', [\App\Http\Controllers\BookCategoryController::class, 'store'])->name('admin_store_book_category_page');
        Route::post('/admin_store_ajax_book_category', [\App\Http\Controllers\BookCategoryController::class, 'store_ajax'])->name('admin_store_ajax_book_category_page');
        Route::get('/admin_show_book_category/{book_category}', [\App\Http\Controllers\BookCategoryController::class, 'show'])->name('admin_show_book_category_page');
        Route::get('/admin_edit_book_category/{book_category}', [\App\Http\Controllers\BookCategoryController::class, 'edit'])->name('admin_edit_book_category_page');
        Route::post('/admin_update_book_category', [\App\Http\Controllers\BookCategoryController::class, 'update'])->name('admin_update_book_category_page');
        Route::post('/admin_delete_book_category', [\App\Http\Controllers\BookCategoryController::class, 'destroy'])->name('admin_delete_book_category_page');

        /* ---------------------- B O O K S T A G S   R O U T E S    E N D  -------------------------- */


        /* ---------------------- B O O K S  S U B S C R I B E R S  R O U T E S     B E G I N  -------------------------- */

        Route::get('/admin_show_book_subscribers', [\App\Http\Controllers\SubscriberBookController::class, 'index'])->name('admin_show_book_subscribers_page');
        Route::get('/admin_create_book_subscriber', [\App\Http\Controllers\SubscriberBookController::class, 'create'])->name('admin_create_book_subscriber_page');
        Route::post('/admin_store_book_subscriber', [\App\Http\Controllers\SubscriberBookController::class, 'store'])->name('admin_store_book_subscriber_page');
        Route::post('/admin_store_ajax_book_subscriber', [\App\Http\Controllers\SubscriberBookController::class, 'store_ajax'])->name('admin_store_ajax_book_subscriber_page');
        Route::get('/admin_show_book_subscriber/{book_subscriber}', [\App\Http\Controllers\SubscriberBookController::class, 'show'])->name('admin_show_book_subscriber_page');
        Route::get('/admin_edit_book_subscriber/{book_subscriber}', [\App\Http\Controllers\SubscriberBookController::class, 'edit'])->name('admin_edit_book_subscriber_page');
        Route::post('/admin_update_book_subscriber', [\App\Http\Controllers\SubscriberBookController::class, 'update'])->name('admin_update_book_subscriber_page');
        Route::post('/admin_delete_book_subscriber', [\App\Http\Controllers\SubscriberBookController::class, 'destroy'])->name('admin_delete_book_subscriber_page');

        /* ---------------------- B O O K S  S U B S C R I B E R S   R O U T E S    E N D  -------------------------- */

        Route::middleware(['auth:sanctum', 'verified'])->get('/entreprises', [\App\Http\Controllers\EnterpriseController::class, 'index'])->name('show-all-enterprises');
        Route::middleware(['auth:sanctum', 'verified'])->get('/create-entreprise', [\App\Http\Controllers\EnterpriseController::class, 'create'])->name('create-enterprise');
        Route::middleware(['auth:sanctum', 'verified'])->post('/update-entreprise', [\App\Http\Controllers\EnterpriseController::class, 'update'])->name('update-enterprise');
        Route::middleware(['auth:sanctum', 'verified'])->get('/edit-entreprise/{companyId}', [\App\Http\Controllers\EnterpriseController::class, 'edit'])->name('edit-enterprise');
        Route::middleware(['auth:sanctum', 'verified'])->post('/store-entreprise', [\App\Http\Controllers\EnterpriseController::class, 'store'])->name('store-enterprise');


//-------------------------------------- E N T R E P R I S E   E N D     -------------------------------------//


//-------------------------------------- D O C U M E N T   R O U T E S   B E G I N -------------------------------------//

        Route::middleware(['auth:sanctum', 'verified'])->get('/documents', [\App\Http\Controllers\DocumentController::class, 'index'])->name('show-all-documents');
        Route::middleware(['auth:sanctum', 'verified'])->get('/create-document', [\App\Http\Controllers\DocumentController::class, 'create'])->name('create-document');
        Route::middleware(['auth:sanctum', 'verified'])->post('/store-document', [\App\Http\Controllers\DocumentController::class, 'store'])->name('store-document');

//-------------------------------------- D O C U M E N T   R O U T E S   E N D -------------------------------------//


//-------------------------------------- C R I T E R E   R O U T E S   B E G I N -------------------------------------//

        Route::middleware(['auth:sanctum', 'verified'])->get('/criteres', [\App\Http\Controllers\CritereController::class, 'index'])->name('show-all-criteres');
        Route::middleware(['auth:sanctum', 'verified'])->get('/create-critere', [\App\Http\Controllers\CritereController::class, 'create'])->name('create-critere');
        Route::middleware(['auth:sanctum', 'verified'])->post('/store-critere', [\App\Http\Controllers\CritereController::class, 'store'])->name('store-critere');

//-------------------------------------- C R I T E R E   R O U T E S    E N D -------------------------------------//


//-------------------------------------- C O M M E N T A I R E S   R O U T E S   B E G I N -------------------------------------//

        Route::middleware(['auth:sanctum', 'verified'])->get('/commentaires', [\App\Http\Controllers\CommentaireController::class, 'index'])->name('show-all-commentaires');
        Route::middleware(['auth:sanctum', 'verified'])->get('/create-commentaire', [\App\Http\Controllers\CommentaireController::class, 'create'])->name('create-commentaire');
        Route::middleware(['auth:sanctum', 'verified'])->post('/store-commentaire', [\App\Http\Controllers\CommentaireController::class, 'store'])->name('store-commentaire');

//-------------------------------------- C O M M E N T A I R E S    R O U T E S   E N D  -------------------------------------//


        //-------------------------------------- S E C T E U R   R O U T E S   B E G I N -------------------------------------//

        Route::middleware(['auth:sanctum', 'verified'])->get('/secteurs', [\App\Http\Controllers\SecteurActiviteController::class, 'index'])->name('show-all-secteurs');
        Route::middleware(['auth:sanctum', 'verified'])->get('/create-secteur', [\App\Http\Controllers\SecteurActiviteController::class, 'create'])->name('create-secteur');
        Route::middleware(['auth:sanctum', 'verified'])->post('/store-secteur', [\App\Http\Controllers\SecteurActiviteController::class, 'store'])->name('store-secteur');
        Route::middleware(['auth:sanctum', 'verified'])->post('/update-secteur', [\App\Http\Controllers\SecteurActiviteController::class, 'update'])->name('update-secteur');
        Route::middleware(['auth:sanctum', 'verified'])->get('/edit-secteur/{secteurId}', [\App\Http\Controllers\SecteurActiviteController::class, 'edit'])->name('edit-secteur');
        Route::middleware(['auth:sanctum', 'verified'])->post('/delete-secteur', [\App\Http\Controllers\SecteurActiviteController::class, 'destroy'])->name('delete-secteur');
        //-------------------------------------- S E C T E U R    R O U T E S   E N D  -------------------------------------//


        //-------------------------------------- H E R O   S E C T I O N   S L I D E S   R O U T E S   B E G I N -------------------------------------//

        Route::middleware(['auth:sanctum', 'verified'])->get('/hero-slides', [\App\Http\Controllers\HeroSectionSliderController::class, 'index'])->name('show-all-hero-slides');
        Route::middleware(['auth:sanctum', 'verified'])->get('/create-hero-slide', [\App\Http\Controllers\HeroSectionSliderController::class, 'create'])->name('create-hero-slide');
        Route::middleware(['auth:sanctum', 'verified'])->post('/store-hero-slide', [\App\Http\Controllers\HeroSectionSliderController::class, 'store'])->name('store-hero-slide');

        //-------------------------------------- H E R O   S E C T I O N   S L I D E S    R O U T E S   E N D  -------------------------------------//


        //--------------------------------------   C  O  U  N  T  R  Y     R O U T E S   B E G I N -------------------------------------//

        Route::middleware(['auth:sanctum', 'verified'])->get('/countries', [\App\Http\Controllers\CountryController::class, 'index'])->name('show-all-countries');
        Route::middleware(['auth:sanctum', 'verified'])->get('/create-country', [\App\Http\Controllers\CountryController::class, 'create'])->name('create-country');
        Route::middleware(['auth:sanctum', 'verified'])->post('/store-country', [\App\Http\Controllers\CountryController::class, 'store'])->name('store-country');
        Route::middleware(['auth:sanctum', 'verified'])->post('/update-country', [\App\Http\Controllers\CountryController::class, 'update'])->name('update-country');
        Route::middleware(['auth:sanctum', 'verified'])->get('/edit-country/{countryId}', [\App\Http\Controllers\CountryController::class, 'edit'])->name('edit-country');

        //-------------------------------------- C  O  U  N  T  R  Y     R O U T E S   E N D  -------------------------------------//


        //--------------------------------------   S  T  R  E  E  T    R O U T E S   B E G I N -------------------------------------//

        Route::middleware(['auth:sanctum', 'verified'])->get('/streets_2', [\App\Http\Controllers\StreetController::class, 'index'])->name('show-all-streets');
        Route::middleware(['auth:sanctum', 'verified'])->get('/create-street', [\App\Http\Controllers\StreetController::class, 'create'])->name('create-street');
        Route::middleware(['auth:sanctum', 'verified'])->post('/store-street', [\App\Http\Controllers\StreetController::class, 'store'])->name('store-street');
        Route::middleware(['auth:sanctum', 'verified'])->post('/update-street', [\App\Http\Controllers\StreetController::class, 'update'])->name('update-street');
        Route::middleware(['auth:sanctum', 'verified'])->get('/edit-street/{streetId}', [\App\Http\Controllers\StreetController::class, 'edit'])->name('edit-street');

        //--------------------------------------   S  T  R  E  E  T     R O U T E S   E N D  -------------------------------------//


        //--------------------------------------   C  O  M  M  E  N  T     R O U T E S   B E G I N -------------------------------------//

        Route::get('/comments', [\App\Http\Controllers\CommentaireController::class, 'index'])->name('show-all-comments');
        Route::get('/create-comment', [\App\Http\Controllers\CommentaireController::class, 'create'])->name('create-comment');
        Route::post('/store-comment', [\App\Http\Controllers\CommentaireController::class, 'store'])->name('store-comment');
        Route::post('/update-comment', [\App\Http\Controllers\CommentaireController::class, 'update'])->name('update-comment');
        Route::get('/edit-street/{commentId}', [\App\Http\Controllers\CommentaireController::class, 'edit'])->name('edit-comment');


    });


});

