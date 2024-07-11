
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>SpicePay - Invoice</title>
        <meta charset="utf-8">
<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" href="https://www.spicepay.com/apple-touch-icon.png">

<link rel="apple-touch-icon" sizes="57x57" href="https://www.spicepay.com/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="https://www.spicepay.com/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="https://www.spicepay.com/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="https://www.spicepay.com/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="https://www.spicepay.com/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="https://www.spicepay.com/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="https://www.spicepay.com/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="https://www.spicepay.com/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://www.spicepay.com/apple-touch-icon-180x180.png">
<link rel="shortcut icon" href="https://www.spicepay.com/favicon.ico" />
<link rel="icon" href="https://www.spicepay.com/favicon.png" type="image/x-icon" />
<link rel="manifest" href="https://www.spicepay.com/manifest.json">
<link rel="mask-icon" href="https://www.spicepay.com/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">

<link rel="stylesheet" href="css/normalize.min.css">


<!-- Loading styles for the new design... -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link href="https://www.spicepay.com/css_new_design/bootstrap.min.css" rel="stylesheet" />
<link href="https://www.spicepay.com/css_new_design/style.css?ver=1.0.5" rel="stylesheet" />
<link href="https://www.spicepay.com/css_new_design/icofont.css" rel="stylesheet" />
        <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
        <script type="text/javascript">
            window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":null,"theme":"light-top"};
        </script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
        <!-- End Cookie Consent plugin -->
    </head>
    <body class="invoice-body">
        <div class="container invoice-container">
                            <div class="dashboard-content no-sidebar invoice-wrap">
                    <div class="row pad-2-top">

                            <div class="col-12 col-sm-6 align-sm-center">
                                <p class="text-16 marg-0-bottom">
                                    Invoice <strong>#7YKFRJXLVA</strong>
                                </p>
                                <p class="text-12"> 
                                    <span class="icofont icofont-calendar text-14" style="position: relative; display: inline-block; margin-right: 2px;"></span> 
                                    2019-08-27 09:18:49
                                </p>
                            </div>
                            <div class="col-12 col-sm-6 align-lg-right align-sm-center">
                                <p class="text-14"> 
                                    <span class="icofont icofont-clock text-14" style="position: relative; display: inline-block; margin-right: 2px;"></span> 
                                    <strong><span id="countdown"></span></strong> 
                                </p>
                            </div>
                        
                    </div>
                    <div class="hr-divider"></div>
                    
                        
                                                    <div class="form-wrap marg-3-top">
    <div class="row row-invoice align-items-center">
        <div class="col-12 col-sm-8 b-right">
            <div class="form-group">
                <div class="row">
                    <div class="col-12">
                        <div class="pad-1 pad-0-sm">
                            <p class="marg-0-bottom text-14 d-gray">
                                Amount:
                            </p>
                            <p class="text-16 marg-0-bottom">
                                <strong>
                                                                            $
                                                                        0.10
                                </strong> 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4 align-lg-center col-qr">
            <img src="https://www.spicepay.com/qrc.php?m=invoice&pid=ONEPcLq92jfbaP70HdNdFzf5O">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 align-lg-center pad-3-top col-btns">
        <form class="form-horizontal" method="POST" id="fInvoice">
            <input type="hidden" name="depositMethod" id="dminvoice" value="" />
        </form>
                                    <a href="javascript:void(0)" onclick="submitInvoice(1)" class="btn btn-primary btn-round btn-lg">
                    <span class="icofont icofont-cur-bitcoin text-21" style="display: inline-block; margin-right: 5px;"></span> 
                    Pay with BTC
                </a>
                                        <a href="javascript:void(0)" onclick="submitInvoice(2)" class="btn btn-primary btn-round btn-lg">
                    <span class="text-21" style="display: inline-block; margin-right: 5px;">Ł</span> 
                    Pay with LTC
                </a>
                            
                <a href="javascript:void(0)" onclick="submitInvoice(4)" class="btn btn-primary btn-round btn-lg" style="line-height: 22px">
                    <img src="img_new_design/bitcoincash-white.png" style="max-width: 24px; display: inline-block; margin-right: 5px;"> 
                    Pay with BCH
                </a>
                            
                                        
                 
            
                    
                    <a href="javascript:void(0)" onclick="submitInvoice(8)" class="btn btn-primary btn-round btn-lg" style="line-height: 22px">
                        <span class="icofont icofont-cur-bitcoin text-21" style="display: inline-block; margin-right: 5px;"></span> 
                        BTC Lightning
                    </a>
                    
                            
            </div>
</div>


        
    
<div class="form-wrap marg-3-top">
    <div class="row">
        <div class="col-12 col-md-6 b-right">
            <div class="pad-1 pad-0-sm marg-2-bottom">
                <p class="marg-1-bottom text-14 pad-2-top"><strong>Sender:</strong></p>
                                
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="pad-1 pad-0-sm marg-2-bottom">
                <p class="marg-1-bottom text-14 pad-2-top"><strong>Receiver:</strong></p>
                                    <p class="text-14 marg-0-bottom">Name: redmoon </p>
                    <p class="text-14 marg-0-bottom">URL:  </p>                
                            </div>
        </div>
    </div>
    <div class="invoice-divider"></div>
</div> 
<script>
    function submitInvoice(val){
        document.getElementById("dminvoice").setAttribute('value',val);
        document.getElementById('fInvoice').submit();
    }
