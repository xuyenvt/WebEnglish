@extends('admin.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category Video
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Title-EN</th>
                        <th>Description</th>
                        <th>Type</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 0 ?>
                    @foreach($data as $item)
                    <?php $stt += 1 ?>
                    <tr class="odd gradeX" align="center">
                        <td>{!! $stt !!}</td>
                        <td>{!! $item["catevi_title"] !!}</td>
                        <td>{!! $item["desc"] !!}</td>
                        <td>{!! $item["type"] !!}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có chắc muốn xóa không? Nếu bạn xóa tất cả các video thuộc danh mục này sẽ mất!')" href="{!! URL::route('admin.catevideo.getDelete', $item['id']) !!}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.catevideo.getEdit', $item['id']) !!}">Edit</a></td>
                    </tr>
                    @endforeach()
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection()