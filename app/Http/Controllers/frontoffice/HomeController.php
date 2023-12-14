<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use App\Models\AdSlide;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostImage;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

use App\Mail\SendMail;
use App\Models\AdminAccount;
use App\Models\BookingSetting;
use App\Models\LanguageAvailable;
use App\Models\LanguageConfig;
use App\Models\LeaveMessage;
use App\Models\User;
use App\Models\BerproductMonthly;
use App\Models\FiberProduct;
use App\Models\PrepaidCategory;
use App\Models\TravelSim;
use Illuminate\Support\Facades\Mail;
use stdClass;

class HomeController extends Controller
{
    public function homePage() {
        $cate_home = Category::whereIn('id', [2, 3, 4, 6])
            ->where('cate_status_display', true)
            ->orderBy('cate_priority')
            ->get();

        $berproducts = BerproductMonthly::where('product_sold', 'no')->where('product_display', 'yes')->inRandomOrder()->distinct()->limit(4)->get();
        $product_fiber = FiberProduct::where('display', true)->OrderBy('priority')->limit(4)->get();
        $post_benefits = Post::select('id','title','thumbnail_link')->where('category', 'LIKE', '%8%')
            ->where('status_display', true)
            ->orderBy('priority')
            ->get();
        $prepaid_cate = PrepaidCategory::select('*', 
            DB::raw("(SELECT MIN(price) FROM prepaid_sims WHERE prepaid_sims.prepaid_cate_id = prepaid_categories.id AND display = true AND delete_status = false) as price"))
            ->where('display', true)
            ->where('delete_status', false)
            ->orderBy('priority')
            ->get();
        $travel_sim = TravelSim::where('travel_cate_id', 23)->where('display', true)->where('delete_status', false)->OrderBy('priority')->get();
        // dd($prepaid_cate);
        return view('frontend.pages.home',compact('cate_home','berproducts', 'product_fiber','post_benefits', 'prepaid_cate','travel_sim'));
    }

    public function thankyou()
    {
        return view("frontend.pages.internet_fiber.thanks");
    }

    public function index(Request $request)
    {
        $pathname = $request->segments();
        $lang = LanguageAvailable::orderby('defaults', 'DESC')->get()->first();
        $defaultLanguage = $lang->abbv_name;
        if (isset($pathname[0])) {
            $defaultLanguage = $pathname[0];
        }
        return redirect()->route('home', ['language' => $defaultLanguage]);
    }

