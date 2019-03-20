<li class="{{ Request::is('ponentes*') ? 'active' : '' }}">
    <a href="{!! route('ponentes.index') !!}"><i class="fa fa-edit"></i><span>Ponentes</span></a>
</li>

<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{!! route('clientes.index') !!}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('productos*') ? 'active' : '' }}">
    <a href="{!! route('productos.index') !!}"><i class="fa fa-edit"></i><span>Productos</span></a>
</li>

<li class="{{ Request::is('categorias*') ? 'active' : '' }}">
    <a href="{!! route('categorias.index') !!}"><i class="fa fa-edit"></i><span>Categorias</span></a>
</li>

<li class="{{ Request::is('ponencias*') ? 'active' : '' }}">
    <a href="{!! route('ponencias.index') !!}"><i class="fa fa-edit"></i><span>Ponencias</span></a>
</li>

<li class="{{ Request::is('alumnos*') ? 'active' : '' }}">
    <a href="{!! route('alumnos.index') !!}"><i class="fa fa-edit"></i><span>Alumnos</span></a>
</li>

