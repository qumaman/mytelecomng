@extends('layouts.app')

@section('content')
    <div id="page-wrapper">
        <div class="row  pt-5">
            <div class="col-lg-12">
                <h2 class="page-header"></h2>
                <br>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="pull-right col-md-6">
            <br>
            Под руководством <a href="/profile/{{ @$heads->id }}">{{@$heads->sname}} {{@$heads->fname}} {{@$heads->pname}}</a>
            <br>
        </div>
        <!-- /.row -->
        <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <?php
                                $photo = (!empty($users->photo) ? $users->photo : '/images/profiles/nophoto.jpg')
                            ?>
                            <img src="{{ $photo }}" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Изменить фото
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <h5>
                                {{ @$users->sname }} {{ @$users->fname }} {{ @$users->pname }}
                            </h5>
                            <h6>
                                {{ @$positions->position_name }}
                            </h6>
                            <p class="proile-rating"></p>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Профиль</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        {{--<input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>--}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <h4>Подразделение</h4>
                            <p>{{ @$division->division_name }}</p>
                            <p>{{ @$department->dname }}</p>
                            <p>{{ @$team->tname }}</p>
                            <br>
                            <h4>Теги</h4>
                            <a >#СПД Алматы</a>
                            <a >#Крамер</a>
                            <a >#Согласование РНР</a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $users->email }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Телефон</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $users->phone }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Мобильный</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $users->mobile }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Офис</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $office->address }}</p>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <label>Подчиненные</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="panel-body">
                                <table class="table table-striped table-bordered table-hover">
                                    <tbody>
                                    @foreach($dependants as $key => $dependant)
                                        <tr class="odd gradeX">
                                            <td><a href="/profile/{{ $dependant->id }}">{{$dependant->sname}} {{$dependant->fname}} {{$dependant->pname}}</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <!-- /.table-responsive -->

                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /#page-wrapper -->
@endsection
