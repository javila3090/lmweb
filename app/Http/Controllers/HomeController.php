<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\BannerType;
use App\Section;
use App\CompanyInfo;

class HomeController extends Controller
{
    public function index(){

    	$homeBanners = Banner::where('banner_type_id',1)->get();
    	$servicesBanners = Banner::where('banner_type_id',2)->limit(3)->get();
    	$services = Section::where('section_type_id',2)->first();
    	$aboutUs = Section::where('section_type_id',1)->first();
    	$contact = Section::where('section_type_id',3)->first();
    	$companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();

    	return view('welcome',compact('homeBanners','aboutUs','servicesBanners','services','companyInfo','contact'));
    }
}
