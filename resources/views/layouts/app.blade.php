<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
       

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-light">
        <x-jet-banner />
        @livewire('navigation-menu')

        <!-- Page Heading -->
        <header class="d-flex py-3 bg-white shadow-sm border-bottom">
            <div class="container">
                {{-- {{ $header }} --}}
            </div>
        </header>

        <!-- Page Content -->
        <main class="container my-5">
            @yield('content')
        </main>
        <footer class="text-center text-lg-start bg-light text-muted">
            <!-- Section: Social media -->
            <section
              class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
            >
         
          
              <!-- Right -->
              <div>
                <a href="" class="me-4 text-reset">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                  <i class="fab fa-google"></i>
                </a>
                
              </div>
              <!-- Right -->
            </section>
            <!-- Section: Social media -->
          
            <!-- Section: Links  -->
            <section class="">
              <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                  
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
        
                    <p>
                      <a href="{{route('/')}}" class="text-reset">Home</a>
                    </p>
                    {{-- <p>
                      <a href="{{route('products.show')}}" class="text-reset">Boutique</a>
                    </p> --}}
                    <p>
                      <a href="{{route('articles.index')}}" class="text-reset">Article</a>
                    </p>

                    <p>
                      <a href="{{route('partnerView')}}" class="text-reset">Partner</a>
                    </p>
                  </div>
                  <!-- Grid column -->
          
                  <!-- Grid column -->
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                      Contact
                    </h6>
                    <p><i class="fas fa-home me-3"></i> ECOLE DE RASETEURS PORTE DE LA CRAU</p> 
                  </div>
                  <!-- Grid column -->
                </div>
                <!-- Grid row -->
              </div>
            </section>
            <!-- Section: Links  -->
          
            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
              © 2021 Copyright:
              <a class="text-reset fw-bold" href="#">Gregory VASTE</a>
            </div>
            <!-- Copyright -->
          </footer>
          <!-- Footer -->
        @stack('modals')

        @livewireScripts

        @stack('scripts')
    </body>
</html>
