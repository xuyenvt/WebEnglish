@extends('admin.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Video
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="margin-bottom: 100px">
                @include('admin.blocks.error')<!--báo lỗi-->
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                    <div class="form-group">
                        <label>Title - EN</label>
                        <input class="form-control" name="txtTitleVideo" placeholder="Please Enter Title Video" value="{!! old('txtTitleVideo', isset($data) ? $data['videotitle'] : null) !!}" />
                    </div>
                    <div class="form-group">
                        <label>Link Video</label>
                        <input class="form-control" name="urlVideo" placeholder="Please Enter URL Video" value="{!! old('urlVideo', isset($data) ? $data['link'] : null) !!}" />
                    </div>
                    <div class="form-group">
                        <label>Description Video</label>
                        <textarea class="form-control" rows="3" name="txtDesc"> {!! old('txtDesc', isset($data) ? $data['desc'] : null) !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Category Video</label>
                        <select class="form-control" name="id_category">
                            @foreach($Listcate as $item)
                            <option value="{{$item->id}}" 
                                @if($item->id == $data['catevideo_id'])
                                    selected="selected"
                                @endif
                            >{{$item->catevi_title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Images Current</label>
                        <img src="{!! url('resources/upload/imagevideo/'.$data['image']) !!}" width="150px">
                        <input type="hidden" name="imgCurrent" value="{!! $data['image'] !!}"/>
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" name="imagesStory">
                    </div>
                    <button type="submit" class="btn btn-default">Viedo Edit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection()
