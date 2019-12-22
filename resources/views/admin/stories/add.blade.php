@extends('admin.master')
@section('content')
<!-- Story add Group-->
<div id="page-wrapper">
    <div class="container-fluid" style="margin-top: -150px">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Story
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom: 100px">
                @include('admin.blocks.error')<!--báo lỗi-->
                <form action="{!! route('admin.stories.getAdd') !!}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                    <div class="form-group">
                        <label>Title - EN</label>
                        <input class="form-control" name="txtTitleStory" placeholder="Please Enter Title Story" value="{!! old('txtTitleStory') !!}" />
                    </div>
                    <div class="form-group">
                        <label>Content Story</label>
                        <textarea class="form-control" rows="3" name="txtContentStory" id="editor1">{!! old('txtContentStory') !!}</textarea>
                        <script> CKEDITOR.replace( 'editor1', {
                            filebrowserBrowseUrl: '{{ asset('public/admin/ckfinder/ckfinder.html') }}',
                            filebrowserImageBrowseUrl: '{{ asset('public/admin/ckfinder/ckfinder.html?type=Images') }}',
                            filebrowserFlashBrowseUrl: '{{ asset('public/admin/ckfinder/ckfinder.html?type=Flash') }}',
                            filebrowserUploadUrl: '{{ asset('public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                            filebrowserImageUploadUrl: '{{ asset('public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                            filebrowserFlashUploadUrl: '{{ asset('public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
                        } ); 
                        </script>
                    </div>
                    <div class="form-group">
                        <label>Category Story</label>
                        <select class="form-control" name="id_category">
                            <option value="">Please choose id category story</option>
                            @foreach($Listcate as $item)
                            <option value="{{$item->id}}">{{$item->catesto_title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" name="imagesStory">
                    </div>
                    <button type="submit" class="btn btn-default">Story Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection()

