<template>
  <!--====================================================================-->
  <HeaderComp />
  <!--====================================================================-->
  <div class="condos_detail">
    <div class="con_images_sec">
      <VRow>
        <VCol md="6" class="">
          <div class="left_image_sec"><img src="@images/img/condos/condo1.jpg" alt="" /></div>
        </VCol>
        <VCol md="6" class="">
          <div class="right_image_sec">
            <VRow>
              <VCol md="6">
                <div class="image_rig"><img src="@images/img/property/slide1.png" alt="" /></div>
              </VCol>
              <VCol md="6">
                <div class="image_rig"><img src="@images/img/property/slide2.png" alt="" /></div>
              </VCol>
              <VCol md="6">
                <div class="image_rig"><img src="@images/img/property/slide3.png" alt="" /></div>
              </VCol>
              <VCol md="6">
                <div class="image_rig"><img src="@images/img/property/slide4.png" alt="" /></div>
              </VCol>
            </VRow>
          </div>
        </VCol>
      </VRow>
    </div>
    <div class="see_all_img">
      <VBtn rounded="pill" >View all Photos</VBtn>
    </div>
    <div class="container">
      <VRow>
        <VCol md="8">
          <div class="cod_detail">
            <!--/////////////////////////////////////////////////-->
            <div class="cod_heading">
              <h2>{{ condoDetail?.title }}</h2>
              <div class="cod_meta">
                <button class="share mr-1"><v-icon size="24" class=""> mdi-share-variant-outline </v-icon></button>
                <button class="wishlist">
                  <svg data-v-5542f78a="" aria-labelledby="svg-inline--fa-title-BdjCU3hBHwzS" data-prefix="far"
                    data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                    class="text-tridelRed fav-heart h-6 w-6 svg-inline--fa fa-heart">
                    <title data-v-5542f78a="" id="svg-inline--fa-title-BdjCU3hBHwzS" class="">
                      heart icon
                    </title>
                    <path data-v-5542f78a="" fill="currentColor"
                      d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z"
                      class=""></path>
                  </svg>
                  <svg data-v-5542f78a="" aria-labelledby="svg-inline--fa-title-9EAZG4s4WHmu" data-prefix="fas"
                    data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                    class="text-tridelRed fav-heart-filled h-6 w-6 svg-inline--fa fa-heart">
                    <title data-v-5542f78a="" id="svg-inline--fa-title-9EAZG4s4WHmu" class="">
                      heart icon
                    </title>
                    <path data-v-5542f78a="" fill="currentColor"
                      d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"
                      class=""></path>
                  </svg>
                </button>
              </div>
            </div>
            <!--/////////////////////////////////////////////////-->
            <div class="suite">
              <p>Chicago, IL 60610</p>
            </div>
            <!--/////////////////////////////////////////////////-->
            <div class="codos_info">
              <ul>
                <li>
                  <h5>Address</h5>
                  <span>{{ condoDetail?.address }}</span>
                </li>
                <li>
                  <h5>Occupancy</h5>
                  <span>{{ condoDetail?.occupency }}</span>
                </li>
                <li>
                  <h5>Developer</h5>
                  <span><a href="">{{ condoDetail?.developer }}</a></span>
                </li>
              </ul>
            </div>
            <!--/////////////////////////////////////////////////-->
            <div class="cod_info_container">
              <div class="cod_info">
                <p>Price</p>
                <h3>${{ condoDetail?.price }}</h3>
              </div>
              <div class="cod_info">
                <p>Bed</p>
                <h3>3</h3>
              </div>
              <div class="cod_info">
                <p>Bath</p>
                <h3>2</h3>
              </div>
              <div class="cod_info">
                <p>Sq.Footage</p>
                <h3>{{ condoDetail?.area_size }}</h3>
              </div>
            </div>
            <!--/////////////////////////////////////////////////-->
          </div>
          <div class="cod_detail_tab">
            <VTabs v-model="CondosTab" class="v-tabs-pill">
              <VTab>Detail</VTab>
              <VTab>About</VTab>
              <VTab>Amenities</VTab>
              <VTab>Location</VTab>
            </VTabs>
            <VWindow v-model="CondosTab">
              <VWindowItem>
                <div class="cod_detail_tab_info">
                  <h2>Detail</h2>
                  <div class="cod_data">
                    <p>{{ condoDetail?.description }}</p>
                  </div>
                  <ul class="cod_data_list">
                    <li>
                      <p>Prices and availability subject to change without notice.</p>
                    </li>
                    <li>
                      <p>Square footage definitions vary. Displayed square footage is approximate.</p>
                    </li>
                  </ul>
                </div>
              </VWindowItem>
              <VWindowItem>
                <div class="cod_detail_tab_info">
                  <h2>About This Property</h2>
                  <div class="cod_data">
                    <p>Be the first to lease this newly renovated 2 bedroom, south facing, sunny condo situated between
                      the Gold Coast and Old Town, walking distance to Lincoln Park. This beautiful unit is finished
                      with high end cabinetry, appliances, and lighting throughout. The large primary bedroom has a full
                      size closet and is located adjacent to the fully remodeled bathroom with a large walk-in shower.
                      The second bedroom is perfect as a guest room or office. There is ample closet space in the
                      hallways including a coat closet, pantry, and large walk-in closet. Lowell House is a well managed
                      building within the Sandburg community offering a fully remodeled contemporary lobby, door person,
                      24 hour lobby security, and a first floor laundry room. There is garage parking in the building
                      for a fee with options for guest parking. Be the first tenants to enjoy this beautiful unit and
                      the amenities of the Sandburg community including two full size pools and tennis courts.</p>
                    <p>88 W Schiller St is a condo located in Cook County and the 60610 ZIP Code.</p>
                  </div>
                </div>
              </VWindowItem>
              <VWindowItem>
                <div class="cod_detail_tab_info">
                  <h2>Condo Features</h2>
                  <div class="amenty_container mt-4">
                    <div class="amenty_card">
                      <v-icon size="34" class="mb-2"> mdi-snowflake</v-icon>
                      <p>Air Conditioning</p>
                    </div>
                    <div class="amenty_card">
                      <v-icon size="34" class="mb-2"> mdi-dishwasher</v-icon>
                      <p>Dishwasher</p>
                    </div>
                    <div class="amenty_card">
                      <v-icon size="34" class="mb-2"> mdi-hanger</v-icon>
                      <p>Walk-In Closets</p>
                    </div>
                    <div class="amenty_card">
                      <v-icon size="34" class="mb-2"> mdi-countertop-outline</v-icon>
                      <p>Granite Countertops</p>
                    </div>
                    <div class="amenty_card">
                      <v-icon size="34" class="mb-2"> mdi-microwave</v-icon>
                      <p>Microwave</p>
                    </div>
                    <div class="amenty_card">
                      <v-icon size="34" class="mb-2"> mdi-fridge-outline</v-icon>
                      <p>Refrigerator</p>
                    </div>
                    <div class="amenty_card">
                      <v-icon size="34" class="mb-2"> mdi-hexagon-slice-6</v-icon>
                      <p>Freezer</p>
                    </div>
                    <div class="amenty_card">
                      <v-icon size="34" class="mb-2"> mdi-fridge</v-icon>
                      <p>Stainless Steel Appliances</p>
                    </div>
                  </div>
                  <!--///////////////////////////////////////////////////-->
                  <!--///////////////////////////////////////////////////-->
                  <div class="cod_features">
                    <h3>Highlights</h3>
                    <div class="cod_am_listing">
                      <ul>
                        <li>
                          <span>Air Conditioning</span>
                        </li>
                        <li>
                          <span>Smoke Free</span>
                        </li>
                        <li>
                          <span>Security System</span>
                        </li>
                        <li>
                          <span>Heating</span>
                        </li>
                        <li>
                          <span>Cable Ready</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!--///////////////////////////////////////////////////-->
                  <!--///////////////////////////////////////////////////-->
                  <VDivider/>
                  <!--///////////////////////////////////////////////////-->
                  <!--///////////////////////////////////////////////////-->
                  <div class="cod_features">
                    <h3>Kitchen Features & Appliances</h3>
                    <div class="cod_am_listing">
                      <ul>
                        <li>
                          <span>Dishwasher</span>
                        </li>
                        <li>
                          <span>Microwave</span>
                        </li>
                        <li>
                          <span>Freezer</span>
                        </li>
                        <li>
                          <span>Granite Countertops</span>
                        </li>
                        <li>
                          <span>Oven</span>
                        </li>
                        <li>
                          <span>Warming Drawer</span>
                        </li>
                        <li>
                          <span>Stainless Steel Appliances</span>
                        </li>
                        <li>
                          <span>Range</span>
                        </li>
                        <li>
                          <span>Pantry</span>
                        </li>
                        <li>
                          <span>Refrigerator</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!--///////////////////////////////////////////////////-->
                  <!--///////////////////////////////////////////////////-->
                </div>
              </VWindowItem>
              <VWindowItem>
                <div class="cod_detail_tab_info">
                  <h2>Location</h2>
                  <div class="cod_location">
                    <p>88 W Schiller St, Chicago, IL 60610</p>
                    <a href=""><v-icon size="24" class="mr-1"> mdi-directions-fork</v-icon>  Get Directions</a>
                  </div>
                </div>
              </VWindowItem>
            </VWindow>
          </div>
        </VCol>
        <VCol md="4">
          <div class="contact_condos_sec">
            <div class="contact_condos">
              <div class="contact_condos_box">
                <h2>Contact This Property</h2>
                <VBtn block class="mt-5">Request Tour</VBtn>
                <VBtn variant="outlined" block class="mt-3">Buy Now</VBtn>
                <VBtn variant="outlined" block class="mt-3">Send Message</VBtn>
              </div>
            </div>
          </div>
        </VCol>
      </VRow>
    </div>
  </div>
  <div class="related_condos">
    <div class="container">
      <h2>Related Condos</h2>
      <VRow>
        <VCol lg="4">
          <div class="property-card">
            <div class="prop-img">
              <!--======================================-->
              <!--======================================-->
              <div class="property_tags">
                <div class="hot_tag">
                  <v-icon size="24" class=""> mdi-fire</v-icon>
                </div>
              </div>
              <button class="wishlist">
                <svg data-v-5542f78a="" aria-labelledby="svg-inline--fa-title-BdjCU3hBHwzS" data-prefix="far"
                  data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                  class="text-tridelRed fav-heart h-6 w-6 svg-inline--fa fa-heart">
                  <title data-v-5542f78a="" id="svg-inline--fa-title-BdjCU3hBHwzS" class="">
                    heart icon
                  </title>
                  <path data-v-5542f78a="" fill="currentColor"
                    d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z"
                    class=""></path>
                </svg>
                <svg data-v-5542f78a="" aria-labelledby="svg-inline--fa-title-9EAZG4s4WHmu" data-prefix="fas"
                  data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                  class="text-tridelRed fav-heart-filled h-6 w-6 svg-inline--fa fa-heart">
                  <title data-v-5542f78a="" id="svg-inline--fa-title-9EAZG4s4WHmu" class="">
                    heart icon
                  </title>
                  <path data-v-5542f78a="" fill="currentColor"
                    d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"
                    class=""></path>
                </svg>
              </button>
              <div class="">
                <span class="loction_tag"><v-icon size="16" class=""> mdi-location </v-icon>
                  Canada</span>
                <span class="dev_tag"><v-icon size="16" class=""> mdi-office-building </v-icon>Aspen Ridge</span>
              </div>
              <!--======================================-->
              <!--======================================-->
              <div class="prop-img">
                <img src="@images/img/condos/condo14.jpg" alt="" />
              </div>
              <!--======================================-->
              <!--======================================-->
            </div>
            <div class="property_body">
              <h2>
                <RouterLink :to="{ name: 'condo-detail' }">The Essery Condos</RouterLink>
              </h2>
              <div class="property_price">
                <h3><span>$</span> 1,229,990+</h3>
              </div>
              <div class="property_short_desc">
                <p>
                  The‌ ‌Essery Condos by‌ Aspen Ridge Homes is‌ ‌a‌ ‌new condo
                  development ‌at‌ 109 Niagara St, Toronto, Ontario, M5v 1c3.‌
                  ‌This‌ project ‌offers‌ ‌a‌ ‌low-rise
                </p>
              </div>
            </div>
          </div>
        </VCol>
        <VCol lg="4">
          <div class="property-card">
            <div class="prop-img">
              <!--======================================-->
              <!--======================================-->
              <div class="property_tags">
                <div class="hot_tag">
                  <v-icon size="24" class=""> mdi-fire</v-icon>
                </div>
              </div>
              <button class="wishlist">
                <svg data-v-5542f78a="" aria-labelledby="svg-inline--fa-title-BdjCU3hBHwzS" data-prefix="far"
                  data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                  class="text-tridelRed fav-heart h-6 w-6 svg-inline--fa fa-heart">
                  <title data-v-5542f78a="" id="svg-inline--fa-title-BdjCU3hBHwzS" class="">
                    heart icon
                  </title>
                  <path data-v-5542f78a="" fill="currentColor"
                    d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z"
                    class=""></path>
                </svg>
                <svg data-v-5542f78a="" aria-labelledby="svg-inline--fa-title-9EAZG4s4WHmu" data-prefix="fas"
                  data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                  class="text-tridelRed fav-heart-filled h-6 w-6 svg-inline--fa fa-heart">
                  <title data-v-5542f78a="" id="svg-inline--fa-title-9EAZG4s4WHmu" class="">
                    heart icon
                  </title>
                  <path data-v-5542f78a="" fill="currentColor"
                    d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"
                    class=""></path>
                </svg>
              </button>
              <div class="">
                <span class="loction_tag"><v-icon size="16" class=""> mdi-location </v-icon>
                  Canada</span>
                <span class="dev_tag"><v-icon size="16" class=""> mdi-office-building </v-icon>
                  Graywood Developments</span>
              </div>
              <!--======================================-->
              <!--======================================-->
              <div class="prop-img">
                <img src="@images/img/condos/condo2.jpg" alt="" />
              </div>
              <!--======================================-->
              <!--======================================-->
            </div>
            <div class="property_body">
              <h2>
                <RouterLink :to="{ name: 'condo-detail' }">Centricity Condos</RouterLink>
              </h2>
              <div class="property_price">
                <h3><span>$</span> 595,990+</h3>
              </div>
              <div class="property_short_desc">
                <p>
                  Centricity Condos is a new condominium development that is
                  currently in the pre construction phase by Graywood
                  Developments LTD, located at 241 Church Street, Toronto
                </p>
              </div>
            </div>
          </div>
        </VCol>
        <VCol lg="4">
          <div class="property-card">
            <div class="prop-img">
              <!--======================================-->
              <!--======================================-->
              <div class="property_tags">
                <div class="hot_tag">
                  <v-icon size="24" class=""> mdi-fire</v-icon>
                </div>
              </div>
              <button class="wishlist">
                <svg data-v-5542f78a="" aria-labelledby="svg-inline--fa-title-BdjCU3hBHwzS" data-prefix="far"
                  data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                  class="text-tridelRed fav-heart h-6 w-6 svg-inline--fa fa-heart">
                  <title data-v-5542f78a="" id="svg-inline--fa-title-BdjCU3hBHwzS" class="">
                    heart icon
                  </title>
                  <path data-v-5542f78a="" fill="currentColor"
                    d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z"
                    class=""></path>
                </svg>
                <svg data-v-5542f78a="" aria-labelledby="svg-inline--fa-title-9EAZG4s4WHmu" data-prefix="fas"
                  data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                  class="text-tridelRed fav-heart-filled h-6 w-6 svg-inline--fa fa-heart">
                  <title data-v-5542f78a="" id="svg-inline--fa-title-9EAZG4s4WHmu" class="">
                    heart icon
                  </title>
                  <path data-v-5542f78a="" fill="currentColor"
                    d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"
                    class=""></path>
                </svg>
              </button>
              <div class="">
                <span class="loction_tag"><v-icon size="16" class=""> mdi-location </v-icon>Etobicoke</span>
                <span class="dev_tag"><v-icon size="16" class=""> mdi-office-building </v-icon>
                  Diamante</span>
              </div>
              <!--======================================-->
              <!--======================================-->
              <div class="prop-img">
                <img src="@images/img/condos/condo18.jpg" alt="" />
              </div>
              <!--======================================-->
              <!--======================================-->
            </div>
            <div class="property_body">
              <h2>
                <RouterLink :to="{ name: 'condo-detail' }">Mirabella Condos</RouterLink>
              </h2>
              <div class="property_price">
                <h3><span>$</span>725,000+</h3>
              </div>
              <div class="property_short_desc">
                <p>
                  Situated in Windermere and Lake Shore W, Toronto is a new
                  condominium development by Diamante, named the Mirabella
                  Condos. Characterized by two aesthetically pleasing towers
                </p>
              </div>
            </div>
          </div>
        </VCol>
      </VRow>
    </div>
  </div>
  <!--====================================================================-->
  <FooterComp />
  <!--====================================================================-->
</template>

<script setup>
const route = useRoute();
import HeaderComp from "@/views/pages/landing/components/header.vue";
import FooterComp from "@/views/pages/landing/components/footer.vue";
import breadcrumpHeader from "@/views/pages/landing/components/breadcrumpHeader.vue";
import { useHomeStore } from "@/views/pages/landing/useHomeStore";
const CondosTab = ref(0);
const condoDetail = ref();
const HomeStore = useHomeStore();

HomeStore.fetchCondo(route.params.detail).then((response) => {
  condoDetail.value = response.data.data.condo;
});
</script>
<route lang="yaml">
meta:
  layout: blank
</route>
