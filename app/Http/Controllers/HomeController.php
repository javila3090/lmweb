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

        $config = array();
        $config['center'] = '-33.434844,-70.626295';
        $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
                });
            }
            centreGot = true;';

            app('map')->initialize($config);

            $marker = array();
            app('map')->add_marker($marker);

            $map = app('map')->create_map();
            $map = array('map_js' => $map['js'], 'map_html' => $map['html']);

            return view('welcome',compact('homeBanners','aboutUs','servicesBanners','services','companyInfo','contact','map'));
        }
    }
