@extends('admin.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category Video
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7">
                @include('admin.blocks.error')<!--báo lỗi-->
                
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                    <div class="form-group">
                        <label>Title - EN</label>
                        <input class="form-control" name="txtTitleEn" placeholder="Please Enter Title Story" value="{!! old('txtTitleEn', isset($catevideo) ? $catevideo['catevi_title'] : null) !!}" />
                    </div>
                    <div class="form-group">
                        <label>Category Story Description</label>
                        <textarea class="form-control" rows="3" name="txtDesc"> {!! old('txtDesc', isset($catevideo) ? $catevideo['desc'] : null) !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Order</label>
                        <input class="form-control" name="txtOrder" type="number" min="1" max="20" placeholder="Please Enter Order Category" value="{!! old('txtOrder', isset($catevideo) ? $catevideo['order'] : null) !!}"/>
                    </div>
                    <div class="form-group">
                        <label>Type Video</label>
                        <input class="form-control" name="Type" type="number" min="1" max="20" placeholder="Please Enter Type Category" value="{!! old('Type', isset($catevideo) ? $catevideo['type'] : null) !!}"/>
                    </div>
                    <div class="form-group">
                        <label>Images Current</label>
                        <img src="{!! url('resources/upload/imagevideo/'.$catevideo['image']) !!}" width="150px">
                        <input type="hidden" name="imgCurrent" value="{!! $catevideo['image'] !!}"/>
                    </div>
                    <div class="form-group">
                        <label>Change Images</label>
                        <input type="file" name="imagesStory">
                    </div>
                    <button type="submit" class="btn btn-default">Category Video Edit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection()