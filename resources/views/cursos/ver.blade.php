@extends("theme.$theme.layout")

@section('contenido')


    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-bool"></i> Administracion RRHH I
                    <small class="pull-right">Año: 2020-01</small>
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                Módulo
                <address>
                    <strong>Mañana</strong><br>

                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                Horario y Aula
                <address>
                    <strong>Viernes 0900 a 12:00 Aula 3</strong><br>

                </address>
            </div>
            <!-- /.col -->

            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">

            <div class="col-xs-6 ">
                <div class="box box-primary">
                    <div class="text-muted well well-sm no-shadow">
                <p class="lead">Planes</p>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>TEC. Sup en Recursos Humanos</b>
                    </li>
                    <li class="list-group-item">
                        <b>Otro Plan</b>
                    </li>
                    <li class="list-group-item">
                        <b>Algun otro Plan</b>
                    </li>
                </ul>
                    </div>
                </div>
                <div class="box box-success">
                    <div class="text-muted well well-sm no-shadow">
                        <p class="lead">Docentes</p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Francesca Pierce</b> - Leg. 3588 <a class="pull-right">Titular</a>
                        </li>
                        <li class="list-group-item">
                            <b>Alejandro Gomez</b> - Leg. 3982 <a class="pull-right">Ayudante</a>
                        </li>
                        <li class="list-group-item">
                            <b>Claudia Carrasco</b> - Leg. 388 <a class="pull-right">Ayudante</a>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="box box-danger table-responsive">
                    <p class="lead">Alumnos</p>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Legajo</th>
                            <th>Apellido y Nombre</th>
                            <th>Condición</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1123</td>
                            <td>Call of Duty</td>
                            <td><span class="label label-success">Regular</span></td>
                        </tr>
                        <tr>
                            <td>43434</td>
                            <td>Need for Speed IV</td>
                            <td><span class="label label-primary">Dado de Baja</span></td>
                        </tr>
                        <tr>
                            <td>33435</td>
                            <td>Monsters DVD</td>
                            <td><span class="label label-warning">Terminó de cursar</span></td>
                        </tr>
                        <tr>
                            <td>787</td>
                            <td>Grown Ups Blue Ray</td>
                            <td><span class="label label-danger">Susp. Falta Pago</span></td>
                        </tr>
                        <tr>
                            <td>1123</td>
                            <td>Call of Duty</td>
                            <td><span class="label label-success">Regular</span></td>
                        </tr>
                        <tr>
                            <td>43434</td>
                            <td>Need for Speed IV</td>
                            <td><span class="label label-primary">Dado de Baja</span></td>
                        </tr>
                        <tr>
                            <td>33435</td>
                            <td>Monsters DVD</td>
                            <td><span class="label label-success">Regular</span></td>
                        </tr>
                        <tr>
                            <td>787</td>
                            <td>Grown Ups Blue Ray</td>
                            <td><span class="label label-success">Regular</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xs-6 table-responsive pull right">
                <table class="table">
                    <tbody><tr>
                        <th style="width:50%">Cantidad:</th>
                        <td>8</td>
                    </tr>
                    <tr>
                        <th>Suspendidos</th>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th>Dados de Baja</th>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th>Terminaron de Cursar:</th>
                        <td>1</td>
                    </tr>
                    </tbody></table>
            </div>

        </div>
        <!-- /.row -->

        <div class="row">


        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimir</a>
                <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Acta Parciales
                </button>
                <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                    <i class="fa fa-download"></i> Listado Asistencia
                </button>
            </div>
        </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>

@endsection
