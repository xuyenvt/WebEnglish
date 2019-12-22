@extends('admin.master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Story
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Title</th>
                        <th>Category Story</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $stt = 0 ?>
                    @foreach($dataStory as $item)
                    <?php $stt += 1 ?>
                    <tr class="odd gradeX" align="center">
                        <td>{!! $stt !!}</td>
                        <td>{!! $item["storytitle"] !!}</td>
                        <td>
                            <?php 
                                $parent = DB::table('catestory')->where('id', $item["catestory_id"])->first();
                                echo $parent->catesto_title;
                            ?>
                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có chắc muốn xóa không?')" href="{!! URL::route('admin.stories.getDelete', $item['id']) !!}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.stories.getEdit', $item['id']) !!}">Edit</a></td>
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