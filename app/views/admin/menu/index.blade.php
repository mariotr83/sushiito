@extends('layout.admin')
@section('content')
    @include('_partials.admin.menu.menu')
    <div class="centercontent">
        <div class="pageheader">
            <h1 class="pagetitle">Slider Menú</h1>

        </div><!--pageheader-->
        <div id="contentwrapper" class="contentwrapper">

           <table class="table display">
                           <thead>
                               <tr>
                                   <th></th>
                                   <th>Nombre</th>
                                   <th>Imagen</th>

                                   <th></th>
                                   <th></th>
                               </tr>
                           </thead>
                           <tbody id="sliders_sortable">
                               @foreach($menu_pages as $menu_page)
                                   <tr class="items ui-state-default" id="{{$menu_page->id}}">
                                       <td><span class="ui-icon ui-icon-arrowthick-2-n-s"></span></td>
                                       <td>{{ $menu_page->title }}</td>


                                       <td>{{ $menu_page->image }}</td>
                                       <td>
                                           {{ Form::open(array('method'=>'GET', 'route'=>array('admin_update_menu', $menu_page->id))) }}
                                               {{ Form::submit('Edit') }}
                                           {{ Form::close() }}
                                       </td>
                                       <td>
                                           {{ Form::open(array('route'=>array('delete_menu_slider', $menu_page->id))) }}
                                               {{ Form::submit('Delete') }}
                                           {{ Form::close() }}
                                       </td>
                                   </tr>
                               @endforeach
                           </tbody>
                       </table>
        </div><!--contentwrapper-->
    </div><!--centercontent-->
    <script>
        $(document).ready(function(){
            $('#sliders_sortable').sortable({
                stop: function(event, ui){
                    var new_positions = [];
                    $.map($(this).find('.items'), function(el) {
                        var id = $(el).attr('id');
                        new_positions.push({id: id, position:$(el).index() + 1 }) ;
                    });
                    $.ajax({
                        url : base_url + '/home-slider/update_position',
                        data: {new_positions:new_positions},
                        method: 'POST',
                        success: function(response){

                        }
                    });
                }
            });
        });
    </script>
@stop