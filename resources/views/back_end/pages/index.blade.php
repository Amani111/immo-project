@extends('back_end.layouts.app')



@section('content')



<div class="col-12">
    <div class="card shadow-xs border mb-4 pb-3">
      <div class="card-header pb-0 p-3">
        <h6 class="mb-0 font-weight-semibold text-lg">Modifier les pages suivant</h6>
        <p class="text-sm mb-1"></p>
      </div>
      <div class="card-body p-3">
        <div class="row">
          <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
            <div class="card card-background border-radius-xl card-background-after-none align-items-start mb-4">
              <div class="full-background bg-cover" style="background-image: url('../public/image/20221012115726.jpg')"></div>
              <span class="mask bg-dark opacity-1 border-radius-sm"></span>
              <div class="card-body text-start p-3 w-100">
                <div class="row">
                  <div class="col-12">
                    <div class="blur shadow d-flex align-items-center w-100 border-radius-md border border-white mt-8 p-3">
                      <div class="w-50">
                        <p class="text-dark text-sm font-weight-bold mb-1"><a  href="{{route('aproposbackend')}}">Modifier</a></p>
                        <p class="text-xs text-secondary mb-0">la page apropos</p>
                      </div>
                      <p class="text-dark text-sm font-weight-bold ms-auto"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
            <div class="card card-background border-radius-xl card-background-after-none align-items-start mb-4">
              <div class="full-background bg-cover" style="background-image: url('../public/image/20221012115726.jpg')"></div>
              <span class="mask bg-dark opacity-1 border-radius-sm"></span>
              <div class="card-body text-start p-3 w-100">
                <div class="row">
                  <div class="col-12">
                    <div class="blur shadow d-flex align-items-center w-100 border-radius-md border border-white mt-8 p-3">
                      <div class="w-50">
                        <p class="text-dark text-sm font-weight-bold mb-1"><a  href="{{route('commentbackend')}}">Modifier</a></p>
                        <p class="text-xs text-secondary mb-0">la page comment ça marche</p>
                      </div>
                      <p class="text-dark text-sm font-weight-bold ms-auto"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
            <div class="card card-background border-radius-xl card-background-after-none align-items-start mb-4">
              <div class="full-background bg-cover" style="background-image: url('../public/image/20221012115726.jpg')"></div>
              <span class="mask bg-dark opacity-1 border-radius-sm"></span>
              <div class="card-body text-start p-3 w-100">
                <div class="row">
                  <div class="col-12">
                    <div class="blur shadow d-flex align-items-center w-100 border-radius-md border border-white mt-8 p-3">
                      <div class="w-50">
                        <p class="text-dark text-sm font-weight-bold mb-1"><a  href="{{route('faqbackend')}}">Modifier</a></p>
                        <p class="text-xs text-secondary mb-0">modifier la page FAQ</p>
                      </div>
                      <p class="text-dark text-sm font-weight-bold ms-auto"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection