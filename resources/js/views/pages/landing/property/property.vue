<template>
  <!--====================================================================-->
  <HeaderComp/>
  <!--====================================================================-->
  <div class="property-listing">
    <breadcrumpHeader/>
    <section class="property_banner_filters">
      <div class="container">
        <div class="banner_filter">
          <div class="filter">
            <div class="filter_header">
              <VTabs v-model="FilterTab">
                <VTab>Sell</VTab>
                <VTab>Rent</VTab>
              </VTabs>
            </div>
            <VWindow v-model="FilterTab">
              <VWindowItem>
                <div class="filter_body">
                  <div class="overlay"></div>
                  <div class="filter_grid">
                    <div class="filter_s">
                      <VSelect
                        v-model="market"
                        label="Market"
                        :items="['All Market', 'UAE', 'Canada', 'USA', 'KSA']"
                      />
                    </div>
                    <div class="filter_s">
                      <VSelect
                        v-model="land"
                        label="Land"
                        :items="['Residential', 'Commercial', 'Industrial']"
                      />
                    </div>
                    <div class="filter_s">
                      <VSelect
                        v-model="type"
                        label="Type"
                        :items="['Plaza', 'Office', 'Hotel', 'Apartment', 'Condo']"
                      />
                    </div>
                    <div class="filter_b">
                      <v-btn class="find_filter" @click="fetchUsers">Find</v-btn>
                    </div>
                  </div>
                </div>
              </VWindowItem>
              <VWindowItem>
                <div class="filter_body">
                  <div class="overlay"></div>
                  <div class="filter_grid">
                    <div class="filter_s">
                      <VSelect
                        v-model="market"
                        label="Market"
                        :items="['All Market', 'UAE', 'Canada', 'USA', 'KSA']"
                      />
                    </div>
                    <div class="filter_s">
                      <VSelect
                        v-model="land"
                        label="Land"
                        :items="['Residential', 'Commercial', 'Industrial']"
                      />
                    </div>
                    <div class="filter_s">
                      <VSelect
                        v-model="type"
                        label="Type"
                        :items="['Plaza', 'Office', 'Hotel', 'Apartment', 'Condo']"
                      />
                    </div>
                    <div class="filter_b">
                      <v-btn @click="fetchUsers">Find</v-btn>
                    </div>
                  </div>
                </div>
              </VWindowItem>
            </VWindow>
          </div>
        </div>
      </div>
    </section>
    <section class="property_tabs">
      <div class="container">
        <VTabs v-model="propTabs" class="v-tabs-pill">
          <VTab>All</VTab>
          <VTab>Hot</VTab>
          <VTab>Featured</VTab>
          <VTab>New Listing</VTab>
          <VTab>Coming Soon</VTab>
          <VTab>Sold Out</VTab>
        </VTabs>
        <VWindow v-model="propTabs">
          <VWindowItem>
            <div class="property_list real_Section">
              <div class="container">
                <VRow>
                  <VCol lg="4">
                    <div class="property-card">
                        <div class="prop-img">
                          <!--======================================-->
                          <!--======================================-->
                          <div class="property_tags">
                            <div class="hot_tag"><v-icon size="24" class=""> mdi-fire</v-icon></div>
                          </div>
                          <div class="wishlist"><v-icon size="24"> mdi-heart-outline  </v-icon></div>
                          <span class="loction_tag"><v-icon size="16" class=""> mdi-location  </v-icon> Canada</span>
                          <!--======================================-->
                          <!--======================================-->
                          <swiper :navigation="true" :pagination="true" :autoplay="{ delay: 3500, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
                            <swiper-slide>
                              <div class="prop-img">
                                <img src="@images/img/22.png" alt="">
                              </div>
                            </swiper-slide>
                            <swiper-slide>
                            <img src="@images/img/33.png" alt="">
                            </swiper-slide>
                            <swiper-slide>
                            <img src="@images/img/55.png" alt="">
                            </swiper-slide>
                          </swiper>
                        </div>
                        <div class="property_body">
                          <h2><RouterLink :to="{ name:'property-deal'}">18474 Glenmore St Redford, MI 48240</RouterLink></h2>
                          <div class="property_price">
                            <h3><span>$</span> 1,853,219</h3>
                            <p>315 investors</p>
                          </div>
                          <ul class="property_det">
                            <li>
                              <p>Available Unit</p><span>188</span>
                            </li>
                            <li>
                              <p>Rating </p><span>4.5</span>
                            </li>
                            <li>
                              <p>Capital ROI :</p><span>+11.84 %</span>
                            </li>
                          </ul>
                        </div>
                    </div>
                  </VCol>
                  <VCol lg="4">
                    <div class="property-card">
                        <div class="prop-img">
                          <!--======================================-->
                          <!--======================================-->
                          <div class="property_tags">
                            <div class="blue_tag tag featured_tag">Featured</div>
                          </div>
                          <div class="wishlist"><v-icon size="24"> mdi-heart-outline  </v-icon></div>
                          <span class="loction_tag"><v-icon size="16" class=""> mdi-location  </v-icon> Canada</span>
                          <!--======================================-->
                          <!--======================================-->
                          <swiper :navigation="true" :pagination="true" :autoplay="{ delay: 3500, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
                            <swiper-slide>
                              <div class="prop-img">
                                <img src="@images/img/22.png" alt="">
                              </div>
                            </swiper-slide>
                            <swiper-slide>
                            <img src="@images/img/33.png" alt="">
                            </swiper-slide>
                            <swiper-slide>
                            <img src="@images/img/55.png" alt="">
                            </swiper-slide>
                          </swiper>
                        </div>
                        <div class="property_body">
                          <h2><RouterLink :to="{ name:'property-deal'}">18474 Glenmore St Redford, MI 48240</RouterLink></h2>
                          <div class="property_price">
                            <h3><span>$</span> 1,853,219</h3>
                            <p>315 investors</p>
                          </div>
                          <ul class="property_det">
                            <li>
                              <p>Available Unit</p><span>188</span>
                            </li>
                            <li>
                              <p>Rating </p><span>4.5</span>
                            </li>
                            <li>
                              <p>Capital ROI :</p><span>+11.84 %</span>
                            </li>
                          </ul>
                        </div>
                    </div>
                  </VCol>
                  <VCol lg="4">
                    <div class="property-card">
                        <div class="prop-img">
                          <!--======================================-->
                          <!--======================================-->
                          <div class="property_tags">
                            <div class="blue_tag tag featured_tag">Featured</div>
                          </div>
                          <div class="wishlist"><v-icon size="24"> mdi-heart-outline  </v-icon></div>
                          <span class="loction_tag"><v-icon size="16" class=""> mdi-location  </v-icon> Canada</span>
                          <!--======================================-->
                          <!--======================================-->
                          <swiper :navigation="true" :pagination="true" :autoplay="{ delay: 3500, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
                            <swiper-slide>
                              <div class="prop-img">
                                <img src="@images/img/22.png" alt="">
                              </div>
                            </swiper-slide>
                            <swiper-slide>
                            <img src="@images/img/33.png" alt="">
                            </swiper-slide>
                            <swiper-slide>
                            <img src="@images/img/55.png" alt="">
                            </swiper-slide>
                          </swiper>
                        </div>
                        <div class="property_body">
                          <h2><RouterLink :to="{ name:'property-deal'}">18474 Glenmore St Redford, MI 48240</RouterLink></h2>
                          <div class="property_price">
                            <h3><span>$</span> 1,853,219</h3>
                            <p>315 investors</p>
                          </div>
                          <ul class="property_det">
                            <li>
                              <p>Available Unit</p><span>188</span>
                            </li>
                            <li>
                              <p>Rating </p><span>4.5</span>
                            </li>
                            <li>
                              <p>Capital ROI :</p><span>+11.84 %</span>
                            </li>
                          </ul>
                        </div>
                    </div>
                  </VCol>
                  <VCol lg="4">
                    <div class="property-card">
                        <div class="prop-img">
                          <!--======================================-->
                          <!--======================================-->
                          <div class="property_tags">
                            <div class="green_tag tag featured_tag">New Listing</div>
                          </div>
                          <div class="wishlist"><v-icon size="24"> mdi-heart-outline  </v-icon></div>
                          <span class="loction_tag"><v-icon size="16" class=""> mdi-location  </v-icon> Canada</span>
                          <!--======================================-->
                          <!--======================================-->
                          <swiper :navigation="true" :pagination="true" :autoplay="{ delay: 3500, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
                            <swiper-slide>
                              <div class="prop-img">
                                <img src="@images/img/22.png" alt="">
                              </div>
                            </swiper-slide>
                            <swiper-slide>
                            <img src="@images/img/33.png" alt="">
                            </swiper-slide>
                            <swiper-slide>
                            <img src="@images/img/55.png" alt="">
                            </swiper-slide>
                          </swiper>
                        </div>
                        <div class="property_body">
                          <h2><RouterLink :to="{ name:'property-deal'}">18474 Glenmore St Redford, MI 48240</RouterLink></h2>
                          <div class="property_price">
                            <h3><span>$</span> 1,853,219</h3>
                            <p>315 investors</p>
                          </div>
                          <ul class="property_det">
                            <li>
                              <p>Available Unit</p><span>188</span>
                            </li>
                            <li>
                              <p>Rating </p><span>4.5</span>
                            </li>
                            <li>
                              <p>Capital ROI :</p><span>+11.84 %</span>
                            </li>
                          </ul>
                        </div>
                    </div>
                  </VCol>
                  <VCol lg="4">
                    <div class="property-card">
                        <div class="prop-img">
                          <!--======================================-->
                          <!--======================================-->
                          <div class="property_tags">
                            <div class="green_tag tag featured_tag">New Listing</div>
                          </div>
                          <div class="wishlist"><v-icon size="24"> mdi-heart-outline  </v-icon></div>
                          <span class="loction_tag"><v-icon size="16" class=""> mdi-location  </v-icon> Canada</span>
                          <!--======================================-->
                          <!--======================================-->
                          <swiper :navigation="true" :pagination="true" :autoplay="{ delay: 3500, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
                            <swiper-slide>
                              <div class="prop-img">
                                <img src="@images/img/22.png" alt="">
                              </div>
                            </swiper-slide>
                            <swiper-slide>
                            <img src="@images/img/33.png" alt="">
                            </swiper-slide>
                            <swiper-slide>
                            <img src="@images/img/55.png" alt="">
                            </swiper-slide>
                          </swiper>
                        </div>
                        <div class="property_body">
                          <h2><RouterLink :to="{ name:'property-deal'}">18474 Glenmore St Redford, MI 48240</RouterLink></h2>
                          <div class="property_price">
                            <h3><span>$</span> 1,853,219</h3>
                            <p>315 investors</p>
                          </div>
                          <ul class="property_det">
                            <li>
                              <p>Available Unit</p><span>188</span>
                            </li>
                            <li>
                              <p>Rating </p><span>4.5</span>
                            </li>
                            <li>
                              <p>Capital ROI :</p><span>+11.84 %</span>
                            </li>
                          </ul>
                        </div>
                    </div>
                  </VCol>
                  <VCol lg="4">
                    <div class="property-card">
                        <div class="prop-img">
                          <!--======================================-->
                          <!--======================================-->
                          <div class="property_tags">
                            <div class="danger_tag tag sold_tag">Coming Sooon</div>
                          </div>
                          <div class="wishlist"><v-icon size="24"> mdi-heart-outline  </v-icon></div>
                          <span class="loction_tag"><v-icon size="16" class=""> mdi-location  </v-icon> Canada</span>
                          <!--======================================-->
                          <!--======================================-->
                          <swiper :navigation="true" :pagination="true" :autoplay="{ delay: 3500, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
                            <swiper-slide>
                              <div class="prop-img">
                                <img src="@images/img/22.png" alt="">
                              </div>
                            </swiper-slide>
                            <swiper-slide>
                            <img src="@images/img/33.png" alt="">
                            </swiper-slide>
                            <swiper-slide>
                            <img src="@images/img/55.png" alt="">
                            </swiper-slide>
                          </swiper>
                        </div>
                        <div class="property_body">
                          <h2><RouterLink :to="{ name:'property-deal'}">18474 Glenmore St Redford, MI 48240</RouterLink></h2>
                          <div class="property_price">
                            <h3><span>$</span> 1,853,219</h3>
                            <p>315 investors</p>
                          </div>
                          <ul class="property_det">
                            <li>
                              <p>Available Unit</p><span>188</span>
                            </li>
                            <li>
                              <p>Rating </p><span>4.5</span>
                            </li>
                            <li>
                              <p>Capital ROI :</p><span>+11.84 %</span>
                            </li>
                          </ul>
                        </div>
                    </div>
                  </VCol>
                </VRow>
              </div>
            </div>
          </VWindowItem>
          <VWindowItem>
            <div class="property_list real_Section">
              <div class="container">
              <VRow>
                <VCol lg="4">
                  <div class="property-card">
                      <div class="prop-img">
                        <!--======================================-->
                        <!--======================================-->
                        <div class="property_tags">
                          <div class="hot_tag"><v-icon size="24" class=""> mdi-fire</v-icon></div>
                        </div>
                        <div class="wishlist"><v-icon size="24"> mdi-heart-outline  </v-icon></div>
                        <span class="loction_tag"><v-icon size="16" class=""> mdi-location  </v-icon> Canada</span>
                        <!--======================================-->
                        <!--======================================-->
                        <swiper :navigation="true" :pagination="true" :autoplay="{ delay: 3500, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
                          <swiper-slide>
                            <div class="prop-img">
                              <img src="@images/img/22.png" alt="">
                            </div>
                          </swiper-slide>
                          <swiper-slide>
                          <img src="@images/img/33.png" alt="">
                          </swiper-slide>
                          <swiper-slide>
                          <img src="@images/img/55.png" alt="">
                          </swiper-slide>
                        </swiper>
                      </div>
                      <div class="property_body">
                        <h2><RouterLink :to="{ name:'property-deal'}">18474 Glenmore St Redford, MI 48240</RouterLink></h2>
                        <div class="property_price">
                          <h3><span>$</span> 1,853,219</h3>
                          <p>315 investors</p>
                        </div>
                        <ul class="property_det">
                          <li>
                            <p>Available Unit</p><span>188</span>
                          </li>
                          <li>
                            <p>Rating </p><span>4.5</span>
                          </li>
                          <li>
                            <p>Capital ROI :</p><span>+11.84 %</span>
                          </li>
                        </ul>
                      </div>
                  </div>
                </VCol>
              </VRow>
              </div>
            </div>
          </VWindowItem>
          <VWindowItem>
            <div class="property_list real_Section">
              <div class="container">
                <VRow>
                  <VCol lg="4">
                    <div class="property-card">
                        <div class="prop-img">
                          <!--======================================-->
                          <!--======================================-->
                          <div class="property_tags">
                            <div class="blue_tag tag featured_tag">Featured</div>
                          </div>
                          <div class="wishlist"><v-icon size="24"> mdi-heart-outline  </v-icon></div>
                          <span class="loction_tag"><v-icon size="16" class=""> mdi-location  </v-icon> Canada</span>
                          <!--======================================-->
                          <!--======================================-->
                          <swiper :navigation="true" :pagination="true" :autoplay="{ delay: 3500, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
                            <swiper-slide>
                              <div class="prop-img">
                                <img src="@images/img/22.png" alt="">
                              </div>
                            </swiper-slide>
                            <swiper-slide>
                            <img src="@images/img/33.png" alt="">
                            </swiper-slide>
                            <swiper-slide>
                            <img src="@images/img/55.png" alt="">
                            </swiper-slide>
                          </swiper>
                        </div>
                        <div class="property_body">
                          <h2><RouterLink :to="{ name:'property-deal'}">18474 Glenmore St Redford, MI 48240</RouterLink></h2>
                          <div class="property_price">
                            <h3><span>$</span> 1,853,219</h3>
                            <p>315 investors</p>
                          </div>
                          <ul class="property_det">
                            <li>
                              <p>Available Unit</p><span>188</span>
                            </li>
                            <li>
                              <p>Rating </p><span>4.5</span>
                            </li>
                            <li>
                              <p>Capital ROI :</p><span>+11.84 %</span>
                            </li>
                          </ul>
                        </div>
                    </div>
                  </VCol>
                  <VCol lg="4">
                    <div class="property-card">
                        <div class="prop-img">
                          <!--======================================-->
                          <!--======================================-->
                          <div class="property_tags">
                            <div class="blue_tag tag featured_tag">Featured</div>
                          </div>
                          <div class="wishlist"><v-icon size="24"> mdi-heart-outline  </v-icon></div>
                          <span class="loction_tag"><v-icon size="16" class=""> mdi-location  </v-icon> Canada</span>
                          <!--======================================-->
                          <!--======================================-->
                          <swiper :navigation="true" :pagination="true" :autoplay="{ delay: 3500, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
                            <swiper-slide>
                              <div class="prop-img">
                                <img src="@images/img/22.png" alt="">
                              </div>
                            </swiper-slide>
                            <swiper-slide>
                            <img src="@images/img/33.png" alt="">
                            </swiper-slide>
                            <swiper-slide>
                            <img src="@images/img/55.png" alt="">
                            </swiper-slide>
                          </swiper>
                        </div>
                        <div class="property_body">
                          <h2><RouterLink :to="{ name:'property-deal'}">18474 Glenmore St Redford, MI 48240</RouterLink></h2>
                          <div class="property_price">
                            <h3><span>$</span> 1,853,219</h3>
                            <p>315 investors</p>
                          </div>
                          <ul class="property_det">
                            <li>
                              <p>Available Unit</p><span>188</span>
                            </li>
                            <li>
                              <p>Rating </p><span>4.5</span>
                            </li>
                            <li>
                              <p>Capital ROI :</p><span>+11.84 %</span>
                            </li>
                          </ul>
                        </div>
                    </div>
                  </VCol>
                </VRow>
              </div>
            </div>
          </VWindowItem>
          <VWindowItem>
            <div class="property_list real_Section">
              <div class="container">
              <VRow>
                <VCol lg="4">
                  <div class="property-card">
                      <div class="prop-img">
                        <!--======================================-->
                        <!--======================================-->
                        <div class="property_tags">
                          <div class="green_tag tag featured_tag">New Listing</div>
                        </div>
                        <div class="wishlist"><v-icon size="24"> mdi-heart-outline  </v-icon></div>
                        <span class="loction_tag"><v-icon size="16" class=""> mdi-location  </v-icon> Canada</span>
                        <!--======================================-->
                        <!--======================================-->
                        <swiper :navigation="true" :pagination="true" :autoplay="{ delay: 3500, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
                          <swiper-slide>
                            <div class="prop-img">
                              <img src="@images/img/22.png" alt="">
                            </div>
                          </swiper-slide>
                          <swiper-slide>
                          <img src="@images/img/33.png" alt="">
                          </swiper-slide>
                          <swiper-slide>
                          <img src="@images/img/55.png" alt="">
                          </swiper-slide>
                        </swiper>
                      </div>
                      <div class="property_body">
                        <h2><RouterLink :to="{ name:'property-deal'}">18474 Glenmore St Redford, MI 48240</RouterLink></h2>
                        <div class="property_price">
                          <h3><span>$</span> 1,853,219</h3>
                          <p>315 investors</p>
                        </div>
                        <ul class="property_det">
                          <li>
                            <p>Available Unit</p><span>188</span>
                          </li>
                          <li>
                            <p>Rating </p><span>4.5</span>
                          </li>
                          <li>
                            <p>Capital ROI :</p><span>+11.84 %</span>
                          </li>
                        </ul>
                      </div>
                  </div>
                </VCol>
                <VCol lg="4">
                  <div class="property-card">
                      <div class="prop-img">
                        <!--======================================-->
                        <!--======================================-->
                        <div class="property_tags">
                          <div class="green_tag tag featured_tag">New Listing</div>
                        </div>
                        <div class="wishlist"><v-icon size="24"> mdi-heart-outline  </v-icon></div>
                        <span class="loction_tag"><v-icon size="16" class=""> mdi-location  </v-icon> Canada</span>
                        <!--======================================-->
                        <!--======================================-->
                        <swiper :navigation="true" :pagination="true" :autoplay="{ delay: 3500, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
                          <swiper-slide>
                            <div class="prop-img">
                              <img src="@images/img/22.png" alt="">
                            </div>
                          </swiper-slide>
                          <swiper-slide>
                          <img src="@images/img/33.png" alt="">
                          </swiper-slide>
                          <swiper-slide>
                          <img src="@images/img/55.png" alt="">
                          </swiper-slide>
                        </swiper>
                      </div>
                      <div class="property_body">
                        <h2><RouterLink :to="{ name:'property-deal'}">18474 Glenmore St Redford, MI 48240</RouterLink></h2>
                        <div class="property_price">
                          <h3><span>$</span> 1,853,219</h3>
                          <p>315 investors</p>
                        </div>
                        <ul class="property_det">
                          <li>
                            <p>Available Unit</p><span>188</span>
                          </li>
                          <li>
                            <p>Rating </p><span>4.5</span>
                          </li>
                          <li>
                            <p>Capital ROI :</p><span>+11.84 %</span>
                          </li>
                        </ul>
                      </div>
                  </div>
                </VCol>
              </VRow>
              </div>
            </div>
          </VWindowItem>
          <VWindowItem>
            <div class="property_list real_Section">
              <div class="container">
                <VRow>
                  <VCol lg="4">
                    <div class="property-card">
                        <div class="prop-img">
                          <!--======================================-->
                          <!--======================================-->
                          <div class="property_tags">
                            <div class="danger_tag tag sold_tag">Coming Sooon</div>
                          </div>
                          <div class="wishlist"><v-icon size="24"> mdi-heart-outline  </v-icon></div>
                          <span class="loction_tag"><v-icon size="16" class=""> mdi-location  </v-icon> Canada</span>
                          <!--======================================-->
                          <!--======================================-->
                          <swiper :navigation="true" :pagination="true" :autoplay="{ delay: 3500, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
                            <swiper-slide>
                              <div class="prop-img">
                                <img src="@images/img/22.png" alt="">
                              </div>
                            </swiper-slide>
                            <swiper-slide>
                            <img src="@images/img/33.png" alt="">
                            </swiper-slide>
                            <swiper-slide>
                            <img src="@images/img/55.png" alt="">
                            </swiper-slide>
                          </swiper>
                        </div>
                        <div class="property_body">
                          <h2><RouterLink :to="{ name:'property-deal'}">18474 Glenmore St Redford, MI 48240</RouterLink></h2>
                          <div class="property_price">
                            <h3><span>$</span> 1,853,219</h3>
                            <p>315 investors</p>
                          </div>
                          <ul class="property_det">
                            <li>
                              <p>Available Unit</p><span>188</span>
                            </li>
                            <li>
                              <p>Rating </p><span>4.5</span>
                            </li>
                            <li>
                              <p>Capital ROI :</p><span>+11.84 %</span>
                            </li>
                          </ul>
                        </div>
                    </div>
                  </VCol>
                </VRow>
              </div>
            </div>
          </VWindowItem>
          <VWindowItem>
            <div class="property_list real_Section">
              <div class="container">
                <VRow>
                  <VCol lg="4">
                    <div class="property-card">
                        <div class="prop-img">
                          <!--======================================-->
                          <!--======================================-->
                          <div class="property_tags">
                            <div class="danger_tag tag sold_tag">Sold Out</div>
                          </div>
                          <div class="wishlist"><v-icon size="24"> mdi-heart-outline  </v-icon></div>
                          <span class="loction_tag"><v-icon size="16" class=""> mdi-location  </v-icon> Canada</span>
                          <!--======================================-->
                          <!--======================================-->
                          <swiper :navigation="true" :pagination="true" :autoplay="{ delay: 3500, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
                            <swiper-slide>
                              <div class="prop-img">
                                <img src="@images/img/22.png" alt="">
                              </div>
                            </swiper-slide>
                            <swiper-slide>
                            <img src="@images/img/33.png" alt="">
                            </swiper-slide>
                            <swiper-slide>
                            <img src="@images/img/55.png" alt="">
                            </swiper-slide>
                          </swiper>
                        </div>
                        <div class="property_body">
                          <h2><RouterLink :to="{ name:'property-deal'}">18474 Glenmore St Redford, MI 48240</RouterLink></h2>
                          <div class="property_price">
                            <h3><span>$</span> 1,853,219</h3>
                            <p>315 investors</p>
                          </div>
                          <ul class="property_det">
                            <li>
                              <p>Available Unit</p><span>188</span>
                            </li>
                            <li>
                              <p>Rating </p><span>4.5</span>
                            </li>
                            <li>
                              <p>Capital ROI :</p><span>+11.84 %</span>
                            </li>
                          </ul>
                        </div>
                    </div>
                  </VCol>
                </VRow>
              </div>
            </div>
          </VWindowItem>
        </VWindow>
      </div>
    </section>
    
  </div>
  <!--====================================================================-->
  <section class="real_section_9 real_Section add_property_section">
    <div class="overlay"></div>
    <div class="container">
      <VRow>
        <VCol sm="12">
          <div class="add_property">
            <h2>Add your property for sale</h2>
            <v-btn>Add Property</v-btn>
          </div>
        </VCol>
      </VRow>
    </div>
  </section>
  <!--====================================================================-->
  <FooterComp/>
  <!--====================================================================-->
