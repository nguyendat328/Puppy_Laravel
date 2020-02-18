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
                    <form action="{{route}}" method="POST" name="add" action="#" accept-charset="UTF-8" role="form" class="form-horizontal group-border-dashed" style="border-radius: 0px;" id="form_equipment" enctype="multipart/form-data"><input name="_token" type="hidden" value="KP4b4mMmjbMhX1EFSNetmsk07ZwB2lsN0npOgotc">
                        <input type="hidden" name="_token" value="1">
                    
                            <div class="header">
                                <h3>Add page </h3>
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
                                    <input placeholder="" class="form-control" name="txtName" type="text" required> 
                                </div>
                            </div>
                            <div class="form-group" style="margin-top:5px;margin-bottom:15px;" >
                                <label class="col-sm-3 control-label">Choose country</label>
                                <div class="col-sm-6">
                                    <select name="txtCountry"class="col-sm-2 form-control" required >
                                        <option disabled value="-1" selected>Choose country</option>
                                        <!-- BEGIN: S_COUNTRY -->
                                        <option value="{S_COUNTRY.id}">{S_COUNTRY.countryname}</option>
                                        <!-- END: S_COUNTRY -->
                                    </select> 
                                </div>
                            </div>

                            <div class="form-group" style="margin-top:5px;margin-bottom:15px;">
                                <label class="col-sm-3 control-label">Subcontent</label>
                                <div class="col-sm-9">
                                    <textarea name="s_content" id="short_content" class="form-control" style="height:60px;" required></textarea>
                                </div>
                            </div>
                            <div class="form-group"style="margin-top:5px;margin-bottom:15px;">
                                <label class="col-sm-3 control-label">Fullcontent*</label>
                                <div class="col-sm-9">
                                    <textarea name="f_content" id="content" class="rich_text"required ></textarea>
                                </div>
                            </div>
                            <div class="form-group"style="margin-top:5px;margin-bottom:15px;">
                                <label class="col-sm-3 control-label">Upload image</label>
                                <div class="col-sm-6">
                          
                                    <input type="file" name="image_upload" id="image_upload" class="form-control" required >    
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
