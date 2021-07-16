@extends('template/index')



@section('content')
     <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">{{$storeContent->span1}}</span>
                <span class="section-heading-lower">{{$storeContent->span2}}</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                  {{$storeContent->D1}}
                  <span class="ml-auto">{{$storeContent->spanCl}}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                 {{$storeContent->D2}}
                  <span class="ml-auto">{{$storeContent->spanH1}}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  {{$storeContent->D3}}
                  <span class="ml-auto">{{$storeContent->spanH1}}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  {{$storeContent->D4}}
                  <span class="ml-auto">{{$storeContent->spanH1}}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  {{$storeContent->D5}}
                  <span class="ml-auto">{{$storeContent->spanH1}}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  {{$storeContent->D6}}
                  <span class="ml-auto">{{$storeContent->spanH1}}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  {{$storeContent->D7}}
                  <span class="ml-auto">{{$storeContent->spanH2}}</span>
                </li>
              </ul>
              <p class="address mb-5">
                <em>
                  <strong>{{$storeContent->p1[0]}}</strong>
                  <br>
                 {{$storeContent->p1[1]}}
                </em>
              </p>
              <p class="mb-0">
                <small>
                  <em>{{$storeContent->p2[0]}}</em>
                </small>
                <br>
                {{$storeContent->p2[1]}}
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src={{$storeContent->src}} alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">{{$storeContent->span3}}</span>
                  <span class="section-heading-lower">{{$storeContent->span4}}</span>
                </h2>
                <p>{{$storeContent->p3}}</p>
                <p class="mb-0">{{$storeContent->p4[0]}}
                  <em>{{$storeContent->p4[1]}}</em>
                 {{$storeContent->p4[2]}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>  
@endsection