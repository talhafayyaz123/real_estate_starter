<template>
  <!--====================================================================-->
  <HeaderComp />
  <!--====================================================================-->
  <div class="condos-listing">
    <!--====================================================================-->
    <!--====================================================================-->
    <div class="breadcrup_header">
      <div class="overlay"></div>
      <div class="container">
        <div class="text-center">
          <h1>Condominium</h1>
        </div>
      </div>
    </div>
    <!--====================================================================-->
    <!--====================================================================-->
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
                        v-model="location"
                        label="Location"
                        :items="['All Market', 'UAE', 'Canada', 'USA', 'KSA']"
                      />
                    </div>
                    <div class="filter_s">
                      <VSelect
                        v-model="category"
                        label="Category"
                        :items="[
                          'New Listing',
                          'Hot',
                          'Featured',
                          'Coming Soon',
                          'Sold Out',
                        ]"
                      />
                    </div>

                    <div class="filter_b">
                      <v-btn class="find_filter" @click="fetchCondos"
                        >Find</v-btn
                      >
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
                        v-model="location"
                        label="Location"
                        :items="['All Market', 'UAE', 'Canada', 'USA', 'KSA']"
                      />
                    </div>
                    <div class="filter_s">
                      <VSelect
                        v-model="category"
                        label="Category"
                        :items="[
                          'New Listing',
                          'Hot',
                          'Featured',
                          'Coming Soon',
                          'Sold Out',
                        ]"
                      />
                    </div>
                    <div class="filter_b">
                      <v-btn @click="fetchCondos">Find</v-btn>
                    </div>
                  </div>
                </div>
              </VWindowItem>
            </VWindow>
          </div>
        </div>
      </div>
    </section>
    <!--====================================================================-->
    <!--====================================================================-->
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
          <!--====================================================================-->
          <!--====================================================================-->
          <!--====================================================================-->
          <VWindowItem>
            <div class="condos_listing property_list real_Section">
              <div class="container">
                <div v-if="condos.length > 0">
                  <VRow>
                    <VCol lg="4" v-for="(condo, index) in condos">
                      <div class="property-card">
                        <div class="prop-img">
                          <!--======================================-->
                          <!--======================================-->
                          <div class="property_tags">
                            <div class="hot_tag" v-if="condo.category == 'Hot'">
                              <v-icon size="24"> mdi-fire</v-icon>
                            </div>

                            <div :class="`${getCategory(condo.category)}`">
                              {{ condo.category }}
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
                              ><v-icon size="16" class="">
                                mdi-location
                              </v-icon>
                              {{ condo.location }}</span
                            >
                            <span class="dev_tag"
                              ><v-icon size="16" class="">
                                mdi-office-building </v-icon
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
                            <RouterLink :to="{ name: 'condo-detail' }">
                              {{ condo.title }}
                            </RouterLink>
                          </h2>
                          <div class="property_price">
                            <h3><span>$</span> {{ condo.price }}</h3>
                          </div>
                          <div class="property_short_desc">
                            <p>
                              {{ condo.description }}
                            </p>
                          </div>
                        </div>
                      </div>
                    </VCol>
                  </VRow>
                </div>
                <VCol v-else>Not Record Found</VCol>
              </div>
            </div>
          </VWindowItem>
          <!--====================================================================-->
          <!--====================================================================-->
          <!--====================================================================-->
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
                          <div class="hot_tag">
                            <v-icon size="24" class=""> mdi-fire</v-icon>
                          </div>
                        </div>
                        <div class="wishlist">
                          <v-icon size="24"> mdi-heart-outline </v-icon>
                        </div>
                        <span class="loction_tag"
                          ><v-icon size="16" class=""> mdi-location </v-icon>
                          Canada</span
                        >
                        <!--======================================-->
                        <!--======================================-->
                        <swiper
                          :navigation="true"
                          :pagination="true"
                          :autoplay="{
                            delay: 3500,
                            disableOnInteraction: false,
                          }"
                          :modules="modules"
                          class="property_img_slider"
                        >
                          <swiper-slide>
                            <div class="prop-img">
                              <img
                                src="@images/img/condos/condo12.jpg"
                                alt=""
                              />
                            </div>
                          </swiper-slide>
                          <swiper-slide>
                            <img src="@images/img/condos/condo12.jpg" alt="" />
                          </swiper-slide>
                          <swiper-slide>
                            <img src="@images/img/condos/condo13.jpg" alt="" />
                          </swiper-slide>
                        </swiper>
                      </div>
                      <div class="property_body">
                        <h2>
                          <RouterLink :to="{ name: 'condo-detail' }"
                            >18474 Glenmore St Redford, MI 48240</RouterLink
                          >
                        </h2>
                        <div class="property_price">
                          <h3><span>$</span> 1,853,219</h3>
                          <p>315 investors</p>
                        </div>
                        <ul class="property_det">
                          <li>
                            <p>Available Unit</p>
                            <span>188</span>
                          </li>
                          <li>
                            <p>Rating</p>
                            <span>4.5</span>
                          </li>
                          <li>
                            <p>Capital ROI :</p>
                            <span>+11.84 %</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </VCol>
                </VRow>
              </div>
            </div>
          </VWindowItem>
          <!--====================================================================-->
          <!--====================================================================-->
          <!--====================================================================-->
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
                        <div class="wishlist">
                          <v-icon size="24"> mdi-heart-outline </v-icon>
                        </div>
                        <span class="loction_tag"
                          ><v-icon size="16" class=""> mdi-location </v-icon>
                          Canada</span
                        >
                        <!--======================================-->
                        <!--======================================-->
                        <swiper
                          :navigation="true"
                          :pagination="true"
                          :autoplay="{
                            delay: 3500,
                            disableOnInteraction: false,
                          }"
                          :modules="modules"
                          class="property_img_slider"
                        >
                          <swiper-slide>
                            <div class="prop-img">
                              <img
                                src="@images/img/condos/condo14.jpg"
                                alt=""
                              />
                            </div>
                          </swiper-slide>
                          <swiper-slide>
                            <img src="@images/img/condos/condo13.jpg" alt="" />
                          </swiper-slide>
                          <swiper-slide>
                            <img src="@images/img/condos/condo15.jpg" alt="" />
                          </swiper-slide>
                        </swiper>
                      </div>
                      <div class="property_body">
                        <h2>
                          <RouterLink :to="{ name: 'condo-detail' }"
                            >18474 Glenmore St Redford, MI 48240</RouterLink
                          >
                        </h2>
                        <div class="property_price">
                          <h3><span>$</span> 1,853,219</h3>
                          <p>315 investors</p>
                        </div>
                        <ul class="property_det">
                          <li>
                            <p>Available Unit</p>
                            <span>188</span>
                          </li>
                          <li>
                            <p>Rating</p>
                            <span>4.5</span>
                          </li>
                          <li>
                            <p>Capital ROI :</p>
                            <span>+11.84 %</span>
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
                        <div class="wishlist">
                          <v-icon size="24"> mdi-heart-outline </v-icon>
                        </div>
                        <span class="loction_tag"
                          ><v-icon size="16" class=""> mdi-location </v-icon>
                          Canada</span
                        >
                        <!--======================================-->
                        <!--======================================-->
                        <swiper
                          :navigation="true"
                          :pagination="true"
                          :autoplay="{
                            delay: 3500,
                            disableOnInteraction: false,
                          }"
                          :modules="modules"
                          class="property_img_slider"
                        >
                          <swiper-slide>
                            <div class="prop-img">
                              <img
                                src="@images/img/condos/condo15.jpg"
                                alt=""
                              />
                            </div>
                          </swiper-slide>
                          <swiper-slide>
                            <img src="@images/img/condos/condo14.jpg" alt="" />
                          </swiper-slide>
                          <swiper-slide>
                            <img src="@images/img/condos/condo7.jpg" alt="" />
                          </swiper-slide>
                        </swiper>
                      </div>
                      <div class="property_body">
                        <h2>
                          <RouterLink :to="{ name: 'condo-detail' }"
                            >18474 Glenmore St Redford, MI 48240</RouterLink
                          >
                        </h2>
                        <div class="property_price">
                          <h3><span>$</span> 1,853,219</h3>
                          <p>315 investors</p>
                        </div>
                        <ul class="property_det">
                          <li>
                            <p>Available Unit</p>
                            <span>188</span>
                          </li>
                          <li>
                            <p>Rating</p>
                            <span>4.5</span>
                          </li>
                          <li>
                            <p>Capital ROI :</p>
                            <span>+11.84 %</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </VCol>
                </VRow>
              </div>
            </div>
          </VWindowItem>
          <!--====================================================================-->
          <!--====================================================================-->
          <!--====================================================================-->
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
                          <div class="green_tag tag featured_tag">
                            New Listing
                          </div>
                        </div>
                        <div class="wishlist">
                          <v-icon size="24"> mdi-heart-outline </v-icon>
                        </div>
                        <span class="loction_tag"
                          ><v-icon size="16" class=""> mdi-location </v-icon>
                          Canada</span
                        >
                        <!--======================================-->
                        <!--======================================-->
                        <swiper
                          :navigation="true"
                          :pagination="true"
                          :autoplay="{
                            delay: 3500,
                            disableOnInteraction: false,
                          }"
                          :modules="modules"
                          class="property_img_slider"
                        >
                          <swiper-slide>
                            <div class="prop-img">
                              <img
                                src="@images/img/condos/condo16.jpg"
                                alt=""
                              />
                            </div>
                          </swiper-slide>
                          <swiper-slide>
                            <img src="@images/img/condos/condo9.jpg" alt="" />
                          </swiper-slide>
                          <swiper-slide>
                            <img src="@images/img/condos/condo16.jpg" alt="" />
                          </swiper-slide>
                        </swiper>
                      </div>
                      <div class="property_body">
                        <h2>
                          <RouterLink :to="{ name: 'condo-detail' }"
                            >18474 Glenmore St Redford, MI 48240</RouterLink
                          >
                        </h2>
                        <div class="property_price">
                          <h3><span>$</span> 1,853,219</h3>
                          <p>315 investors</p>
                        </div>
                        <ul class="property_det">
                          <li>
                            <p>Available Unit</p>
                            <span>188</span>
                          </li>
                          <li>
                            <p>Rating</p>
                            <span>4.5</span>
                          </li>
                          <li>
                            <p>Capital ROI :</p>
                            <span>+11.84 %</span>
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
                          <div class="green_tag tag featured_tag">
                            New Listing
                          </div>
                        </div>
                        <div class="wishlist">
                          <v-icon size="24"> mdi-heart-outline </v-icon>
                        </div>
                        <span class="loction_tag"
                          ><v-icon size="16" class=""> mdi-location </v-icon>
                          Canada</span
                        >
                        <!--======================================-->
                        <!--======================================-->
                        <swiper
                          :navigation="true"
                          :pagination="true"
                          :autoplay="{
                            delay: 3500,
                            disableOnInteraction: false,
                          }"
                          :modules="modules"
                          class="property_img_slider"
                        >
                          <swiper-slide>
                            <div class="prop-img">
                              <img
                                src="@images/img/condos/condo17.jpg"
                                alt=""
                              />
                            </div>
                          </swiper-slide>
                          <swiper-slide>
                            <img src="@images/img/condos/condo16.jpg" alt="" />
                          </swiper-slide>
                          <swiper-slide>
                            <img src="@images/img/condos/condo19.jpg" alt="" />
                          </swiper-slide>
                        </swiper>
                      </div>
                      <div class="property_body">
                        <h2>
                          <RouterLink :to="{ name: 'condo-detail' }"
                            >18474 Glenmore St Redford, MI 48240</RouterLink
                          >
                        </h2>
                        <div class="property_price">
                          <h3><span>$</span> 1,853,219</h3>
                          <p>315 investors</p>
                        </div>
                        <ul class="property_det">
                          <li>
                            <p>Available Unit</p>
                            <span>188</span>
                          </li>
                          <li>
                            <p>Rating</p>
                            <span>4.5</span>
                          </li>
                          <li>
                            <p>Capital ROI :</p>
                            <span>+11.84 %</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </VCol>
                </VRow>
              </div>
            </div>
          </VWindowItem>
          <!--====================================================================-->
          <!--====================================================================-->
          <!--====================================================================-->
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
                          <div class="danger_tag tag sold_tag">
                            Coming Sooon
                          </div>
                        </div>
                        <div class="wishlist">
                          <v-icon size="24"> mdi-heart-outline </v-icon>
                        </div>
                        <span class="loction_tag"
                          ><v-icon size="16" class=""> mdi-location </v-icon>
                          Canada</span
                        >
                        <!--======================================-->
                        <!--======================================-->
                        <swiper
                          :navigation="true"
                          :pagination="true"
                          :autoplay="{
                            delay: 3500,
                            disableOnInteraction: false,
                          }"
                          :modules="modules"
                          class="property_img_slider"
                        >
                          <swiper-slide>
                            <div class="prop-img">
                              <img
                                src="@images/img/condos/condo19.jpg"
                                alt=""
                              />
                            </div>
                          </swiper-slide>
                          <swiper-slide>
                            <img src="@images/img/condos/condo20.jpg" alt="" />
                          </swiper-slide>
                          <swiper-slide>
                            <img src="@images/img/condos/condo7.jpg" alt="" />
                          </swiper-slide>
                        </swiper>
                      </div>
                      <div class="property_body">
                        <h2>
                          <RouterLink :to="{ name: 'condo-detail' }"
                            >18474 Glenmore St Redford, MI 48240</RouterLink
                          >
                        </h2>
                        <div class="property_price">
                          <h3><span>$</span> 1,853,219</h3>
                          <p>315 investors</p>
                        </div>
                        <ul class="property_det">
                          <li>
                            <p>Available Unit</p>
                            <span>188</span>
                          </li>
                          <li>
                            <p>Rating</p>
                            <span>4.5</span>
                          </li>
                          <li>
                            <p>Capital ROI :</p>
                            <span>+11.84 %</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </VCol>
                </VRow>
              </div>
            </div>
          </VWindowItem>
          <!--====================================================================-->
          <!--====================================================================-->
          <!--====================================================================-->
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
                        <div class="wishlist">
                          <v-icon size="24"> mdi-heart-outline </v-icon>
                        </div>
                        <span class="loction_tag"
                          ><v-icon size="16" class=""> mdi-location </v-icon>
                          Canada</span
                        >
                        <!--======================================-->
                        <!--======================================-->
                        <swiper
                          :navigation="true"
                          :pagination="true"
                          :autoplay="{
                            delay: 3500,
                            disableOnInteraction: false,
                          }"
                          :modules="modules"
                          class="property_img_slider"
                        >
                          <swiper-slide>
                            <div class="prop-img">
                              <img
                                src="@images/img/condos/condo11.jpg"
                                alt=""
                              />
                            </div>
                          </swiper-slide>
                          <swiper-slide>
                            <img src="@images/img/condos/condo9.jpg" alt="" />
                          </swiper-slide>
                          <swiper-slide>
                            <img src="@images/img/condos/condo7.jpg" alt="" />
                          </swiper-slide>
                        </swiper>
                      </div>
                      <div class="property_body">
                        <h2>
                          <RouterLink :to="{ name: 'condo-detail' }"
                            >18474 Glenmore St Redford, MI 48240</RouterLink
                          >
                        </h2>
                        <div class="property_price">
                          <h3><span>$</span> 1,853,219</h3>
                          <p>315 investors</p>
                        </div>
                        <ul class="property_det">
                          <li>
                            <p>Available Unit</p>
                            <span>188</span>
                          </li>
                          <li>
                            <p>Rating</p>
                            <span>4.5</span>
                          </li>
                          <li>
                            <p>Capital ROI :</p>
                            <span>+11.84 %</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </VCol>
                </VRow>
              </div>
            </div>
          </VWindowItem>
          <!--====================================================================-->
          <!--====================================================================-->
          <!--====================================================================-->
        </VWindow>
      </div>
    </section>
    <!--====================================================================-->
    <!--====================================================================-->
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
  <FooterComp />
  <!--====================================================================-->
