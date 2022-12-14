   <div class="c-wrapper c-fixed-components">
       <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
           <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar"
               data-class="c-sidebar-show">
               <svg class="c-icon c-icon-lg">
                   <use xlink:href="{{url('/')}}/core-ui/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
               </svg>
           </button><a class="c-header-brand d-lg-none" href="#">
               <img class="c-sidebar-brand-full" src="{{asset('/')}}uploads/sengketa_tanah.png" alt="" width="100px">
           <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
               data-class="c-sidebar-lg-show" responsive="true">
               <svg class="c-icon c-icon-lg">
                   <use xlink:href="{{url('/')}}/core-ui/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
               </svg>
           </button>
           <ul class="c-header-nav d-md-down-none">
               <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>

           </ul>
           <ul class="c-header-nav ml-auto mr-4">

               <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#"
                       role="button" aria-haspopup="true" aria-expanded="false">
                       <div class="c-avatar"><img class="c-avatar-img"
                               src="{{url('/')}}/core-ui/assets/img/avatars/6.jpg" alt="user@email.com"></div>
                   </a>
                   <div class="dropdown-menu dropdown-menu-right pt-0">
                       <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                           <svg class="c-icon mr-2">
                               <use
                                   xlink:href="{{url('/')}}/core-ui/vendors/@coreui/icons/svg/free.svg#cil-account-logout">
                               </use>
                              </svg>
                              Logout
                           
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                       </a>

                   </div>
               </li>
           </ul>
           <div class="c-subheader px-3">
               <!-- Breadcrumb-->
               <ol class="breadcrumb border-0 m-0">
                   <li class="breadcrumb-item">Home</li>
                   <li class="breadcrumb-item"><a href="#">Sponsor</a></li>
                   <li class="breadcrumb-item active">Dashboard</li>
                   <!-- Breadcrumb Menu-->
               </ol>
           </div>
       </header>
