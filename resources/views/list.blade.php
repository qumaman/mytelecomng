@extends('layouts.app')

@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Список сотрудников
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Ф.И.О.</th>
                                    <th>Филиал</th>
                                    <th>Блок</th>
                                    <th>Группа</th>
                                    <th>Подгруппа</th>
                                    <th>Должность</th>
                                    <th class="email_td">E-mail</th>
                                    <th>Телефон</th>
                                    <th>Мобильный</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $key => $user)
                                    <tr class="odd gradeX">
                                        <td><a href="/profile/{{ $user->id }}">{{$user->sname}} {{$user->fname}} {{$user->pname}}</a></td>
                                        <td class="center">{{$user->division_name}}</td>
                                        <td class="center">{{$user->dname}}</td>
                                        <td class="center">{{$user->tname}}</td>
                                        <td class="center">{{$user->subteam}}</td>
                                        <td class="center">{{$user->position_name}}</td>
                                        <td class="email_td">{{$user->email}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$user->mobile}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->
@endsection