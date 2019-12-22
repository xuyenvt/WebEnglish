@extends('admin.master')
@section('content')
<!-- Story add Group-->
<div id="page-wrapper">
    <div class="container-fluid" style="margin-top: -150px">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Video
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom: 100px">
                @include('admin.blocks.error')<!--báo lỗi-->

                <form action="{!! route('admin.videos.getAdd') !!}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                    <div class="form-group">
                        <label>Title - EN</label>
                        <input class="form-control" name="txtTitleVideo" placeholder="Please Enter Title Video" value="{!! old('txtTitleVideo') !!}" />
                    </div>
                    <div class="form-group">
                        <label>Link Video</label>
                        <input class="form-control" name="urlVideo" placeholder="Please Enter URL Video" value="{!! old('urlVideo') !!}" />
                    </div>
                    <div class="form-group">
                        <label>Video Description</label>
                        <textarea class="form-control" rows="3" name="txtDesc">{!! old('txtDesc') !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Category Video</label>
                        <select class="form-control" name="id_category">
                            <option value="">Please choose category video</option>
                            @foreach($Listcate as $item)
                            <option value="{{$item->id}}">{{$item->catevi_title}}</option>
                            @endforeach   
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" name="imagesStory">
                    </div>
                    <button type="submit" class="btn btn-default">Video Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection()

