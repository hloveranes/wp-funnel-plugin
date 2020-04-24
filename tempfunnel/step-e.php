<!DOCTYPE html>
<html>
<head>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

h1 {
    font-size: 30px;
}

div.a {
    margin-top: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    background: white;
    color: black;
    text-align: center;
}


#icons-menu ul {
    display: flex;
    padding: 8px;
    text-align: center;
    list-style: none;
    align-items: center;
    flex-direction: row;
    justify-content: center; 
    margin-top: 0em; 
}

#icons-menu ul li {
    margin: 15px;
    /* border-style: solid; */
}

#icons-menu ul :hover {
    background: rgba(128, 128, 128, 0.178);
    cursor: pointer;
}


a {
    text-decoration: none;
}

ul{
    margin: 0 0 !important;
}

#icons-menu ul li img {
    border-radius: 5%;
    border-width: 0.5px;   
    border: 1px solid black !important;
    height: 150px;
    width: 150px;
}
/* End of External CSS */



/* used in step E F G */
/* section prop styles */
.sect-e{
    padding: 10px !important;
    margin-top: 30px !important;
    width: !important;
    /* border: 2px solid black; */
}
.step-title{
    color: #444;
    font-size: 2rem !important;
    font-weight: 700;
    /* text-transform: uppercase; */
    margin-bottom: 1.375rem;
}
/* slider start here */
.slidecontainer {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

input[type=range] {
    width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 50%;
  height: 15px;
  border-radius: 5px;
  background: gray;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 100;
}
.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 35px !important;
    height: 35px !important;
    border-radius: 50% !important;
    background: white !important;
    border: .5px solid rgba(41, 40, 40, 0.705) !important;
    cursor: pointer;
    margin-top: -13px !important;
}
.slider::-ms-thumb {
    margin-top: 0px;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: gray;
  cursor: pointer;
}
/* slider end here */
.alignleft {
	float: left;
}
.alignright {
	float: right;
}
/* left and right label */
.uni-lr-color{
    color: #0066cc;
    font-size: 1.5rem;
}
/* value label */
.uni-val-color{
    color: #0066cc !important;
    font-size: 2.5rem !important;
    margin-top: 50px;
}

/* buttons and inputs below settings */
/* div of button */
.divy{
    margin-top: 60px; 
}
/* used in * */
.divy-uni{
    margin-top: 15px; 
}
.btny {
    width: 25%;
    float: center;
    background: #36f !important;
    color: #ffffff !important;
    border: none;
    outline: 0;
}
.btny-style{
    font-size: 1.5rem !important;
    border-radius: 5px !important;
    margin-bottom: 30px;
}
/* End of Step E F G */

/* text input settings */
/* inside of text input */
.inp-int{
    -webkit-appearance: none;
    align-items: center;
    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    display: inline-flex;
    font-size: 1rem;
    height: 2.25em;
    justify-content: flex-start;
    line-height: 1.5;
    padding-bottom: calc(.375em - 1px);
    padding-left: calc(.625em - 1px);
    padding-right: calc(.625em - 1px);
    padding-top: calc(.375em - 1px);
    position: relative;
    vertical-align: top;
}
.inp-col-75 {
  float: center;
  width: 50%;
  margin-top: 6px;
}
@media only screen and (max-width: 550px) {
    #icons-menu ul {
        display: inline;
    }
    .btny {
        width: 60%;
    }
    .inp-col-75 {
        width: 100%;
    }
    .slidecontainer{
        width: 100%;
    }
}
@media only screen and (min-width: 551px) and (max-width: 1024px) {
    .btny {
        width: 50%;
    }
    .inp-col-75 {
        width: 80%;
    }
    .slidecontainer{
        width: 80%;
    }
}

.input-error{
    border: 1px solid red !important;
}
.btn-disabled{
    background-color: gray !important;
}
</style>
</head>
<body>

<!----------------------------------------------------------------------------------------------------------  -->
<section id="stepA" class="sect-e">
  <div class="container">
    <div class="text-center">
      <!----------------------------------------------------------------------------------------------------------(A)-->
      <div class="a">
        <h2 class="step-title">CHOOSE LOAN TYPE</h2>
      </div>
      <div id="icons-menu">
        <ul>
          <li>
            <img id="imgAa" alt="refinance" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/loan-type/recycle.png'; ?>" />
          </li>
          <li>
            <img id="imgAb" alt="purchase" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/loan-type/purchase.png'; ?>" />
          </li>
          <li>
            <img id="imgAc" alt="home equity" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/loan-type/heloc.png'; ?>" />
          </li>
          <li>
            <img id="imgAd" alt="cash out" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/loan-type/cash.png'; ?>" />
          </li>
        </ul>
      </div>
     <!----------------------------------------------------------------------------------------------------------(A)-->
    </div>
  </div>
</section>


<!----------------------------------------------------------------------------------------------------------  -->
<section id="stepB" class="sect-e">
  <div class="container">
    <div class="text-center">
      <!----------------------------------------------------------------------------------------------------------(B)-->
        <div class="a">
            <h2 class="step-title">TYPE OF HOME</h2>    
        </div>
        <div id="icons-menu">
            <ul>
                <li>
                    <img id="imgBa" alt="single family" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/home-type/single-family.png'; ?>" />
                </li>
                <li>
                    <img id="imgBb" alt="multi family" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/home-type/multi-family.png'; ?>" />
                </li>
                <li>
                    <img id="imgBc" alt="condo" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/home-type/condo.png'; ?>" />
                </li>
                <li>
                    <img id="imgBd" alt="town house" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/home-type/town-house.png'; ?>" />
                </li>
                <li>
                    <img id="imgBe" alt="cooperative" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/home-type/cooperative.png'; ?>" />
                </li>
                <li>
                    <img id="imgBf" alt="mobile" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/home-type/mobile.png'; ?>" />
                </li>
                <li>
                    <img id="imgBg" alt="manufactured" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/home-type/manufactured.png'; ?>" />
                </li>
            </ul>
        </div>
      <!----------------------------------------------------------------------------------------------------------(B)-->
    </div>
  </div>
