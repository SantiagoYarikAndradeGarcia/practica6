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
        <a href="{{ route('register') }}" class="nav-link"
            >Register</a
        >
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{ route('login') }}" class="nav-link"
            >Login</a
        >
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{ route('acercade') }}" class="nav-link"
            >Acerca de</a
        >
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{ route('contactanos') }}" class="nav-link"
            >Contáctanos</a
        >
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{ route('ayuda') }}" class="nav-link"
            >Ayuda</a
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

<!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
<script>
var triggerEl = document.querySelector("#navId a");
bootstrap.Tab.getInstance(triggerEl).show(); // Select tab by name
</script>