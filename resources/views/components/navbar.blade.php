<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="fa-solid fa-user"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav w-100 justify-content-between">
          <li class="nav-item">
            <a class="nav-link active biz-udpgothic-regular" aria-current="page" href="{{ route('index')}}">Who's me?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link biz-udpgothic-regular" href="{{ route('index.about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link biz-udpgothic-regular" href="{{ route('index.articles')}}">Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link biz-udpgothic-regular" href="{{ route('index.skill')}}">Skill</a>
          </li>
          <li class="nav-item">
            <a class="nav-link biz-udpgothic-regular" href="{{ route('index.contact')}}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>