</section>


<!----------------------------------------------------------------------------------------------------------  -->
<section id="stepC" class="sect-e">
  <div class="container">
    <div class="text-center">
      <!----------------------------------------------------------------------------------------------------------(C)-->
        <div class="a">
            <h2 class="step-title">HOW DO YOU USE THIS PROPERTY?</h2>     
        </div>
        <div id="icons-menu">
            <ul>
                <li>
                    <img id="imgCa" alt="primary home" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/property-uses/primary-home.png'; ?>" />
                </li>
                <li>
                    <img id="imgCb" alt="secondary home" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/property-uses/secondary-home.png'; ?>" />
                </li>
                <li>
                    <img id="imgCc" alt="investment property" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/property-uses/investment-property.png'; ?>" />
                </li>
            </ul>
        </div>
      <!----------------------------------------------------------------------------------------------------------(C)-->
    </div>
  </div>
</section>


<!----------------------------------------------------------------------------------------------------------  -->
<section id="stepD" class="sect-e">
  <div class="container">
    <div class="text-center">
      <!----------------------------------------------------------------------------------------------------------(D)-->
        <div class="a">
            <h2 class="step-title">HAVE YOU HAD A BANKRUPTCY OR FORECLOSURE IN THE LAST 7 YEARS?</h2>     
        </div>
        <div id="icons-menu">
            <ul>
                <li>
                    <img id="imgDa" alt="no" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/status-7-years/no.png'; ?>" />
                </li>
                <li>
                    <img id="imgDb" alt="bankruptcy" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/status-7-years/bankruptcy.png'; ?>" />
                </li>
                <li>
                    <img id="imgDc" alt="foreclosure" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/status-7-years/foreclosure.png'; ?>" />
                </li>
                <li>
                    <img id="imgDd" alt="both" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/status-7-years/both.png'; ?>" />
                </li>
            </ul>
        </div>
      <!----------------------------------------------------------------------------------------------------------(D)-->
    </div>
  </div>
</section>


<!----------------------------------------------------------------------------------------------------------(PURCHASE)-->
<section id="stepChE" class="sect-e">
  <div class="container">
    <div class="text-center">
      <!----------------------------------------------------------------------------------------------------------(E)-->
        <div class="a">
            <h2 class="step-title">WHERE ARE YOU IN THE BUYING PROCESS?</h2>     
        </div>
        <div id="icons-menu">
            <ul>
                <li>
                    <img id="imgECHa" alt="researching options" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/buying-process/researching.png'; ?>" />
                </li>
                <li>
                    <img id="imgECHb" alt="purchasing within 90 days" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/buying-process/purchasing-within.png'; ?>" />
                </li>
                <li>
                    <img id="imgECHc" alt="found home" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/buying-process/found-home.png'; ?>" />
                </li>
                <li>
                    <img id="imgECHd" alt="signed agreement" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/buying-process/signed-agreement.png'; ?>" />
                </li>
            </ul>
        </div>
      <!----------------------------------------------------------------------------------------------------------(E)-->
    </div>
  </div>
</section>


<!----------------------------------------------------------------------------------------------------------(PURCHASE)-->
<section id="stepChF" class="sect-e">
  <div class="container">
    <div class="text-center">
      <!----------------------------------------------------------------------------------------------------------(F)-->
        <div>
            <div>
                <h2 class="step-title">WHAT IS THE STREET ADDRESS?</h2>
            </div>
            <div>
                <input class="inp-int inp-col-75" type="text" id="chStAddr" name="chStrAddr" placeholder="Street Address">
            </div>
        </div>
      <!----------------------------------------------------------------------------------------------------------(F)-->
    </div>
  </div>
  <div class="divy-uni" style="text-align: center;">
    <button class="btny btny-style" type="submit" onclick="chStepF()">
      Continue
    </button>
  </div>
</section>


<!----------------------------------------------------------------------------------------------------------(PURCHASE)-->
<section id="stepChG" class="sect-e">
    <!----------------------------------------------------------------------------------------------------------(G)-->
    <div class="container">
        <div class="text-center">
            <div>
                <h2 class="step-title">PURCHASE PRICE OF NEW HOME</h2>
            </div>
            <div>
                <h3>Take your best guess!</h3>
            </div>
            <div class="uni-val-color">
                <h3 id="stepChResG" class="uni-val-color">Under $60,000</h3>
            </div>
        </div>

        <div class="slidecontainer">
            <input type="range" min="1" max="20" value="0" class="slider" id="rangeChG">
            <div class="alignleft uni-lr-color">$40K</div>
            <div class="alignright uni-lr-color">$3M</div>
        </div>
        
    </div>
    <!----------------------------------------------------------------------------------------------------------(G)-->
    <div class="divy" style="text-align: center;">
        <button class="btny btny-style" type="submit" onclick="chStepG()">Continue</button>
    </div>
</section>


<!----------------------------------------------------------------------------------------------------------(PURCHASE)-->
<section id="stepChH" class="sect-e">
    <!----------------------------------------------------------------------------------------------------------(H)-->
    <div class="container">
        <div class="text-center">
            <div>
                <h2 class="step-title">ESTIMATE DOWN PAYMENT</h2>
            </div>
            <div class="uni-val-color">
                <h3 id="stepChResH" class="uni-val-color">0% Down</h3>
            </div>
        </div>

        <div class="slidecontainer">
            <input type="range" min="0" max="20" value="0" class="slider" id="rangeChH">
            <div class="alignleft uni-lr-color">0%</div>
            <div class="alignright uni-lr-color">100%</div>
        </div>
        
    </div>
    <!----------------------------------------------------------------------------------------------------------(H)-->    
    <div class="divy" style="text-align: center;">
        <button class="btny btny-style" type="submit" onclick="chStepH()">Continue</button>
    </div>
</section>


