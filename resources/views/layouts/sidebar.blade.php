      <img  src="{{asset('dashboard/assets/img/indikator1.png')}}" alt="..."/>
      <ul class="nav">

          <li class="{{set_active('home')}}">
              <a href="{{route('home')}}">
                  <i class="pe-7s-graph"></i>
                  <p>Dashboard</p>
              </a>
          </li>
          <li class="{{set_active('kegiatan')}}">
              <a href="{{route('kegiatan')}}">
                  <i class="pe-7s-note2"></i>
                  <p>Data Kunjungan</p>
              </a>
          </li>
          <li class="{{set_active('pemuda_olahraga')}}">
              <a href="{{route('pemuda_olahraga')}}">
                  <i class="pe-7s-news-paper"></i>
                  <p>Urusan Kepemudaan & Olahraga</p>
              </a>
          </li>

  <li class="active-pro">
              <a href="{{url('/register')}}">
                  <i class="pe-7s-add-user"></i>
                  <p>Register</p>
              </a>
          </li>
      </ul>