    public function mainContent(Request $request)
    {
        try {
            $pathname = $request->segments();
            $cate = Category::where('language', $pathname[0])->orWhere('cate_url', null)->first();
            if (!isset($cate)) {
                return view('errors.404');
            }
            $lang_config = LanguageConfig::where(['language' => $pathname[0], 'page_control' => $cate->id])
                ->get();
            $lang_config_setting = new stdClass();
            if (!empty($lang_config)) {
                foreach ($lang_config as $key => $data) {
                    $name = $data->param;
                    $lang_config_setting->$name = $data->title;
                }
            }
            $ad_slide = AdSlide::where(['page_id' => $cate->id, 'language' => $pathname[0], 'ad_status_display' => true])
                ->orderBy('ad_priority', 'ASC')
                ->get();
            $main_content = Post::where(['language' => $pathname[0], 'status_display' => true, 'is_mainContent' => true])
                ->where('category', 'LIKE', "%,{$cate->id},%")
                ->where(DB::raw('lower(slug)'), "!=", 'ourstory')
                ->orderBy('priority', 'ASC')
                ->first();
            if (!isset($main_content)) {
                return view('errors.404');
            }
            $page_story = [];
            $page_story[0] = Post::where(['language' => $pathname[0], 'status_display' => true, 'is_mainContent' => false])
                ->where('category', 'LIKE', "%,{$cate->id},%")
                ->where(DB::raw('lower(slug)'), 'ourstory')
                // ->orwhere(DB::raw('lower(slug)'), 'ourstory2')
                ->orderBy("priority", 'ASC')
                ->first();
            $page_story[1] = Post::where(['language' => $pathname[0], 'status_display' => true, 'is_mainContent' => false])
                ->where('category', 'LIKE', "%,{$cate->id},%")
                // ->where(DB::raw('lower(slug)'), 'ourstory')
                ->where(DB::raw('lower(slug)'), 'ourstory2')
                ->orderBy("priority", 'ASC')
                ->first();
            $post = Post::where(['language' => $pathname[0], 'status_display' => true, 'is_mainContent' => false])
                ->where('category', 'LIKE', "%,{$cate->id},%")
                ->where(DB::raw('lower(keyword)'), 'contentmore')
                ->first();
            $page_content = null;
            if ($post) {
                $page_content = PostImage::where(['language' => $pathname[0], 'post_id' => $post->id])
                    ->orderBy('position', 'ASC')
                    ->get();
            }
            $infos = $this->getWebInfo('', $pathname[0]);
            $webInfo = $this->infoSetting($infos);
            return view('frontend.pages.index', [
                'ad_slide' => $ad_slide,
                'main_content' => $main_content,
                'page_story' => $page_story,
                'page_content' => $page_content,
                'web_info' => $webInfo,
                'lang_config' => $lang_config_setting
            ]);
        } catch (Exception $e) {
            return view('frontend.error.404', [
                'error' => $e
            ]);
        }
    }

    public function contentMore(Request $request)
    {
        $pathname = $request->segments();
        $cate = Category::where(['cate_url' => $pathname[1], 'language' => $pathname[0]])->first();
        if (!isset($cate)) {
            return view('errors.404');
        }
        switch ($cate->id) {
            case (2):
                $pageName = 'frontend.pages.menu';
                break;

            case (3):
                $pageName = 'frontend.pages.catering';
                break;

            case (4):
                $pageName = 'frontend.pages.gallery';
                break;

            default:
                $pageName = 'errors.404';
                return view($pageName);
        }
        $banner = AdSlide::where(['page_id' => $cate->id, 'language' => $pathname[0], 'ad_status_display' => true])
            ->orderBy('ad_priority', 'ASC')
            ->first();
        $main_content = Post::where(['language' => $pathname[0], 'status_display' => true, 'is_mainContent' => true])
            ->where('category', 'LIKE', "%,{$cate->id},%")
            ->orderBy('priority', 'ASC')
            ->first();
        if (!isset($main_content)) {
            return view('errors.404');
        }
        $food_pdf = [];
        if ($cate->id !== 2) {
            $post = Post::where(['language' => $pathname[0], 'status_display' => true, 'is_mainContent' => false])
                ->where('category', 'LIKE', "%,{$cate->id},%")
                ->where(DB::raw('lower(keyword)'), 'contentmore')
                ->first();
            $page_content = null;
            if ($post) {
                $page_content = PostImage::where(['language' => $pathname[0], 'post_id' => $post->id])
                    ->orderBy('position', 'ASC')
                    ->get();
            }
        } else {
            $post = null;
            $page_content = Post::where(['language' => $pathname[0], 'status_display' => true, 'is_mainContent' => false])
                ->where('category', 'LIKE', "%,{$cate->id},%")
                ->where(DB::raw('lower(keyword)'), 'product')
                ->orderBy('pin', 'DESC')
                ->get();
            $food_pdf = Post::where(['language' => $pathname[0]])
                ->where('category', 'LIKE', "%,16,%")
                ->get();
        }
        $infos = $this->getWebInfo('', $pathname[0]);
        $webInfo = $this->infoSetting($infos);
        return view($pageName, [
            'banner' => $banner,
            'main_content' => $main_content,
            'page_content' => $page_content,
            'web_info' => $webInfo,
            'food_pdf' => $food_pdf
        ]);
    }

