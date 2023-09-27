@extends('layouts.app')
@section('title', $viewdata['title'])
{{-- @section('subtitle',$viewdata['subtitle']) --}}
{{-- @section('img',$viewdata['img']) --}}

@section('content')

  <div class="container pt-3">
    <div class="row ">
        <div class="col text-center text-uppercase">
          <h2><strong>About<span class="colorbackground"> Zay Shop </span></strong> </h2>
        </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row  ">
        
      <div class="col">
      
      <p><span class="fa-2x"> W</span>elcome  to the Shop Zay Store, where you can find a wide range of high-quality accessories designed to enhance your computer mouse experience.</p>
      <p>At Shop Zay Store, we're not just about products; we're about enhancing your digital journey. We believe that every click should be a delight, and every scroll should be smooth as silk. Our mission is to make your computer time more comfortable, productive, and even a little fun.</p>
      <p>Our collection includes mouse pads, wrist rests, precision mouse feet, and more. We understand the importance of comfort and precision when it comes to using your computer, and our accessories are carefully crafted to meet those needs.</p>
     
    </div>
    <div class="col">
        <p>Whether you're a passionate gamer seeking that extra edge or a creative mind who values precision, we're here to cater to your needs. Our mouse accessories are your companions, making sure that your computer tasks feel less like work and more like a satisfying experience.</p>
      <p>As you explore our selection, remember that each product here is chosen with care, with the goal of making your interaction with technology enjoyable and seamless. Join us on this journey of combining functionality with a touch of joy, and let's make your mouse time something to look forward to.</p>
      <p>Thank you for being a part of the Shop Zay Store community. We're excited to serve you and make your computing moments extraordinary.</p>
    </div>
      </div>
     
    </div>
    <div class="container">
      <div class="row mt-5   mb-5">
        <div class="col">
          <h2 class=" text-center text-uppercase"> <strong> Why<span class="colorbackground"> Zay Shop </span> </strong></h2>
        </div>
      </div>
    </div>
   
  <div class="container-fluid">
   
    <div class="row">
      
      <div class="col">
      <div class="list-box d-flex">
        <div class="list-icon">
          <i class="fas fa-shipping-fast"></i>
        </div>
        <div class="content ">
          <h3>Home Delivery</h3>
          <p>sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
        </div>
    </div>
    <div class="list-box d-flex pt-5">
      <div class="list-icon">
        <i class="fas fa-briefcase"></i>
      </div>
      <div class="content">
        <h3>Custom Box</h3>
        <p>sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
      </div>
    </div>

  </div>
  <div class="col">
    <div class="list-box d-flex">
      <div class="list-icon">
        <i class="fas fa-money-bill-alt"></i>
      </div>
      <div class="content">
        <h3>Best Price</h3>
        <p>sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
      </div>
    </div>
    <div class="list-box d-flex pt-5">
      <div class="list-icon">
        <i class="fas fa-sync-alt"></i>
      </div>
      <div class="content">
        <h3>Quick Refund</h3>
        <p>sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
      </div>
    </div>
</div>

      <div class="col">
        <img src="img/Untitled-102.png" class="rounded float-end pb-5" alt="...">
      </div>
    </div>
  </div>
  



 <h2 class="text-center fa-3x"> <strong>Our <span class="colorbackground"> Team </span> </strong></h2>
<p class="text-center ">Our shop's motto is that the customer is king <br/>
  We are pleased to serve you
</p>
  <div class="container">
    <div class="row mt-5">
      <div class="col text-center">
        <div class="card" style="width: 18rem;">
          <img src="img2/4806755-middle.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title ">Nguyễn văn tài</h5>
            <p class="card-text"></p>
       
           
          </div>
        </div>
        <div class="thongtin">
        <p >
          <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
            Information
          </a>
         
        </p>
        <div class="collapse" id="collapseExample1">
          <div class="card card-body">
            My name Nguyễn văn tài i'm a students i'm 21 years old . 
            
          </div>
        </div>
      </div>
      </div>
      
      <div class="col text-center">
        <div class="card" style="width: 18rem;">
          <img src="img2/download.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title pt-3">Bùi văn vũ</h5>
            <p class="card-text "></p>
            
          </div>
        </div>
        <div class="thongtin">
          <p >
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
              Information
            </a>
           
          </p>
          <div class="collapse" id="collapseExample2">
            <div class="card card-body">
              My name Bùi văn vũ i'm a students i'm 20 years old and i'm single .
            </div>
          </div>
        </div>
      </div>
      <div class="col text-center">
        <div class="card" style="width: 18rem;">
          <img src="img2/png-transparent-avatar-user-computer-icons-software-developer-avatar-child-face-heroes-thumbnail.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title ">Mai văn hùng</h5>
            <p class="card-text"></p>
            
          </div>
        </div>
        <div class="thongtin">
          <p >
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
              Information
            </a>
           
          </p>
          <div class="collapse" id="collapseExample3">
            <div class="card card-body">
              My name Mai văn hùng i'm a students i'm 20 years old and i'm single .
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
