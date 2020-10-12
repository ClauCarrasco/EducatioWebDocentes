@extends("theme.$theme.layout")
@section("titulo") Mesas de Examen @endsection

@section('contenido')
    <div class="box box-danger">
        <form method="get" action="{{ url('mesaexamen') }}" enctype='text/plain'>

            <div class="box-header with-border">
                <h3 class="box-title">Búsqueda</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">

                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Materia</label>
                        </div>
                        <div class="col-md-9">

                            {!! Form::text('materia', null, ['class'=>'form-control']) !!}
                        </div>

                    </div>
                    <!-- /.form-group -->

                    <br>

                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Fecha Desde:</label>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group date">
                                {!! Form::date('fechaDesde', null, ['class'=>'form-control','placeholder'=>'dd/mm/yyyy' ]) !!}

                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Fecha Hasta:</label>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group date">
                                {!! Form::date('fechaHasta', null, ['class'=>'form-control','placeholder'=>'dd/mm/yyyy' ]) !!}

                            </div>
                        </div>
                    </div>

                    <!-- /.form-group -->
                    <br>

                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>


            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Buscar</button>
            </div>
        </form>

    </div>

    <div class="row">
        <div class="col-xs-12">

            <div class="box box-info">
                <div class="box-header">
                    <div class="col-md-8">
                        <h3 class="box-title">Mesas Examen</h3>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap "><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover table-striped dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                            aria-label="">
                                        </th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                            aria-sort="ascending"
                                            aria-label="">ID
                                        </th>

                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                            aria-label="">Materia
                                        </th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                            aria-sort="ascending"
                                            aria-label="">F. Final
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                            aria-label="">Condicion
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                            aria-label="">#Inscriptos
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                            aria-label="">Hora
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                            aria-label="">Plan
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                            aria-label="">Profesor 1
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
{{--                                    @foreach($facturas as $factura)--}}


                                            <tr role="row" class="odd">
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa fa-ellipsis-v"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <li><a href="#">Ver</a></li>
                                                            <li><a href="#">Cargar Notas</a></li>
                                                            <li><a href="#">Imprimir Acta Volante</a></li>
                                                        </ul>

                                                    </div>
                                                </td>
                                            <td> </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td> </td>
                                            <td class="text-right"></td>
                                            <td class="text-right"></td>
                                            <td class="text-right"></td>
                                        </tr>
{{--                                    @endforeach--}}
                                    </tbody>

                                </table></div></div>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>


            <!-- /.col -->
        </div>
    </div>
    <!-- /.row -->
@endsection


@section("scripts")
    <script type="text/javascript">

        $(function () {

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#datepicker').datepicker({
                autoclose: true
            })

            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass   : 'iradio_minimal-blue'
            })
            //Red color scheme for iCheck
            $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                checkboxClass: 'icheckbox_minimal-red',
                radioClass   : 'iradio_minimal-red'
            })
            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass   : 'iradio_flat-green'
            })

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            //Timepicker
            $('.timepicker').timepicker({
                showInputs: false
            })
        })
    </script>


@endsection

