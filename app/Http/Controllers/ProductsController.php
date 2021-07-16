<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
$tabTitle =["<span class='site-heading-upper text-primary mb-3'>A Free Bootstrap 4 Business Theme</span>"," <span class='site-heading-lower'>Business Casual</span>"];
    $footerContent = "<div class='container'>
      <p class='m-0 small'>Copyright &copy; Your Website 2019</p>
    </div>";
$productContent   = (object)['span1'=>'Blended to Perfection','span2'=>'Coffees &amp; Teas','src1'=>'img/products-01.jpg','p1'=>"We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more.",'span3'=>'Delicious Treats, Good Eats','span4'=>'Bakery &amp; Kitchen','src2'=>'img/products-02.jpg','p2'=>"Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.",'span5'=>'From Around the World','span6'=>'Bulk Speciality Blends','src3'=>'img/products-03.jpg','p3'=>"Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details."];
//     $productContent = " <section class='page-section'>
//     <div class='container'>
//       <div class='product-item'>
//         <div class='product-item-title d-flex'>
//           <div class='bg-faded p-5 d-flex ml-auto rounded'>
//             <h2 class='section-heading mb-0'>
//               <span class='section-heading-upper'>Blended to Perfection</span>
//               <span class='section-heading-lower'>Coffees &amp; Teas</span>
//             </h2>
//           </div>
//         </div>
//         <img class='product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0' src='img/products-01.jpg' alt=''>
//         <div class='product-item-description d-flex mr-auto'>
//           <div class='bg-faded p-5 rounded'>
//             <p class='mb-0'>We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more.</p>
//           </div>
//         </div>
//       </div>
//     </div>
//   </section>

//   <section class='page-section'>
//     <div class='container'>
//       <div class='product-item'>
//         <div class='product-item-title d-flex'>
//           <div class='bg-faded p-5 d-flex mr-auto rounded'>
//             <h2 class='section-heading mb-0'>
//               <span class='section-heading-upper'>Delicious Treats, Good Eats</span>
//               <span class='section-heading-lower'>Bakery &amp; Kitchen</span>
//             </h2>
//           </div>
//         </div>
//         <img class='product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0' src='img/products-02.jpg' alt=''>
//         <div class='product-item-description d-flex ml-auto'>
//           <div class='bg-faded p-5 rounded'>
//             <p class='mb-0'>Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.</p>
//           </div>
//         </div>
//       </div>
//     </div>
//   </section>

//   <section class='page-section'>
//     <div class='container'>
//       <div class='product-item'>
//         <div class='product-item-title d-flex'>
//           <div class='bg-faded p-5 d-flex ml-auto rounded'>
//             <h2 class='section-heading mb-0'>
//               <span class='section-heading-upper'>From Around the World</span>
//               <span class='section-heading-lower'>Bulk Speciality Blends</span>
//             </h2>
//           </div>
//         </div>
//         <img class='product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0' src='img/products-03.jpg' alt=''>
//         <div class='product-item-description d-flex mr-auto'>
//           <div class='bg-faded p-5 rounded'>
//             <p class='mb-0'>Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details.</p>
//           </div>
//         </div>
//       </div>
//     </div>
//   </section>";
    return view('pages.products',compact('tabTitle','footerContent','productContent'));
}
}
