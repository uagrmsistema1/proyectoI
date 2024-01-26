<header>
    <h1>Bienvenidos al sitio web de reserva de cupo</h1>
    <nav>
        <ul>

            <li><a href="{{route('requisito')}}" class="{{request()->routeIs('requisito') ? 'active' : ''}}">Requisitos</a></li>
            
            <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Crear Cuenta</a></li>
            
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Ingresar</a></li>
            
            <li><a href="{{route('contacto')}}" class="{{request()->routeIs('contacto') ? 'active' : ''}}">Informacion de Contacto</a></li>
            
            <li><a href="">Otros</a></li>

        </ul>
    </nav>
</header>