</template>

<script setup>
/////////////////////////////////////////////////////////////////////
import HeaderComp from "../components/header.vue";
import FooterComp from "../components/footer.vue";
import breadcrumpHeader from "../components/breadcrumpHeader.vue";
import { computed } from "vue";
/////////////////////////////////////////////////////////////////////
import { Swiper, SwiperSlide } from "swiper/vue";
import { useHomeStore } from "../useHomeStore";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import { Pagination, Navigation, Autoplay } from "swiper";
const modules = [Pagination, Navigation, Autoplay];
/////////////////////////////////////////////////////////////////////
const FilterTab = ref(0);
const propTabs = ref(0);
const userHomeStore = useHomeStore();
const searchQuery = ref("");
const selectedRole = ref();
const selectedPlan = ref();
const selectedStatus = ref();
const rowPerPage = ref(10);
const currentPage = ref(1);
const totalPage = ref(1);
const totalCondos = ref(0);
const condos = ref([]);
const location = ref("");
const category = ref("");
const fetchCondos = () => {
  userHomeStore
    .fetchCondos({
      q: searchQuery.value,
      status: selectedStatus.value,
      plan: selectedPlan.value,
      role: selectedRole.value,
      perPage: rowPerPage.value,
      currentPage: currentPage.value,
      front: 1,
      category: category.value,
      location: location.value,
    })
    .then((response) => {
      condos.value = response.data.data.condos.data;
      totalPage.value = response.data.totalPage;
      totalCondos.value = response.data.total;
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

const getCategory = (category) => {
  if (category === "Featured") {
    return "blue_tag tag featured_tag";
  } else if (category === "New Listing") {
    return "green_tag tag featured_tag";
  } else if (category === "Coming Soon" || category === "Sold Out") {
    return "danger_tag tag sold_tag";
  }
};

watchEffect(fetchCondos);
watchEffect(() => {
  if (currentPage.value > totalPage.value) currentPage.value = totalPage.value;
});
</script>
