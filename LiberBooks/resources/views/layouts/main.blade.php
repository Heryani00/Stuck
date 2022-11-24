<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body id="body">
  @include('partials.navbar')

  <main>
    @yield('container')
  </main>
  

  <script>
    let btnMenu = document.getElementById("btn-profile")
    let menu = document.getElementById("profile-menu")
    let body = document.getElementById("body")
    menu.style.display = "none"
    
      btnMenu.addEventListener('click', function(e) {
        if(menu.style.display === "none") {
        menu.style.display = "block"
      }
      else {
        menu.style.display = "none"
      }
      })
  
   
  
  
  
  </script>
  
  </body>
  </html>