    public function contentSingle(Request $request)
    {
        $pathname = $request->segments();
        $cate = Category::where(['cate_url' => $pathname[1], 'language' => $pathname[0]])->first();
        if (!isset($cate)) {
            return view('errors.404');
        }
        switch ($cate->id) {
            case (5):
                $pageName = 'frontend.pages.delivery';
                $keyword = 'select-menu';
                break;

            case (6):
                $pageName = 'frontend.pages.aboutus';
                $keyword = 'story-show';
                break;

            case (7):
                $pageName = 'frontend.pages.our-location';
                $keyword = '';
                break;

            case (8):
                $pageName = 'frontend.pages.contact-us';
                $keyword = '';
                break;

            case (9):
                $pageName = 'frontend.pages.booking';
                $keyword = '';
                break;

            default:
                $pageName = 'errors.404';
                return view($pageName);
        }
        $banner = AdSlide::where(['page_id' => $cate->id, 'language' => $pathname[0], 'ad_status_display' => true])
            ->orderBy('ad_priority', 'ASC')
            ->first();
        $main_content = Post::where(['language' => $pathname[0], 'status_display' => true, 'is_mainContent' => true])
            ->where('category', 'LIKE', "%,{$cate->id},%")
            ->orderBy('priority', 'ASC')
            ->first();
        if (!isset($main_content)) {
            return view('errors.404');
        }
        $page_content = Post::where(['language' => $pathname[0], 'status_display' => true, 'is_mainContent' => false])
            ->where('category', 'LIKE', "%,{$cate->id},%")
            ->where(DB::raw('lower(keyword)'), $keyword)
            ->orderBy('priority', 'ASC')
            ->get();
        $booking_setting = BookingSetting::orderBy('created_at', 'DESC')->first();
        $infos = $this->getWebInfo('', $pathname[0]);
        $webInfo = $this->infoSetting($infos);
        return view($pageName, [
            'banner' => $banner,
            'main_content' => $main_content,
            'page_content' => $page_content,
            'web_info' => $webInfo,
            'booking_setting' => $booking_setting ? $booking_setting : null
        ]);
    }

    public function booking(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'firstname' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'people_number' => 'required',
            'time_selected' => 'required',
        ]);
        if ($validated->fails()) {
            return response()->json([
                'message' => 'input had invalid.'
            ], 400);
        }
        try {
            $book = Booking::create([
                'firstname' => $request->input('firstname'),
                'surname' => $request->input('surname'),
                'email' => $request->input('email'),
                'specific_request' => $request->input('request'),
                'forgroup' => $request->input('forgroup'),
                'people_number' => (int)$request->input('people_number'),
                'phone' => $request->input('phone'),
                'time_booking' => date('Y-m-d H:i:s', strtotime($request->input('time_selected'))),
                'status' => 'reserve',
            ]);
            $this->sendmail($book);
            return response()->json([
                'message' => 'successfully booked'
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'something went wrong.'
            ], 500);
        }
    }

    public function sendContact(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);
        if ($validated->fails()) {
            return response()->json([
                'message' => 'input had invalid.'
            ]);
        }
        try {
            $message = LeaveMessage::create([
                'fullname' => $request->input('name'),
                'email' => $request->input('email'),
                'phone_number' => $request->input('phone'),
                'message' => $request->input('message'),
                'language' => '',
            ]);
            return response()->json([
                'message' => 'successfully'
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'something went wrong.'
            ], 500);
        }
    }

    public function sendmail($book)
    {
        try {
            $infos = $this->getWebInfo('',);
            $webInfo = $this->infoSetting($infos);
            $users = [
                $webInfo->contact->email->value,
                $book->email
            ];
            foreach ($users as $user) { // sending mail to users.
                Mail::to($user)->send(new SendMail($book, $webInfo));
            }
            return response()->json([
                'message' => 'send mail successfully.'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'some thing went wrong.'
            ]);
        }
    }
}