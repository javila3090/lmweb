<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use App\Banner;
use App\Section;

class BannerController extends Controller
{

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index(){

		$banners = Banner::all();
		return view('admin.banner.index',compact('banners'));
	}

    public function create(){

		return view('admin.banner.add');
	}

	public function store(Request $request){

		$rules = array(
			'title' => 'required',
			'banner_type_id' => 'required',
			'image' => 'mimes:jpeg,jpg,png,gif',
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {

			$messages = $validator->messages();
			return redirect('admin/banner/add')->withErrors($messages);

		}else{

			$file = Input::file('image');

			if($file != ""){
                //Creamos una instancia de la libreria instalada   
				$image = Image::make(Input::file('image'));
                //Ruta donde queremos guardar las imagenes
				$path = public_path().'/uploads/banners/';
                // Guardar Original
                //$image->save($path.$file->getClientOriginalName());
                // Cambiar de tamaño
			//$image->resize(300,500);
                // Guardar
				$image->save($path.$file->getClientOriginalName());
			}
            //Guardamos nombre y nombreOriginal en la BD
			$banner = new Banner();
			$banner->title = Input::get('title');
			$banner->subtitle = Input::get('subtitle');
			$banner->caption = Input::get('caption');
			$banner->banner_type_id = Input::get('banner_type_id');
			if($file != ""){
				$banner->image = 'uploads/banners/'.$file->getClientOriginalName();
			}
			$banner->save(); 
		}
		return redirect('admin/banner/add')->with('message', '¡Registro guardado con éxito!');
	}

	public function edit($id){

		$banner = Banner::find($id);
		$banner_types = Banner::All()->pluck('name','id');
		$selected_banner = Banner::where('id',$banner->banner_type_id)->first();

		return view('admin.banner.edit',compact('banner','banner_types','selected_banner'));
	}

	public function update(){
		
	}
}
