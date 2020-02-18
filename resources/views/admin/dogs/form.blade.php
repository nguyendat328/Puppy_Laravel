@extends('admin.layouts.layouts')
@section('content')
<script>
    function onresert(){
        var f           = document.add;
        var name        = f.txtName.value ="";
        var country     = f.txtCountry.value="" ;
        var sub         = f.s_content.value="" ; 
        var full        = f.f_content.value="" ;
        var img         = f.image_upload.value="" ;
        var dis         = f.dis_content.value="" ;
    }
</script>
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">TYPE DOG</h4>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <form action="{{isset($dog) ? route('Admin::dogs@edit',[$dog->id]) : route('Admin::dogs@store')}}" 
                    method="POST" name="add" 
                    accept-charset="UTF-8" 
                    role="form" class="form-horizontal group-border-dashed" 
                    style="border-radius: 0px;" id="form_equipment" 
                    enctype="multipart/form-data">
                    @csrf 

                                           
                            <div class="header">
                            @if(isset($dog))                          
                                <h3>Add page </h3>
                            @else
                                <h3>Edit page </h3>
                            @endif

                            </div>
                            <div class="form-group" style="margin-top:5px;margin-bottom:15px;">
                                    <label class="col-sm-3 control-label"><strong>{mess_img1}</strong></label>
                                    <div class="col-sm-9" style="margin-top:7px;color:red;">
                                        <span>{mess_img2}</span>  
                                    </div>
                            </div>
                            <div class="form-group" style="margin-top:5px;margin-bottom:15px;">
                                <label class="col-sm-3 control-label">Name dogs</label>
                                <div class="col-sm-6">
                                    <input placeholder="" class="form-control" name="txtName" type="text" value="{{isset($dog) ? $dog->dog_name : '' }}" required> 
                                </div>
                            </div>
                            <div class="form-group" style="margin-top:5px;margin-bottom:15px;" >
                                <label class="col-sm-3 control-label">Choose country</label>
                                <div class="col-sm-6">
                                    <select name="txtCountry"class="col-sm-2 form-control" required >
                                        <option disabled value="-1" selected>Choose country</option>
                                        @foreach($countrys as $country)
                                        <option value="{{$country->id}}">{{$country->countryname}}</option>
                                        @endforeach
                                    </select> 
                                </div>
                            </div>

                            <div class="form-group" style="margin-top:5px;margin-bottom:15px;">
                                <label class="col-sm-3 control-label">Subcontent</label>
                                <div class="col-sm-9">
                                    <textarea name="s_content" id="short_content" class="form-control" style="height:60px;" required>{{isset($dog) ? $dog->subcontent : '' }} </textarea>
                                </div>
                            </div>
                            <div class="form-group"style="margin-top:5px;margin-bottom:15px;">
                                <label class="col-sm-3 control-label">Fullcontent*</label>
                                <div class="col-sm-9">
                                    <textarea name="f_content" id="content" class="rich_text"required >{{isset($dog) ? $dog->fullcontent : '' }}</textarea>
                                </div>
                            </div>
                            <div class="form-group"style="margin-top:5px;margin-bottom:15px;">
                                <label class="col-sm-3 control-label">Upload image</label>
                                <div class="col-sm-6">
                                    <input type="file" name="image_upload" id="image_upload" class="form-control" >   
                                     
                                <span> {{isset($dog) ? 'If you do not select a new file, the old file do not to be changed!' : ''}} </span>
                                </div>
                                
                                
                            </div>

                        <div class="row">
                            <div class="col-sm-offset-4 col-sm-8">
                                <a href="#" class="btn btn-default" onclick="onresert();">Reset</a>
                                <button id="form_submit" type="submit" class="btn btn-primary wizard-next">Add infomation</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>	
    </div>
@endsection
