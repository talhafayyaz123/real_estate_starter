<template>
<div class="home-3">
  <!--====================================================================-->
  <HeaderComp/>
  <!--====================================================================-->
  <section class="real_section_1 banner_sec_1">
    <div class="overlay"></div>
    <video class="bg_video_banner" src="@images/video/Future-State.mp4" muted autoplay loop></video>
    <div class="banner_filter">
          <h1 data-aos="fade-in" data-aos-duration="1000">Welcome to Future State</h1>
          <p data-aos="fade-in" data-aos-duration="1000">Introducing the first decentralized platform for buying, selling, and managing real estate, powered by blockchain technology.</p>
          <p data-aos="fade-in" data-aos-duration="1000">Empowering real estate ownership through web3 technology</p>
          <div class="filter mt-10" data-aos="fade-in" data-aos-duration="1000">
            <div class="filter_header">
              <VTabs v-model="FilterTab">
                <VTab>Sell</VTab>
                <VTab>Rent</VTab>
              </VTabs>
            </div>
            <VWindow  v-model="FilterTab">
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
  </section>
  <!--====================================================================-->
  <section class="real_section_2 completed_project_sec">
    <div class="container">
      <div class="completed_project_card" data-aos="fade-in" data-aos-duration="1500">
        <VRow>
          <VCol lg="3">
            <h4>23K+</h4>
            <p>registered users</p>
          </VCol>
          <VCol lg="3">
            <h4>$ 43M+</h4>
            <p>in properties funded</p>
          </VCol>
          <VCol lg="3">
            <h4>152+</h4>
            <p>user nationalities</p>
          </VCol>
          <VCol lg="3">
            <h4>$ 2.5M+</h4>
            <p>rental income paid</p>
          </VCol>
        </VRow>
      </div>
    </div>
  </section>
  <!--====================================================================-->
  <section class="real_section_2 real_Section how_its_work">
    <div class="container">
      <div class="real_section_heading"  data-aos="fade-up" data-aos-duration="1500">
        <h2>How it works</h2>
      </div>
      <VRow>
        <VCol lg="3"  data-aos="fade-up" data-aos-duration="1500">
          <div class="work_item active">
            <div class="work_heading">
              <span>01</span>
              <h3>Browser</h3>
            </div>
            <p>Sign up in less than 3 minutes and browse our collection of properties</p>
          </div>
        </VCol>
        <VCol lg="3"  data-aos="fade-up" data-aos-duration="1500">
          <div class="work_item">
            <div class="work_heading">
              <span>02</span>
              <h3>Purchase</h3>
            </div>
            <p>Buy a piece of the ones you love, starting from only $ 500</p>
          </div>
        </VCol>
        <VCol lg="3" data-aos="fade-up" data-aos-duration="1500">
          <div class="work_item">
            <div class="work_heading">
              <span>03</span>
              <h3>Own</h3>
            </div>
            <p>Sit back and track your income and investments online</p>
          </div>
        </VCol>
        <VCol lg="3" data-aos="fade-up" data-aos-duration="1500">
          <div class="work_item">
            <div class="work_heading">
              <span>04</span>
              <h3>Exit</h3>
            </div>
            <p>Hold, exit or resell your stake in a way that suits your financial goals</p>
          </div>
        </VCol>
      </VRow>
    </div>
  </section>
  <!--====================================================================-->
  <section class="real_section_4 real_Section featured_property make_money_section">
    <div class="container">
      <div class="real_section_heading"  data-aos="fade-up" data-aos-duration="1500">
        <h2>How will you make money?</h2>
      </div>
      <VRow class="align-center">
        <VCol lg="4" class="left_income_card"  data-aos="fade-right" data-aos-duration="1500">
          <div class="income_card mb-10">
            <div class="income_icon">
              <v-icon size="34"> mdi-chart-areaspline  </v-icon>
            </div>
            <h2>Monthly rental income</h2>
            <p>Consistent passive income from monthly rental payments</p>
          </div>
        </VCol>
        <VCol lg="4" data-aos="fade-up" data-aos-duration="1500">
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
                <swiper :pagination="true" :autoplay="{ delay: 5000, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
                  <swiper-slide>
                    <div class="prop-img">
                      <img src="@images/img/slide 4.png" alt="">
                    </div>
                  </swiper-slide>
                  <swiper-slide>
                  <img src="@images/img/slide 5.png" alt="">
                  </swiper-slide>
                  <swiper-slide>
                  <img src="@images/img/slide 6.png" alt="">
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
        <VCol lg="4" class="right_income_card" data-aos="fade-left" data-aos-duration="1500">
          <div class="income_card mt-10">
            <div class="income_icon">
              <v-icon size="34"> mdi-chart-line-stacked  </v-icon>
            </div>
            <h2>Long term value appreciation</h2>
            <p>Watch your investment grow as the property value appreciates</p>
          </div>
        </VCol>
      </VRow>
    </div>
  </section>
  <!--====================================================================-->
  <section class="real_section_4 real_Section condos_property">
    <div class="overlay"></div>
    <div class="container">
      <div class="real_section_heading"  data-aos="fade-up" data-aos-duration="1500">
        <h2>Condominium</h2>
        <p>Join the condominium community and invest in your happiness</p>
      </div>
      
      <VRow  data-aos="fade-up" data-aos-duration="1500">
        <VCol sm="12">
          <div class="swiper_nav">
            <VBtn class="swiper-button-prev"><v-icon size="24" class=""> mdi-arrow-left   </v-icon></VBtn>
            <VBtn class="swiper-button-next"> <v-icon size="24" class=""> mdi-arrow-right   </v-icon> </VBtn>
          </div>
          <swiper class="condos_featured_slider" :slidesPerView="3" :loop="true" :modules="condos_modules" :navigation="{nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev'}" :pagination="{dynamicBullets: true, }">
            <swiper-slide>
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
                    <swiper :pagination="true" :autoplay="{ delay: 5000, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
                      <swiper-slide>
                        <div class="prop-img">
                          <img src="@images/img/slide 4.png" alt="">
                        </div>
                      </swiper-slide>
                      <swiper-slide>
                      <img src="@images/img/slide 5.png" alt="">
                      </swiper-slide>
                      <swiper-slide>
                      <img src="@images/img/slide 6.png" alt="">
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
            </swiper-slide>
            <swiper-slide>
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
                    <swiper :pagination="true" :autoplay="{ delay: 5500, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
                      <swiper-slide>
                        <div class="prop-img">
                          <img src="@images/img/slide 5.png" alt="">
                        </div>
                      </swiper-slide>
                      <swiper-slide>
                      <img src="@images/img/slide 4.png" alt="">
                      </swiper-slide>
                      <swiper-slide>
                      <img src="@images/img/slide 5.png" alt="">
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
            </swiper-slide>
            <swiper-slide>
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
                    <swiper :pagination="true" :autoplay="{ delay: 5000, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
                      <swiper-slide>
                        <div class="prop-img">
                          <img src="@images/img/slide 6.png" alt="">
                        </div>
                      </swiper-slide>
                      <swiper-slide>
                      <img src="@images/img/slide 5.png" alt="">
                      </swiper-slide>
                      <swiper-slide>
                      <img src="@images/img/slide 4.png" alt="">
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
            </swiper-slide>
          </swiper>
        </VCol>
      </VRow>
    </div>
  </section>
  <!--====================================================================-->
  <section class="real_section_2 real_Section explore_more">
    <div class="container">
      <div class="real_section_heading"  data-aos="fade-up" data-aos-duration="1500">
        <h2>Explore More</h2>
      </div>
      <v-row class="mt-16"  data-aos="fade-up" data-aos-duration="1500">
        <v-col lg="3" md="6">
          <a href="">
            <div class="explore_box yellow">
              <div class="ex_icon_box ">
                <svg xmlns="http://www.w3.org/1500/svg" viewBox="0 0 42 42"><g data-name="Group 36569"><path fill="none" d="M0 0h42v42H0z"/><path fill="#f5ca71" d="M40.4 38V18.7a1.2 1.2 0 0 0-1.1-1.3h-3.8a1.2 1.2 0 0 0-1.2 1.2v8.9h-4.4l-3.8-4h-3.8a.9.9 0 0 0-1 1V38h-7V11.3a1.4 1.4 0 0 0 1.5-1.3h13v3.2a.7.7 0 0 0 .6.7h1a.7.7 0 0 0 .7-.7V10h4a.9.9 0 0 0 .6-1.5l-5-5a2.7 2.7 0 0 0-2-.8h-13v-.2a1.2 1.2 0 0 0-1-1.2H7a1.2 1.2 0 0 0-1.2 1.2v.2H2.3A1.5 1.5 0 0 0 .8 4.2v4A1.5 1.5 0 0 0 2.3 10h3.5A1.4 1.4 0 0 0 7 11.3V38H.9a.5.5 0 0 0-.5.5V40a.5.5 0 0 0 .5.5h40.3a.5.5 0 0 0 .5-.5v-1.3a.6.6 0 0 0-.6-.6zM29 5l2.4 2.5h-4.9zm-3.5 0l-2.2 2.5L20.9 5zm-9.7 0h1.5l2.4 2.5h-4zm-10 2.5H3.2V5h2.6zM12 38H9.6v-5.6H12zm0-8H9.6v-5.5H12zm0-8H9.6v-5.4H12zm0-8H9.6v-2.8H12zm16.9 21.7h-2.4V32h2.4zm7.4 0h-2.4V32h2.4z"/></g></svg>
              </div>
              <div class="ex_content">
                <h3>New Projects</h3>
                <p>The Best Investment Opportunities</p>
              </div>
            </div>
          </a>
        </v-col>
        <v-col lg="3" md="6">
          <a href="">
            <div class="explore_box orange">
              <div class="ex_icon_box ">
                <svg xmlns="http://www.w3.org/1500/svg" viewBox="0 0 42 42"><g data-name="Group 36567"><path fill="none" d="M0 0h42v42H0z"/><g fill="#fab0a2"><path d="M39.54 36.83L36.6 33.9a9.58 9.58 0 1 0-2.7 2.7l2.95 2.94a1.91 1.91 0 1 0 2.7-2.7zm-16.63-8.2a5.73 5.73 0 1 1 5.73 5.73 5.73 5.73 0 0 1-5.73-5.73z"/><path d="M17.18 28.64a11.4 11.4 0 0 1 13.37-11.3v-2.11a1.87 1.87 0 0 0 1.55-.76 1.91 1.91 0 0 0-.44-2.67L18.3 2.26a1.91 1.91 0 0 0-2.22 0L2.7 11.8a1.91 1.91 0 0 0 1.1 3.46v15.29a1.91 1.91 0 0 0 1.92 1.9h12.13a11.38 11.38 0 0 1-.67-3.81zm-3.82-15.28a1.91 1.91 0 0 1 1.9-1.91h3.83a1.91 1.91 0 0 1 0 3.82h-3.82a1.91 1.91 0 0 1-1.9-1.91z"/></g></g></svg>
              </div>
              <div class="ex_content">
                <h3>Area Guides</h3>
                <p>Explore housing societies in UK</p>
              </div>
            </div>
          </a>
        </v-col>
        <v-col lg="3" md="6">
          <a href="">
            <div class="explore_box sky">
              <div class="ex_icon_box ">
                  <svg xmlns="http://www.w3.org/1500/svg" viewBox="0 0 42 42"><g data-name="Group 34707"><g data-name="Group 36663"><path fill="none" d="M0 0h42v42H0z"/><g data-name="Group 36662"><path fill="none" d="M2 2h38v38H2z"/><path fill="#7ad0c9" d="M19.54 16.61V4.92A2.92 2.92 0 0 0 16.6 2H4.92A2.92 2.92 0 0 0 2 4.92v11.7a2.92 2.92 0 0 0 2.92 2.92h11.7a2.92 2.92 0 0 0 2.92-2.93zm-11.7-7.3l5.85.03a1.46 1.46 0 1 1 0 2.93H7.85a1.46 1.46 0 0 1 0-2.92zm8.77 13.16H4.92A2.92 2.92 0 0 0 2 25.38v11.7A2.92 2.92 0 0 0 4.92 40h11.7a2.92 2.92 0 0 0 2.92-2.93v-11.7a2.92 2.92 0 0 0-2.94-2.91zM14.72 35.2a1.46 1.46 0 0 1-2.06 0l-1.9-1.9-1.88 1.9a1.46 1.46 0 1 1-2.07-2.07l1.9-1.9-1.86-1.88a1.46 1.46 0 1 1 2.07-2.07l1.9 1.9 1.88-1.89a1.46 1.46 0 1 1 2.04 2.07l-1.9 1.9 1.9 1.88a1.46 1.46 0 0 1 0 2.07zm7.74-9.82v11.7A2.92 2.92 0 0 0 25.38 40h11.7A2.92 2.92 0 0 0 40 37.07v-11.7a2.92 2.92 0 0 0-2.94-2.91H25.38a2.92 2.92 0 0 0-2.92 2.92zm11.7 8.77H28.3a1.46 1.46 0 1 1 0-2.92h5.85a1.46 1.46 0 1 1 0 2.92zm0-4.38H28.3a1.46 1.46 0 0 1 0-2.93h5.85a1.46 1.46 0 1 1 0 2.93zm-8.78-10.23h11.7A2.92 2.92 0 0 0 40 16.62V4.92A2.92 2.92 0 0 0 37.06 2H25.38a2.92 2.92 0 0 0-2.92 2.92v11.7a2.92 2.92 0 0 0 2.92 2.92zM28.3 9.31l1.46.03V7.86a1.46 1.46 0 0 1 2.92 0v1.46h1.46a1.46 1.46 0 1 1 0 2.93H32.7v1.46a1.46 1.46 0 1 1-2.92 0v-1.47h-1.46a1.46 1.46 0 1 1 0-2.92z"/></g></g></g></svg>
              </div>
              <div class="ex_content">
                <h3>Area Unit Converter</h3>
                <p>Convert any area unit instantly</p>
              </div>
            </div>
          </a>
        </v-col>
        <v-col lg="3" md="6">
          <a href="">
            <div class="explore_box purple">
              <div class="ex_icon_box ">
                <svg xmlns="http://www.w3.org/1500/svg" viewBox="0 0 22.73 22.73"><g data-name="Group 48552"><path fill="none" d="M.37 11.37a11 11 0 1 1 22 0 11 11 0 0 1-22 0z"/><path fill="#8775ad" d="M15.38 7.29l2.38 2.32-5.07 4.94L8.5 10.5.82 18l1.49 1.42 6.23-6.07 4.15 4.05 6.54-6.37 2.38 2.32V7.3z"/><path fill="none" d="M0 0h22.73v22.73H0z"/></g></svg>
              </div>
              <div class="ex_content">
                <h3>Property Trends</h3>
                <p>Find popular areas to buy property</p>
              </div>
            </div>
          </a>
        </v-col>
      </v-row>
    </div>
  </section>
  <!--====================================================================-->
  <section class="real_section_4 real_Section condos_property">
    <div class="container">
      <div class="real_section_heading"  data-aos="fade-up" data-aos-duration="1500">
        <h2>Houses</h2>
        <p>Make memories in your new home</p>
      </div>
      
      <VRow  data-aos="fade-up" data-aos-duration="1500">
        <VCol sm="12">
          <div class="swiper_nav">
            <VBtn class="swiper-button-prev"><v-icon size="24" class=""> mdi-arrow-left   </v-icon></VBtn>
            <VBtn class="swiper-button-next"> <v-icon size="24" class=""> mdi-arrow-right   </v-icon> </VBtn>
          </div>
          <swiper class="condos_featured_slider" :slidesPerView="3"  :loop="true" :modules="modules" :navigation="{nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev'}" :pagination="{dynamicBullets: true, }">
            <swiper-slide>
              <div class="property-card">
                  <div class="prop-img">
                    <!--======================================-->
                    <!--======================================-->
                    <div class="property_tags">
                      <div class="hot_tag"><v-icon size="24" class=""> mdi-fire</v-icon></div>
                      <div class="blue_tag tag featured_tag">Featured</div>
                    </div>
                    <div class="wishlist"><v-icon size="24"> mdi-heart-outline  </v-icon></div>
                    <span class="loction_tag"><v-icon size="16" class=""> mdi-location  </v-icon> Canada</span>
                    <!--======================================-->
                    <!--======================================-->
                    <swiper :navigation="true" :pagination="true" :autoplay="{ delay: 5000, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
                      <swiper-slide>
                        <div class="prop-img">
                          <img src="@images/img/44.png" alt="">
                        </div>
                      </swiper-slide>
                      <swiper-slide>
                      <img src="@images/img/11.png" alt="">
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
                  <div class="property_footer">
                    
                  </div>
              </div>
            </swiper-slide>
            <swiper-slide>
              <div class="property-card">
                  <div class="prop-img">
                    <!--======================================-->
                    <!--======================================-->
                    <div class="property_tags">
                      <div class="hot_tag"><v-icon size="24" class=""> mdi-fire</v-icon></div>
                      <div class="blue_tag tag featured_tag">Featured</div>
                    </div>
                    <div class="wishlist"><v-icon size="24"> mdi-heart-outline  </v-icon></div>
                    <span class="loction_tag"><v-icon size="16" class=""> mdi-location  </v-icon> Canada</span>
                    <!--======================================-->
                    <!--======================================-->
                    <swiper :navigation="true" :pagination="true" :autoplay="{ delay: 5500, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
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
            </swiper-slide>
            <swiper-slide>
              <div class="property-card">
                  <div class="prop-img">
                    <!--======================================-->
                    <!--======================================-->
                    <div class="property_tags">
                      <div class="hot_tag"><v-icon size="24" class=""> mdi-fire</v-icon></div>
                      <div class="blue_tag tag featured_tag">Featured</div>
                    </div>
                    <div class="wishlist"><v-icon size="24"> mdi-heart-outline  </v-icon></div>
                    <span class="loction_tag"><v-icon size="16" class=""> mdi-location  </v-icon> Canada</span>
                    <!--======================================-->
                    <!--======================================-->
                    <swiper :navigation="true" :pagination="true" :autoplay="{ delay: 4500, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
                      <swiper-slide>
                        <div class="prop-img">
                          <img src="@images/img/11.png" alt="">
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
            </swiper-slide>
          </swiper>
        </VCol>
      </VRow>
    </div>
  </section>
  <!--====================================================================-->
  <section class="real_section_3 invest_calculator real_Section">
    <div class="container">
      <div class="real_section_heading"  data-aos="fade-up" data-aos-duration="1500">
        <h2>Investment calculator</h2>
      </div>
      <VRow>
        <VCol lg="5"  data-aos="fade-up" data-aos-duration="1500">
          <div class="invest_cal_card">
            <h2>How much do you want to invest?</h2>
            <div class="">
              <div class="invest_label">
                <p>Initial investment</p>
                <span>$ 60,000</span>
              </div>
              <div class="invest_range">
                <input type="range" id="rangevalue1"  value="40" min="0" max="100" class="invest_progress" />
              </div>
            </div>
            <div class="">
              <div class="invest_label">
                <p>Property value growth</p>
                <span>30%</span>
              </div>
              <div class="invest_range">
                <input type="range" value="40" min="0" max="100" step="1" class="invest_progress" />
              </div>
            </div>
            <div class="">
              <div class="invest_label">
                <p>Expected annual rental yield</p>
                <span>10%</span>
              </div>
              <div class="invest_range">
                <input type="range" value="40" min="0" max="100" step="1" class="invest_progress" />
              </div>
            </div>
            <div class="invest_note">
              <p>All projected values are before any property costs and platform fees, and based on a 5-year holding period. We expect the asset value to grow 30% over the next 5 years.</p>
            </div>
          </div>
        </VCol>
        <VCol lg="7"  data-aos="fade-up" data-aos-duration="1500">
          <div class="invest_right">
            <VRow>
              <VCol md="6">
                <div class="">
                  <p>Total projected return:</p>
                  <h2>$ 162,000</h2>
                </div>
              </VCol>
              <VCol md="6">
                <div class="">
                  <p>Total projected return:</p>
                  <h2>$ 750 <span>/month</span></h2>
                </div>
              </VCol>
            </VRow>
            <VRow class="mt-10">
              <VCol lg="4">
                <div class="invest_box">
                  <p>Initial investment</p>
                  <h4>$ 90,000</h4>
                </div>
              </VCol>
              <VCol lg="4">
                <div class="invest_box">
                  <p>Initial investment</p>
                  <h4>$ 90,000</h4>
                </div>
              </VCol>
              <VCol lg="4">
                <div class="invest_box">
                  <p>Initial investment</p>
                  <h4>$ 90,000</h4>
                </div>
              </VCol>
            </VRow>
            <VRow>
              <VCol sm="12">
                <svg width="655.875" height="252" role="img" viewBox="0 0 655.875 252" style="pointer-events: all; width: 100%; height: 100%;"><g role="presentation"><line vector-effect="non-scaling-stroke" role="presentation" shape-rendering="auto" x1="64" x2="655.875" y1="220" y2="220" style="stroke: transparent; fill: transparent; stroke-width: 1; stroke-linecap: round; stroke-linejoin: round;"></line><g role="presentation"><line vector-effect="non-scaling-stroke" role="presentation" shape-rendering="auto" x1="64" x2="64" y1="220" y2="221" style="stroke: rgb(235, 238, 244); fill: transparent; size: 1px;"></line><text direction="inherit" dx="0" x="64" y="241.26" id="chart-axis-0-tickLabels-0"><tspan x="64" dx="0" dy="0" text-anchor="middle" style="font-family: &quot;Plus Jakarta SansVariable&quot;, &quot;Noto Sans ArabicVariable&quot;, &quot;--apple-system&quot;, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, sans-serif; font-size: 12px; letter-spacing: normal; padding: 10px; fill: rgb(37, 37, 37); stroke: transparent;">2023</tspan></text></g><g role="presentation"><line vector-effect="non-scaling-stroke" role="presentation" shape-rendering="auto" x1="177.82211538461536" x2="177.82211538461536" y1="220" y2="221" style="stroke: rgb(235, 238, 244); fill: transparent; size: 1px;"></line><text direction="inherit" dx="0" x="177.82211538461536" y="241.26" id="chart-axis-0-tickLabels-1"><tspan x="177.82211538461536" dx="0" dy="0" text-anchor="middle" style="font-family: &quot;Plus Jakarta SansVariable&quot;, &quot;Noto Sans ArabicVariable&quot;, &quot;--apple-system&quot;, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, sans-serif; font-size: 12px; letter-spacing: normal; padding: 10px; fill: rgb(37, 37, 37); stroke: transparent;">2024</tspan></text></g><g role="presentation"><line vector-effect="non-scaling-stroke" role="presentation" shape-rendering="auto" x1="291.6442307692307" x2="291.6442307692307" y1="220" y2="221" style="stroke: rgb(235, 238, 244); fill: transparent; size: 1px;"></line><text direction="inherit" dx="0" x="291.6442307692307" y="241.26" id="chart-axis-0-tickLabels-2"><tspan x="291.6442307692307" dx="0" dy="0" text-anchor="middle" style="font-family: &quot;Plus Jakarta SansVariable&quot;, &quot;Noto Sans ArabicVariable&quot;, &quot;--apple-system&quot;, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, sans-serif; font-size: 12px; letter-spacing: normal; padding: 10px; fill: rgb(37, 37, 37); stroke: transparent;">2025</tspan></text></g><g role="presentation"><line vector-effect="non-scaling-stroke" role="presentation" shape-rendering="auto" x1="405.46634615384613" x2="405.46634615384613" y1="220" y2="221" style="stroke: rgb(235, 238, 244); fill: transparent; size: 1px;"></line><text direction="inherit" dx="0" x="405.46634615384613" y="241.26" id="chart-axis-0-tickLabels-3"><tspan x="405.46634615384613" dx="0" dy="0" text-anchor="middle" style="font-family: &quot;Plus Jakarta SansVariable&quot;, &quot;Noto Sans ArabicVariable&quot;, &quot;--apple-system&quot;, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, sans-serif; font-size: 12px; letter-spacing: normal; padding: 10px; fill: rgb(37, 37, 37); stroke: transparent;">2026</tspan></text></g><g role="presentation"><line vector-effect="non-scaling-stroke" role="presentation" shape-rendering="auto" x1="519.2884615384614" x2="519.2884615384614" y1="220" y2="221" style="stroke: rgb(235, 238, 244); fill: transparent; size: 1px;"></line><text direction="inherit" dx="0" x="519.2884615384614" y="241.26" id="chart-axis-0-tickLabels-4"><tspan x="519.2884615384614" dx="0" dy="0" text-anchor="middle" style="font-family: &quot;Plus Jakarta SansVariable&quot;, &quot;Noto Sans ArabicVariable&quot;, &quot;--apple-system&quot;, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, sans-serif; font-size: 12px; letter-spacing: normal; padding: 10px; fill: rgb(37, 37, 37); stroke: transparent;">2027</tspan></text></g><g role="presentation"><line vector-effect="non-scaling-stroke" role="presentation" shape-rendering="auto" x1="633.1105769230769" x2="633.1105769230769" y1="220" y2="221" style="stroke: rgb(235, 238, 244); fill: transparent; size: 1px;"></line><text direction="inherit" dx="0" x="633.1105769230769" y="241.26" id="chart-axis-0-tickLabels-5"><tspan x="633.1105769230769" dx="0" dy="0" text-anchor="middle" style="font-family: &quot;Plus Jakarta SansVariable&quot;, &quot;Noto Sans ArabicVariable&quot;, &quot;--apple-system&quot;, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, sans-serif; font-size: 12px; letter-spacing: normal; padding: 10px; fill: rgb(37, 37, 37); stroke: transparent;">2028</tspan></text></g></g><g role="presentation"><line vector-effect="non-scaling-stroke" role="presentation" shape-rendering="auto" x1="64" x2="64" y1="8" y2="220" style="stroke: transparent; fill: transparent; stroke-width: 1; stroke-linecap: round; stroke-linejoin: round;"></line><g role="presentation"><line vector-effect="non-scaling-stroke" role="presentation" shape-rendering="auto" x1="64" x2="655.875" y1="178.559670781893" y2="178.559670781893" style="stroke: rgb(235, 238, 244); fill: none; pointer-events: painted;"></line><text direction="inherit" dx="0" x="53" y="182.819670781893" id="chart-axis-1-tickLabels-0"><tspan x="53" dx="0" dy="0" text-anchor="end" style="font-family: &quot;Plus Jakarta SansVariable&quot;, &quot;Noto Sans ArabicVariable&quot;, &quot;--apple-system&quot;, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, sans-serif; font-size: 12px; letter-spacing: normal; padding: 10px; fill: rgb(37, 37, 37); stroke: transparent;">100,000</tspan></text></g><g role="presentation"><line vector-effect="non-scaling-stroke" role="presentation" shape-rendering="auto" x1="64" x2="655.875" y1="134.93827160493828" y2="134.93827160493828" style="stroke: rgb(235, 238, 244); fill: none; pointer-events: painted;"></line><text direction="inherit" dx="0" x="53" y="139.19827160493827" id="chart-axis-1-tickLabels-1"><tspan x="53" dx="0" dy="0" text-anchor="end" style="font-family: &quot;Plus Jakarta SansVariable&quot;, &quot;Noto Sans ArabicVariable&quot;, &quot;--apple-system&quot;, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, sans-serif; font-size: 12px; letter-spacing: normal; padding: 10px; fill: rgb(37, 37, 37); stroke: transparent;">120,000</tspan></text></g><g role="presentation"><line vector-effect="non-scaling-stroke" role="presentation" shape-rendering="auto" x1="64" x2="655.875" y1="91.31687242798354" y2="91.31687242798354" style="stroke: rgb(235, 238, 244); fill: none; pointer-events: painted;"></line><text direction="inherit" dx="0" x="53" y="95.57687242798355" id="chart-axis-1-tickLabels-2"><tspan x="53" dx="0" dy="0" text-anchor="end" style="font-family: &quot;Plus Jakarta SansVariable&quot;, &quot;Noto Sans ArabicVariable&quot;, &quot;--apple-system&quot;, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, sans-serif; font-size: 12px; letter-spacing: normal; padding: 10px; fill: rgb(37, 37, 37); stroke: transparent;">140,000</tspan></text></g><g role="presentation"><line vector-effect="non-scaling-stroke" role="presentation" shape-rendering="auto" x1="64" x2="655.875" y1="47.6954732510288" y2="47.6954732510288" style="stroke: rgb(235, 238, 244); fill: none; pointer-events: painted;"></line><text direction="inherit" dx="0" x="53" y="51.9554732510288" id="chart-axis-1-tickLabels-3"><tspan x="53" dx="0" dy="0" text-anchor="end" style="font-family: &quot;Plus Jakarta SansVariable&quot;, &quot;Noto Sans ArabicVariable&quot;, &quot;--apple-system&quot;, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, sans-serif; font-size: 12px; letter-spacing: normal; padding: 10px; fill: rgb(37, 37, 37); stroke: transparent;">160,000</tspan></text></g></g><g clip-path="url(#victory-clip-6)" style="height: 100%; width: 100%; user-select: none;"><defs><clipPath id="victory-clip-6"><rect vector-effect="non-scaling-stroke" x="64" y="8" width="591.875" height="212"></rect></clipPath></defs><path role="presentation" shape-rendering="auto" style="fill: rgb(65, 206, 142); stroke: rgb(65, 206, 142);" d="M64,200.37037037037038L177.82211538461536,168.96296296296296L291.6442307692307,137.55555555555557L405.46634615384613,106.14814814814812L519.2884615384614,74.74074074074073L633.1105769230769,43.33333333333332L633.1105769230769,220L519.2884615384614,220L405.46634615384613,220L291.6442307692307,220L177.82211538461536,220L64,220Z"></path></g></svg>
              </VCol>
            </VRow>
          </div>
        </VCol>
      </VRow>
    </div>
  </section>
  <!--====================================================================-->
  <section class="real_section_5 real_Section best_section">
    <div class="container">
      <div class="real_section_heading"  data-aos="fade-up" data-aos-duration="1500">
        <h2>Why we are the best</h2>
      </div>
      <VRow class="">
        <VCol lg="4" md="6"  data-aos="fade-up" data-aos-duration="1500">
          <div class="feature_item">
            <div class="d-flex align-center mb-2">
              <v-icon size="28" class="mr-2"> mdi-account </v-icon>
              <h4>Expert Technicians</h4>
            </div>
            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
          </div>
        </VCol>
        <VCol lg="4" md="6"  data-aos="fade-up" data-aos-duration="1500">
          <div class="feature_item">
            <div class="d-flex align-center mb-2">
              <v-icon size="28" class="mr-2"> mdi-license </v-icon>
              <h4>Professional Service</h4>
            </div>
            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
          </div>
        </VCol>
        <VCol lg="4" md="6"  data-aos="fade-up" data-aos-duration="1500">
          <div class="feature_item">
            <div class="d-flex align-center mb-2">
              <v-icon size="28" class="mr-2"> mdi-phone-classic </v-icon>
              <h4>Great Support</h4>
            </div>
            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
          </div>
        </VCol>
        <VCol lg="4" md="6"  data-aos="fade-up" data-aos-duration="1500">
          <div class="feature_item">
            <div class="d-flex align-center mb-2">
              <v-icon size="28" class="mr-2"> mdi-rocket-launch </v-icon>
              <h4>Technical Skills</h4>
            </div>
            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
          </div>
        </VCol>
        <VCol lg="4" md="6"  data-aos="fade-up" data-aos-duration="1500">
          <div class="feature_item">
            <div class="d-flex align-center mb-2">
              <v-icon size="28" class="mr-2"> mdi-diamond-stone </v-icon>
              <h4>Highly Recomended</h4>
            </div>
            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
          </div>
        </VCol>
        <VCol lg="4" md="6"  data-aos="fade-up" data-aos-duration="1500">
          <div class="feature_item">
            <div class="d-flex align-center mb-2">
              <v-icon size="28" class="mr-2"> mdi-comment </v-icon>
              <h4>Positive Reviews</h4>
            </div>
            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
          </div>
        </VCol>
      </VRow>
    </div>
  </section>
  <!--====================================================================-->
  <section class="real_section_6 real_Section testimonials_section">
    <div class="overlay"></div>
    <div class="container">
      <div class="real_section_heading"  data-aos="fade-up" data-aos-duration="1500">
        <h2>Our Client Say's</h2>
      </div>
      <VRow  data-aos="fade-up" data-aos-duration="1500">
        <VCol sm="12">
          <swiper :modules="modules" :autoplay="{ delay: 4000, disableOnInteraction: false, }" class="mySwiper">
              <swiper-slide>
                <div class="tesimonials">
                  <div class="quote">
                    <img src="@images/img/quote.svg" alt="">
                  </div>
                  <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque. <br>
Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                  <div class="testmonial_author">
                    <div class="thumb">
                      <img src="@images/img/testmonial.png.webp" alt="">
                    </div>
                    <h3>Robert Thomson</h3>
                    <span>Business Owner</span>
                  </div>
                </div>
              </swiper-slide>
              <swiper-slide>
                <div class="tesimonials">
                  <div class="quote">
                    <img src="@images/img/quote.svg" alt="">
                  </div>
                  <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque. <br>
Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                  <div class="testmonial_author">
                    <div class="thumb">
                      <img src="@images/img/testmonial.png.webp" alt="">
                    </div>
                    <h3>Robert Thomson</h3>
                    <span>Business Owner</span>
                  </div>
                </div>
              </swiper-slide>
              <swiper-slide>
                <div class="tesimonials">
                  <div class="quote">
                    <img src="@images/img/quote.svg" alt="">
                  </div>
                  <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque. <br>
Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                  <div class="testmonial_author">
                    <div class="thumb">
                      <img src="@images/img/testmonial.png.webp" alt="">
                    </div>
                    <h3>Robert Thomson</h3>
                    <span>Business Owner</span>
                  </div>
                </div>
              </swiper-slide>
          </swiper>
        </VCol>
      </VRow>
    </div>
  </section>
  <!--====================================================================-->
  <section class="real_section_7 real_Section customer_section">
    <div class="container">
      <div class="real_section_heading"  data-aos="fade-up" data-aos-duration="1500">
        <h2>Partners</h2>
      </div>
      <VRow class="mt-16"  data-aos="fade-up" data-aos-duration="1500">
        <VCol sm="12">
          <swiper :slidesPerView="5" :modules="modules" class="mySwiper">
              <swiper-slide>
                <div class="customers_img">
                  <img src="@images/img/cus1.webp" alt="">
                </div>
              </swiper-slide>
              <swiper-slide>
                <div class="customers_img">
                  <img src="@images/img/cus2.webp" alt="">
                </div>
              </swiper-slide>
              <swiper-slide>
                <div class="customers_img">
                  <img src="@images/img/cus3.webp" alt="">
                </div>
              </swiper-slide>
              <swiper-slide>
                <div class="customers_img">
                  <img src="@images/img/cus4.webp" alt="">
                </div>
              </swiper-slide>
              <swiper-slide>
                <div class="customers_img">
                  <img src="@images/img/cus5.webp" alt="">
                </div>
              </swiper-slide>
          </swiper>
        </VCol>
      </VRow>
    </div>
  </section>
  <!--====================================================================-->
  <section class="real_section_7 real_Section contact_section">
    <div class="container">
      <div class="real_section_heading"  data-aos="fade-up" data-aos-duration="1500">
        <h2>Contact us</h2>
      </div>
      <VRow class="contact"  data-aos="fade-up" data-aos-duration="1500">
        <VCol>
          <VForm class="mt-3">
            <VRow>
              <VCol cols="6">
                <VTextField
                  label="Your Name"
                  placeholder="Enter Name"
                />
              </VCol>

              <VCol cols="6">
                <VTextField
                  label="Phone Number"
                  type="number"
                  placeholder="Enter Phone Nnmber"
                />
              </VCol>

              <VCol cols="6">
                <VTextField
                  label="Email"
                  type="email"
                  placeholder="Enter Email"
                />
              </VCol>

              <VCol cols="12">
                <VTextarea label="Message" placeholder="Enter Message"/>
              </VCol>

              <VCol cols="12" class="mt-10 text-center" >
                <VBtn class="primary-btn" type="submit"> Submit </VBtn>
              </VCol>
            </VRow>
          </VForm>
        </VCol>
      </VRow>
    </div>
  </section>
  <!--====================================================================-->
  <FooterComp/>
  <!--====================================================================-->
</div>
</template>

<script setup>
import HeaderComp from '../components/header.vue';
import FooterComp from '../components/footer.vue';

import { useHomeStore } from "../useHomeStore";
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import { Pagination , Navigation ,Autoplay} from "swiper";
////////

const condos_modules =[
  Pagination,
  Navigation,
  Autoplay
]
const modules = [
  Pagination,
  Navigation,
  Autoplay
];
/////////////////////////////
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
const costPerCall = 0
const FilterTab = ref(0)
//////////////////////////////////
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
import { onMounted } from "vue";
import AOS from "aos";

onMounted(() => {
    AOS.init();
})
</script>
