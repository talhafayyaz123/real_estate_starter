<script setup>
import HeaderComp from '../components/header.vue';
import breadcrumpHeader from '../components/breadcrumpHeader.vue';
import FooterComp from '../components/footer.vue';
import DetailTab from './components/detailTab.vue';
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import { Pagination , Navigation ,Autoplay} from "swiper";
const modules = [
  Pagination,
  Navigation,
  Autoplay
];
const isDialogVisible = ref(false)
const isDialogTwoShow = ref(false)
const currentTab = ref(0)
</script>
<template>
  <!--==================================-->
  <HeaderComp/>
  <!--==================================-->
  <div class="property_deal_page">
      <section class="property_image_sec">
        <div class="container-fluid">
          <VRow class="">
            <VCol md="6">
              <div class="image_section_left">
                  <div class="overlay"></div>
                  <img src="@images/img/22.png" alt="">
                  <VBtn class="view_all_btn" @click="isDialogVisible = true">View all photos</VBtn>
              </div>
            </VCol>
            <VCol md="6">
              <div class="card">
                <VRow>
                  <VCol md="6">
                    <div class="propimage">
                      <img src="@images/img/slide 3.png" alt="">
                    </div>
                  </VCol>
                  <VCol md="6">
                    <div class="propimage">
                      <img src="@images/img/slide 2.png" alt="">
                    </div>
                  </VCol>
                  <VCol md="6">
                    <div class="propimage">
                      <img src="@images/img/slide 2.png" alt="">
                    </div>
                  </VCol>
                  <VCol md="6">
                    <div class="propimage">
                      <img src="@images/img/slide 1.png" alt="">
                    </div>
                  </VCol>
                </VRow>
              </div>
            </VCol>
          </VRow>
        </div>
      </section>
      <div class="container mt-10 mb-10">
        <VRow>
          <VCol lg="8">
            <div class="property_detail">
              <div class="">
                <div class="property_det_tags mb-3">
                  <div class="tag activeTag">Active</div>
                  <!-- <div class="tag inactiveTag">Inactive</div> -->
                  <div class="tag">Featured</div>
                  <div class="tag locationtag"><v-icon size="16" class=""> mdi-location  </v-icon> Canada</div>
                </div>
                <div class="property_detail_heading">
                  <h1>18474 Glenmore St Redford, MI 48240</h1>
                  <p>St Louis, MO 63116</p>
                </div>
              </div>
              <!-- <VDivider/> -->
              <div class="property_tab mt-16">
                <VTabs v-model="currentTab">
                  <VTab>Details</VTab>
                  <VTab>Financials</VTab>
                  <VTab>Documents</VTab>
                  <VTab>Buying Process</VTab>
                  <VTab>Market</VTab>
                </VTabs>
                <VDivider />

                <VWindow  v-model="currentTab"  class="mt-5" >
                  <VWindowItem>
                    <DetailTab/>
                  </VWindowItem>
                  <VWindowItem>
                    2
                  </VWindowItem>
                  <VWindowItem>
                    3
                  </VWindowItem>
                </VWindow>
              </div>
            </div>
          </VCol> 
          <VCol lg="4">
            <div class="projected_card card mb-2">
                <div class="projected_card_header property_detail_heading">
                  <h2>Starting Price</h2>
                  <span class="price_starting">$ 35.00/Token</span>
                </div>
                <div class="projected_card_body mt-2 mb-5">
                  <ul> 
                    <li>
                      <h3>Projected IRR</h3>
                      <span>13.81%</span>
                    </li>
                    <li>
                      <h3>CoC return</h3>
                      <span>10.81%</span>
                    </li>
                    <li class="">
                        <h3>Valuation</h3>
                        <span>$81,000</span>
                      </li>
                      <li class="">
                        <h3>Asset Type</h3>
                        <span>Residential</span>
                      </li>
                      <li class="">
                        <h3>Year Built</h3>
                        <span>2012</span>
                      </li>
                      <li class="">
                        <h3>Project Developer</h3>
                        <span>Freeman Development</span>
                      </li>
                      <li class="">
                        <h3>Total Area</h3>
                        <span>2432 Sq.ft</span>
                      </li>
                      <li class="">
                        <h3>Token Left <span>(1 Token = 1 Sq.ft)</span></h3>
                        <span>476</span>
                      </li>
                  </ul>
                </div>
                <div class="projected_card_footer">
                  <VBtn size="large" block class="primary-btn">Invest</VBtn>
                </div>
            </div>
            <div class="card">
              <div class="property_thumb">
                <img src="@images/img/slide 1.png" alt="" />
              </div>
            </div>
            <div class="card mt-5">
              <VRow class="multi_prop_images">
                <VCol md="3">
                  <img src="@images/img/slide 2.png" alt=""/>
                </VCol>
                <VCol md="3">
                  <img src="@images/img/slide 3.png" alt=""/>
                </VCol>
                <VCol md="3">
                  <img src="@images/img/11.png" alt=""/>
                </VCol>
                <VCol md="3">
                  <img src="@images/img/22.png" alt=""/>
                </VCol>
                <VCol md="12">
                  <VBtn>View all photos</VBtn>
                </VCol>
              </VRow>
            </div>
          </VCol>
        </VRow>
      </div>
  </div>

  <!--===================================-->
  <FooterComp/>
  <!--===================================-->
  <VDialog v-model="isDialogVisible" class="v-dialog-xl">
      <!-- Dialog close btn -->
      <VBtn icon class="v-dialog-close-btn" @click="isDialogVisible = !isDialogVisible" >
        <VIcon icon="tabler-x" />
      </VBtn>
      <div class="image_modal">
        <swiper :navigation="true" :pagination="{ dynamicBullets: true, }" :modules="modules" class="mySwiper">
          <swiper-slide>
            <div class="prop-img">
              <img src="@images/img/11.png" alt="">
            </div>
          </swiper-slide>
          <swiper-slide>
              <img src="@images/img/22.png" alt="">
          </swiper-slide>
          <swiper-slide>
              <img src="@images/img/33.png" alt="">
          </swiper-slide>
        </swiper>
      </div>
  </VDialog>
</template>


