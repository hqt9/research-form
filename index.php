<!DOCTYPE html>
<html>
<head>
    <title>Brand Survey</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/reset.css" media="all">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/phone.css" media="(max-width: 479px)">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./js/researchForm.js"></script>
    <script type="text/javascript">
        function myrefresh() {
            window.location.reload();
        }
        // setTimeout('myrefresh()',10000); //指定*毫秒刷新一次
    </script>
</head>
<body>
    <header class="research-header font-one">Brand Survey</header>
    <header class="phone-header font-one">Phone Brand Survey</header>
    <div class="research-bg">
        <div class="research-one clearfix">
            <div id="form-reset" class="fl research-reset font-two" ><span onclick="return formReset();">RESET</span></div>
            <div id="form-save" class="fr research-save font-two"><span>SAVE</span></div>
        </div>
        <div class="research-two">
            <form name="form" id="form" action="./check.php" method="post" >
                <div class="research-your">
                    <h2 class="font-one">Your brand information</h2>
                    <div class="h-border"></div>
                    <ul>
                        <li>
                            <div class="font-two input-text clearfix">
                                <label for="brand-name" class="label required">Brand name:</label>
                                <input type="text" id="brand-name" name="brand-name" class="research-input fl" required="">
                            </div>
                        </li>
                        <li>
                            <div class="font-two input-text">
                                <label for="link-website" class="label required">Link to your website:</label>
                                <input type="text" id="link-website" name="link-website" class="research-input" required="">
                            </div>
                        </li>
                        <li>
                            <div class="font-two input-text">
                                <label for="industry" class="label required">Industry:</label>
                                <select class="font-three margin-right" id="industry" name="industry" required="">
                                    <option value="">Please select</option>
                                    <option value="industry one">industry one</option>
                                    <option value="industry two">industry two</option>
                                    <option value="industry three">industry three</option>
                                </select>
                                <span class="font-three industry-other">
                                    <label  for="other-industry">If others </label>
                                    <input class="other-specific" id="other-industry" type="text" name="other-industry">
                                </span>
                            </div>
                        </li>
                        <li>
                            <div class="font-two inline-block">Brand positioning:</div>
                            <div class="font-three">
                                <div class="margin-right inline-block"><input type="radio" id="high-end" name="position" checked="" value="High end"><label for="high-end"> High end</label></div>
                                <div class="margin-right inline-block"><input type="radio" id="middle-end" name="position" value="Middle end"><label for="middle-end"> Middle end</label></div>
                                <div class="inline-block"><input type="radio" id="mass-market" name="position" value="Mass market"><label for="mass-market"> Mass market</label></div>
                            </div>
                        </li>
                        <li>
                            <div class="font-two input-text">
                                <label for="key-product" class="label required">Key product:</label>
                                <input type="text" id="key-product" name="key-product" class="research-input" required="">
                            </div>
                        </li>
                        <li>
                            <div class="font-two input-text">
                                <label for="key-service" class="label required">Key service:</label>
                                <input type="text" id="key-service" name="key-service" class="research-input" required="">
                            </div>
                        </li>
                        <li>
                            <div class="font-two inline-block">You want to promote below via KOL</div>
                            <div class="font-three">
                                <div class="margin-right inline-block"><input type="radio" id="promote-product" name="promote" checked="" value="Product"> <label for="promote-product">Product</label></div>
                                <div class="margin-right inline-block"><input type="radio" id="promote-services" name="promote" value="Service"> <label for="promote-services">Service</label></div>
                            </div>
                        </li>
                        <li>
                            <div class="font-two input-text">
                                <label for="link-product" class="label">Link to the product:</label>
                                <input type="text" id="link-product" name="link-product" class="research-input">
                                <span class="font-three color-gray">If there is</span>
                            </div>
                        </li>
                        <li>
                            <div class="font-two inline-block">You main objective</div>
                            <div class="font-three">
                                <div class="margin-right inline-block"><input type="radio" id="object-increase" name="object" checked="" value="Increase brand awarenss"> <label for="object-increase">Increase brand awarenss</label></div>
                                <div class="margin-right inline-block"><input type="radio" id="object-promote" name="object" value="Promote new products/services"> <label for="object-promote">Promote new products/services</label></div>
                                <div class="margin-right inline-block"><input type="radio" id="object-boost" name="object" value="Boost the sales"> <label for="object-boost">Boost the sales</label></div>
                                <div class="margin-right inline-block"><input type="radio" id="object-crisis" name="crisis" value="Crisis management"> <label for="object-crisis">Crisis management</label></div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="research-your">
                    <h2 class="font-one">Your budget</h2>
                    <div class="h-border"></div>
                    <ul>
                        <li>
                            <div class="inline-block">
                                <select class="font-one margin-right money-select" id="style-money" name="style-money">
                                    <option value="HK$">HK$</option>
                                    <option value="$">$</option>
                                    <option value="￥">￥</option>
                                </select>
                            </div>
                            <div class="inline-block money-select-margin">
                                <input type="text" id="lowest" name="lowest" class="number-select font-one" placeholder="Lowest" required="">
                                <div class="budget-line"></div>
                                <input type="text" id="highest" name="highest" class="number-select font-one" placeholder="Highest" required="">
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="research-your">
                    <h2 class="font-one">You want KOL</h2>
                    <div class="h-border"></div>
                    <ul>
                        <li>
                            <div class="font-two input-text">Your target consumers:</div>
                            <div>
                                <input type="radio" id="consumers-one" name="consumers">
                                <label for="consumers-one"><span class="font-two margin-right"> If specific </span></label>
                                <input id="specific" class="other-specific" type="text" name="specific-consumers" disabled>
                            </div>
                            <div>
                                <input type="radio" id="consumers-two" name="consumers" value="generalSex" checked=""><label for="consumers-two"><span class="font-two margin-right"> If general</span></label>
                                <div id="consumers-general" class="inline-block">
                                    <input type="radio" id="male" name="character" checked="" value="Male"><label for="male"><span class="font-three margin-right"> Male</span></label>
                                    <input type="radio" id="female" name="character" value="Female"><label for="female"><span class="font-three margin-right"> Female</span></label>
                                    <input type="radio" id="general" name="character" value="General"><label for="general"><span class="font-three"> General</span></label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="font-two">Key age range:</div>
                            <div class="font-three">
                                <div class="margin-right inline-block"><input type="radio" id="age-one" name="age" checked="" value="10"> <label for="age-one">10 - 20</label></div>
                                <div class="margin-right inline-block"><input type="radio" id="age-two" name="age" value="20"> <label for="age-two">20 - 30</label></div>
                                <div class="margin-right inline-block"><input type="radio" id="age-three" name="age" value="30"> <label for="age-three">30 - 40</label></div>
                                <div class="margin-right inline-block"><input type="radio" id="age-four" name="age" value="40"> <label for="age-four">40 - 50</label></div>
                            </div>
                        </li>
                        <li>
                            <div class="font-two inline-block">Your target type of KOL:(*Multiple choices)</div>
                            <div class="font-three">
                                <div class="margin-right inline-block"><input type="checkbox" id="foodie" name="target[]" value="Foodie" checked=""> <label for="foodie">Foodie</label></div>
                                <div class="margin-right inline-block"><input type="checkbox" id="fashion" name="target[]" value="Fashion" checked=""> <label for="fashion">Fashion</label></div>
                                <div class="margin-right inline-block"><input type="checkbox" id="beauty" name="target[]" value="Beauty" checked=""> <label for="beauty">Beauty</label></div>
                                <div class="margin-right inline-block"><input type="checkbox" id="lifestyle" name="target[]" value="Lifestyle"> <label for="lifestyle">Lifestyle</label></div>
                                <div class="margin-right inline-block"><input type="checkbox" id="health" name="target[]" value="Health"> <label for="health">Health</label></div>
                                <div class="margin-right inline-block"><input type="checkbox" id="parenting" name="target[]" value="Parenting"> <label for="parenting">Parenting</label></div>
                                <div class="margin-right inline-block"><input type="checkbox" id="fitness" name="target[]" value="Fitness"> <label for="fitness">Fitness</label></div>
                                <div class="margin-right inline-block"><input type="checkbox" id="photographer" name="target[]" value="Photographer"> <label for="photographer">Photographer</label></div>
                                <div class="margin-right inline-block"><input type="checkbox" id="yogi" name="target[]" value="Yogi"> <label for="yogi">Yogi</label></div>
                                <div class="margin-right inline-block"><input type="checkbox" id="student" name="target[]" value="Student"> <label for="student">Student</label></div>
                                <div class="margin-right inline-block"><input type="checkbox" id="professional" name="target[]" value="Professional"> <label for="professional">Professional</label></div>
                                <div class="margin-right inline-block"><input type="checkbox" id="model" name="target[]" value="Model"> <label for="model">Model</label></div>
                                <div class="margin-right inline-block"><input type="checkbox" id="celebrity" name="target[]" value="Celebrity"> <label for="celebrity">Celebrity</label></div>
                                <div class="margin-right inline-block"><input type="checkbox" id="others" name="target[]" value="Others"> <label for="others">Others</label></div>
                            </div>
                        </li>
                        
                        <li>
                            <div class="font-two inline-block">You preferred way of KOL collaboration</div>
                            <div class="font-three">
                                <div class="margin-right inline-block"><input type="radio" id="paid" name="kol-way" checked="" value="Paid product seeding"> <label for="paid">Paid product seeding</label></div>
                                <div class="margin-right inline-block"><input type="radio" id="free-gift" name="kol-way" value="Free gift-away"> <label for="free-gift">Free gift - away</label></div>
                                <div class="margin-right inline-block"><input type="radio" id="line-events" name="kol-way" value="Off line events"> <label for="line-events">Off line events</label></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </form>
            <div class="research-submit">
                <div id="submit-button" class="research-submit-button">
                    <a onclick="return check();">SUBMIT</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>





