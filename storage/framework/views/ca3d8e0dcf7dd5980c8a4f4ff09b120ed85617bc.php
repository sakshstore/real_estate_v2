<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
   

  <?php echo SEO::generate(); ?>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

    

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


   
   
    
  
  
  </head>
  <body>
    
    
 
    <?php echo $__env->make('layouts.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 




  <div class="container  ">

    <!-- Three columns of text below the carousel -->
    <div class="row">
   <div class="col-lg-12  ">
         <?php echo $__env->make('layouts.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>      </div>
    </div>
 <section class="py-5 text-left container">
    <div class="row  ">
        
        
      <div class="col-lg-12 col-md-12 mx-auto">
        <?php echo $__env->yieldContent('title'); ?>
       
      </div>
    </div>
  </section>

  <div class="container  ">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-12  ">
          <form class="search-form d-lg-block" action="https://www.newlaunchproperties.ae/listing" method="get" id="searchp">
                                                        <div class="row">
                                                            <div class="modal-header">
                                                    <button type="button" class="btn-close modal-close-btn" data-bs-dismiss="modal"></button></div>
                                                            <div class="search-form-heading">
                                                                                                                                <h2 class="pt-2 pb-2">FIND YOUR PROPERTY</h2>
                                                            </div>
                                                            
                                                             <div class="col-lg-4 col-md-6 dubai-text-input mtb-15">
                                                                <input type="text" class="form-select search-property-input" name="search" autocomplete="off" id="search" placeholder="Location, Developer or Project">
                                                                <!--<div class="autocomplete-items myInputautocomplete-list">
                                                                    <div class="search-product-name">Teak Wood Plain Name Plate With Warli &amp; Dhokra Art</div>
                                                                </div>-->
                                                            </div>
                                    
                                                           
                                                            <!-- <div class="col-lg-2 col-md-6 dubai-text">
                                                                <select class="form-select" name="city">
                                                                    <option value="">City</option>
                                                                    <option value="Dubai">Dubai</option>
                                                                    <option value="Abu Dhabi">Abu Dhabi</option>
                                                                    <option value="Sharjah">Sharjah</option>
                                                                    <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                                                </select>
                                                            </div> -->
                                    
                                    
                                                            <!-- 
                                                              <div class="col-lg-3 col-md-6 dubai-text">
                                                                <select class="form-select" name="location"  id="location">
                                                                    <option value="">Location</option>
                                                                                                                                                                                                                <option value="Tilal Al Ghaf">Tilal Al Ghaf</option>
                                                                                                                                            <option value="World Trade Center">World Trade Center</option>
                                                                                                                                            <option value="Palm Jumeirah">Palm Jumeirah</option>
                                                                                                                                            <option value="Business Bay">Business Bay</option>
                                                                                                                                            <option value="Meydan City">Meydan City</option>
                                                                                                                                            <option value="Al Furjan">Al Furjan</option>
                                                                                                                                            <option value="Damac Hills">Damac Hills</option>
                                                                                                                                            <option value="Jumeirah">Jumeirah</option>
                                                                                                                                            <option value="Downtown">Downtown</option>
                                                                                                                                            <option value="City Walk">City Walk</option>
                                                                                                                                            <option value="MBR City">MBR City</option>
                                                                                                                                            <option value="Sobha Hartland">Sobha Hartland</option>
                                                                                                                                            <option value="Jumeirah Beach Residence">Jumeirah Beach Residence</option>
                                                                                                                                            <option value="District 1 - MBR">District 1 - MBR</option>
                                                                                                                                            <option value="Dubailand">Dubailand</option>
                                                                                                                                            <option value="Al Warsan">Al Warsan</option>
                                                                                                                                            <option value="Dubai Hills Estate">Dubai Hills Estate</option>
                                                                                                                                            <option value="Safa Park">Safa Park</option>
                                                                                                                                            <option value="Dubai Marina">Dubai Marina</option>
                                                                                                                                            <option value="Mina Rashid">Mina Rashid</option>
                                                                                                                                            <option value="Dubai Water Canal">Dubai Water Canal</option>
                                                                                                                                            <option value="Arabian Ranches 3">Arabian Ranches 3</option>
                                                                                                                                            <option value="Dubai South">Dubai South</option>
                                                                                                                                            <option value="Emaar South">Emaar South</option>
                                                                                                                                            <option value="Damac Hills 2">Damac Hills 2</option>
                                                                                                                                            <option value="Dubai Harbour">Dubai Harbour</option>
                                                                                                                                            <option value="Jumeirah Lake Towers">Jumeirah Lake Towers</option>
                                                                                                                                            <option value="Dubai Creek">Dubai Creek</option>
                                                                                                                                            <option value="Yas Bay">Yas Bay</option>
                                                                                                                                            <option value="Masaar">Masaar</option>
                                                                                                                                            <option value="Dubai Studio City">Dubai Studio City</option>
                                                                                                                                            <option value="Dubai Maritime City">Dubai Maritime City</option>
                                                                                                                                            <option value="Dubai Healthcare City">Dubai Healthcare City</option>
                                                                                                                                            <option value="Aljada">Aljada</option>
                                                                                                                                            <option value="Jumeirah Village Circle">Jumeirah Village Circle</option>
                                                                                                                                            <option value="Ramhan Island">Ramhan Island</option>
                                                                                                                                            <option value="Jumeirah Golf Estates">Jumeirah Golf Estates</option>
                                                                                                                                            <option value="Uptown Dubai">Uptown Dubai</option>
                                                                                                                                            <option value="Madinat Jumeirah Living">Madinat Jumeirah Living</option>
                                                                                                                                            <option value="Hayat Island">Hayat Island</option>
                                                                                                                                            <option value="Yas Island">Yas Island</option>
                                                                                                                                            <option value="Dubai Creek Harbour">Dubai Creek Harbour</option>
                                                                                                                                            <option value="Saadiyat Island">Saadiyat Island</option>
                                                                                                                                            <option value="Dubai Design District">Dubai Design District</option>
                                                                                                                                            <option value="Emaar Beachfront">Emaar Beachfront</option>
                                                                                                                                            <option value="Jumeirah Village Triangle">Jumeirah Village Triangle</option>
                                                                                                                                            <option value="Damac Lagoons">Damac Lagoons</option>
                                                                                                                                            <option value="Meydan">Meydan</option>
                                                                                                                                            <option value="Sheikh Zayed Bin Hamdan street">Sheikh Zayed Bin Hamdan street</option>
                                                                                                                                            <option value="Al Zorah">Al Zorah</option>
                                                                                                                                            <option value="Arabian Ranches III">Arabian Ranches III</option>
                                                                                                                                            <option value="WASL1">WASL1</option>
                                                                                                                                            <option value="Downtown Jebel Ali">Downtown Jebel Ali</option>
                                                                                                                                            <option value="Jebel Ali">Jebel Ali</option>
                                                                                                                                            <option value="CANDACE ACACIA">CANDACE ACACIA</option>
                                                                                                                                            <option value="CANDACE ASTER">CANDACE ASTER</option>
                                                                                                                                            <option value="Emaar Beachfront, Dubai">Emaar Beachfront, Dubai</option>
                                                                                                                                            <option value="Rashid Yachts &amp; Marina">Rashid Yachts &amp; Marina</option>
                                                                                                                                            <option value="Mirdif">Mirdif</option>
                                                                                                                                            <option value="Dubai">Dubai</option>
                                                                                                                                            <option value="The Valley">The Valley</option>
                                                                                                                                            <option value="Sobha Hartland II">Sobha Hartland II</option>
                                                                                                                                            <option value="Midtown">Midtown</option>
                                                                                                                                            <option value="Dubai Islands">Dubai Islands</option>
                                                                                                                                    </select>
                                                            </div>
                                                            -->
                                                            
                                    
                                                            <div class="col-lg-2 col-md-6 dubai-text-select mtb-15">
                                                                <div class="drop-menu-form-selected">
                                                                    <select class="form-select" name="ptype" id="ptype">
                                                                        <option value="">Type</option>
                                                                        <option value="Apartments">Apartment</option>
                                                                        <option value="Townhouses">Townhouse</option>
                                                                        <option value="Villas">Villa</option>
                                                                        <option value="Penthouse">Penthouse</option>
                                                                        <option value="Sky Villa">Sky Villas</option>
                                                                        <option value="Duplex">Duplex</option>
                                                                        <option value="Mansion">Mansion</option>
                                                                        <option value="Signature Villa">Signature Villas</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                            <!--
                                                            <div class="col-lg-3 col-md-6 dubai-text">
                                                                <select class="form-select" name="pstatus" id="pstatus">
                                                                    <option value="Offplan">Off Plan Projects</option>
                                                                    <option value="Ready">Ready Projects</option>
                                                                    <option value="Ready">New Launch</option>
                                                                </select>
                                                            </div> -->
                                    
                                    
                                    
                                                            <!-- <div class="col-lg-3 col-md-6 dubai-text">
                                                                <select class="form-select " name="dev">
                                                                    <option value="">Developers</option>
                                                                                                                                                                                                                <option value="MAG">MAG</option>
                                                                                                                                            <option value="Omniyat">Omniyat</option>
                                                                                                                                            <option value="Majid Al Futtaim">Majid Al Futtaim</option>
                                                                                                                                            <option value="Ithra Dubai">Ithra Dubai</option>
                                                                                                                                            <option value="Damac Properties">Damac Properties</option>
                                                                                                                                            <option value="Emaar">Emaar</option>
                                                                                                                                            <option value="Al Sharq">Al Sharq</option>
                                                                                                                                            <option value="Meraas">Meraas</option>
                                                                                                                                            <option value="Signature Developers">Signature Developers</option>
                                                                                                                                            <option value="Five Holding">Five Holding</option>
                                                                                                                                            <option value="Xtreme Vision">Xtreme Vision</option>
                                                                                                                                            <option value="Kerzner International">Kerzner International</option>
                                                                                                                                            <option value="H-H">H-H</option>
                                                                                                                                            <option value="Palma Holdings">Palma Holdings</option>
                                                                                                                                            <option value="Dubai Properties">Dubai Properties</option>
                                                                                                                                            <option value="Verve Developments">Verve Developments</option>
                                                                                                                                            <option value="G &amp; Co">G &amp; Co</option>
                                                                                                                                            <option value="Dar Al Arkan">Dar Al Arkan</option>
                                                                                                                                            <option value="Nakheel">Nakheel</option>
                                                                                                                                            <option value="IGO">IGO</option>
                                                                                                                                            <option value="Reportage Properties">Reportage Properties</option>
                                                                                                                                            <option value="Meydan Group">Meydan Group</option>
                                                                                                                                            <option value="Ellington">Ellington</option>
                                                                                                                                            <option value="Danube Properties">Danube Properties</option>
                                                                                                                                            <option value="Skai Holdings">Skai Holdings</option>
                                                                                                                                            <option value="Shapoorji Pallonji">Shapoorji Pallonji</option>
                                                                                                                                            <option value="Binghatti">Binghatti</option>
                                                                                                                                            <option value="Liv">Liv</option>
                                                                                                                                            <option value="Devmark Group">Devmark Group</option>
                                                                                                                                            <option value="AHS Properties">AHS Properties</option>
                                                                                                                                            <option value="Khamas Group">Khamas Group</option>
                                                                                                                                            <option value="Azizi">Azizi</option>
                                                                                                                                            <option value="Swiss Property">Swiss Property</option>
                                                                                                                                            <option value="Siadah Development">Siadah Development</option>
                                                                                                                                            <option value="Arada">Arada</option>
                                                                                                                                            <option value="Fakhruddin Properties">Fakhruddin Properties</option>
                                                                                                                                            <option value="Rak Properties">Rak Properties</option>
                                                                                                                                            <option value="Lootah Development">Lootah Development</option>
                                                                                                                                            <option value="Eagle Hills">Eagle Hills</option>
                                                                                                                                            <option value="DMCC">DMCC</option>
                                                                                                                                            <option value="TownX Development">TownX Development</option>
                                                                                                                                            <option value="Sobha Realty">Sobha Realty</option>
                                                                                                                                            <option value="Aldar Properties">Aldar Properties</option>
                                                                                                                                            <option value="Adventz">Adventz</option>
                                                                                                                                            <option value="Samana Developers">Samana Developers</option>
                                                                                                                                            <option value="Dubai Holding">Dubai Holding</option>
                                                                                                                                            <option value="Select Group">Select Group</option>
                                                                                                                                            <option value="Al Zorah Development">Al Zorah Development</option>
                                                                                                                                            <option value="AYS Developer">AYS Developer</option>
                                                                                                                                            <option value="Gulf Land Developers">Gulf Land Developers</option>
                                                                                                                                            <option value="Tiger Properties">Tiger Properties</option>
                                                                                                                                            <option value="Nabni Development">Nabni Development</option>
                                                                                                                                            <option value="Dar Global">Dar Global</option>
                                                                                                                                            <option value="national properties">national properties</option>
                                                                                                                                            <option value="SRG Developer">SRG Developer</option>
                                                                                                                                            <option value="OCTA Properties">OCTA Properties</option>
                                                                                                                                            <option value="Fortune 5">Fortune 5</option>
                                                                                                                                            <option value="Dubai South">Dubai South</option>
                                                                                                                                            <option value="Al Habtoor">Al Habtoor</option>
                                                                                                                                            <option value="R.Evolution Real Estates">R.Evolution Real Estates</option>
                                                                                                                                            <option value="Deyaar">Deyaar</option>
                                                                                                                                            <option value="Fortimo Developer">Fortimo Developer</option>
                                                                                                                                    </select>
                                                            </div>
                                                            -->
                                                            
                                                    
                                                             <div class="col-lg-2 col-md-6 dubai-text-select mtb-15">
                                                                <div class="drop-menu-form-selected">
                                                                    <select class="form-select" name="bedrooms" id="beds">
                                                                        <option value="">Bedroom</option>
                                                                        <option value="Studio">Studio</option>
                                                                        <option value="1">1 Bedroom</option>
                                                                        <option value="2">2 Bedroom</option>
                                                                        <option value="3">3 Bedroom</option>
                                                                        <option value="4">4 Bedroom</option>
                                                                        <option value="5">5 Bedroom</option>
                                                                        <option value="6">6 Bedroom</option>
                                                                        <option value="7">7 Bedroom</option>
                                                                        <option value="8">8 Bedroom</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                                                                                        <div class="col-lg-2 col-md-6 dubai-text-select ">
                                                                <div class="drop-menu-form-selected">
                                                                    <select class="form-select 1" name="completion" id="completion">
                                                                        <option value="">Completion</option>
                                                                                                                                                <option value="Completion Date">Completion Date</option>
                                                                                                                                                <option value="Ready to Move In">Ready to Move In</option>
                                                                                                                                                <option value="Q3 2023">Q3 2023</option>
                                                                                                                                                <option value="Q4 2023">Q4 2023</option>
                                                                                                                                                <option value="Q1 2024">Q1 2024</option>
                                                                                                                                                <option value="Q2 2024">Q2 2024</option>
                                                                                                                                                <option value="Q3 2024">Q3 2024</option>
                                                                                                                                                <option value="Q4 2024">Q4 2024</option>
                                                                                                                                                <option value="Q1 2025">Q1 2025</option>
                                                                                                                                                <option value="Q2 2025">Q2 2025</option>
                                                                                                                                                <option value="Q3 2025">Q3 2025</option>
                                                                                                                                                <option value="Q1 2026">Q1 2026</option>
                                                                                                                                                <option value="Q2 2026">Q2 2026</option>
                                                                                                                                                <option value="Q3 2026">Q3 2026</option>
                                                                                                                                                <option value="Q4 2026">Q4 2026</option>
                                                                                                                                                <option value="Q1 2027">Q1 2027</option>
                                                                                                                                                <option value="Q2 2027">Q2 2027</option>
                                                                                                                                                <option value="Q3 2027">Q3 2027</option>
                                                                                                                                                <option value="Q4 2027">Q4 2027</option>
                                                                                                                                                <option value="Q1 2028">Q1 2028</option>
                                                                                                                                                <option value="Q3 2028">Q3 2028</option>
                                                                                                                                                <option value="Q4 2028">Q4 2028</option>
                                                                                                                                                <option value="Launching Soon">Launching Soon</option>
                                                                                                                
                                                                    </select>
                                                                </div>
                                                            </div>



                                                            <!-- <div class="col-lg-2 col-md-6 dubai-text dropdown">

                                                              <a class="price-btn" data-bs-toggle="dropdown" aria-expanded="false">Area Sqft</a>


                                                             <ul class="price-drop-listing dropdown-menu">
                                                                    <li>
                                                                     <select class="form-select" name="area-range" id="min-area">
                                                                        <option value="">Min</option>
                                                                        <option value="20000">300</option>
                                                                     </select>
                                                                 </li>

                                                            <li>
                                                                <select class="form-select" name="area-range-max" id="max-area">
                                                                    <option value="">Max</option>
                                                                    <option value="20000">1,000,000</option>
                                                                </select>

                                                            </li>

                                                                </ul>

                                                             </div> -->
                                                                                                                       <div class="col-lg-2 col-md-6 dubai-text dubai-text-select dropdown">
                                                                    <a class="price-btn" data-bs-toggle="dropdown" aria-expanded="false">Price</a>
                                                            <ul class="price-drop-listing price-drop-listing-two dropdown-menu" style="height:58px;">
                                                                <li>
                                                                    <select class="form-select" name="price_range" id="min-price" onfocus="this.size=10;" onblur="this.size=1;" onchange="this.size=1; this.blur();" data-gtm-form-interact-field-id="0" style="position: absolute;width: 130px;background-color: #FFF;" size="1">
                                                                    <!--<select class="form-select" name="price_range" id="min-price" onchange="disableMaxPriceSelectOption(this.value);">-->
                                                                        <option value="">Min Price</option>
                                                                                                                                                <option value="300000">AED 300,000</option>
                                                                                                                                                <option value="400000">AED 400,000</option>
                                                                                                                                                <option value="500000">AED 500,000</option>
                                                                                                                                                <option value="600000">AED 600,000</option>
                                                                                                                                                <option value="700000">AED 700,000</option>
                                                                                                                                                <option value="800000">AED 800,000</option>
                                                                                                                                                <option value="900000">AED 900,000</option>
                                                                                                                                                <option value="1000000">AED 1,000,000</option>
                                                                                                                                                <option value="1100000">AED 1,100,000</option>
                                                                                                                                                <option value="1200000">AED 1,200,000</option>
                                                                                                                                                <option value="1300000">AED 1,300,000</option>
                                                                                                                                                <option value="1400000">AED 1,400,000</option>
                                                                                                                                                <option value="1500000">AED 1,500,000</option>
                                                                                                                                                <option value="1600000">AED 1,600,000</option>
                                                                                                                                                <option value="1700000">AED 1,700,000</option>
                                                                                                                                                <option value="1800000">AED 1,800,000</option>
                                                                                                                                                <option value="1900000">AED 1,900,000</option>
                                                                                                                                                <option value="2000000">AED 2,000,000</option>
                                                                                                                                                <option value="2100000">AED 2,100,000</option>
                                                                                                                                                <option value="2200000">AED 2,200,000</option>
                                                                                                                                                <option value="2300000">AED 2,300,000</option>
                                                                                                                                                <option value="2400000">AED 2,400,000</option>
                                                                                                                                                <option value="2500000">AED 2,500,000</option>
                                                                                                                                                <option value="2600000">AED 2,600,000</option>
                                                                                                                                                <option value="2700000">AED 2,700,000</option>
                                                                                                                                                <option value="2800000">AED 2,800,000</option>
                                                                                                                                                <option value="2900000">AED 2,900,000</option>
                                                                                                                                                <option value="3000000">AED 3,000,000</option>
                                                                                                                                                <option value="3250000">AED 3,250,000</option>
                                                                                                                                                <option value="3500000">AED 3,500,000</option>
                                                                                                                                                <option value="3750000">AED 3,750,000</option>
                                                                                                                                                <option value="4000000">AED 4,000,000</option>
                                                                                                                                                <option value="4250000">AED 4,250,000</option>
                                                                                                                                                <option value="4500000">AED 4,500,000</option>
                                                                                                                                                <option value="4750000">AED 4,750,000</option>
                                                                                                                                                <option value="5000000">AED 5,000,000</option>
                                                                                                                                                <option value="6000000">AED 6,000,000</option>
                                                                                                                                                <option value="7000000">AED 7,000,000</option>
                                                                                                                                                <option value="8000000">AED 8,000,000</option>
                                                                                                                                                <option value="9000000">AED 9,000,000</option>
                                                                                                                                                <option value="10000000">AED 10,000,000</option>
                                                                                                                                                <option value="25000000">AED 25,000,000</option>
                                                                                                                                                <option value="50000000">AED 50,000,000</option>
                                                                                                                                                <!--<option value="400000">AED 400,000</option>--> 
                                                                        <!--<option value="500000">AED 500,000</option>-->
                                                                        <!--<option value="600000">AED 600,000</option>-->
                                                                        <!--<option value="700000">AED 700,000</option>-->
                                                                        <!--<option value="800000">AED 800,000</option>-->
                                                                        <!--<option value="900000">AED 900,000</option>-->
                                                                        <!--<option value="1000000">AED 1,000,000</option>-->
                                                                        <!--<option value="5000000">AED 5,000,000</option>-->
                                                                        <!--<option value="10000000">AED 10,000,000</option>-->
                                                                        <!--<option value="50000000">AED 50,000,000</option>-->
                                                                    </select>
                                                                </li>
                                    
                                                                <li>
                                                                    <select class="form-select" name="price_range_max" id="max-price" onfocus="this.size=10;" onblur="this.size=1;" onchange="this.size=1; this.blur();" data-gtm-form-interact-field-id="0" style="position: absolute;width: 130px;background-color: #FFF;" size="1">
                                                                        <option value="">Max Price</option>
                                                                                                                                                <option value="500000">AED 500,000</option>
                                                                                                                                                <option value="600000">AED 600,000</option>
                                                                                                                                                <option value="700000">AED 700,000</option>
                                                                                                                                                <option value="800000">AED 800,000</option>
                                                                                                                                                <option value="900000">AED 900,000</option>
                                                                                                                                                <option value="1000000">AED 1,000,000</option>
                                                                                                                                                <option value="1100000">AED 1,100,000</option>
                                                                                                                                                <option value="1200000">AED 1,200,000</option>
                                                                                                                                                <option value="1300000">AED 1,300,000</option>
                                                                                                                                                <option value="1400000">AED 1,400,000</option>
                                                                                                                                                <option value="1500000">AED 1,500,000</option>
                                                                                                                                                <option value="1600000">AED 1,600,000</option>
                                                                                                                                                <option value="1700000">AED 1,700,000</option>
                                                                                                                                                <option value="1800000">AED 1,800,000</option>
                                                                                                                                                <option value="1900000">AED 1,900,000</option>
                                                                                                                                                <option value="2000000">AED 2,000,000</option>
                                                                                                                                                <option value="2100000">AED 2,100,000</option>
                                                                                                                                                <option value="2200000">AED 2,200,000</option>
                                                                                                                                                <option value="2300000">AED 2,300,000</option>
                                                                                                                                                <option value="2400000">AED 2,400,000</option>
                                                                                                                                                <option value="2500000">AED 2,500,000</option>
                                                                                                                                                <option value="2600000">AED 2,600,000</option>
                                                                                                                                                <option value="2700000">AED 2,700,000</option>
                                                                                                                                                <option value="2800000">AED 2,800,000</option>
                                                                                                                                                <option value="2900000">AED 2,900,000</option>
                                                                                                                                                <option value="3000000">AED 3,000,000</option>
                                                                                                                                                <option value="3250000">AED 3,250,000</option>
                                                                                                                                                <option value="3500000">AED 3,500,000</option>
                                                                                                                                                <option value="3750000">AED 3,750,000</option>
                                                                                                                                                <option value="4000000">AED 4,000,000</option>
                                                                                                                                                <option value="4250000">AED 4,250,000</option>
                                                                                                                                                <option value="4500000">AED 4,500,000</option>
                                                                                                                                                <option value="4750000">AED 4,750,000</option>
                                                                                                                                                <option value="5000000">AED 5,000,000</option>
                                                                                                                                                <option value="6000000">AED 6,000,000</option>
                                                                                                                                                <option value="7000000">AED 7,000,000</option>
                                                                                                                                                <option value="8000000">AED 8,000,000</option>
                                                                                                                                                <option value="9000000">AED 9,000,000</option>
                                                                                                                                                <option value="10000000">AED 10,000,000</option>
                                                                                                                                                <option value="25000000">AED 25,000,000</option>
                                                                                                                                                <option value="50000000">AED 50,000,000</option>
                                                                                                                                                <!--<option value="400000">AED 400,000</option>-->
                                                                        <!--<option value="500000">AED 500,000</option>-->
                                                                        <!--<option value="600000">AED 600,000</option>-->
                                                                        <!--<option value="700000">AED 700,000</option>-->
                                                                        <!--<option value="800000">AED 800,000</option>-->
                                                                        <!--<option value="900000">AED 900,000</option>-->
                                                                        <!--<option value="1000000">AED 1,000,000</option>-->
                                                                        <!--<option value="5000000">AED 5,000,000</option>-->
                                                                        <!--<option value="10000000">AED 10,000,000</option>-->
                                                                        <!--<option value="50000000">AED 50,000,000</option>-->
                                                                        <!--<option value="100000000">AED 100,000,000</option>-->
                                                                     </select>
                                                                </li>
    
                                                            </ul>
                                                                        
                                                        </div>
                                    
                                    
                                    
                                                           <!-- <div class="col-lg-3 col-md-6 dubai-text">                    
                                                               <label for="area-range">Price Range</label>
                                                               <div class="container">
                                                                  <div class="row">
                                                                    <div class="col-sm-12">
                                                                      <div id="slider-range"></div>
                                                                    </div>
                                                                  </div>
                                                                  <div class="row slider-labels">
                                                                    <div class="col-xs-6 col-md-6 caption">
                                                                      <span id="slider-range-value1"></span>
                                                                    </div>
                                                                    <div class="col-xs-6 col-md-6 text-right caption">
                                                                     <span id="slider-range-value2"></span>
                                                                    </div>
                                                                  </div>
                                                                  <div class="row">
                                                                    <div class="col-sm-12">
                                                                     <form>
                                                                        <input type="hidden" name="price-range" id="minprice" value="">
                                                                        <input type="hidden" name="price-range-max" id="maxprice" value="">
                                                                      </form>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                            </div>-->
                                                           
                                                           <!-- <div class="col-lg-3 col-md-6 dubai-text">                    
                                                               <label for="area-range">Area Range</label>
                                                               <div class="container">
                                                                  <div class="row">
                                                                    <div class="col-sm-12">
                                                                      <div id="area-slider-range"></div>
                                                                    </div>
                                                                  </div>
                                                                  <div class="row slider-labels">
                                                                    <div class="col-xs-6 col-md-6 caption">
                                                                      <span id="area-slider-range-value1"></span>
                                                                    </div>
                                                                    <div class="col-xs-6 col-md-6 text-right caption">
                                                                     <span id="area-slider-range-value2"></span>
                                                                    </div>
                                                                  </div>
                                                                  <div class="row">
                                                                    <div class="col-sm-12">
                                                                     <form>
                                                                        <input type="hidden" name="area-range" id="area-range" value="">
                                                                        <input type="hidden" name="area-range-max" id="area-range-max" value="">
                                                                      </form>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                            </div>-->
                                                            <div class="col-lg-12 search-submit-btn">
                                                                                                                                <button class="rthbtn" type="submit">SEARCH</button>
                                                            </div>
                                                        </div>
                                                    </form>
          
   <?php echo $__env->yieldContent('content'); ?>
          
          </div>
            
                    
          
          </div>
          
          
          
  
  

  </div><!-- /.container -->

 
    <?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>


      
  </body>
</html>
<?php /**PATH /home/saksbqic/services/resources/views/layouts/website_layout.blade.php ENDPATH**/ ?>