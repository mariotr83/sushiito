<?php

class MenuController extends BaseController
{

    /**
     * List all the online links
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $menu_pages = Menu::orderBy('id')->get();
        $total_pages = Menu::all()->count();
        return View::make('admin.menu.index', array('menu_pages' => $menu_pages, 'total' => $total_pages));
    }

    public function show($id){
        $menu = Menu::find($id);
        return View::make('admin.menu.update', array('menu'=>$menu));
    }

    public function create(){
        return View::make('admin.menu.createSlider');
    }

    public function createpdf(){
        return View::make('admin.menu.createPdf');

    }


    public function update($id){
        $rules = array(
            'title'=>'required',
            'image'=>'image'
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){
            return Redirect::back()->withErrors($validator->getMessageBag());
        }

        $menu = Menu::find($id);
        $menu->title = Input::get('title');

        $menu->save();

        if(Input::file('image')){
            // delete current image
            if(is_file(public_path().'/img/sliderImages/'.$menu->image)){
                unlink(public_path().'/img/sliderImages/'.$menu->image);
            }

            $file = Input::file('image');
            $image_name = str_random(10);
            $image_extention = $file->getClientOriginalExtension();

            $img = Image::make($file->getRealPath())->resize(1920, 1080);
            $img->save(public_path().'/img/sliderImages/'.$image_name.'.'.$image_extention);

            $menu->image = $image_name.'.'.$image_extention;
            $menu->save();
        }
return Redirect::back();
}

    public function addMenuSlider(){
        $rules = array(
            'title'=>'required',
            'image'=>'required|image'
        );

        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()){
            return Redirect::back()->withErrors($validator->getMessageBag());
        }

        // save the image
        $file = Input::file('image');
        $image_name = str_random(10);
        $image_extension = $file->getClientOriginalExtension();

        $img = Image::make($file->getRealPath())->resize(1349, 665);
        $img->save(public_path().'/img/sliderImages/'.$image_name.'.'.$image_extension);

        Menu::create(array(
            'image'=>$image_name.'.'.$image_extension,
            'title'=>Input::get('title'),

        ));
        return Redirect::back();
    }

    public function delete($id){
        $menu = Menu::find($id);
        // delete image
        if(is_file(public_path().'/sliderImages/'.$menu->image)){
            unlink(public_path().'/sliderImages/'.$menu->image);
        }
        $menu->delete();
        return Redirect::back();
    }

    /**
     * Update the position
     * @return \Illuminate\Http\JsonResponse
     */
    public function updatePosition(){
        $new_positions = Input::get('new_positions');
        foreach($new_positions as $position){
            Menu::find($position['id'])->update(array(
                'position'=>$position['position']
            ));
        }
        return Response::json(Input::all());
    }


    public function addpdf(){
        $rules = array(
            'title'=>'required',
            'file'=>'required'
        );

        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()){
            return Redirect::back()->withErrors($validator->getMessageBag());
        }



        if( Input::file('file')->getMimeType() == 'application/pdf')
        {

            $filename = time().'_menu.pdf';
            $path= public_path().'/img/menu/';
            Input::file('file')->move($path, $filename);

            $menuPDF = MenuPDF::first();

            if(is_null($menuPDF))
            {
                $menuPDF = Menupdf::create([
                    'file'=>$filename,
                    'title'=>Input::get('title'),
                ]);

            }

            $menuPDF->title = Input::get('title');
            $menuPDF->file = $filename;
            $menuPDF->save();

            return Redirect::back();

        }


        return Redirect::back()->with('msg', 'Archivo no es PDF');




    }


}