<!----------------------------------------------------------------------------------------------------------(PURCHASE)-->
<section id="stepChI" class="sect-e">
  <div class="container">
    <div class="text-center">
      <!----------------------------------------------------------------------------------------------------------(I)-->
        <div>
            <div>
                <h2 class="step-title">WHAT'S YOUR ZIP CODE?</h2>
            </div>
            <div>
                <input class="inp-int inp-col-75" type="text" id="chZCode" maxLenght="5" name="chZpCode" placeholder="Zip Code" 
                onpaste="return false" ondrop="return false" onkeypress="return isNumberKey(event)" onkeyup="sZipEvent(event)">
            </div>
        </div>
      <!----------------------------------------------------------------------------------------------------------(I)-->
    </div>
  </div>
  <div class="divy-uni" style="text-align: center;">
    <button class="btny btny-style" type="submit" onclick="chStepI()" id="btn-zpCode">
      Continue
    </button>
  </div>
</section>


<!----------------------------------------------------------------------------------------------------------(PURCHASE)-->
<section id="stepChJ" class="sect-e">
  <div class="container">
    <div class="text-center">
      <!----------------------------------------------------------------------------------------------------------(J)-->
        <div>
            <h2 class="step-title">ARE YOU A FIRST TIME HOME BUYER?</h2>
        </div>
        <div id="icons-menu">
            <ul>
                <li>
                    <img id="imgJCHa" alt="no" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/home-buyer/x-no.png'; ?>" />
                </li>
                <li>
                    <img id="imgJCHb" alt="yes" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/home-buyer/yes.png'; ?>" />
                </li>
            </ul>
        </div>
      <!----------------------------------------------------------------------------------------------------------(J)-->
    </div>
  </div>
</section>


<!----------------------------------------------------------------------------------------------------------  -->
<section id="stepE" class="sect-e">
    <!----------------------------------------------------------------------------------------------------------(E)-->
    <div class="container">
        <div class="text-center">
            <div>
                <h2 class="step-title">ESTIMATE CASH OUT</h2>
            </div>
            <div>
                <h3>Take your best guess!</h3>
            </div>
            <div class="uni-val-color">
                <h3 id="stepResE" class="uni-val-color">Under $10,000</h3>
            </div>
        </div>

        <div class="slidecontainer">
            <input type="range" min="1" max="10" value="0" class="slider" id="rangeE">
            <div class="alignleft uni-lr-color">$0</div>
            <div class="alignright uni-lr-color">$200k</div>
        </div>
        
    </div>
    <!----------------------------------------------------------------------------------------------------------(E)-->
    <div class="divy" style="text-align: center;">
        <button class="btny btny-style" type="submit" onclick="formStepE()">Continue</button>
    </div>
</section>


<!----------------------------------------------------------------------------------------------------------  -->
<section id="stepF" class="sect-e">
    <!----------------------------------------------------------------------------------------------------------(F)-->    
    <div class="container">
        <div class="text-center">
            <div>
                <h2 class="step-title">ESTIMATED HOME VALUE</h2>
            </div>
            <div>
                <h3>Take your best guess!</h3>
            </div>
            <div class="uni-val-color">
                <h3 id="stepResF" class="uni-val-color">Under $60,000</h3>
            </div>
        </div>

        <div class="slidecontainer">
            <input type="range" min="1" max="20" value="0" class="slider" id="rangeF">
            <div class="alignleft uni-lr-color">$60K</div>
            <div class="alignright uni-lr-color">$2M</div>
        </div>
        
    </div>
    <!----------------------------------------------------------------------------------------------------------(F)-->
    <div class="divy" style="text-align: center;">
        <button class="btny btny-style" type="submit" onclick="formStepF()">Continue</button>
    </div>
</section>


<!----------------------------------------------------------------------------------------------------------  -->
<section id="stepG" class="sect-e">
    <!----------------------------------------------------------------------------------------------------------(G)-->
    <div class="container">
        <div class="text-center">
            <div>
                <h2 class="step-title">ESTIMATE TOTAL EXISTING MORTGAGE BALANCE</h2>
            </div>
            <div class="uni-val-color">
                <h3 id="stepResG" class="uni-val-color">Under $40,000</h3>
            </div>
        </div>

        <div class="slidecontainer">
            <input type="range" min="1" max="20" value="0" class="slider" id="rangeG">
            <div class="alignleft uni-lr-color">$40K</div>
            <div class="alignright uni-lr-color">$1.2M</div>
        </div>
        
    </div>
    <!----------------------------------------------------------------------------------------------------------(G)-->    
    <div class="divy" style="text-align: center;">
        <button class="btny btny-style" type="submit" onclick="formStepG()">Continue</button>
    </div>
</section>


<!----------------------------------------------------------------------------------------------------------  -->
<section id="stepH" class="sect-e">
  <div class="container">
    <div class="text-center">
      <!----------------------------------------------------------------------------------------------------------(H)-->
        <div class="a">
            <h2 class="step-title">DO YOU CURRENTLY HAVE AN FHA LOAN?</h2>     
        </div>

        <div id="icons-menu">
            <ul>
                <li>
                    <img id="imgHa" alt="don't know" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/FHA-loan/dont-know.png'; ?>" />
                </li>
                <li>
                    <img id="imgHb" alt="yes" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/FHA-loan/yes.png'; ?>" />
                </li>
                <li>
                    <img id="imgHc" alt="no" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/FHA-loan/x-no.png'; ?>" />
                </li>
            </ul>
        </div>
      <!----------------------------------------------------------------------------------------------------------(H)-->
    </div>
  </div>
</section>


<!----------------------------------------------------------------------------------------------------------  -->
<section id="stepI" class="sect-e">
  <div class="container">
    <div class="text-center">
      <!----------------------------------------------------------------------------------------------------------(I)-->
        <div class="a">
            <h2 class="step-title">ESTIMATE YOUR CREDIT SCORE</h2>     
        </div>

        <div id="icons-menu">
            <ul>
                <li>
                    <img id="imgIa" alt="excellent" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/credit-score/excellent.png'; ?>" />
                </li>
                <li>
                    <img id="imgIb" alt="good" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/credit-score/good.png'; ?>" />
                </li>
                <li>
                    <img id="imgIc" alt="fair" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/credit-score/fair.png'; ?>" />
                </li>
                <li>
                    <img id="imgId" alt="poor" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/credit-score/poor.png'; ?>" />
                </li>
                <li>
                    <img id="imgIe" alt="don't know" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/credit-score/dont-know.png'; ?>" />
                </li>
            </ul>
        </div>
      <!----------------------------------------------------------------------------------------------------------(I)-->
    </div>
  </div>
