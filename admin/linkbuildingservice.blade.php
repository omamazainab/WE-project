@extends('layouts.services')

<title>Link Building Services</title>
@section('additional_css') 
<meta name="google-site-verification" content="d15D-mpdRTKIDCz-fYHinmk2EOIrNFWiLT8uAlkHM4U" />
  <link rel="stylesheet" type="text/css" href="assets/css/ladda-themeless.min.css"/>
  <link rel="stylesheet" type="text/css" href="assets/css/linkservice.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script src="/assets/js/jquery.min.js"></script>
 <script type="text/javascript" src="/assets/js/store.js"></script>

<!-- <script>

	$(document).ready(function(){
  
// Increment value in quantity input

$('.qty-plus').each(function(index) {
  $(this).click(function(e) {
    e.preventDefault();
    var current = $(this).siblings("input.quantity").val();
    var currentVal = parseInt($(this).siblings("input.quantity").val());
    if (!isNaN(currentVal)) {
      $(this).siblings("input.quantity").val(currentVal + 1);
    } else {
      $(this).siblings("input.quantity").val(1);
      console.log("Failed!")
    }
  });
});

// Decrement value in quantity input

$(".qty-minus").each(function(index) {
  $(this).click(function(e) {
    e.preventDefault();
    var currentVal = parseInt($(this).siblings("input.quantity").val());
    if (!isNaN(currentVal) && currentVal > 1) {
      $(this).siblings("input.quantity").val(currentVal - 1);
    } else {
      $(this).siblings("input.quantity").val(1);
    }
  });
});
  
  
});
  
</script> -->


 <style type="text/css">
 	

 </style>
 
 
@endsection
<body >
  @section('content')

 <div class="main-content container col-md-12 col-xs-12 col-lg-12" style="background-color: #f8f9fa;">
  
  <div class="row">
    <div class="col-md-10 col-sm-12 col-lg-12">
      <div class="panel panel-default">
      
          <h4 style="padding-top: 15px; font-size: 20px; padding: 5px;"><a href="link-building-service" style="color:#0facf3; text-decoration: none; font-family: Dosis; font-weight: 700;">Link Building Services</a> / Start Now</h4>
      </div><br><br>
      <div class="container-content col-md-10 col-xs-11 col-lg-11">
        <div class="row fixedElement" style="">
          <div class="col-md-6 col-sm-6 col-lg-6">
            <h4>Link Building Project Details</h4>
          </div>
           <div class="offset-md-2 col-sm-4 col-lg-4 form-group">
            <h3>Sub Total: <b  style="color:#0facf3;">$</b><span style="color:#0facf3;" class="total" id="the_price_v_m">0.00</span> <button type="button" class="btn btn-sm btn-primary  remove-button" id="reset">Reset</button></h3>

            <p style="font-family: 'Open Sans',sans-serif;">Estimated completion: <b>10 Days</b></p>
          </div>
          
        </div>
        <script>
           $(window).scroll(function(e){ 
          var $el = $('.fixedElement'); 
          var isPositionFixed = ($el.css('position') == 'fixed');
          if ($(this).scrollTop() > 200 && !isPositionFixed){ 
            $el.css({'position': 'fixed', 'top': '0px' , 'background-color' : '#fff' , 'right' : '133px' , 'width' : '88%' , 'z-index' : '100'}); 
          }
          if ($(this).scrollTop() < 200 && isPositionFixed){
            $el.css({'position': 'static', 'top': '0px' , 'background-color' : '#fff' , 'width' : '100%' , 'z-index' : '100'}); 
          } 
        });
        </script>


        <!-- scroll bar media query -->
        <script>
        	var mq = window.matchMedia('@media only screen and (max-width: 375px)');
if(mq.matches) {
    mq.css({'position': 'fixed', 'top': '0px' , 'background-color' : '#333' })
}

