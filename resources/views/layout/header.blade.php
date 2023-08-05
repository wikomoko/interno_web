
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand text-size-40 text-font-dm text-weight-400" href="{{ route('/') }}">
            <img src="assets/img/Logo.svg" class="mb-2" alt="Logo Interno">
            Interno
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
            <a class="nav-link text-size-20 text-weight-400 me-4 {{ (request()-> is('/')) ? 'active' : '' }}" aria-current="page" href="{{ route('/') }}">Home</a>
            <a class="nav-link text-size-20 text-weight-400 me-4 {{ (request()-> is('about')) ? 'active' : '' }}" href="{{ route('about') }}">About</a>
            <a class="nav-link text-size-20 text-weight-400 me-4 {{ (request()-> is('faq')) ? 'active' : '' }}" href="{{ route('faq') }}">Faq</a>
            <a class="nav-link text-size-20 text-weight-400 me-4 {{ (request()-> is('pricing')) ? 'active' : '' }}" href="{{ route('pricing') }}">Pricing</a>
            <a class="nav-link text-size-20 text-weight-400 me-4 {{ (request()-> is('services')) ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
            <a class="nav-link text-size-20 text-weight-400 me-4 {{ (request()-> is('project')) ? 'active' : '' }}" href="{{ route('project') }}">Project</a>
            <a class="nav-link text-size-20 text-weight-400 me-4 {{ (request()-> is('blog')) ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a>
            <a class="nav-link text-size-20 text-weight-400 me-4 {{ (request()-> is('contact')) ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
            {{-- <a class="nav-link" href="#">
                <img src="{{ asset('assets/img/icons/search.svg') }}" class="mb-2">
            </a> --}}
        </div>
      </div>
    </div>
  </nav>
