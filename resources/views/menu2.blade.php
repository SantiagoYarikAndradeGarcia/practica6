<!-- Nav tabs -->
<style>
    .link-button {
        background: none;
        border: none;
        color: #0d6efd;
        text-decoration: none; 
        cursor: pointer; 
        padding: 0; 
        font: inherit;
    }

    .link-button:hover {
        color: rgb(38, 38, 246);
    }
    
    form {
        padding: 8px 16px;
    }
</style>
<ul
class="nav nav-tabs"
id="navId"
role="tablist"
>
    <li class="nav-item" role="presentation">
        <a href="{{ route('catalogos') }}" class="nav-link"
            >Catálogos</a
        >
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{ route('horarios') }}" class="nav-link"
            >Horarios</a
        >
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{ route('proyectos') }}" class="nav-link"
            >Proyectos Individuales</a
        >
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{ route('instrumentacion') }}" class="nav-link"
            >Instrumentación</a
        >
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{ route('tutorias') }}" class="nav-link"
            >Tutorías</a
        >
    </li>
    <li class="nav-item" role="presentation">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="link-button">Logout</button>
        </form>
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

<!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
<script>
var triggerEl = document.querySelector("#navId a");
bootstrap.Tab.getInstance(triggerEl).show(); // Select tab by name
</script>