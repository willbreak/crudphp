<?php namespace App\view; ?>
<nav>
<div id='nav-box'>
<div class='nav-item1'></div>
<div class='nav-item2'>
    Cadastro
</div>
<div class="nav-item3">
    <form method="POST" action="" class="form-search">
    <input type="text" class="search" name="search"><button class="search-b"  name="buttonsearch"></button>
</form>
</div>
</div>
<script>
    var lin=document.querySelector(".nav-item2");
    lin.addEventListener("click", ()=>{
        window.location.href="App/view/cadastro.php"
    })
    var lininicial=document.querySelector(".nav-item1");
    lininicial.addEventListener("click",()=>{
        window.location.href="../../index.php"
    })
</script>
</nav>
