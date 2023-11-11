    <div class="main-menu-bar position-absolute w-100" style="background-color: rgba(255, 255, 255, 0.5); z-index: 9999;">
      <div class="d-flex align-items-center px-3 h-10 container" >
        <h2 class="col-3" style="margin: 0;">LoGo</h2>
        <form class="d-flex my-2 col-5 justify-content-start">
          <button class="" style="border:none; border-radius: 50px 0 0 50px; max-height: 50px; padding:5px 10px ;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
          </button>
          <input class="w-100" type="search" style="border:none; border-radius:0 50px 50px 0; outline:none; caret-color:rgba(100, 102, 102, 0.8); padding-left: 10px; max-width: 400px; max-height: 50px;" placeholder="Search" aria-label="Search">
        </form>
        <div class="col-2 d-flex justify-content-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ffff" class="bi bi-cart3" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>
        </div>
        <div class="d-flex align-items-center col-2">
          <img src="images/avatar_1.webp" alt="Default Avatar" class="circular-image" style="max-width: 8em; border-radius: 50%; max-height:40px; cursor: pointer;"> 
        </div>
      </div>
    </div><br><br>
    <!-- side menu bar -->
    <svg id="menu_bar" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-list m-lg-3 position-fixed" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
    </svg>
    <div class="side-menu-bar position-fixed vh-100" ">
      <svg  id="menu_close" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16" style="position: sticky; top:1px; margin-left: 80%; z-index: 5;">
        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
      </svg>

      <!-- <div class="row justify-content-center"> -->
      <div class="col-12 text-center" id="make_sticky" style="position:sticky; top: 1px; z-index: 999; background-color:rgba(255, 255, 255, 01)">
        <img src="images/avatar_1.webp" alt="Default Avatar" class="circular-image" style="max-width: 5em; border-radius: 50%;">
        <h5 class="mt-2">Hello, User</h5>
        <hr>
      </div>
      <div class="bottom-content" style="top: 5px;">
        <div class="side-menu-head">
          <ul class="list">
            <li class="my-2"><a href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
                </svg><span>Home</span></a></li>
            <li class="my-2"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                  <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                </svg><span>Orders</span></a></li>
            <li class="my-2"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box2-heart-fill" viewBox="0 0 16 16">
                  <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5ZM8.5 4h6l.5.667V5H1v-.333L1.5 4h6V1h1v3ZM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z" />
                </svg><span>WishList</span></a></li>
            <li class="my-2"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
                  <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z" />
                </svg><span>Help Center</span></a></li>
          </ul>

        </div>
        <hr>
        <div class="mobile-group"><span>Mobiles</span>
          <ul class="list">
            <li><a href=""><span>Brands</span></a></li>
            <li><a href=""><span>Accessories</span></a></li>
            <li><a href=""><span>Power Banks</span></a></li>
            <li><a href=""><span>Memory Card</span></a></li>
            <li class="" style="background-color:transparent;"><a href="" class="btn btn-outline-secondary" style="font-size: 13px"><span>View All</span></a></li>
          </ul>
        </div>
        <hr>
        <div class="mobile-group"><span>Electronics</span>
          <ul class="list">
            <li><a href=""><span>Brands</span></a></li>
            <li><a href=""><span>Accessories</span></a></li>
            <li><a href=""><span>Power Banks</span></a></li>
            <li><a href=""><span>Memory Card</span></a></li>
            <li class="" style="background-color:transparent;"><a href="" class="btn btn-outline-secondary" style="font-size: 13px"><span>View All</span></a></li>

          </ul>

        </div>
        <hr>
        <div class="mobile-group"><span>Faishon</span>
          <ul class="list">
            <li><a href=""><span>Brands</span></a></li>
            <li><a href=""><span>Accessories</span></a></li>
            <li><a href=""><span>Power Banks</span></a></li>
            <li><a href=""><span>Memory Card</span></a></li>
            <li class="" style="background-color:transparent;"><a href="" class="btn btn-outline-secondary" style="font-size: 13px"><span>View All</span></a></li>

          </ul>

        </div>
        <hr>
        <div class="mobile-group"><span>Home</span>
          <ul class="list">
            <li><a href=""><span>Brands</span></a></li>
            <li><a href=""><span>Accessories</span></a></li>
            <li><a href=""><span>Power Banks</span></a></li>
            <li><a href=""><span>Memory Card</span></a></li>
            <li class="" style="background-color:transparent;"><a href="" class="btn btn-outline-secondary" style="font-size: 13px"><span>View All</span></a></li>

          </ul>

        </div>
        <hr>
      </div>
      <!-- </div> -->
    </div>




    