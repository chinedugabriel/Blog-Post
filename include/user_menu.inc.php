    <!-- menu Starts here -->

    

<nav class="navbar navbar-expand-md bg-primary">
  <div class="container-lg px-lg-0">
    <?php
      // This statement is used to fix an error of the logo due to file path naming 

      $menuDynamic;
      if (isset($menuDynamic)){
        echo ' 
          <a class="navbar-brand  w-50 " href="#">
              <img src="../src/img/logo.png" alt="" class="img-fluid w-25 ">
          </a>';

      }else{

        echo '   
          <a class="navbar-brand  w-50 " href="#">
              <img src="./src/img/logo.png" alt="" class="img-fluid w-25 ">
          </a>';

      }
    ?>

    <button class="navbar-toggler border border-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="color: white;" >
      <!-- <span class="navbar-toggler-icon" style="color:white !important;" ></span> -->
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list text-white" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
    </svg>
    </button>
    <div class="offcanvas offcanvas-start bg-primary " tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header text-center">
        <a class="offcanvas-title" id="offcanvasNavbarLabel">
            <img src="./src/img/logo.png" alt="" class="img-fluid w-25">
        </a>
        <button type="button" class="btn border-none " data-bs-dismiss="offcanvas" aria-label="Close" style="color: white;" > 
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-lg text-white" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
            </svg>
        </button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item ">
            <a class="nav-link text-white active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white" href="#">Politics</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white" href="#">Entertainment</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white" href="#">Travel</a>
          </li>
        </ul>


      </div>
    </div>
  </div>
</nav>

<!-- menu ends here -->