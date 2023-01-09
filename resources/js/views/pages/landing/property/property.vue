<template>
  <div class="property-listing">
    <HeaderComp/>
    <breadcrumpHeader/>
    <div class="property_list real_Section">
      <div class="container">
        <VRow>
          <VCol lg="4">
            <div class="property-card">
              <div class="prop-img">
                <div class="tag_prop">New Listing</div>
                <div class="wishlist"><v-icon size="24"> mdi-heart-outline  </v-icon></div>
                <span class="loction_tag"><v-icon size="16" class=""> mdi-location  </v-icon> Canada</span>

                <swiper :navigation="true" :pagination="true" :autoplay="{ delay: 3000, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
                  <swiper-slide>
                      <div class="property_card_img">
                        <img src="@images/img/11.png" alt=""/>
                      </div>
                  </swiper-slide>
                  <swiper-slide>
                    <div class="property_card_img">
                      <img src="@images/img/22.png" alt="">
                    </div>
                  </swiper-slide>
                  <swiper-slide>
                    <div class="property_card_img">
                      <img src="@images/img/33.png" alt=""/>
                    </div>
                  </swiper-slide>
                </swiper>
              </div>
              <div class="property_body"> 
                <h2>18474 Glenmore St Redford, MI 48240</h2>
                <div class="property_price">
                  <h3><span>AED</span> 1,853,219</h3>
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
              <VDivider/>
              <div class="footer_card">
                <ul>
                  <li>
                    <div class="property_card_info">
                      <v-icon size="16" class="mr-1"> mdi-shape-square-plus </v-icon>
                      <span>1200 Sqft</span>
                    </div>
                  </li>
                  <li>
                    <div class="property_card_info">
                      <v-icon size="16" class="mr-1"> mdi-bed-outline </v-icon>
                      <span>2 Bed</span>
                    </div>
                  </li>
                  <li>
                    <div class="property_card_info">
                      <v-icon size="16" class="mr-1"> mdi-shower </v-icon>
                      <span>2 Bath</span>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </VCol>
        </VRow>
      </div>
    </div>
  </div>
</template>

<script setup>
import HeaderComp from '../components/header.vue';
import breadcrumpHeader from '../components/breadcrumpHeader.vue';

import { useHomeStore } from "../useHomeStore";
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import { Pagination , Navigation ,Autoplay} from "swiper";
////////
const modules = [
  Pagination,
  Navigation,
  Autoplay
];
////////
</script>
