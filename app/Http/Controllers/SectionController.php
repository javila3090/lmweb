<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use App\Banner;
use App\Section;

class SectionController extends Controller
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

		$sections = Section::all();
		return view('admin.section.index',compact('sections'));
	}

	public function create(){

		return view('admin.section.add');
	}

	public function store(Request $request){


		$rules = array(
			'title' => 'required',
			'section_type_id' => 'required',
			'image' => 'mimes:jpeg,jpg,png,gif',
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {

			$messages = $validator->messages();
			return redirect('admin/section/add')->withErrors($messages);        
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
			$section = new Section();
			$section->title = Input::get('title');
			$section->subtitle = Input::get('subtitle');
			$section->content = Input::get('content');
			$section->section_type_id = Input::get('section_type_id');
			if($file != ""){
				$section->image = 'uploads/banners/'.$file->getClientOriginalName();
			}
			$section->save(); 
		}
		return redirect('admin/section/add')->with('message', '¡Registro guardado con éxito!');
	}
}
