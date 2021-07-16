<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class storeController extends Controller
{
    public function index() {
$tabTitle =["<span class='site-heading-upper text-primary mb-3'>A Free Bootstrap 4 Business Theme</span>"," <span class='site-heading-lower'>Business Casual</span>"];
    $footerContent = "<div class='container'>
      <p class='m-0 small'>Copyright &copy; Your Website 2019</p>
    </div>";
    $storeContent = (object)['span1'=>'Come On In','span2'=>"We're Open",'spanCl'=>'Closed','spanH1'=>'7:00 AM to 8:00 PM','spanH2'=>'9:00 AM to 5:00 PM','p1'=>['1116 Orchard Street','Golden Valley, Minnesota'],'p2'=>['Call Anytime','(317) 585-8468'],'D1'=>'Sunday','D2'=>'Monday','D3'=>'Tuesday','D4'=>'Wenseday','D5'=>'Thursday','D6'=>'Friday','D7'=>'Saturday','span3'=>'Strong Coffee, Strong Roots','span4'=>'About Our Cafe','p3'=>'Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.','p4'=>['We guarantee that you will fall in','lust','with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.'],'src'=>'img/about.jpg'];
    // $storeContent = "    <section class='page-section cta'>
    //   <div class='container'>
    //     <div class='row'>
    //       <div class='col-xl-9 mx-auto'>
    //         <div class='cta-inner text-center rounded'>
    //           <h2 class='section-heading mb-5'>
    //             <span class='section-heading-upper'>Come On In</span>
    //             <span class='section-heading-lower'>We're Open</span>
    //           </h2>
    //           <ul class='list-unstyled list-hours mb-5 text-left mx-auto'>
    //             <li class='list-unstyled-item list-hours-item d-flex'>
    //               Sunday
    //               <span class='ml-auto'>Closed</span>
    //             </li>
    //             <li class='list-unstyled-item list-hours-item d-flex'>
    //               Monday
    //               <span class='ml-auto'>7:00 AM to 8:00 PM</span>
    //             </li>
    //             <li class='list-unstyled-item list-hours-item d-flex'>
    //               Tuesday
    //               <span class='ml-auto'>7:00 AM to 8:00 PM</span>
    //             </li>
    //             <li class='list-unstyled-item list-hours-item d-flex'>
    //               Wednesday
    //               <span class='ml-auto'>7:00 AM to 8:00 PM</span>
    //             </li>
    //             <li class='list-unstyled-item list-hours-item d-flex'>
    //               Thursday
    //               <span class='ml-auto'>7:00 AM to 8:00 PM</span>
    //             </li>
    //             <li class='list-unstyled-item list-hours-item d-flex'>
    //               Friday
    //               <span class='ml-auto'>7:00 AM to 8:00 PM</span>
    //             </li>
    //             <li class='list-unstyled-item list-hours-item d-flex'>
    //               Saturday
    //               <span class='ml-auto'>9:00 AM to 5:00 PM</span>
    //             </li>
    //           </ul>
    //           <p class='address mb-5'>
    //             <em>
    //               <strong>1116 Orchard Street</strong>
    //               <br>
    //               Golden Valley, Minnesota
    //             </em>
    //           </p>
    //           <p class='mb-0'>
    //             <small>
    //               <em>Call Anytime</em>
    //             </small>
    //             <br>
    //             (317) 585-8468
    //           </p>
    //         </div>
    //       </div>
    //     </div>
    //   </div>
    // </section>

    // <section class='page-section about-heading'>
    //   <div class='container'>
    //     <img class='img-fluid rounded about-heading-img mb-3 mb-lg-0' src='img/about.jpg' alt=''>
    //     <div class='about-heading-content'>
    //       <div class='row'>
    //         <div class='col-xl-9 col-lg-10 mx-auto'>
    //           <div class='bg-faded rounded p-5'>
    //             <h2 class='section-heading mb-4'>
    //               <span class='section-heading-upper'>Strong Coffee, Strong Roots</span>
    //               <span class='section-heading-lower'>About Our Cafe</span>
    //             </h2>
    //             <p>Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.</p>
    //             <p class='mb-0'>We guarantee that you will fall in
    //               <em>lust</em>
    //               with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.</p>
    //           </div>
    //         </div>
    //       </div>
    //     </div>
    //   </div>
    // </section>";
    return view('pages.store',compact('tabTitle','footerContent','storeContent'));
}
}
