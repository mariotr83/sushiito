<?php

class SliderController extends BaseController{

    /**
     * List all the slides
     * @return \Illuminate\View\View
     */
    public function index(){
        $slider_pages = Slider::orderBy('position')->get();
        $total_pages  = Slider::all()->count();
        return View::make('admin.home_slider.index', array('slider_pages'=>$slider_pages, 'total'=>$total_pages));
    }

    /**
     * Shows the form to add a new slide
     * @return \Illuminate\View\View
     */
    public function create(){
        return View::make('admin.home_slider.create');
    }

    /**
     * Shows the form to edit a slide
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id){
        $slide = Slider::find($id);
        return View::make('admin.home_slider.update', array('slide'=>$slide));
    }

    /**
     * Update a slide
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id){

        $rules = array(
            'title'=>'required',
            'image'=>'image'
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){
            return Redirect::back()->withErrors($validator->getMessageBag());
        }

        $slide = Slider::find($id);
        $slide->title = Input::get('title');

        $slide->save();

        if(Input::file('image')){
            // delete current image
            if(is_file(public_path().'/img/sliderImages/'.$slide->image)){
                unlink(public_path().'/img/sliderImages/'.$slide->image);
            }

            $file = Input::file('image');
            $image_name = str_random(10);
            $image_extention = $file->getClientOriginalExtension();

            $img = Image::make($file->getRealPath())->resize(1920, 1080);
            $img->save(public_path().'/img/sliderImages/'.$image_name.'.'.$image_extention);

            $slide->image = $image_name.'.'.$image_extention;
            $slide->save();
        }
        return Redirect::back();
    }

    /**
     * Create a new slide
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add(){
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

        Slider::create(array(
            'image'=>$image_name.'.'.$image_extension,
            'title'=>Input::get('title'),

        ));
        return Redirect::back();
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id){
        $slide = Slider::find($id);
        // delete image
        if(is_file(public_path().'/sliderImages/'.$slide->image)){
            unlink(public_path().'/sliderImages/'.$slide->image);
        }
        $slide->delete();
        return Redirect::back();
    }

    /**
     * Update the position
     * @return \Illuminate\Http\JsonResponse
     */
    public function updatePosition(){
        $new_positions = Input::get('new_positions');
        foreach($new_positions as $position){
            Slider::find($position['id'])->update(array(
                'position'=>$position['position']
            ));
        }
        return Response::json(Input::all());
    }
}