</section>


<!----------------------------------------------------------------------------------------------------------  -->
<section id="stepJ" class="sect-e">
  <div class="container">
    <div class="text-center">
      <!----------------------------------------------------------------------------------------------------------(J)-->
        <div>
            <div>
                <h2 class="step-title">WHAT'S YOUR ZIP CODE?</h2>
            </div>
            <div>
                <input class="inp-int inp-col-75" type="text" id="zpCode" name="zipCode" placeholder="Zip Code"
                onpaste="return false" ondrop="return false" onkeypress="return isNumberKey(event)" onkeyup="zipEvent(event)">
            </div>
        </div>
        <div>
            <div>
                <h2 class="step-title">STREET ADDRESS</h2>
            </div>
            <div>
                <input class="inp-int inp-col-75" type="text" id="stAddress" name="strAddress" placeholder="Street Addres">
            </div>
        </div>
      <!----------------------------------------------------------------------------------------------------------(J)-->
    </div>
  </div>
  <div class="divy-uni" style="text-align: center;">
    <button class="btny btny-style" type="submit" onclick="formStepJ()" id="btn-zipCode">
      Continue
    </button>
  </div>
</section>


<!----------------------------------------------------------------------------------------------------------  -->
<section id="stepK" class="sect-e">
  <div class="container">
    <div class="text-center">
      <!----------------------------------------------------------------------------------------------------------(K)-->
        <div>
            <h2 class="step-title">ARE YOU A VETERAN OR ACTIVE MILITARY?</h2>
        </div>
        <div id="icons-menu">
            <ul>
                <li>
                    <img id="imgKa" alt="yes" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/active-military/yes.png'; ?>" />
                </li>
                <li>
                    <img id="imgKb" alt="no" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/active-military/x-no.png'; ?>" />
                </li>
            </ul>
        </div>
      <!----------------------------------------------------------------------------------------------------------(K)-->
    </div>
  </div>
</section>


<!----------------------------------------------------------------------------------------------------------  -->
<section id="stepL" class="sect-e">
  <div class="container">
    <div class="text-center">
      <!----------------------------------------------------------------------------------------------------------(L)-->
        <div>
            <h2 class="step-title">ARE YOU CURRENTLY IN A VA LOAN?</h2>
        </div>
        <div id="icons-menu">
            <ul>
                <li>
                    <img id="imgLa" alt="yes" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/VA-loan/yes.png'; ?>" />
                </li>
                <li>
                    <img id="imgLb" alt="no" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/VA-loan/x-no.png'; ?>" />
                </li>
                <li>
                    <img id="imgLc" alt="don't know" src="<?php echo plugin_dir_url( __FILE__ ). '../imgs/VA-loan/dont-know.png'; ?>" />
                </li>
            </ul>
        </div>
      <!----------------------------------------------------------------------------------------------------------(L)-->
    </div>
  </div>
</section>


<!----------------------------------------------------------------------------------------------------------  -->
<section id="stepM" class="sect-e">
  <div class="container">
    <div class="text-center">
      <!----------------------------------------------------------------------------------------------------------(M)-->
        <div>
            <div>
                <h2 class="step-title">WHAT IS YOUR NAME?</h2>
            </div>
            <div>
                <input class="inp-int inp-col-75" type="text" id="fsName" name="ftName" placeholder="First Name"
                onpaste="return false" ondrop="return false" onkeypress="return isNumericKey(event)">
            </div>
            <div>
                <input class="inp-int inp-col-75" type="text" id="lsName" name="ltName" placeholder="Last Name"
                onpaste="return false" ondrop="return false" onkeypress="return isNumericKey(event)">
            </div>
        </div>
        
      <!----------------------------------------------------------------------------------------------------------(M)-->
    </div>
  </div>
  <div class="divy-uni" style="text-align: center;">
    <button class="btny btny-style" type="submit" onclick="formStepM()">
      Continue
    </button>
  </div>
</section>


<!----------------------------------------------------------------------------------------------------------  -->
<section id="stepN" class="sect-e">
  <div class="container">
    <div class="text-center">
      <!----------------------------------------------------------------------------------------------------------(N)-->
        <div>
            <div>
                <h2 class="step-title">Almost there. Email?</h2>
            </div>
            <div>
                <input class="inp-int inp-col-75" type="text" id="uEmail" name="usEmail" placeholder="Email"
                onkeyup="isValidEmail(event)">
            </div>
        </div>
      <!----------------------------------------------------------------------------------------------------------(N)-->
    </div>
  </div>
  <div class="divy-uni" style="text-align: center;">
    <button class="btny btny-style" type="submit" onclick="formStepN()" id="btn-mail">
      Continue
    </button>
  </div>
</section>


<!----------------------------------------------------------------------------------------------------------  -->
<section id="stepO" class="sect-e">
  <div class="container">
    <div class="text-center">
      <!----------------------------------------------------------------------------------------------------------(O)-->
        <div>
            <div>
                <h2 class="step-title">Enter your phone number and you're all done!</h2>
            </div>
            <div>
                <input class="inp-int inp-col-75" type="text" id="cpNum" name="cpNumb" placeholder="(XXX) XXX-XXXX" 
                onkeypress="return isNumberKey(event)" onkeyup="isValidPhone(event)">
            </div>
        </div>
      <!-- --------------------------------------------------------------------------------------------------------(O)formStepO() -->
    </div>
  </div>
  <div class="divy-uni" style="text-align: center;">
    <button class="btny btny-style" type="submit" onclick="formStepO()" id="btn-phone">
      View My Rates
    </button>
  </div>
</section>
<!----------------------------------------------------------------------------------------------------------  -->



