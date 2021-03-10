<?php namespace App\view; ?>
<nav>
<div id='nav-box'>
<div class='nav-item1'></div>
<div class='nav-item2'>
    Cadastro
</div>
<div class="nav-item3">
    <form method="POST" action="App\view\buscaresult.php" class="form-search">
    <input type="text" class="search" name="search"><button class="search-b"  name="buttonsearch"></button>
</form>
</div>
</div>
<script>
    var lin=document.querySelector(".nav-item2");
    var search=document.querySelector(".search-b")
    var form=document.querySelector(".form-search")
    search.addEventListener('click',()=>{
        if(window.location.href == "http://localhost/crudphp/App/view/buscaresult.php" || window.location.href =="http://localhost/crudphp/App/view/cadastro.php" || window.location.href == "http://localhost/crudphp/App/view/atualiza.php"){
            form.action="buscaresult.php"
        }
    })
    lin.addEventListener("click", ()=>{
       if(window.location.href !="http://localhost/crudphp/App/view/cadastro.php"){

        window.location.href="App/view/cadastro.php"
       }
        if(window.location.href == "http://localhost/crudphp/App/view/atualiza.php"){

            window.location.href="/crudphp/App/view/cadastro.php"
        }
        if(window.location.href == "http://localhost/crudphp/App/view/buscaresult.php"){

        window.location.href="/crudphp/App/view/cadastro.php"
}
    })
    var lininicial=document.querySelector(".nav-item1");
    lininicial.addEventListener("click",()=>{
        if(window.location.href != "http://localhost/crudphp/index.php")
        window.location.href="../../index.php"
    })
</script>
</nav>