mq.addListener(function(changed) {
    if(changed.matches) {
        // the width of browser is more then 700px
    } 
}); 
        </script>
        <!-- /scroll bar media query -->



        <hr>
          <div class="container">
             <div class="row">
               <div class="offset-md-4 col-sm-6 col-lg-6">
                  <h4 style="color: black;">Choose Your Quantity</h4>
               </div>
             </div><br>
          <div class="row extend">
          <div class="col-md-4 col-sm-4 col-lg-4 placement">
          <div class="info-card" style="border: 2px solid #0facf3;">
             <h5 style="margin-left: 80px;">DA 10 + Link</h5>
                <form action="" method="" id="form1" class="form-group">
                    <label style="color: black;">Quantity:</label>

                    <!-- input spinner -->
						
      					<!-- <input class="quantity number qty_input valid" type="number" name="number" min="0" max="900" value="0" data-price="60">
      					<div class="input-spin">
      						<i class="fa fa-spiner fa-angle-up qty-plus " ></i>
      						<i class="fa fa-spiner fa-angle-down qty-minus "></i>
    						</div>	 -->
  					
                    <!-- /input spinner -->

                  <input type="number" name="number"  value="0"  min="0" max="900" class="number qty_input valid" data-price="60"  afterprice="90" id="blogplane1">
                  
                  <p style="color: black; text-align: center;">From</p>
                   <div class="plancircle">
                    <span style="font-size: 30px;" id="price1" data-price="60"><b>60</b></span>
                    <span>USD</span>
                </div>
                 
                  <p style="color: black; text-align: center;">Per Placement:</p>
                <div id="desc" style="background-color:#0089e9; ">
                  
                   <h4 class="premium" style="color: #ffff; margin-left: 20px; font-weight: 600;">Premium Categories</h4>
                  <div class="form-group automotive">
                    <input type="checkbox" class="premium checkbox offcheckbox" id="pre-box1" data-price="30" style="height: 18px; width: 20px;">
                    <span style="font-size: 19px;" id="text">Automotive / Financial / business / health / Technology / Gambling +50%</span>
                  </div><br>
                  
                </div>
                </form>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-lg-4 placement">
          <div class="info-card" style="background-color: #f2f2f2; border: 2px solid #0facf3;">
             <h5 style="margin-left: 80px; color:#0facf3; ">DA 20 + Link</h5>
                <form action="" method="" id="form1" class="form-group">
                  <label style="color: black;">Quantity:</label>

					    <!-- input spinner -->
					
						
  					<!-- <input class="quantity number qty_input valid" type="number" name="number" min="0" max="900" value="0" data-price="80">
  					<div class="input-spin">
  						<i class="fa fa-spiner fa-angle-up qty-plus " ></i>
  						<i class="fa fa-spiner fa-angle-down qty-minus "></i>
						</div>	 -->
  					
				
                    <!-- /input spinner -->

                  <input type="number" name="number" value="0" class="number qty_input valid" data-price="80" afterprice="120" min="0" max="900" id="blogplane2">

                  <p style="color: black; text-align: center;">From</p>
                   <div class="plancircle">
                    <span  style="font-size: 30px;" id="price2" data-price="80"><b>80</b></span>
                    <span>USD</span>
                  </div>
                  <p style="color: black; text-align: center;">Per Placement:</p>
                <div id="desc" style="background-color:#f2f2f2;">
                 
                   <h4  class="premium" style="color: #0facf3; margin-left: 20px; font-weight: 600;">Premium Categories</h4>
                  <div class="form-group automotive">
                    <input type="checkbox" class="pre-box2 checkbox offcheckbox" id="pre-box2" data-price="40" name="checkbox" style="height: 18px; width: 20px;">
                    <span style="font-size: 19px; color: #0facf3" id="text">Automotive / Financial / business / health / Technology / Gambling +50%</span>
                  </div><br>
                   
                </div>
                </form>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-lg-4 placement DA30">
          <div class="info-card" style="border: 2px solid #0facf3;">
             <h5 style="margin-left: 80px;">DA 30 + Link</h5>
                <form action="" method="" id="form1" class="form-group">
                  <label style="color: black;">Quantity:</label>

				<!-- <input class="quantity number qty_input valid" type="number" name="number" min="0" max="900" value="0" data-price="105">
  					<div class="input-spin">
  						<i class="fa fa-spiner fa-angle-up qty-plus " ></i>
  						<i class="fa fa-spiner fa-angle-down qty-minus "></i>
						</div> -->

                  <input type="number" name="number" value="0" class="number qty_input valid" data-price="105" afterprice="157.5" min="0" max="900" id="blogplane3">
                  
                  <p style="color: black; text-align: center;">From</p>
                   <div class="plancircle">
                    <span style="font-size: 30px;" id="price3" data-price="105"><b>105</b></span>
                    <span>USD</span>
                  </div>
                  <p style="color: black; text-align: center;">Per Placement:</p>
                <div id="desc" style="background-color:#0089e9; ">
                 
                   
                   <h4  class="premium" style="color: #ffff; margin-left: 20px; font-weight: 600;">Premium Categories</h4>
                  <div class="form-group automotive">
                    <input type="checkbox" class="pre-box3 checkbox offcheckbox" id="pre-box3" data-price="53" name="checkbox" style="height: 18px; width: 20px;">
                    <span style="font-size: 19px;" id="text">Automotive / Financial / business / health / Technology / Gambling +50%</span>
                  </div><br>
                   
                </div>
                </form>
            </div>
          </div><br><br>
          <div class="offset-md-2 col-sm-4 col-lg-4 placement" style="margin-top: 10px;">
          <div class="info-card" style="background-color: #f2f2f2; border: 2px solid #0facf3;">
             <h5 style="margin-left: 80px; color:#0facf3; ">DA 40 + Link</h5>
                <form action="" method="" id="form1" class="form-group">
                  <label style="color: black;">Quantity:</label>

        				<!-- <input class="quantity number qty_input valid" type="number" name="number" min="0" max="900" value="0" data-price="235">
        					<div class="input-spin">
        						<i class="fa fa-spiner fa-angle-up qty-plus " ></i>
        						<i class="fa fa-spiner fa-angle-down qty-minus "></i>
        					</div> -->

                  <input type="number" name="number" value="0" class="number qty_input valid" data-price="235" min="0" afterprice="352.5" max="900" id="blogplane4">
                  
                  <p style="color: black; text-align: center;">From</p>
                   <div class="plancircle">
                    <span  style="font-size: 30px;" id="price4" data-price="235"><b>235</b></span>
                    <span>USD</span>
                  </div>
                  <p style="color: black; text-align: center;">Per Placement:</p>
                <div id="desc" style="background-color:#f2f2f2;">
                 
                   <h4  class="premium" style="color: #0facf3; margin-left: 20px; font-weight: 600;">Premium Categories</h4>
                  <div class="form-group automotive">
                    <input type="checkbox" class="pre-box4 checkbox offcheckbox" id="pre-box4" data-price="118" name="checkbox" style="height: 18px; width: 20px;">
                    <span style="font-size: 19px; color: #0facf3" id="text">Automotive / Financial / business / health / Technology / Gambling +50%</span>
                  </div><br>
                  
                </div>
                </form>
            </div>
          </div>
            <div class="col-md-4 col-sm-4 col-lg-4 placement DA50" style="margin-top: 10px;">
          <div class="info-card" style="border: 2px solid #0facf3;">
             <h5 style="margin-left: 80px;">DA 50 + Link</h5>
                <form action="" method="" id="form1" class="form-group">
                  <label style="color: black;">Quantity:</label>

					<!-- <input class="quantity number qty_input valid" type="number" name="number" min="0" max="900" value="0" data-price="500">
  					<div class="input-spin">
  						<i class="fa fa-spiner fa-angle-up qty-plus " ></i>
  						<i class="fa fa-spiner fa-angle-down qty-minus "></i>
						</div> -->
						
                  <input type="number" name="number" value="0" class="number qty_input valid" data-price="500" afterprice="750" min="0" max="900" id="blogplane5">
                  

                  <p style="color: black; text-align: center;">From</p>
                   <div class="plancircle">
                    <span style="font-size: 30px;" id="price5" data-price="500"><b>500</b></span>
                    <span>USD</span>
                  </div>
                  <p style="color: black; text-align: center;">Per Placement:</p>
                <div id="desc" style="background-color:#0089e9; ">
                 
                   <h4 class="premium" style="color: #ffff; margin-left: 20px; font-weight: 600;">Premium Categories</h4>
                  <div class="form-group automotive">
                    <input type="checkbox" class="pre-box5 checkbox offcheckbox" id="pre-box5" data-price="250" name="checkbox" style="height: 18px; width: 20px;">
                    <span style="font-size: 19px;" id="text">Automotive / Financial / business / health / Technology / Gambling +50%</span>
                  </div><br>
                   
                </div>
                </form>
            </div>

          </div><br><br> 
           
          
          </div>
          </div><br><br><br>

      <!-- project details -->
    
        
        <div><p class="csv">Too long forms? Just upload your spreadsheet or your CSV file here
        	<input type="file" name="upload" size="6">.</p></div>
        <div><p class="each-line">Each line of the CSV file should include the following fields separated by commas: <strong>Word count, Anchor Text, Target URL</strong> </p></div><br>
      <form class="word-count project-detial" id="words">
         <div class="col-md-12 col-xs-12 col-lg-12">
        <div class="low-tier"><h3 class="project-details">DA 10+ Link "Low Tier" project details</h3></div><br>
		  <div class="form-row">
		    <div class="form-group col-md-5 word-text">
		      <label for=""><strong class="labels">Choose Word Count</strong></label>
		      <div class="tip"><select id="" class="form-control" style=" height: 50px;">
		        <option selected>500 Words</option>
		        <option><b>$500</b></option>
		        <option><b>$750 + 10.00</b></option>
		        <option><b>$1000 + 15.00</b></option>
		        <option><b>$1250 + 20.00</b></option>
		        <option><b>$1500 + 25.00</b></option>
		      </select><button type="button" class="btn btn-info"><span style="text-transform: uppercase;">T</span><span style="text-transform: lowercase;">ip</span></button></div>
		    </div>
		    <div class="form-group col-md-5 anchor word-text">
		      <label for=""><strong class="labels">Anchor Text</strong></label>
		      <div class="tip"><input type="text" class="form-control" id=""><button type="button" class="btn btn-info"><span style="text-transform: uppercase;">T</span><span style="text-transform: lowercase;">ip</span></button></div>
		    </div>
		  </div>
		  <div class="form-group col-md-5" style="padding-left: 0px; padding-right: 5px;">
		      <label for=""><strong class="labels">Target URL</strong></label>
		      <div class="tip"><input type="text" class="form-control" id=""><button type="button" class="btn btn-info"><span style="text-transform: uppercase;">T</span><span>ip</span></button></div>
		    </div>
		</form> 
		</div>
    
        
   <form class="word-count project-detial" id="words">
    <div class="col-md-12 col-xs-12 col-lg-12">
    <div class="medium-tier"><h3 class="project-details">DA 20+ Link "Medium Tier" project details</h3></div><br>
  <div class="form-row ">
    <div class="form-group col-md-5 word-text">
      <label for=""><strong class="labels">Choose Word Count</strong></label>
      <div class="tip"><select id="" class="form-control" style=" height: 50px;">
        <option selected>500 Words</option>
        <option><b>$500</b></option>
        <option><b>$750 + 10.00</b></option>
        <option><b>$1000 + 15.00</b></option>
        <option><b>$1250 + 20.00</b></option>
        <option><b>$1500 + 25.00</b></option>
      </select><button type="button" class="btn btn-info"><span style="text-transform: uppercase;">T</span><span>ip</span></button></div>
    </div>
    <div class="form-group col-md-5 anchor word-text">
      <label for=""><strong class="labels">Anchor Text</strong></label>
      <div class="tip"><input type="text" class="form-control" id=""><button type="button" class="btn btn-info"><span style="text-transform: uppercase;">T</span><span>ip</span></button></div>
    </div>
     <div class="form-group col-md-5" style="padding-left: 0px; padding-right: 5px;">
      <label for=""><strong class="labels">Target URL</strong></label>
      <div class="tip"><input type="text" class="form-control" id=""><button type="button" class="btn btn-info"><span style="text-transform: uppercase;">T</span><span>ip</span></button></div>
    </div>
  </div>
 
    
    <div class="form-group">
    <label for=""><strong class="labels">Optional order comments (NOTICE: Special order request are not guaranteed)</strong></label>
    <textarea class="form-control textbox" id="" rows="3" style="height: 100px; width: 90%;"></textarea><br>
    <div class="textbox textboxx" style="width: 90%;">
            <a href="link-building" class="btn btn-outline-primary back back-btn" style="width: 140px; border-radius: 20px;"><b>BACK</b></a>
            <a href="/Link-building-service-billingdetails" class="btn btn-primary pull-right back next" style="width: 140px; border-radius: 20px;"><b>NEXT</b></a>
          </div>
  </div>
  
</form>

</div>
        
      <!-- /project details -->
      
        </div>
        </div>
      </div>

    </div>
  </div>
  
 </div>

@endsection
</body>

