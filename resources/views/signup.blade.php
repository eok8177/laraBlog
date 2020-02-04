@extends('layout')

@section('content')

<section id="signup" class="signup">
    <div class="container cont">
        <h1 class="sign__title">Registration</h1>
        <div class="signup__first-row">
          <form action="/signup" method="post" class="signup-tabs__wrap">
            @csrf
            <div class="signup__tabs">
              <div id="tab1" class="active">
                  <h2>Personal info</h2>
              </div>
              <div id="tab2">
                  <h2>Experience</h2>
              </div>
              <div id="tab3">
                  <h2>Last step</h2>
              </div>
            </div>
            <div class="signup__tabs_content">
                  <div class="tabs_content1 active">
                    <div class="tabs__input-group main-inputs">
                        <div class="tabs-input__wrap">
                            <i class="far fa-envelope"></i>
                            <input type="text" name="email" required placeholder="Email*">
                        </div>
                        <div class="tabs_column2">
                            <div class="tabs-input__wrap">
                                <i class="fa fa-key"></i>
                                <input type="password" name="password" required placeholder="Password*">
                            </div>
                            <div class="tabs-input__wrap">
                                <i class="fa fa-key"></i>
                                <input type="password" name="password" required placeholder="Password*">
                            </div>
                        </div>
                    </div>
                    <div class="tabs__input-group">
                        <div class="tabs_column2">
                            <div class="tabs-input__wrap">
                                <i class="far fa-user"></i>
                                <input type="text" name="name" required placeholder="Name*">
                            </div>
                            <div class="tabs-input__wrap">
                                <i class="far fa-flag"></i>
                                <input type="text" name="country" required placeholder="Country*">
                            </div>
                        </div>
                        <div class="tabs-input__wrap">
                            <i class="far fa-address-card"></i>
                            <input type="text" name="companyName" placeholder="Company name">
                        </div>
                        <div class="tabs-input__wrap">
                            <i class="fa fa-map-marker-alt"></i>
                            <input type="text" name="adress" required placeholder="Adress*">
                        </div>
                        <div class="tabs_column2 ">
                            <div class="tabs-input__wrap padd">
                                <select name="imType" id="imType">
                                    <option value="" disabled selected hidden>IM Type</option>
                                    <option value="1">Type1</option>
                                    <option value="2">Type2</option>
                                    <option value="3">Type3</option>
                                    <option value="4">Type4</option>
                                    <option value="5">Type5</option>
                                    <option value="6">Type6</option>
                                   <!--  <option value="2">Type2</option>
                                    <option value="3">Type3</option>
                                    <option value="4">Type4</option>
                                    <option value="5">Type5</option>
                                    <option value="6">Type6</option> -->
                                </select>
                            </div>
                            <div class="tabs-input__wrap padd">
                                <input type="text" name="imName" required placeholder="IM Name*">
                            </div>
                        </div>
                        <div class="tabs-input__wrap">
                            <i class="fa fa-link"></i>
                            <input type="text" name="url" placeholder="Url (company/ personal/ etc.)">
                        </div>
                    </div>
                    <div class="tabs__button">
                        <div id="button1" class="button-continue arrow">
                            Continue
                        </div>
                    </div>
                  </div>

                  <div class="tabs_content2">
                    <div class="tabs__input-group">
                        <h4 class="tabs__title">Name main verticals<span>*</span></h4>
                        <div class="tabs_column3">
                            <div class="tabs__check-group">
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="varticals[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Forex / Binary</span>
                                </label>
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="varticals[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Casino / Poker</span>
                                    
                                </label>
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="varticals[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Finance / Insurance</span>
                                    
                                </label>
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="varticals[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Games</span>
                                    
                                </label>
                            </div>
                            <div class="tabs__check-group">
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="varticals[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Gifts / Contests</span>
                                    
                                </label>
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="varticals[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Sweepstakes</span>
                                    
                                </label>
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="varticals[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Pin-submit</span>
                                    
                                </label>
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="varticals[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Mobile</span>
                                    
                                </label>
                            </div>
                            <div class="tabs__check-group">
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="varticals[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Installs / Downloads / Utilities</span>
                                    
                                </label>
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="varticals[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Dating / Adult / LiveCum</span>
                                    
                                </label>
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="varticals[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Other</span>
                                    
                                </label>
                            </div>
                        </div>
                        <div class="tabs__input-other">
                            <h4 class="tabs__title_other">Other verticals</h4>
                            <div class="tabs-input__wrap">
                                <input type="text" name="other_verticals">
                            </div>
                        </div>  
                        <div class="tabs__input-other">
                            <h4 class="tabs__title_other">
                                What CPA networks do you currently work  with?
                                <span class="tabs__title_desc">(Or reference contacts)</span>
                            </h4>
                            <div class="tabs-input__wrap">
                                <input type="text" name="current_work">
                            </div>
                        </div>  
                    </div>
                    <div class="tabs__input-group">
                        <h4 class="tabs__title">
                            What traffic types do you generally use for promotional purposes?
                            <span>*</span>
                        </h4>
                        <div class="tabs_column3">
                            <div class="tabs__check-group">
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="purposes[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Web sites</span>
                                    
                                </label>
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="purposes[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Doorways</span>
                                    
                                </label>
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="purposes[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Context AD</span>
                                    
                                </label>
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="purposes[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Brand Context AD</span>
                                    
                                </label>
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="purposes[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Teaser / banner AD</span>
                                    
                                </label>
                            </div>
                            <div class="tabs__check-group">
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="purposes[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Rebrokering</span>
                                    
                                </label>
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="purposes[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Emailling</span>
                                    
                                </label>
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="purposes[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Mobile traffic</span>
                                    
                                </label>
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="purposes[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">ClickUnder / PopUnder</span>
                                    
                                </label>
                                 <label class="control control-checkbox">
                                    <input type="checkbox" name="purposes[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Incent traffic</span>
                                    
                                </label>
                            </div>
                            <div class="tabs__check-group">
                                 <label class="control control-checkbox">
                                    <input type="checkbox" name="purposes[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Social networks: targeted AD</span>
                                    
                                </label>
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="purposes[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Social networks: publics, games, applications</span>
                                    
                                </label>
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="purposes[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Other</span>
                                    
                                </label>
                            </div>
                        </div>
                        <div class="tabs__input-other">
                            <h4 class="tabs__title_other">
                                Other traffic types
                            </h4>
                            <div class="tabs-input__wrap">
                                <input type="text" name="traffic_types">
                            </div>
                        </div>
                    </div>   
                    <div class="tabs__input-group">
                        <h4 class="tabs__title">
                            TOP Geo
                            <span>*</span>
                        </h4>
                        <div class="tabs_column3">
                            <div class="tabs__check-group">
                                 <label class="control control-checkbox">
                                    <input type="checkbox" name="geo[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Tier1 (UK, AU, NZ, CA, Nordic) + Europe</span>
                                </label>
                                 <label class="control control-checkbox">
                                    <input type="checkbox" name="geo[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">USA</span>
                                </label>
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="geo[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">GCC</span>
                                    
                                </label>
                            </div>
                            <div class="tabs__check-group">
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="geo[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">RU,CIS</span>
                                </label>
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="geo[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Africa</span>
                                </label>
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="geo[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">LATAM</span>
                                </label>
                            </div>
                            <div class="tabs__check-group">
                                <label class="control control-checkbox">
                                    <input type="checkbox" name="geo[]" />
                                    <span class="control_indicator"></span>
                                    <span class="control_name">Other</span>
                                </label>
                            </div>
                        </div>
                        <div class="tabs__input-other">
                            <h4 class="tabs__title_other">
                                Other Geo
                            </h4>
                            <div class="tabs-input__wrap">
                                <input type="text" name="other_geo">
                            </div>
                        </div>
                    </div>    
                    <div class="tabs__button">
                        <div id="button2" class="button-return arrow">
                            Click to return
                        </div>
                        <div id="button3" class="button-continue arrow">
                            Continue
                        </div>
                    </div>
                  </div>
                  <div class="tabs_content3">
                      <div class="tabs__input-group">
                         <div class="tabs__input-other">
                            <h4 class="tabs__title_other">
                                How did you hear about C3PA?
                            </h4>
                            <div class="tabs-input__wrap">
                                <input type="text" name="hear_about">
                            </div>
                        </div>
                         <div class="tabs_column2">
                            <div class="tabs-input__wrap">
                                <div class="tabs__input-other">
                                    <h4 class="tabs__title_other">
                                        Promo code
                                    </h4>
                                    <input type="text" name="promo_code">
                                </div>
                            </div>
                            <div class="tabs-input__wrap">
                                <div class="tabs__check-group">
                                    <label class="control control-checkbox">
                                        <input type="checkbox" name="aggre_news" />
                                        <span class="control_indicator"></span>
                                        <span class="control_name">I agree to receive news</span>
                                    </label>
                                    <label class="control control-checkbox">
                                        <input type="checkbox" name="aggre_terms" />
                                        <span class="control_indicator"></span>
                                        <span class="control_name">I agree with <a href="#">terms and conditions</a></span>
                                    </label>
                                </div>
                            </div>
                             
                         </div>
                      </div>
                      <div class="tabs__button">
                        <div id="button4" class="button-return arrow">
                            Click to return
                        </div>
                        <button type="submit" id="submit" class="button-continue arrow">
                            Register
                        </button>
                      </div>
                  </div>
            </div>  
              
          </form>
        </div>
    </div>
</section>

@endsection