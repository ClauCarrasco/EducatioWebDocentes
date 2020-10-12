@extends("theme.$theme.layout")

@section('contenido')
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-book"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Mis Cursos</span>
                        <span class="info-box-number">{{$misCursos}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Mis Alumnos</span>
                        <span class="info-box-number">{{$misAlumnos}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-file-text-o"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Mesas Examen </span>
                        <span class="info-box-more">(Próx. 7 días)</span>
                        <span class="info-box-number">{{$misMesasExamen7dias}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-file-text"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Mesas Examen </span>
                        <span class="info-box-more">(Próx.30 días)</span>
                        <span class="info-box-number">{{$misMesasExamen30dias}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- /.col -->
        </div>
        <!-- /.row -->



        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-12">

                <!-- TABLE: LATEST ORDERS -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Mis Cursos</h3>


                    </div>
                    <!-- /.box-header -->

                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>Materia</th>
                                    <th>Módulo</th>
                                    <th>Inscriptos</th>
                                    <th>Planes</th>
                                    <th>Docentes</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="{{ route('vercurso',1)}}"><strong>Administracion RRHH I</strong></a></td>
                                    <td>Tarde</td>
                                    <td><span class="label label-success">25</span></td>
                                    <td>TEC. Sup. en RRHH </td>
                                    <td>Pierce/Garcia</td>

                                </tr>
                                <tr>
                                    <td><a href="{{ route('vercurso',2)}}"><strong>Administracion RRHH II</strong></a></td>
                                    <td>Mañana </td>
                                    <td><span class="label label-warning">10</span></td>
                                    <td>TEC. Sup. en RRHH </td>
                                    <td>Pierce/Garcia</td>

                                </tr>
                                <tr>
                                    <td><a href="{{ route('vercurso',3)}}"><strong>Comunicaciones</strong></a></td>
                                    <td>Tarde</td>
                                    <td><span class="label label-danger">8</span></td>
                                    <td>TEC. Sup. en RRHH</td>
                                    <td>Pierce/Carrasco</td>

                                </tr>
                                <tr>
                                    <td><a href="{{ route('vercurso',4)}}"><strong>Economía</strong></a></td>
                                    <td>Tarde</td>
                                    <td><span class="label label-info">26</span></td>
                                    <td>TEC. Sup. en RRHH</td>
                                    <td>Pierce/Garcia</td>

                                </tr>
                                <tr>
                                    <td><a href="{{ route('vercurso',5)}}"><strong>Etica Profesional</strong></a></td>
                                    <td>Mañana</td>
                                    <td><span class="label label-warning">25</span></td>
                                    <td>TEC. Sup. en RRHH</td>
                                    <td>Gonzalez/Pierce</td>

                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->

                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