<script>
// step

    var isEnable = true;
    var leadDatas;
    hideSteps();

    // parent boolean of steps
    var isRefinance = false;
    var isPurchase = false;
    var isHomeEquity = false;
    var isCashOut = false;
    
    // child boolean of steps
    var isRefinChild = false; // use in: are you a veteran
    var isPurchChild = false;
    var isHomeChild = false;
    var isCashChild = false;

    var formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
    });    

    // step A
    var imgAa = document.getElementById("imgAa").addEventListener("click", function(){formStepA(isRefinance = true); leadDatas = "Loan Type: " + document.getElementById("imgAa").alt; storeDatas(leadDatas); });
    var imgAb = document.getElementById("imgAb").addEventListener("click", function(){formStepA(isPurchase = true); leadDatas = "Loan Type: " + document.getElementById("imgAb").alt; storeDatas(leadDatas); });
    var imgAc = document.getElementById("imgAc").addEventListener("click", function(){formStepA(isHomeEquity = true); leadDatas = "Loan Type: " + document.getElementById("imgAc").alt; storeDatas(leadDatas); });
    var imgAd = document.getElementById("imgAd").addEventListener("click", function(){formStepA(isCashOut = true); leadDatas = "Loan Type: " + document.getElementById("imgAd").alt; storeDatas(leadDatas); });
    // step B
    var imgBa = document.getElementById("imgBa").addEventListener("click", function(){formStepB(); leadDatas += ", Home Type: " + document.getElementById("imgBa").alt; storeDatas(leadDatas); });
    var imgBb = document.getElementById("imgBb").addEventListener("click", function(){formStepB(); leadDatas += ", Home Type: " + document.getElementById("imgBb").alt; storeDatas(leadDatas); });
    var imgBc = document.getElementById("imgBc").addEventListener("click", function(){formStepB(); leadDatas += ", Home Type: " + document.getElementById("imgBc").alt; storeDatas(leadDatas); });
    var imgBd = document.getElementById("imgBd").addEventListener("click", function(){formStepB(); leadDatas += ", Home Type: " + document.getElementById("imgBd").alt; storeDatas(leadDatas); });
    var imgBe = document.getElementById("imgBe").addEventListener("click", function(){formStepB(); leadDatas += ", Home Type: " + document.getElementById("imgBe").alt; storeDatas(leadDatas); });
    var imgBf = document.getElementById("imgBf").addEventListener("click", function(){formStepB(); leadDatas += ", Home Type: " + document.getElementById("imgBf").alt; storeDatas(leadDatas); });
    var imgBg = document.getElementById("imgBg").addEventListener("click", function(){formStepB(); leadDatas += ", Home Type: " + document.getElementById("imgBg").alt; storeDatas(leadDatas); });
    // step C
    var imgCa = document.getElementById("imgCa").addEventListener("click", function(){formStepC(); leadDatas += ", Use of Property: " + document.getElementById("imgCa").alt; storeDatas(leadDatas); });
    var imgCb = document.getElementById("imgCb").addEventListener("click", function(){formStepC(); leadDatas += ", Use of Property: " + document.getElementById("imgCb").alt; storeDatas(leadDatas); });
    var imgCc = document.getElementById("imgCc").addEventListener("click", function(){formStepC(); leadDatas += ", Use of Property: " + document.getElementById("imgCc").alt; storeDatas(leadDatas); });
    // step D 
    var imgDa = document.getElementById("imgDa").addEventListener("click", function(){formStepD(); leadDatas += ", Had a Bankruptcy or Foreclosure in the Last 7 Years?: " + document.getElementById("imgDa").alt; storeDatas(leadDatas); });
    var imgDb = document.getElementById("imgDb").addEventListener("click", function(){formStepD(); leadDatas += ", Had a Bankruptcy or Foreclosure in the Last 7 Years?: " + document.getElementById("imgDb").alt; storeDatas(leadDatas); });
    var imgDc = document.getElementById("imgDc").addEventListener("click", function(){formStepD(); leadDatas += ", Had a Bankruptcy or Foreclosure in the Last 7 Years?: " + document.getElementById("imgDc").alt; storeDatas(leadDatas); });
    var imgDd = document.getElementById("imgDd").addEventListener("click", function(){formStepD(); leadDatas += ", Had a Bankruptcy or Foreclosure in the Last 7 Years?: " + document.getElementById("imgDd").alt; storeDatas(leadDatas); });
    // step H
    var imgHa = document.getElementById("imgHa").addEventListener("click", function(){formStepH(); leadDatas += ",  Have an FHA Loan?: " + document.getElementById("imgHa").alt; storeDatas(leadDatas); });
    var imgHb = document.getElementById("imgHb").addEventListener("click", function(){formStepH(); leadDatas += ",  Have an FHA Loan?: " + document.getElementById("imgHb").alt; storeDatas(leadDatas); });
    var imgHc = document.getElementById("imgHc").addEventListener("click", function(){formStepH(); leadDatas += ",  Have an FHA Loan?: " + document.getElementById("imgHc").alt; storeDatas(leadDatas); });
    // step I
    var imgIa = document.getElementById("imgIa").addEventListener("click", function(){formStepI(); leadDatas += ", Estimated Credit Score: " + document.getElementById("imgIa").alt; storeDatas(leadDatas); });
    var imgIb = document.getElementById("imgIb").addEventListener("click", function(){formStepI(); leadDatas += ", Estimated Credit Score: " + document.getElementById("imgIb").alt; storeDatas(leadDatas); });
    var imgIc = document.getElementById("imgIc").addEventListener("click", function(){formStepI(); leadDatas += ", Estimated Credit Score: " + document.getElementById("imgIc").alt; storeDatas(leadDatas); });
    var imgId = document.getElementById("imgId").addEventListener("click", function(){formStepI(); leadDatas += ", Estimated Credit Score: " + document.getElementById("imgId").alt; storeDatas(leadDatas); });
    var imgIe = document.getElementById("imgIe").addEventListener("click", function(){formStepI(); leadDatas += ", Estimated Credit Score: " + document.getElementById("imgIe").alt; storeDatas(leadDatas); });
    // step K
    var imgKa = document.getElementById("imgKa").addEventListener("click", function(){formStepK(isRefinChild = true); leadDatas += ", A Veteran or Active Military?: " + document.getElementById("imgKa").alt; storeDatas(leadDatas); });
    var imgKb = document.getElementById("imgKb").addEventListener("click", function(){formStepK(isRefinChild = false); leadDatas += ", A Veteran or Active Military?: " + document.getElementById("imgKb").alt; storeDatas(leadDatas); });
    // step L
    var imgLa = document.getElementById("imgLa").addEventListener("click", function(){formStepL(); leadDatas += ", Currently in VA Loan?: " + document.getElementById("imgLa").alt; storeDatas(leadDatas); });
    var imgLb = document.getElementById("imgLb").addEventListener("click", function(){formStepL(); leadDatas += ", Currently in VA Loan?: " + document.getElementById("imgLb").alt; storeDatas(leadDatas); });
    var imgLc = document.getElementById("imgLc").addEventListener("click", function(){formStepL(); leadDatas += ", Currently in VA Loan?: " + document.getElementById("imgLc").alt; storeDatas(leadDatas); });
    // hide show sections
  


    // PURCHASE   
    // step E
    var imgECHa = document.getElementById("imgECHa").addEventListener("click", function(){chStepE(isPurchChild = true); leadDatas += ", Buying Process: " + document.getElementById("imgECHa").alt; storeDatas(leadDatas); });
    var imgECHb = document.getElementById("imgECHb").addEventListener("click", function(){chStepE(isPurchChild = true); leadDatas += ", Buying Process: " + document.getElementById("imgECHb").alt; storeDatas(leadDatas); });
    var imgECHc = document.getElementById("imgECHc").addEventListener("click", function(){chStepE(isPurchChild = false); leadDatas += ", Buying Process: " + document.getElementById("imgECHc").alt; storeDatas(leadDatas); });
    var imgECHd = document.getElementById("imgECHd").addEventListener("click", function(){chStepE(isPurchChild = false); leadDatas += ", Buying Process: " + document.getElementById("imgECHd").alt; storeDatas(leadDatas); });
    // step J
    var imgJCHa = document.getElementById("imgJCHa").addEventListener("click", function(){chStepJ(); leadDatas += ", First Time Home Buyer?: " + document.getElementById("imgJCHa").alt; storeDatas(leadDatas); });
    var imgJCHb = document.getElementById("imgJCHb").addEventListener("click", function(){chStepJ(); leadDatas += ", First Time Home Buyer?: " + document.getElementById("imgJCHb").alt; storeDatas(leadDatas); });                  
    
    function formStepA(){  
        var x = document.getElementById("stepA");
        if(x){
            if(x.style.display === "none") {
                x.style.display = "block";
            } else {
                formStepB();
                x.style.display = "none";
            }

        }
    }
    function formStepB(){  
        var x = document.getElementById("stepB");
        if(x){
            if(x.style.display === "none") {
                x.style.display = "block";
            } else {
                formStepC();
                x.style.display = "none";
            }
        }
    }
    function formStepC(){  
        var x = document.getElementById("stepC");
        if(x){
            if(x.style.display === "none") {
                x.style.display = "block";
            } else {
                formStepD();
                x.style.display = "none";
            }
        }
    }
    function formStepD(){  
        var x = document.getElementById("stepD");
        if(x){
            if(x.style.display === "none") {
                x.style.display = "block";
            } else {
                if(isRefinance == true){
                    formStepF();
                    x.style.display = "none";
                }else if(isPurchase == true){
                    chStepE();
                    x.style.display = "none";
                }else if(isCashOut == true){
                    formStepE();
                    x.style.display = "none";
                }else if(isHomeEquity == true){
                    formStepF();
                    x.style.display = "none";

                }
            }
        }
    }

    
