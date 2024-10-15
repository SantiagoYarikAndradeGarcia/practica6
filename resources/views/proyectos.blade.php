@extends("inicio")

@section("contenidomn2")
    <ul
    class="nav nav-tabs"
    id="navId"
    role="tablist"
    >
        <li class="nav-item" role="presentation">
            <a href="{{ route('capacitacion') }}" class="nav-link"
                >Capacitación</a
            >
        </li>
        <li class="nav-item" role="presentation">
            <a href="{{ route('asesoriasdoc') }}" class="nav-link"
                >Asesorías Doc.</a
            >
        </li>
        <li class="nav-item" role="presentation">
            <a href="{{ route('projects') }}" class="nav-link"
                >Proyectos </a
            >
        </li>
        <li class="nav-item" role="presentation">
            <a href="{{ route('material') }}" class="nav-link"
                >Material Didáctico </a
            >
        </li>
        <li class="nav-item" role="presentation">
            <a href="{{ route('docencia') }}" class="nav-link"
                >Docencia e Inv. </a
            >
        </li>
        <li class="nav-item" role="presentation">
            <a href="{{ route('asesoriaspe') }}" class="nav-link"
                >Asesoría Proyectos Ext. </a
            >
        </li>
        <li class="nav-item" role="presentation">
            <a href="{{ route('asesoriass') }}" class="nav-link"
                >Asesoría a S.S. </a
            >
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="tab1Id" role="tabpanel">
        
    </div>
    <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
    </div>
    @yield("contenido")


    <!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
    <script>
    var triggerEl = document.querySelector("#navId a");
    bootstrap.Tab.getInstance(triggerEl).show(); // Select tab by name
    </script>
@endsection