</template>

<script setup>
import HeaderComp from '../components/header.vue';
import FooterComp from '../components/footer.vue';
import breadcrumpHeader from '../components/breadcrumpHeader.vue';

/////////////////////////////////////////////////////////////////////
// import allProperties from './components/AllProperties.vue';
// import hotProperties from './components/hotProperties.vue';
// import featuredProperties from './components/featuredProperties.vue';
// import newlistingProperties from './components/newlistingProperties.vue';
// import comingSoonProperties from './components/comingSoonProperties.vue';
// import soldProperties from './components/soldProperties.vue';
/////////////////////////////////////////////////////////////////////
import { useHomeStore } from "../useHomeStore";
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import { Pagination , Navigation , Autoplay} from "swiper";

const modules = [ Pagination, Navigation, Autoplay];
const FilterTab = ref(0);
const propTabs = ref(0);
//////////////////////////////
const userHomeStore = useHomeStore();
const searchQuery = ref("");
const selectedRole = ref();
const selectedPlan = ref();
const selectedStatus = ref();
const rowPerPage = ref(10);
const currentPage = ref(1);
const totalPage = ref(1);
const totalUsers = ref(0);
const users = ref([]);
const market = ref("");
const land = ref("");
const type = ref("");

//////////////////////////////
const fetchUsers = () => {
  userHomeStore
    .fetchProperty({
      q: searchQuery.value,
      status: selectedStatus.value,
      plan: selectedPlan.value,
      role: selectedRole.value,
      perPage: rowPerPage.value,
      currentPage: currentPage.value,
      front: 1,
      market: market.value,
      land: land.value,
      type: type.value,
    })
    .then((response) => {
      users.value = response.data.data.properties.data;
      totalPage.value = response.data.totalPage;
      totalUsers.value = response.data.totalUsers;
    })
    .catch((error) => {
      console.error(error);
    });
};

const resolveStatusText = (val) => {
  if (val === 1) return "Active";
  if (val === 0) return "Inactive";

  return "Active";
};

watchEffect(fetchUsers);

// 👉 watching current page
watchEffect(() => {
  if (currentPage.value > totalPage.value) currentPage.value = totalPage.value;
});

// 👉 Computing pagination data
const paginationData = computed(() => {
  const firstIndex = users.value.length
    ? (currentPage.value - 1) * rowPerPage.value + 1
    : 0;
  const lastIndex =
    users.value.length + (currentPage.value - 1) * rowPerPage.value;

  return `Showing ${firstIndex} to ${lastIndex} of ${totalUsers.value} entries`;
});
//////////////////////////////////
</script>
