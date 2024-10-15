@extends("inicio")

@section("contenidomn2")
    <ul
        class="nav nav-tabs"
        id="navId"
        role="tablist"
        >
        <li class="nav-item" role="presentation">
            <a href="{{ route('docentes') }}" class="nav-link">Docentes</a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="{{ route('alumnos') }}" class="nav-link">Alumnos</a>
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