// ----------------------------------range inputs


    var sliderE = document.getElementById("rangeE");
    var outputE = document.getElementById("stepResE");

    sliderE.oninput = function() {
        if(sliderE.value < 2 && sliderE.value > 0){
            // outputE.innerText = "Under $" + this.value*10000;
            outputE.innerText = formatter.format(this.value*10000);
        }else if(sliderE.value > 9){
            // outputE.innerText = "More than $" + this.value*20000;
            outputE.innerText = "More than " + formatter.format(this.value*20000);
        }else{
            // outputE.innerText = "$" + this.value*10000 + " - " + "$" + this.value*20000;
            outputE.innerText = `${formatter.format(this.value*10000)}   -     ${formatter.format(this.value*20000)}`;
            
        }
    }
    function formStepE(){  
        var x = document.getElementById("stepE");
        if(x){
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                formStepF();
                leadDatas += ", Estimated Cash Out: " + document.getElementById("stepResE").innerText;   // ---------------------------------------------------------------------TEST RESULT
                storeDatas(leadDatas);
                x.style.display = "none";
            }
        }
    }



    var sliderF = document.getElementById("rangeF");
    var outputF = document.getElementById("stepResF");

    sliderF.oninput = function() {
        if(sliderF.value < 2 && sliderF.value > 0){
            // outputF.innerText = "Under $" + this.value*60000;
            outputF.innerText = "Under " + formatter.format(this.value*60000);
        }else if(sliderF.value > 19){
            // outputF.innerText = "More than $" + this.value*100000;
            outputF.innerText = "More than " + formatter.format(this.value*100000);
        }else{
            outputF.innerText = formatter.format(this.value*35000) + " - " + formatter.format(this.value*50000);
        }
    }
    function formStepF(){  
        var x = document.getElementById("stepF");
        if(x){
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                formStepG();
                leadDatas += ", Estimated Home Value: " + document.getElementById("stepResF").innerText;   // ---------------------------------------------------------------------TEST RESULT
                storeDatas(leadDatas);
                x.style.display = "none";
            }
        }
    }



    var sliderG = document.getElementById("rangeG");
    var outputG = document.getElementById("stepResG");

    sliderG.oninput = function() {
        if(sliderG.value < 2 && sliderG.value > 0){
            // outputG.innerText = "Under $" + this.value*40000;
            outputG.innerText = "Under " + formatter.format(this.value*40000);
        }else if(sliderG.value > 19){
            // outputG.innerText = "More than $" + this.value*60000;
            outputG.innerText = "More than " + formatter.format(this.value*60000);
        }else{
            // outputG.innerText = "$" + this.value*30000 + " - " + "$" + this.value*45000;
            outputG.innerText = formatter.format(this.value*30000) + " - " + formatter.format(this.value*45000);
        }
    }
    function formStepG(){  
        var x = document.getElementById("stepG");
        if(x){
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                formStepH();   // ---------------------------------------------------------------------TEST RESULT
                leadDatas += ", Estimated Mortgage Balance: " + document.getElementById("stepResG").innerText;
                storeDatas(leadDatas);
                x.style.display = "none";
            }
        }
    }


