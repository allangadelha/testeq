<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar" style="height: 150% !important">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: 150% !important">
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <li class="<?php 
                            if((urlAtual() == url('usuarios')) || url('usuarios/index') || urlAtual() == url('usuarios/create') || urlAtual() == url('usuarios/edit')): 
                                echo 'active'; 
                            endif;?> treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Usuários</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">{{ App\Usuario::get()->count() }}</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    
                    @if (Auth::guest())
                    @else
                        <li class="<?php 
                                        if(urlAtual() == url('usuarios/create')): 
                                            echo 'active'; 
                                    endif;?>">
                            <a href="{{ url('usuarios/create') }}">
                                <i class="fa fa-circle-o <?php 
                                        if(urlAtual() == url('usuarios/create')): 
                                            echo 'text-green'; 
                                    endif;?>"></i> Cadastrar Usuário
                            </a>
                        </li>
                    @endif
                    
                    <li class="<?php 
                                    if(urlAtual() == url('usuarios/index')): 
                                        echo 'active'; 
                                endif;?>">
                        <a href="{{ url('usuarios/index') }}">
                            <i class="fa fa-circle-o <?php 
                                    if(urlAtual() == url('usuarios/index')): 
                                        echo 'text-green'; 
                                endif;?>"></i> Listar Usuários
                        </a>
                    </li>
                </ul>
            </li>            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>