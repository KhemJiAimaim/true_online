<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use App\Models\AdSlide;
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
use App\Models\LanguageAvailable;
use App\Models\LanguageConfig;
use App\Models\LeaveMessage;
use App\Models\User;
use App\Models\BerproductMonthly;
use App\Models\FiberProduct;
use App\Models\PrepaidCategory;
use App\Models\TravelSim;
use Illuminate\Support\Facades\Mail;
class HomeController extends Controller
{
    public function homePage() {
        $menus = Post::join('post_images', 'posts.id', '=', 'post_images.post_id')
            ->where('posts.category', 'LIKE', '%1%')
            ->where('posts.pin', true)
            ->where('posts.status_display', true)
            ->orderBy('posts.priority')
            ->get(['posts.*', 'post_images.image_link']);

        // dd($menus);
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
            DB::raw("(SELECT id FROM prepaid_sims WHERE prepaid_sims.prepaid_cate_id = prepaid_categories.id AND display = true AND delete_status = false ORDER BY price ASC LIMIT 1) as prepaid_sim_id"),
            DB::raw("(SELECT MIN(price) FROM prepaid_sims WHERE prepaid_sims.prepaid_cate_id = prepaid_categories.id AND display = true AND delete_status = false) as price"))
            ->where('display', true)
            ->where('delete_status', false)
            ->orderBy('priority')
            ->get();
        $travel_sim = TravelSim::where('travel_cate_id', 23)->where('display', true)->where('delete_status', false)->OrderBy('priority')->get();
        return view('frontend.pages.home',compact('cate_home','menus', 'berproducts', 'product_fiber','post_benefits', 'prepaid_cate','travel_sim'));
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