// --------------------------------------range inputs


    function formStepH(){  
        var x = document.getElementById("stepH");
        if(x){
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                formStepI();
                x.style.display = "none";  
            }
        }
    }
    function formStepI(){  
        var x = document.getElementById("stepI");
        if(x){
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                if(isRefinance == true){
                    formStepJ();
                    x.style.display = "none";
                }else if(isPurchase == true){
                    chStepH();
                    x.style.display = "none";
                }else if(isCashOut == true){
                    formStepJ();
                    x.style.display = "none";
                }else if(isHomeEquity == true){
                    formStepJ();
                    x.style.display = "none";
                }
                   
            }
        }
    }
    function formStepJ(){  
        var inptMzp = document.getElementById("zpCode").value;
        var inptMst = document.getElementById("stAddress").value;
        var x = document.getElementById("stepJ");
        if(x){
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                if(inptMst.length > 0 ){
                    formStepK();
                    leadDatas += ", Zip Code: " + inptMzp + ", Address: " + inptMst;   // ---------------------------------------------------------------------TEST RESULT
                    storeDatas(leadDatas);
                    x.style.display = "none";
                }
            }
        }
    }
    function formStepK(){  
        var x = document.getElementById("stepK");
        if(x){
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                if(isRefinance == true){
                    if(isRefinChild == true){
                        formStepL();
                        x.style.display = "none";    
                    }else{
                        formStepM();
                        x.style.display = "none";
                    }
                }else if(isPurchase == true){
                    chStepJ();
                    x.style.display = "none";
                }else if(isCashOut == true){
                    if(isRefinChild == true){
                        formStepL();
                        x.style.display = "none";    
                    }else{
                        formStepM();
                        x.style.display = "none"; 
                    }
                }if(isHomeEquity == true){
                    if(isRefinChild == true){
                        formStepL();
                        x.style.display = "none";    
                    }else{
                        formStepM();
                        x.style.display = "none";
                    }
                }
            }
        }
    }
    function formStepL(){  
        var x = document.getElementById("stepL");
        if(x){
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                formStepM();
                x.style.display = "none";
            }
        }
    }
    function formStepM(){  
        var inptMfs = document.getElementById("fsName").value;
        var inptMls = document.getElementById("lsName").value;
        var x = document.getElementById("stepM");
        if(x){
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                if(inptMfs.length > 0 && inptMls.length > 0){
                    if(isRefinance == true){
                        formStepN();
                        leadDatas += ", First Name: " + inptMfs + " Last Name: " + inptMls;   // ---------------------------------------------------------------------TEST RESULT
                        storeDatas(leadDatas);
                        x.style.display = "none";
                    }else if(isPurchase == true){
                        formStepN();
                        leadDatas += ", First Name: " + inptMfs + " Last Name: " + inptMls;   // ---------------------------------------------------------------------TEST RESULT
                        storeDatas(leadDatas);
                        x.style.display = "none";
                    }else if(isCashOut == true){
                        formStepN();
                        leadDatas += ", First Name: " + inptMfs + " Last Name: " + inptMls;   // ---------------------------------------------------------------------TEST RESULT
                        storeDatas(leadDatas);
                        x.style.display = "none";    
                    }else if(isHomeEquity == true){
                        formStepN();
                        leadDatas += ", First Name: " + inptMfs + " Last Name: " + inptMls;   // ---------------------------------------------------------------------TEST RESULT
                        storeDatas(leadDatas);
                        x.style.display = "none";    
                    }
                }
            }
        }
    }
    function formStepN(){  
        var inptN = document.getElementById("uEmail").value;
        var x = document.getElementById("stepN");
        if(x){
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                if(inptN.length > 0 ){
                    formStepO();
                    leadDatas += ", Email: " + inptN;   // ---------------------------------------------------------------------TEST RESULT
                    storeDatas(leadDatas);
                    x.style.display = "none";
                }
            }
        }
    }
    function formStepO(){  
        var inptO = document.getElementById("cpNum").value;
        var x = document.getElementById("stepO");
        if(x){
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                if(inptO.length > 0 ){
                    leadDatas += ", Tel No.: " + inptO;   // ---------------------------------------------------------------------TEST RESULT
                    storeDatas(leadDatas);
                    populateForm();
                    x.style.display = "none";
                }
            }
        } 
    }



    //---------------------------------------------------------------------------------------------- 
    function chStepE(){  
        var x = document.getElementById("stepChE");
        if(x){
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                if(isPurchChild == true){
                    chStepG();
                    x.style.display = "none";
                }else{
                    chStepF();
                    x.style.display = "none";
                }
            }
        }
    }
    function chStepF(){  
        var inptChF = document.getElementById("chStAddr").value;
        var x = document.getElementById("stepChF");
        if(x){
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                if(inptChF.length > 0 ){
                    chStepG();
                    leadDatas += ", Street Address: " + inptChF;   // ---------------------------------------------------------------------TEST RESULT
                    storeDatas(leadDatas);
                    x.style.display = "none";
                }
            }
        }
    }



    var sliderChG = document.getElementById("rangeChG");
    var outputChG = document.getElementById("stepChResG");

    sliderChG.oninput = function() {
        if(sliderChG.value < 2 && sliderChG.value > 0){
            outputChG.innerText = "Under $" + this.value*40000;
        }else if(sliderChG.value > 19){
            outputChG.innerText = "More than $" + this.value*150000;
        }else{
            outputChG.innerText = "$" + this.value*35000 + " - " + "$" + this.value*50000;
        }
    }

    function chStepG(){  
        var x = document.getElementById("stepChG");
        if(x){
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                formStepI();
                leadDatas += ", Estimated Purchase Price Of New Home: " + document.getElementById("stepChResG").innerText;   // ---------------------------------------------------------------------TEST RESULT
                storeDatas(leadDatas);
                x.style.display = "none";
            }
        }
    }



    var sliderChH = document.getElementById("rangeChH");
    var outputChH = document.getElementById("stepChResH");

    sliderChH.oninput = function() {
        if(sliderChH.value < 2 && sliderChH.value > 0){
            outputChH.innerText = this.value;
        }else if(sliderChH.value > 19){
            outputChH.innerText = "Other";
        }else{
            outputChH.innerText = this.value*5  + "% Down";
        }
    }
    function chStepH(){  
        var x = document.getElementById("stepChH");
        if(x){
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                chStepI();
                leadDatas += ", Estimated Down Payment: " + document.getElementById("stepChResH").innerText;   // ---------------------------------------------------------------------TEST RESULT
                storeDatas(leadDatas);
                x.style.display = "none";
            }
        }
    }
    

    function chStepI(){  
        var inptChI = document.getElementById("chZCode").value;
        var x = document.getElementById("stepChI");
        if(x){
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                if(inptChI.length > 0 ){
                    if(inptChI.length == 5){
                        formStepK();
                        leadDatas += ", Zip Code: " + inptChI;   // ---------------------------------------------------------------------TEST RESULT
                        storeDatas(leadDatas);
                        x.style.display = "none";
                    }
                }
            }
        }
    }


    function chStepJ(){  
        var x = document.getElementById("stepChJ");
        if(x){
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                formStepM();
                x.style.display = "none";
            }
        }
    }
    // ------------------------------------------------------------------------------------------



    // validate zipcode
    function ZipEvent(event){
        var zip = event.target.value;
        var stepZpCode = document.getElementById("zpCode");

        var btn = document.getElementById('btn-zipCode');
        var disabledAttr = document.createAttribute('disabled');
        if(zip.length > 5){
            stepZpCode.classList.add('input-error');
            btn.classList.add('btn-disabled');
            btn.setAttributeNode(disabledAttr);
        }else{
            stepZpCode.classList.remove('input-error');
            btn.classList.remove('btn-disabled');
            btn.removeAttribute('disabled');
        }
        
    }

    function sZipEvent(event){
        var zip = event.target.value;
        var chZpCode = document.getElementById("chZCode");

        var btn = document.getElementById('btn-zpCode');
        var disabledAttr = document.createAttribute('disabled');
        if(zip.length > 5){
            chZpCode.classList.add('input-error');
            btn.classList.add('btn-disabled');
            btn.setAttributeNode(disabledAttr);
        }else{
            chZpCode.classList.remove('input-error');
            btn.classList.remove('btn-disabled');
            btn.removeAttribute('disabled');
        }
        
    }
    
    // validate number
    function isValidPhone(event){
        var cp = event.target.value;
        var cphone = document.getElementById("cpNum");

        var btn = document.getElementById('btn-phone');
        var disabledAttr = document.createAttribute('disabled');
        if(cp.length > 10){
            cphone.classList.add('input-error');
            btn.classList.add('btn-disabled');
            btn.setAttributeNode(disabledAttr);
        }else{
            cphone.classList.remove('input-error');
            btn.classList.remove('btn-disabled');
            btn.removeAttribute('disabled');
        }
        
    }

    // validate email
    function isValidEmail(event){
        var mail = event.target.value;
        var myMail = document.getElementById("uEmail");

        var btn = document.getElementById('btn-mail');
        var disabledAttr = document.createAttribute('disabled');
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        if(emailPattern.test(mail)){
            myMail.classList.remove('input-error');
            btn.classList.remove('btn-disabled');
            btn.removeAttribute('disabled');
        }else{
            // nah
            myMail.classList.add('input-error');
            btn.classList.add('btn-disabled');
            btn.setAttributeNode(disabledAttr);
        }
        
    }

    
    // validation letter
    function isNumericKey(evt)
	{
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode != 46 && charCode > 31 
		&& (charCode < 48 || charCode > 57))
		return true;
		return false;
	} 

    // validation number
    function isNumberKey(evt)
	{
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode != 46 && charCode > 31 
		&& (charCode < 48 || charCode > 57))
		return false;
		return true;
	} 
    


    // hide all step except step a
    function hideSteps(){
        if(isEnable == true ){
            var charA = ["B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O"];
            var charB = ["E", "F", "G", "H", "I", "J"];
            var sliceA;
            var sliceB;

            for(sliceA = 0; sliceA < charA.length; sliceA++ ){
                var x = document.getElementById(`step${charA[sliceA]}`);
                x.style.display = "none";
            }
            for(sliceB = 0; sliceB < charB.length; sliceB++ ){
                var y = document.getElementById(`stepCh${charB[sliceB]}`);
                y.style.display = "none";
            }
        
            isEnable = false;
        }
    }
    
    
    // populate the form
    function populateForm(){
        // console.log(leadDatas);
        var inptMfs = document.getElementById("fsName").value;
        var inptMls = document.getElementById("lsName").value;
        var inptN = document.getElementById("uEmail").value;
        var inptO = document.getElementById("cpNum").value;

        var caldEmail = document.getElementById('fld_7732831_1'); // email
        caldEmail.value = inptN;
        var caldPhone = document.getElementById('fld_9948344_1'); // phone
        caldPhone.value = inptO;
        var caldName = document.getElementById('fld_5952367_1'); // name
        caldName.value = inptMfs + " " + inptMls;

        var caldContent = document.getElementById('fld_9143917_1'); // content
        caldContent.value = leadDatas;

       document.getElementById('CF5e86278a5aa62_1').submit();

    }


    function storeDatas(leadDatas){
        // console.log(leadDatas);
    }
</script>

</body>
</html>