</script>
                        	
                     
               </div>
                   </div>
           
        <div class="marg-3-top marg-3-bottom align-lg-center">
            <a href="https://www.spicepay.com"><img src="img/spicepay-logo.png" class="footer-logo" alt="SpicePay"></a>
        </div>
                <script src="js_new_design/core/jquery.3.2.1.min.js" type="text/javascript"></script>
        <script src="js_new_design/core/tether.min.js" type="text/javascript"></script> 
        <script src="js_new_design/core/bootstrap.min.js" type="text/javascript"></script>
        <script>
  
</script>


                  
        <script src="js_new_design/plugins/tablesaw.jquery.js"></script>
        <script src="js_new_design/plugins/tablesaw-init.js"></script>
        <script src="js_new_design/plugins/clipboard.min.js"></script>
                  
            <script type="text/javascript">
                $(function () { $('[data-tooltip="tooltip"]').tooltip()});
                new Clipboard('.btn-copy');
            </script>
          
        <div class="modal fade" id="modalCcTutorial" tabindex="-1" role="dialog" aria-labelledby="modalForCcTutorial">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <div class="inner-subtitle align-lg-center">
                    <h3>Here is how to pay your invoice using a Visa or MasterCard credit card</h3> 
                </div>
             <button type="button" class="close modal-close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" style="margin-top: -30px">
            
<div id="ccTutorial" class="carousel slide" data-ride="carousel" data-interval="15000" >
  
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
     <div class="ccTutorialSlide">
     <div class="row align-items-center">
     	<div class="col-md-4 align-md-center ">
			<h4 class="marg-1-bottom">Step 1.</h4> 
			<div class="separator separator-primary left md-center"></div>
			<p class="pad-1-top">On the invoice select pay with BTC </p>
		 </div>
		 
		 <div class="col-md-8">
		 	<img src="img_new_design/gifs/pay-with-btc.gif"/>
		 </div>
		</div>
	</div>
    </div>
    <div class="carousel-item">
     <div class="ccTutorialSlide">
     <div class="row align-items-center">
     	<div class="col-md-4 align-md-center">
			<h4 class="marg-1-bottom">Step 2.</h4> 
			<div class="separator separator-primary left  md-center"></div>
			<p class="pad-1-top">Open a browser of your preference and go to <a href="https://buy.bitcoin.com/" target="_blank">https://buy.bitcoin.com/</a></p>
		 </div>
		 
		 <div class="col-md-8">
		 	<img src="img_new_design/gifs/gotows.gif"/>
		 </div>
		</div>
	</div>
    </div>
    
    <div class="carousel-item">
     <div class="ccTutorialSlide">
     <div class="row align-items-center">
     	<div class="col-md-4 align-md-center">
			<h4 class="marg-1-bottom">Step 3.</h4> 
			<div class="separator separator-primary left md-center"></div>
			<p class="pad-1-top">Copy the BTC amount from the invoice and paste it in the BTC field on cc.spicepay.com. If you enter incorrect amount, your transaction will result in partial payment.<br/>
Also, don’t forget to select your credit card currency from the drop-down menu (USD or EUR).</p>
		 </div>
		 
		 <div class="col-md-8">
		 	<img src="img_new_design/gifs/copybtcamount.gif"/>
		 </div>
		</div>
	</div>
    </div>
    
    <div class="carousel-item">
     <div class="ccTutorialSlide">
     <div class="row align-items-center">
     	<div class="col-md-4 align-md-center">
			<h4 class="marg-1-bottom">Step 4.</h4> 
			<div class="separator separator-primary left md-center"></div>
			<p class="pad-1-top">Copy the BTC address listed on the invoice and paste it in the Bitcoin core address field on cc.spicepay.com. </p>
		 </div>
		 
		 <div class="col-md-8">
		 	<img src="img_new_design/gifs/copybtcaddress.gif"/>
		 </div>
		</div>
	</div>
    </div>
    
    <div class="carousel-item">
     <div class="ccTutorialSlide">
     <div class="row align-items-center">
     	<div class="col-md-4 align-md-center">
			<h4 class="marg-1-bottom">Step 5.</h4> 
			<div class="separator separator-primary left md-center"></div>
			<p class="pad-1-top">Click to continue and enter your credit card information. Once the payment is completed, the BTC will be sent to the merchant and the invoice will be marked as paid. </p>
		 </div>
		 
		 <div class="col-md-8">
		 	<img src="img_new_design/gifs/btccccontinue.gif"/>
		 </div>
		</div>
	</div>
    </div>
  </div>
  
  <ol class="carousel-indicators">
	  <li data-target="#ccTutorial" data-slide-to="0" class="active"><span>1</span></li>
	  <li data-target="#ccTutorial" data-slide-to="1"><span>2</span></li>
    <li data-target="#ccTutorial" data-slide-to="2"><span>3</span></li>
    <li data-target="#ccTutorial" data-slide-to="3"><span>4</span></li>
    <li data-target="#ccTutorial" data-slide-to="4"><span>5</span></li>
  </ol>
  
   <a class="carousel-control-prev" href="#ccTutorial" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#ccTutorial" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
           
	<p class="marg-3-top text-14 text-muted text-center">*If you wish to purchase Bitcoin Cash please follow the same steps <br class="helper-hidden-md"> but make sure you have selected BCH as a form of payment on your invoice and on cc.spicepay.com.</p>
            </div>
            

        </div>
    </div>
</div>
    </body>
</html>
