<template>
  <!--====================================================================-->
  <HeaderComp />
  <!--====================================================================-->
  <div class="condos_detail">
    <div class="container">
      <VRow>
        <VCol md="6">
          <div class="condos_det">
            
            <h2>Centricity Condos</h2>
            <VDivider />
            <ul>
              <li>
                <h5>Name</h5>
                <span>{{ condoDetail?.title }}</span>
              </li>
              <li>
                <h5>Address</h5>
                <span>{{ condoDetail?.address }}</span>
              </li>
              <li>
                <h5>Prices</h5>
                <h4>
                  $ <span>{{ condoDetail?.price }}</span>
                </h4>
              </li>
              <li>
                <h5>Occupancy</h5>
                <span>{{ condoDetail?.occupency }}</span>
              </li>
              <li>
                <h5>Developer</h5>
                <span>{{ condoDetail?.developer }}</span>
              </li>
              <li>
                <h5>2 Bed Starting</h5>
                <span>{{ condoDetail?.two_bed_starting_price }}</span>
              </li>
              <li>
                <h5>1 Bed Starting</h5>
                <span>{{ condoDetail?.one_bed_starting_price }}</span>
              </li>
            </ul>
          </div>
        </VCol>
        <VCol md="6">
          <div class="condos_images">
            <swiper
              :navigation="true"
              :pagination="true"
              :autoplay="{ delay: 5000, disableOnInteraction: false }"
              :modules="modules"
              class="property_img_slider"
            >
              <swiper-slide>
                <img src="@images/img/condos/condo2.jpg" alt="" />
              </swiper-slide>
              <swiper-slide>
                <img src="@images/img/condos/condo3.jpg" alt="" />
              </swiper-slide>
              <swiper-slide>
                <img src="@images/img/condos/condo4.jpg" alt="" />
              </swiper-slide>
            </swiper>
          </div>
        </VCol>
      </VRow>
      <VRow class="mt-10">
        <VCol cols="12">
          <div class="condos_detail_tab">
            <div class="condos_tab_header">
              <VTabs v-model="CondosTab" class="v-tabs-pill">
                <VTab>Floor Plans</VTab>
                <VTab>About</VTab>
                <VTab>Reviews</VTab>
                <VTab>Sales Info</VTab>
                <VTab>Location</VTab>
              </VTabs>
            </div>
            <div class="condos_tab_body condos_tab_detail">
              <VWindow v-model="CondosTab">
                <VWindowItem>
                  <h2>Centricity Condos Condominiums For Sale</h2>
                  <div class="floor_plans mt-5">
                    <VTabs v-model="FloorTab" class="v-tabs-pill">
                      <VTab>1 Bed</VTab>
                      <VTab>2 Bed</VTab>
                      <VTab>+More</VTab>
                    </VTabs>
                    <VWindow v-model="FloorTab">
                      <VWindowItem>
                        <div class="mt-4 mb-5 apartment">
                          <VRow>
                            <VCol cols="12">
                              <div class="header_apartment">
                                <div class="apartments floor_img">
                                  <h4>Image</h4>
                                </div>
                                <div class="apartments floor_Suite">
                                  <h4>Suite</h4>
                                </div>
                                <div class="apartments floor_bed">
                                  <h4>Bed</h4>
                                </div>
                                <div class="apartments floor_sqfoot">
                                  <h4>Sq.Footage</h4>
                                </div>
                                <div class="apartments floor_price">
                                  <h4>Price</h4>
                                </div>
                              </div>
                            </VCol>
                            <VCol cols="12">
                              <div class="floor_apartments">
                                <div class="apartments floor_img">
                                  <a href=""
                                    ><img src="@images/img/CE.jpg" alt=""
                                  /></a>
                                </div>
                                <div class="apartments floor_Suite">
                                  <h3>CE</h3>
                                </div>
                                <div class="apartments floor_bed">
                                  <div class="d-flex align-center">
                                    <v-icon size="20" class="mr-1">
                                      mdi-bed-outline</v-icon
                                    ><span>1</span
                                    ><v-icon size="20" class="mr-1 ml-1">
                                      mdi-shower</v-icon
                                    ><span>1</span>
                                  </div>
                                </div>
                                <div class="apartments floor_sqfoot">
                                  <div class="d-flex align-center">
                                    <v-icon size="23" class="mr-1">
                                      mdi-set-square</v-icon
                                    ><span>995</span>
                                  </div>
                                </div>
                                <div class="apartments floor_price">
                                  <h3>$625,000</h3>
                                </div>
                              </div>
                            </VCol>
                            <VCol cols="12">
                              <div class="floor_apartments">
                                <div class="apartments floor_img">
                                  <a href=""
                                    ><img src="@images/img/CE.jpg" alt=""
                                  /></a>
                                </div>
                                <div class="apartments floor_Suite">
                                  <h3>CE-W</h3>
                                </div>
                                <div class="apartments floor_bed">
                                  <div class="d-flex align-center">
                                    <v-icon size="20" class="mr-1">
                                      mdi-bed-outline</v-icon
                                    ><span>1</span
                                    ><v-icon size="20" class="mr-1 ml-1">
                                      mdi-shower</v-icon
                                    ><span>1</span>
                                  </div>
                                </div>
                                <div class="apartments floor_sqfoot">
                                  <div class="d-flex align-center">
                                    <v-icon size="23" class="mr-1">
                                      mdi-set-square</v-icon
                                    ><span>995</span>
                                  </div>
                                </div>
                                <div class="apartments floor_price">
                                  <h3>$725,000</h3>
                                </div>
                              </div>
                            </VCol>
                          </VRow>
                        </div>
                      </VWindowItem>
                      <VWindowItem>
                        <div class="mt-4 mb-5 apartment">
                          <VRow>
                            <VCol cols="12">
                              <div class="header_apartment">
                                <div class="apartments floor_img">
                                  <h4>Image</h4>
                                </div>
                                <div class="apartments floor_Suite">
                                  <h4>Suite</h4>
                                </div>
                                <div class="apartments floor_bed">
                                  <h4>Bed</h4>
                                </div>
                                <div class="apartments floor_sqfoot">
                                  <h4>Sq.Footage</h4>
                                </div>
                                <div class="apartments floor_price">
                                  <h4>Price</h4>
                                </div>
                              </div>
                            </VCol>
                            <VCol cols="12">
                              <div class="floor_apartments">
                                <div class="apartments floor_img">
                                  <a href=""
                                    ><img src="@images/img/CE.jpg" alt=""
                                  /></a>
                                </div>
                                <div class="apartments floor_Suite">
                                  <h3>CEW</h3>
                                </div>
                                <div class="apartments floor_bed">
                                  <div class="d-flex align-center">
                                    <v-icon size="20" class="mr-1">
                                      mdi-bed-outline</v-icon
                                    ><span>2</span
                                    ><v-icon size="20" class="mr-1 ml-1">
                                      mdi-shower</v-icon
                                    ><span>2</span>
                                  </div>
                                </div>
                                <div class="apartments floor_sqfoot">
                                  <div class="d-flex align-center">
                                    <v-icon size="23" class="mr-1">
                                      mdi-set-square</v-icon
                                    ><span>977</span>
                                  </div>
                                </div>
                                <div class="apartments floor_price">
                                  <h3>$925,000</h3>
                                </div>
                              </div>
                            </VCol>
                            <VCol cols="12">
                              <div class="floor_apartments">
                                <div class="apartments floor_img">
                                  <a href=""
                                    ><img src="@images/img/CE.jpg" alt=""
                                  /></a>
                                </div>
                                <div class="apartments floor_Suite">
                                  <h3>C-W</h3>
                                </div>
                                <div class="apartments floor_bed">
                                  <div class="d-flex align-center">
                                    <v-icon size="20" class="mr-1">
                                      mdi-bed-outline</v-icon
                                    ><span>2</span
                                    ><v-icon size="20" class="mr-1 ml-1">
                                      mdi-shower</v-icon
                                    ><span>2</span>
                                  </div>
                                </div>
                                <div class="apartments floor_sqfoot">
                                  <div class="d-flex align-center">
                                    <v-icon size="23" class="mr-1">
                                      mdi-set-square</v-icon
                                    ><span>770</span>
                                  </div>
                                </div>
                                <div class="apartments floor_price">
                                  <h3>$525,000</h3>
                                </div>
                              </div>
                            </VCol>
                          </VRow>
                        </div>
                      </VWindowItem>
                      <VWindowItem>
                        <div class="mt-4 mb-5 apartment">
                          <VRow>
                            <VCol cols="12">
                              <div class="header_apartment">
                                <div class="apartments floor_img">
                                  <h4>Image</h4>
                                </div>
                                <div class="apartments floor_Suite">
                                  <h4>Suite</h4>
                                </div>
                                <div class="apartments floor_bed">
                                  <h4>Bed</h4>
                                </div>
                                <div class="apartments floor_sqfoot">
                                  <h4>Sq.Footage</h4>
                                </div>
                                <div class="apartments floor_price">
                                  <h4>Price</h4>
                                </div>
                              </div>
                            </VCol>
                            <VCol cols="12">
                              <div class="floor_apartments">
                                <div class="apartments floor_img">
                                  <a href=""
                                    ><img src="@images/img/CE.jpg" alt=""
                                  /></a>
                                </div>
                                <div class="apartments floor_Suite">
                                  <h3>CEW</h3>
                                </div>
                                <div class="apartments floor_bed">
                                  <div class="d-flex align-center">
                                    <v-icon size="20" class="mr-1">
                                      mdi-bed-outline</v-icon
                                    ><span>3</span
                                    ><v-icon size="20" class="mr-1 ml-1">
                                      mdi-shower</v-icon
                                    ><span>3</span>
                                  </div>
                                </div>
                                <div class="apartments floor_sqfoot">
                                  <div class="d-flex align-center">
                                    <v-icon size="23" class="mr-1">
                                      mdi-set-square</v-icon
                                    ><span>977</span>
                                  </div>
                                </div>
                                <div class="apartments floor_price">
                                  <h3>$925,000</h3>
                                </div>
                              </div>
                            </VCol>
                            <VCol cols="12">
                              <div class="floor_apartments">
                                <div class="apartments floor_img">
                                  <a href=""
                                    ><img src="@images/img/CE.jpg" alt=""
                                  /></a>
                                </div>
                                <div class="apartments floor_Suite">
                                  <h3>C-W</h3>
                                </div>
                                <div class="apartments floor_bed">
                                  <div class="d-flex align-center">
                                    <v-icon size="20" class="mr-1">
                                      mdi-bed-outline</v-icon
                                    ><span>3</span
                                    ><v-icon size="20" class="mr-1 ml-1">
                                      mdi-shower</v-icon
                                    ><span>2</span>
                                  </div>
                                </div>
                                <div class="apartments floor_sqfoot">
                                  <div class="d-flex align-center">
                                    <v-icon size="23" class="mr-1">
                                      mdi-set-square</v-icon
                                    ><span>770</span>
                                  </div>
                                </div>
                                <div class="apartments floor_price">
                                  <h3>$525,000</h3>
                                </div>
                              </div>
                            </VCol>
                          </VRow>
                        </div>
                      </VWindowItem>
                    </VWindow>
                  </div>
                </VWindowItem>
                <VWindowItem>
                  <div class="condos_about">
                    <h2>About The Essery Condos Development</h2>
                    <p>
                      The‌ ‌Essery Condos by‌ Aspen Ridge Homes is‌ ‌a‌ ‌new
                      condo development ‌at‌ 109 Niagara St, Toronto, Ontario,
                      M5v 1c3.‌ ‌This‌ project ‌offers‌ ‌a‌ ‌low-rise‌ ‌building
                      ‌of ‌4 storeys.‌ ‌The‌ ‌property is currently under
                      pre-construction status and will also be completed by
                      2025.
                    </p>
                    <p>
                      The Essery Condos has CORE Architects & Bernard Watt
                      Architect as its architects and interior designers. This
                      new condo project will reside in the central junction of
                      Tecumseth Street and Wellington Street West. Thus, buyers
                      will get all the amenities in just a short walk due to
                      downtown Toronto nearby. So, what are you waiting for?
                    </p>
                    <p>
                      Contact our real estate professionals to know everything
                      about the Essery condos. Also, explore the condo
                      completion date, unit price list, latest market listings,
                      average sale price per suite rent per unit, floor plans,
                      number of units, and additional information.
                    </p>
                    <h2>Features and Amenities</h2>
                    <p>
                      Buyers of the Essery at 109 Niagara Street will receive
                      floor plans from one-bedroom, two-bedroom, and
                      three-bedroom options.
                    </p>
                    <p>
                      Moreover, this new project will have all the beautiful
                      amenities and finishes that a modern property must-have.
                      You can request to receive the complete features and
                      amenities of the Essery condos
                    </p>
                    <p>
                      So, what are you waiting for? Send us a request to get the
                      most up-to-date knowledge on the Essery condos highlights.
                      Further, know the maintenance prices, apartment sold
                      history, parking charges, security fees, and other
                      details.
                    </p>
                    <h2>Location and Neighbourhood</h2>
                    <p>
                      Located in Toronto’s Niagara area, the Essery condos
                      provide potential homeowners with a wide range of
                      amenities and settings. You will now be in the fashion
                      district of Toronto. The Rogers Centre, Roy Thompson Hall,
                      and Bell Lightbox are within walking distance of this
                      lovely site.
                    </p>
                    <p>
                      Students may readily access classes at the University of
                      Toronto, only a 10-minute drive away. Shops such as
                      Gotstyle, Urban Mode, Loblaws, Bulk Barn, and Sobeys are
                      nearby. Stanley Park, Coronation Park, Victoria Square
                      Park, and Waterfront Children’s Garden are the closest to
                      spending time.
                    </p>
                    <p>
                      Likewise, for entertainment, there is CN TOWER, Skydome,
                      The Princess of Whales Theatre and Creative Blueprint. And
                      for the schools, there are Odgen Junior Public School,
                      Ryerson Community School, and Heydon Park Secondary
                      School.
                    </p>
                    <h2>Accessibility and Highlights</h2>
                    <p>
                      The location of Essery development has an excellent 90/100
                      walk score and a 96/100 bike score. Several bus lines and
                      rail lines are available within one kilometre from m5v
                      1c3. And, drivers have their Gardiner Expressway to move
                      in and out of the city.
                    </p>
                    <h2>About the Developer</h2>
                    <p>
                      Aspen Ridge Homes is one of the most excellent condominium
                      builders in the Greater Toronto area. This Toronto real
                      estate developer has extensive experience in contemporary
                      condominiums and resale properties.
                    </p>
                    <p>
                      The group has maintained a competitive edge in the market
                      through its wide network of developers and agents.
                    </p>
                    <p>
                      Through its close connections, Aspen can maintain its
                      quality in its services, thus offering the best of works.
                      Apart from being the Essery condos developer, the firm has
                      also constructed Anchor Woods, New Seaton, and Crest at
                      Crosstown.
                    </p>
                    <p>
                      Are you interested in other condominium projects in
                      Toronto, Ontario, or nearby cities? Register on our site
                      or send a request to get all the details today!
                    </p>
                  </div>
                </VWindowItem>
                <VWindowItem>
                  <h2>Reviews</h2>
                </VWindowItem>
                <VWindowItem>
                  <h2>Sales Info</h2>
                </VWindowItem>
                <VWindowItem>
                  <h2>Location</h2>
                </VWindowItem>
              </VWindow>
            </div>
          </div>
        </VCol>
        <VCol md="8">
          <div class="condos_reviews">
            <h2>Leave Your Reviews Here</h2>
            <p>
              Your email address will not be published. Required fields are
              marked *
            </p>
            <VForm>
              <VRow>
                <VCol cols="12">
                  <VTextarea label="Review" />
                </VCol>

                <VCol cols="12">
                  <VTextField label="Review Title" />
                </VCol>

                <VCol md="12">
                  <label for="">Select Rating*</label>
                </VCol>

                <VCol md="4" class="text-center">
                  <label for="">Pricing</label>
                  <VRating hover />
                </VCol>
                <VCol md="4" class="text-center">
                  <label for="">Location</label>
                  <VRating hover />
                </VCol>
                <VCol md="4" class="text-center">
                  <label for="">Builder</label>
                  <VRating hover />
                </VCol>

                <VCol cols="12">
                  <VTextField label="Name" />
                </VCol>

                <VCol cols="12">
                  <VTextField label="Email" type="email" />
                </VCol>

                <VCol cols="12" class="d-flex gap-4">
                  <VBtn type="submit"> Submit </VBtn>
                </VCol>
              </VRow>
            </VForm>
          </div>
        </VCol>
        <VCol md="4">
          <div class="request_info">
            <h2>Request More Information</h2>
            <p>Instant Price List & Sales Info Package</p>
            <VForm class="mt-5">
              <VRow>
                <VCol cols="12">
                  <VTextField label="First Name" />
                </VCol>

                <VCol cols="12">
                  <VTextField label="Last Name" />
                </VCol>

                <VCol cols="12">
                  <VTextField label="Email" type="email" />
                </VCol>

                <VCol cols="12">
                  <VTextField label="Phone" type="number" />
                </VCol>

                <VCol cols="12">
                  <VSelect
                    :items="items"
                    :rules="[requiredValidator]"
                    label="Are you a Realtor?"
                    name="select"
                  />
                </VCol>

                <VCol cols="12" class="text-center">
                  <VBtn type="submit"> Send </VBtn>
                </VCol>
              </VRow>
            </VForm>
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
                <svg
                  data-v-5542f78a=""
                  aria-labelledby="svg-inline--fa-title-BdjCU3hBHwzS"
                  data-prefix="far"
                  data-icon="heart"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"
                  class="text-tridelRed fav-heart h-6 w-6 svg-inline--fa fa-heart"
                >
                  <title
                    data-v-5542f78a=""
                    id="svg-inline--fa-title-BdjCU3hBHwzS"
                    class=""
                  >
                    heart icon
                  </title>
                  <path
                    data-v-5542f78a=""
                    fill="currentColor"
                    d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z"
                    class=""
                  ></path>
                </svg>
                <svg
                  data-v-5542f78a=""
                  aria-labelledby="svg-inline--fa-title-9EAZG4s4WHmu"
                  data-prefix="fas"
                  data-icon="heart"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"
                  class="text-tridelRed fav-heart-filled h-6 w-6 svg-inline--fa fa-heart"
                >
                  <title
                    data-v-5542f78a=""
                    id="svg-inline--fa-title-9EAZG4s4WHmu"
                    class=""
                  >
                    heart icon
                  </title>
                  <path
                    data-v-5542f78a=""
                    fill="currentColor"
                    d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"
                    class=""
                  ></path>
                </svg>
              </button>
              <div class="">
                <span class="loction_tag"
                  ><v-icon size="16" class=""> mdi-location </v-icon>
                  Canada</span
                >
                <span class="dev_tag"
                  ><v-icon size="16" class=""> mdi-office-building </v-icon
                  >Aspen Ridge</span
                >
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
                <RouterLink :to="{ name: 'condo-detail' }"
                  >The Essery Condos</RouterLink
                >
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
                <svg
                  data-v-5542f78a=""
                  aria-labelledby="svg-inline--fa-title-BdjCU3hBHwzS"
                  data-prefix="far"
                  data-icon="heart"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"
                  class="text-tridelRed fav-heart h-6 w-6 svg-inline--fa fa-heart"
                >
                  <title
                    data-v-5542f78a=""
                    id="svg-inline--fa-title-BdjCU3hBHwzS"
                    class=""
                  >
                    heart icon
                  </title>
                  <path
                    data-v-5542f78a=""
                    fill="currentColor"
                    d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z"
                    class=""
                  ></path>
                </svg>
                <svg
                  data-v-5542f78a=""
                  aria-labelledby="svg-inline--fa-title-9EAZG4s4WHmu"
                  data-prefix="fas"
                  data-icon="heart"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"
                  class="text-tridelRed fav-heart-filled h-6 w-6 svg-inline--fa fa-heart"
                >
                  <title
                    data-v-5542f78a=""
                    id="svg-inline--fa-title-9EAZG4s4WHmu"
                    class=""
                  >
                    heart icon
                  </title>
                  <path
                    data-v-5542f78a=""
                    fill="currentColor"
                    d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"
                    class=""
                  ></path>
                </svg>
              </button>
              <div class="">
                <span class="loction_tag"
                  ><v-icon size="16" class=""> mdi-location </v-icon>
                  Canada</span
                >
                <span class="dev_tag"
                  ><v-icon size="16" class=""> mdi-office-building </v-icon>
                  Graywood Developments</span
                >
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
                <RouterLink :to="{ name: 'condo-detail' }"
                  >Centricity Condos</RouterLink
                >
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
                <svg
                  data-v-5542f78a=""
                  aria-labelledby="svg-inline--fa-title-BdjCU3hBHwzS"
                  data-prefix="far"
                  data-icon="heart"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"
                  class="text-tridelRed fav-heart h-6 w-6 svg-inline--fa fa-heart"
                >
                  <title
                    data-v-5542f78a=""
                    id="svg-inline--fa-title-BdjCU3hBHwzS"
                    class=""
                  >
                    heart icon
                  </title>
                  <path
                    data-v-5542f78a=""
                    fill="currentColor"
                    d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z"
                    class=""
                  ></path>
                </svg>
                <svg
                  data-v-5542f78a=""
                  aria-labelledby="svg-inline--fa-title-9EAZG4s4WHmu"
                  data-prefix="fas"
                  data-icon="heart"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"
                  class="text-tridelRed fav-heart-filled h-6 w-6 svg-inline--fa fa-heart"
                >
                  <title
                    data-v-5542f78a=""
                    id="svg-inline--fa-title-9EAZG4s4WHmu"
                    class=""
                  >
                    heart icon
                  </title>
                  <path
                    data-v-5542f78a=""
                    fill="currentColor"
                    d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z"
                    class=""
                  ></path>
                </svg>
              </button>
              <div class="">
                <span class="loction_tag"
                  ><v-icon size="16" class=""> mdi-location </v-icon
                  >Etobicoke</span
                >
                <span class="dev_tag"
                  ><v-icon size="16" class=""> mdi-office-building </v-icon>
                  Diamante</span
                >
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
                <RouterLink :to="{ name: 'condo-detail' }"
                  >Mirabella Condos</RouterLink
                >
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
