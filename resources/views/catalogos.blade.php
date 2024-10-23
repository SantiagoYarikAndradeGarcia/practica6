@extends("inicio")

@section("contenidomn2")
<div class="container-fluid">
    <div class="row">
        <!-- Menú vertical en la parte izquierda -->
        <div class="col-md-2">
            <ul class="nav nav-tabs flex-column" id="navId" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="{{ route('Periodos.index') }}" class="nav-link">Periodos</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('Plazas.index') }}" class="nav-link">Plazas</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('Puestos.index') }}" class="nav-link">Puestos</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('personal') }}" class="nav-link">Personal</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('Deptos.index') }}" class="nav-link">Deptos</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('Carreras.index') }}" class="nav-link">Carreras</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('Reticulas.index') }}" class="nav-link">Retículas</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('Materias.index') }}" class="nav-link">Materias</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('Alumnos2.index') }}" class="nav-link">Alumnos</a>
                </li>
            </ul>
        </div>

        <!-- Contenido principal que ocupa el resto de la pantalla -->
        <div class="col-md-10">
            <!-- Tab panes -->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab1Id" role="tabpanel">
                    <!-- Contenido para la pestaña 1 -->
                </div>
                <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
                <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
                <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
                <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
            </div>
            @yield("contenido")
        </div>
    </div>
</div>

<!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
<script>
var triggerEl = document.querySelector("#navId a");
bootstrap.Tab.getInstance(triggerEl).show(); // Select tab by name
</script>
@endsection