@extends('articlesBase')

@section('Articles')
<main class="busi">
    <div class="busi-c-header">
        <div class="app-brand">
        <img src="/assets/vectors/busi.png" alt="busi_logo">
        </div>
    </div>

    <div class="fullpage-wraper">
        @foreach ($buletins as $item)
        
            <div class="section">
            <div class="the-overlay"></div>
            <div class="overlay-wrap">
                <div class="container">
                <div class="box-in-lead">
                    <div class="top-title">{{ $item->title }}</div>
                    <div class="lead-title">{{ $item->lead_title}}</div>
                    <div class="text-preview">{{ $item->lead_text }}</div>
                    <a href="{{ route('bulletin.read', $item->slug )}}" class="visit-link">Lihat</a>
                </div>
                </div>
            </div>
            <div class="bg-slide">
                <img class="on-background" src="{{ $item->lead_bg }}" alt="" srcset="">
            </div>
            </div>
            
        @endforeach

{{--   
        <div class="section">
          <div class="the-overlay"></div>
          <div class="overlay-wrap">
            <div class="container">
              <div class="box-in-lead">
                <div class="top-title">Infrastruktur Darat, Konektivitas Jadi Utama</div>
                <div class="lead-title">Antarkan Perjalanan Masyarakat Jadi Lebih Lancar</div>
                <div class="text-preview">
  
                  Infrastruktur jalan tol di Indonesia membuat perjalanan masyarakat lebih mudah dan lancar. Tak hanya Tol
                  Trans-Jawa, kini akses jalan tol di seluruh Indonesia sedang dikebut pembangunannya oleh pemerintah
                  untuk memenuhi konektivitas antarwilayah.
  
                </div>
                <a href="#" class="visit-link">Lihat</a>
              </div>
            </div>
          </div>
          <div class="bg-slide">
            <img class="on-background" src="{{asset('assets/lead_bg.jpg')}}">
          </div>
        </div> --}}
      </div>

    
</main>
@endsection 