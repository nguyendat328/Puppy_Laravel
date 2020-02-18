@extends('admin.layouts.layouts')
@section('content')
<!-- //<script> 

// 	function onCkeckAll(){
//         var f = document.frmTable;
// 	    var cki = document.getElementsByName('ckOne');
	
// 		if(f.ckAll.checked==true){
// 			for(let i=0; i<cki.length; i++){
// 				cki[i].checked = true;
// 			}
// 		}else{
// 			for(let i=0; i<cki.length; i++){
// 				cki[i].checked = false;
// 			}
// 		}
// 	}
// 	function getId(_ckName){
// 		var arr = new Array();
// 		var f = document.frmTable;
// 		var cki = document.getElementsByName(_ckName);
// 		for(i=0; i<cki.length; i++){
// 			if(cki[i].checked === true){
// 				arr.push(cki[i].value);
// 			}
// 		}
// 		if(arr.length==0){
// 			return false;
// 		}else{
// 			return arr;
//         }
      
//     }
//     function onDeleteAll(){
        
// 		var f = document.frmTable;
// 		var cki = document.getElementsByName('ckOne');
//         var lsId = getId('ckOne');
//        	if(lsId===false){
// 			alert("Please choose at least one");
// 			return false;
// 		}else{
//             var per=document.getElementById('readPer').value;
// 				if(per=="manager"){
// 					alert("You do not have permission for this action!");
					
// 				}else{

//                     if(confirm("Do you want to delete?")){
//                         //DELETE FROM tbl WHERE ID IN (1,2,5);
        
//                         listID = lsId.join(',');
        
//                         window.location.href = "?m=typedog&a=delete&lsid="+listID;	
//                     }
//                 }
// 		}
// 	}
//     function onAdd(){
// 		window.location.href="?m=typedog&a=add";
// 	}
//     function onDelete(_id){
//         var per=document.getElementById('readPer').value;
// 				if(per=="manager"){
// 					alert("You do not have permission for this action!");
					
// 				}else{
                    
//                     if(confirm("Do you want to delete this record?")){
//                         window.location.href="?m=typedog&a=delete&id="+_id;
//                     }
//                 }
//     }
//     function onEdit(_id){
//         if(confirm("Do you want to edit this record?")){
//             window.location.href="?m=typedog&a=edit&id="+_id;
//         }
//     }
//     function setLimit(){
//         var s= document.getElementById('txtLimit').value;
//         
//        // alert(limit);
       
//     }
//  $(document).ready(function(){
//     var url;
        
        
//         url="{baseUrl}/admin/ajax/typedog/sethighlight.php";
//         $("#readHighlight").load(url);
//  });
//     function onsethighlight(_id){
//         var url;
        
        
//         url="{baseUrl}/admin/ajax/typedog/sethighlight.php?id="+_id;
//         $("#readHighlight").load(url);
// 	}
// </script> -->

<!-- // chia tach doan scrip ra -->
<form method='POST' name='frmTable'>
@csrf 
<div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Dashboard</h4>
        </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <input type="submit" value="Search" class="btn btn-primary pull-right m-l-20"  style="margin-top:5px;">
        <ol class="breadcrumb">
            <li>
                    <input type="search" name="search" class=" form-control input-sm" placeholder="" autocomplete="off" aria-controls="datatable-icons">

            </li>
            
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title"><strong>Table : type dogs</strong></h3>
            <div id="datatable-icons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row table-responsive">
                    <div class="col-sm-12">
                        <div id="datatable-icons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                                <div class="col-sm-6">
                                    <form action=" {{route('Admin::dogs@limit')}}" method="post">
                                    @csrf 
                                    
                                    <div class="dataTables_length" id="datatable-icons_length">
                                        <label>Show
                                            <select name="txtLimit" aria-controls="datatable-icons" class="form-control input-sm" onchange="setLimit();">
                                                <option value="5"{select5}>5</option>
                                                <option value="10"{select10}>10</option>
                                                <option value="20"{select20}>20</option>
                                            </select> record.  
                                        </label>
                                        <input type="submit" value="display">
                                            
                                    </div>
                                    </form>
                                </div>
                                <div class="col-sm-6">
                                    <div class="pull-right">
                                        <button type="button" class="btn btn-success" style="margin-right:5px;" onclick="onAdd();">Add</button>
                                        <button type="button" class="btn btn-danger pull-right" style="margin-right:5px;" onclick="onDeleteAll();">Delete</button>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- PHẦN BẢNG=--------------------------->
                                        <table id="datatable-icons" class="table table-striped dataTable no-footer" role="grid" aria-describedby="datatable-icons_info">
                                            <thead>
                                                <tr role="row">
                                                        <th style="width: 26px;" class="sorting_asc" tabindex="0" aria-controls="datatable-icons" rowspan="1" colspan="1" aria-sort="ascending" aria-label="STT: activate to sort column descending">#</th>
                                                        <th style="width: 26px;" class="sorting_asc" tabindex="0" aria-controls="datatable-icons" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending">ID</th>
                                                        <th style="width: 120px;" class="sorting" tabindex="0" aria-controls="datatable-icons" rowspan="1" colspan="1" aria-label="Ảnh: activate to sort column ascending">Image</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable-icons" rowspan="1" colspan="1" aria-label="Tên loại chó: activate to sort column ascending" style="width: 300px;">Name of Dogs</th>
                                                        <th style="width: 138px;" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Thao tác">Action</th>
                                                        <th style="width: 70px;" rowspan="1" colspan="1" aria-label="highlight"id="readHighlight">Highlight</th>
                                                        <th style="width: 80px;" tabindex="0" aria-controls="datatable-icons" rowspan="1" colspan="1"><input type='checkbox' name='ckAll' onclick='onCkeckAll();' /></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($showdog as $content)
                                            
                                                <tr role="row" class="odd">
                                                    <td>{{$loop->iteration}}</td>
                                                    <td class="sorting_1">{{$content->id}}</td>
                                                    <td>                                                   
                                                        <img style="width: 100px;" src="http://localhost/project/public//img/{{$content->img}}">
                                                        <br>
                                                    </td>
                                                    <td>
                                                        <strong>{{$content->dog_name}}</strong>
                                                        <br>
                                                        <i>{{$content->subcontent}}</i>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-info btn-margin" href="#" onclick="onEdit({{$content->id}})">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a href="#" class="delete_equipment btn btn-danger btn-margin" name="delete" onclick="onDelete({{$content->id}});">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                    <label class="switch">
                                                        @if($content->highlight==1)
                                                        <input type="checkbox" checked onclick="onsethighlight({{$content->id}});">
                                                        @else
                                                        <input type="checkbox" onclick="onsethighlight({{$content->id}});">
                                                        @endif
                                                        <span class="slider"></span>
                                                        </label> 
                                                    </td>
                                                    <td> 
                                                        <input type='checkbox' name='ckOne' value='{{$content->id}}' onclick ='getId()' />
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="dataTables_info" id="datatable-icons_info" role="status" aria-live="polite">Display from {s} to {nas} of {total} record.</div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="datatable-icons_paginate">
                                        <ul class="pagination">
                                           
                                           
                                            <li class="paginate_button active">
                                            {!!$showdog->links()!!}
                                                <!-- <a href="{baseUrl}admin?m=table&a=Typedog&page={i}" aria-controls="datatable-icons" data-dt-idx="{i}" tabindex="0">{i}</a> -->
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
