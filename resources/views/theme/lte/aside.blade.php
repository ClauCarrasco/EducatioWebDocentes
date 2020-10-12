<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset("assets/$theme/dist/img/user7-128x128.jpg")}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Francesca Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu tree" data-widget="tree">
            <li class="header">MENU PRINCIPAL</li>
            <li class="active"><a href="/"><i class="fa fa-home"></i><span>Inicio</span></a></li>
            <li>
                <a href="{{ route('home')}}">
                    <i class="fa fa-book"></i> <span>Mis Cursos</span>
                </a>
            </li>
            <li>
                <a href="{{ route('vermesasexamen')}}">
                    <i class="fa fa-file-text-o"></i> <span>Mesas de Examen</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">new</small>
                    </span>
                </a>
            </li>

            <li>
                <a href="pages/calendar.html">
                    <i class="fa fa-calendar"></i> <span>Calendario</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
                </a>
            </li>


            <li class="header">SEGURIDAD</li>
            <li><a href="#"><i class="fa fa-user"></i> <span>Mi perfil</span></a></li>
            <li><a href="#"><i class="fa fa-wrench"></i> <span>Cambiar Clave</span></a></li>
            <li><a href="#"><i class="fa fa-close text-red"></i> <span>Salir</span></a></li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
