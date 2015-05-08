<?php

class OnlineController extends BaseController
{

    /**
     * List all the online links
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $link_pages = OnlineOrder::orderBy('id')->get();
        $total_pages = OnlineOrder::all()->count();
        return View::make('admin.online_order.index', array('link_pages' => $link_pages, 'total' => $total_pages));
    }

    /**
     * Shows the form to edit a link
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id){
        $link = OnlineOrder::find($id);
        return View::make('admin.online_order.update', array('link'=>$link));
    }

    public function update($id)
    {
        $rules = array(
            'url' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){
            return Redirect::back()->withErrors($validator->getMessageBag());
        }

        $link = OnlineOrder::find($id);
        $link->url= Input::get('url');

        $link->save();

        return Redirect::back();



    }





}
