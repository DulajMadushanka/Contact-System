<template>
    <nav class="navbar navbar-expand-lg" style="background-color:black;">
  <a class="navbar-brand" href="#"><b style="font-size:20pt;">Contact System</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="navbar-brand"><router-link to="/"> &nbsp&nbsp &nbsp Home &nbsp &nbsp &nbsp</router-link></a>
      </li>
      <li class="nav-item">
         <a class="navbar-brand" style="color:red"><router-link to="/addContact"> Add Contact</router-link></a>
      </li>
     
     
    </ul>
   
  </div>
</nav>
</template>

<script>

</script>