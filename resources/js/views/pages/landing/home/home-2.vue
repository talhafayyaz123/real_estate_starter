<template>
  <div>
    <!--==========================================-->
    <HeaderComp />
    <!--==========================================-->
    <section class="banner_sec">
      <v-container class="h-100">
        <v-row  class="h-100">
          <v-col lg="5" class="d-flex align-center">
            <div>
              <h1>
              18474 Glenmore St<br> Redford, MI 48240
            </h1>
            <p>A fully-compliant, fractional, tokenized ownership <br> model allows investors from around the world to <br> buy into the US real estate market for the first <br> time. Blockchain-based.</p>
            </div>  
          </v-col>
          <v-col lg="7">
          </v-col>
        </v-row>
      </v-container>
    </section>
    <!--==========================================-->
    <section class="property_filt pt-8 pb-16">
      <v-container>
        <v-col lg="6">
          <div class="d-flex align-center filter_sec">
            <VBtn color="primary" @click="isDialogVisible = true">Filters</VBtn>

            <div class="grid_view">
              <v-icon size="24" class="mr-2"> mdi-format-list-bulleted-type  </v-icon>
              <v-icon size="24" class=""> mdi-view-grid  </v-icon>
            </div>
          </div>
        </v-col>
        <!--==========================================================================-->
        <!--==========================================================================-->
        <VDialog v-model="isDialogVisible" class="v-dialog-lg">
            <!-- Dialog close btn -->
            <VBtn icon class="v-dialog-close-btn" @click="isDialogVisible = !isDialogVisible" >
              <VIcon icon="tabler-x" />
            </VBtn>

            <VCard title="Filters">
              <VDivider/>
              <div class="pl-5 pr-5 pt-7">
                <div>
                  <h2>Price range</h2>
                  <v-row class="mb-2 mt-3">
                    <v-col md="6">
                      <v-text-field label="Min price" prefix="$" type="number"></v-text-field>
                    </v-col>
                    <v-col md="6">
                      <v-text-field label="Max price" prefix="$" type="number"></v-text-field>
                    </v-col>
                  </v-row>
                  <VDivider/>
                </div>
                <div class="mt-4">
                  <h2>Type of place</h2>
                  <v-row class="mt-3 mb-2">
                    <v-col md="6">
                      <div class="d-flex align-start">
                        <VCheckbox class=""/>
                        <div class="ml-1">
                          <h3>Entire place</h3>
                          <p>A place all to yourself</p>
                        </div>
                      </div>
                    </v-col>
                    <v-col md="6">
                      <div class="d-flex align-start">
                        <VCheckbox class=""/>
                        <div class="ml-2">
                          <h3>Private room</h3>
                          <p>Your own room in a home or a hotel, plus some shared common spaces</p>
                        </div>
                      </div>
                    </v-col>
                    <v-col md="6">
                      <div class="d-flex align-start">
                        <VCheckbox class=""/>
                        <div class="ml-2">
                          <h3>Shared room</h3>
                          <p>A sleeping space and common areas that may be shared with others</p>
                        </div>
                      </div>
                    </v-col>
                  </v-row>
                  <VDivider/>
                </div>
                <div class="mt-4">
                  <h2>Rooms and beds</h2>
                  <div class="mt-3">
                    <p class="mb-0">Bedrooms</p>
                    <div class="mb-4">
                      <VBtnToggle divided color="primary" variant="outlined" >
                          <VBtn > Any </VBtn>
                          <VBtn > 1 </VBtn>
                          <VBtn > 2 </VBtn>
                          <VBtn > 3 </VBtn>
                          <VBtn > 4 </VBtn>
                          <VBtn > 5 </VBtn>
                          <VBtn > 6 </VBtn>
                          <VBtn > 7 </VBtn>
                          <VBtn > 8+ </VBtn>
                      </VBtnToggle>
                    </div>
                    <p class="mb-0">Beds</p>
                    <div class="mb-4">
                      <VBtnToggle divided color="primary" variant="outlined" >
                          <VBtn > Any </VBtn>
                          <VBtn > 1 </VBtn>
                          <VBtn > 2 </VBtn>
                          <VBtn > 3 </VBtn>
                          <VBtn > 4 </VBtn>
                          <VBtn > 5 </VBtn>
                          <VBtn > 6 </VBtn>
                          <VBtn > 7 </VBtn>
                          <VBtn > 8+ </VBtn>
                      </VBtnToggle>
                    </div>
                    <p class="mb-0">Bathrooms</p>
                    <div class="mb-4">
                      <VBtnToggle divided color="primary" variant="outlined" >
                          <VBtn > Any </VBtn>
                          <VBtn > 1 </VBtn>
                          <VBtn > 2 </VBtn>
                          <VBtn > 3 </VBtn>
                          <VBtn > 4 </VBtn>
                          <VBtn > 5 </VBtn>
                          <VBtn > 6 </VBtn>
                          <VBtn > 7 </VBtn>
                          <VBtn > 8+ </VBtn>
                      </VBtnToggle>
                    </div>
                  </div>
                  <VDivider/>
                </div>
                <div class="mt-4">
                  <h2>Property type</h2>
                  <div class="mt-3 property_type_btn mb-4">
                    <VBtnToggle divided color="primary" variant="outlined" >
                        <VBtn>
                          <span>Studio Type</span>
                        </VBtn>
                        <VBtn>
                          <span>One-Three <br> Bedroom</span>
                        </VBtn>
                        <VBtn>
                          <span>Loft or Z-Loft</span>
                        </VBtn>
                        <VBtn>
                          <span>Bi-level</span>
                        </VBtn>
                        <VBtn>
                          <span>Penthouse</span>
                        </VBtn>
                    </VBtnToggle>
                  </div>
                  <VDivider/>
                </div>
                <div class="mt-4 aminities">
                  <h2>Amenities</h2>
                  <div class="mt-3">
                    <h4>Essentials</h4>
                    <v-row class="mt-1 mb-2">
                      <v-col md="6">
                        <div class="d-flex align-center">
                          <VCheckbox class=""/>
                          <div class="ml-2">
                            <p>Wifi</p>
                          </div>
                        </div>
                      </v-col>
                      <v-col md="6">
                        <div class="d-flex align-center">
                          <VCheckbox class=""/>
                          <div class="ml-2">
                            <p>Kitchen</p>
                          </div>
                        </div>
                      </v-col>
                      <v-col md="6">
                        <div class="d-flex align-center">
                          <VCheckbox class=""/>
                          <div class="ml-2">
                            <p>Washer</p>
                          </div>
                        </div>
                      </v-col>
                      <v-col md="6">
                        <div class="d-flex align-center">
                          <VCheckbox class=""/>
                          <div class="ml-2">
                            <p>Air conditioning</p>
                          </div>
                        </div>
                      </v-col>
                      <v-col md="6">
                        <div class="d-flex align-center">
                          <VCheckbox class=""/>
                          <div class="ml-2">
                            <p>Heating</p>
                          </div>
                        </div>
                      </v-col>
                    </v-row>
                    <h4>Show more</h4>
                  </div>
                </div>
              </div>
              <VCardText class="d-flex justify-end flex-wrap gap-3">
                <VBtn variant="tonal"  color="secondary"  @click="isDialogVisible = false" > Close </VBtn>
              </VCardText>
            </VCard>
        </VDialog>
        <!--==========================================================================-->
        <!--==========================================================================-->

      </v-container>
    </section>
    <!--==========================================-->
    <div class="property_section pb-3">
      <v-container>
        <div class="section_heading">
            <h2>Studio Apartments</h2>
            <a href="">See All</a>
        </div>
        <div class="property_listing">
          <v-row>
            <v-col lg="3">
              <div class="property-card">
                <div class="prop-img">
                  <div class="tag_prop">New Listing</div>
                  <div class="wishlist"><v-icon size="24"> mdi-heart-outline  </v-icon></div>
                    <swiper
                    :pagination="{
                      dynamicBullets: true,
                    }"
                    :modules="modules"
                    class="mySwiper">
                      <swiper-slide>
                        <div class="prop-img">
                          <img src="@images/img/property/slide1.png" alt="">
                        </div>
                      </swiper-slide>
                      <swiper-slide>
                          <img src="@images/img/property/slide1.png" alt="">
                      </swiper-slide>
                      <swiper-slide>
                          <img src="@images/img/property/slide1.png" alt="">
                      </swiper-slide>
                    </swiper>
                  </div>
                  <div class="content">
                    <h2>18474 Glenmore St Redford, MI 48240</h2>
                    <ul>
                      <li>
                        <div class="list-dat">Available Unit</div><span>188</span>
                      </li>
                      <li>
                        <div class="list-dat rat">Rating :</div><span><v-icon size="16" class="mr-1"> mdi-star </v-icon>4.5</span>
                      </li>
                      <li>
                        <div class="list-dat">Capital ROI :</div><span>+11.84 %</span>
                      </li>
                    </ul>
                  </div>
                  <div class="footer_card">
                    <span class="token">$65/token</span>
                    <span class="units">43 Tokens Left</span>
                  </div>
              </div>
            </v-col>
            <v-col lg="3">
              <div class="property-card">
                <div class="prop-img">
                  <div class="tag_prop">New Listing</div>
                  <div class="wishlist"><v-icon size="24" class="ml-2"> mdi-heart-outline  </v-icon></div>
                    <swiper
                    :pagination="{
                      dynamicBullets: true,
                    }"
                    :modules="modules"
                    class="mySwiper">
                      <swiper-slide>
                        <div class="prop-img">
                          <img src="@images/img/property/slide1.png" alt="">
                        </div>
                      </swiper-slide>
                      <swiper-slide>
                          <img src="@images/img/property/slide1.png" alt="">
                      </swiper-slide>
                      <swiper-slide>
                          <img src="@images/img/property/slide1.png" alt="">
                      </swiper-slide>
                    </swiper>
                  </div>
                  <div class="content">
                    <h2>18474 Glenmore St Redford, MI 48240</h2>
                    <ul>
                      <li>
                        <div class="list-dat">Available Unit</div><span>188</span>
                      </li>
                      <li>
                        <div class="list-dat rat">Rating :</div><span><v-icon size="16" class="mr-1"> mdi-star </v-icon>4.5</span>
                      </li>
                      <li>
                        <div class="list-dat">Capital ROI :</div><span>+11.84 %</span>
                      </li>
                    </ul>
                  </div>
                  <div class="footer_card">
                    <span class="token">$65/token</span>
                    <span class="units">43 Tokens Left</span>
                  </div>
              </div>
            </v-col>
            <v-col lg="3">
              <div class="property-card">
                <div class="prop-img">
                  <div class="tag_prop">New Listing</div>
                  <div class="wishlist"><v-icon size="24" class="ml-2"> mdi-heart-outline  </v-icon></div>
                    <swiper
                    :pagination="{
                      dynamicBullets: true,
                    }"
                    :modules="modules"
                    class="mySwiper">
                      <swiper-slide>
                        <div class="prop-img">
                          <img src="@images/img/property/slide1.png" alt="">
                        </div>
                      </swiper-slide>
                      <swiper-slide>
                          <img src="@images/img/property/slide1.png" alt="">
                      </swiper-slide>
                      <swiper-slide>
                          <img src="@images/img/property/slide1.png" alt="">
                      </swiper-slide>
                    </swiper>
                  </div>
                  <div class="content">
                    <h2>18474 Glenmore St Redford, MI 48240</h2>
                    <ul>
                      <li>
                        <div class="list-dat">Available Unit</div><span>188</span>
                      </li>
                      <li>
                        <div class="list-dat rat">Rating :</div><span><v-icon size="16" class="mr-1"> mdi-star </v-icon>4.5</span>
                      </li>
                      <li>
                        <div class="list-dat">Capital ROI :</div><span>+11.84 %</span>
                      </li>
                    </ul>
                  </div>
                  <div class="footer_card">
                    <span class="token">$65/token</span>
                    <span class="units">43 Tokens Left</span>
                  </div>
              </div>
            </v-col>
            <v-col lg="3">
              <div class="property-card">
                <div class="prop-img">
                  <div class="tag_prop">New Listing</div>
                  <div class="wishlist"><v-icon size="24" class="ml-2"> mdi-heart-outline  </v-icon></div>
                    <swiper
                    :pagination="{
                      dynamicBullets: true,
                    }"
                    :modules="modules"
                    class="mySwiper">
                      <swiper-slide>
                        <div class="prop-img">
                          <img src="@images/img/property/slide1.png" alt="">
                        </div>
                      </swiper-slide>
                      <swiper-slide>
                          <img src="@images/img/property/slide1.png" alt="">
                      </swiper-slide>
                      <swiper-slide>
                          <img src="@images/img/property/slide1.png" alt="">
                      </swiper-slide>
                    </swiper>
                  </div>
                  <div class="content">
                    <h2>18474 Glenmore St Redford, MI 48240</h2>
                    <ul>
                      <li>
                        <div class="list-dat">Available Unit</div><span>188</span>
                      </li>
                      <li>
                        <div class="list-dat rat">Rating :</div><span><v-icon size="16" class="mr-1"> mdi-star </v-icon>4.5</span>
                      </li>
                      <li>
                        <div class="list-dat">Capital ROI :</div><span>+11.84 %</span>
                      </li>
                    </ul>
                  </div>
                  <div class="footer_card">
                    <span class="token">$65/token</span>
                    <span class="units">43 Tokens Left</span>
                  </div>
              </div>
            </v-col>
          </v-row>
        </div>
      </v-container>
    </div>
    <!--==========================================-->
    <div class="property_section pb-10">
      <v-container>
        <div class="section_heading">
            <h2>1 Bedroom Apartments</h2>
            <a href="">See All</a>
        </div>
        <div class="property_listing">
          <v-row>
            <v-col lg="3">
              <div class="property-card">
                <div class="prop-img">
                  <div class="tag_prop">New Listing</div>
                  <div class="wishlist"><v-icon size="24" class="ml-2"> mdi-heart-outline  </v-icon></div>
                    <swiper
                    :pagination="{
                      dynamicBullets: true,
                    }"
                    :modules="modules"
                    class="mySwiper">
                      <swiper-slide>
                        <div class="prop-img">
                          <img src="@images/img/property/slide1.png" alt="">
                        </div>
                      </swiper-slide>
                      <swiper-slide>
                          <img src="@images/img/property/slide1.png" alt="">
                      </swiper-slide>
                      <swiper-slide>
                          <img src="@images/img/property/slide1.png" alt="">
                      </swiper-slide>
                    </swiper>
                  </div>
                  <div class="content">
                    <h2>18474 Glenmore St Redford, MI 48240</h2>
                    <ul>
                      <li>
                        <div class="list-dat">Available Unit</div><span>188</span>
                      </li>
                      <li>
                        <div class="list-dat rat">Rating :</div><span><v-icon size="16" class="mr-1"> mdi-star </v-icon>4.5</span>
                      </li>
                      <li>
                        <div class="list-dat">Capital ROI :</div><span>+11.84 %</span>
                      </li>
                    </ul>
                  </div>
                  <div class="footer_card">
                    <span class="token">$65/token</span>
                    <span class="units">43 Tokens Left</span>
                  </div>
              </div>
            </v-col>
            <v-col lg="3">
              <div class="property-card">
                <div class="prop-img">
                  <div class="tag_prop">New Listing</div>
                  <div class="wishlist"><v-icon size="24" class="ml-2"> mdi-heart-outline  </v-icon></div>
                    <swiper
                    :pagination="{
                      dynamicBullets: true,
                    }"
                    :modules="modules"
                    class="mySwiper">
                      <swiper-slide>
                        <div class="prop-img">
                          <img src="@images/img/property/slide1.png" alt="">
                        </div>
                      </swiper-slide>
                      <swiper-slide>
                          <img src="@images/img/property/slide1.png" alt="">
                      </swiper-slide>
                      <swiper-slide>
                          <img src="@images/img/property/slide1.png" alt="">
                      </swiper-slide>
                    </swiper>
                  </div>
                  <div class="content">
                    <h2>18474 Glenmore St Redford, MI 48240</h2>
                    <ul>
                      <li>
                        <div class="list-dat">Available Unit</div><span>188</span>
                      </li>
                      <li>
                        <div class="list-dat rat">Rating :</div><span><v-icon size="16" class="mr-1"> mdi-star </v-icon>4.5</span>
                      </li>
                      <li>
                        <div class="list-dat">Capital ROI :</div><span>+11.84 %</span>
                      </li>
                    </ul>
                  </div>
                  <div class="footer_card">
                    <span class="token">$65/token</span>
                    <span class="units">43 Tokens Left</span>
                  </div>
              </div>
            </v-col>
            <v-col lg="3">
              <div class="property-card">
                <div class="prop-img">
                  <div class="tag_prop">New Listing</div>
                  <div class="wishlist"><v-icon size="24" class="ml-2"> mdi-heart-outline  </v-icon></div>
                    <swiper
                    :pagination="{
                      dynamicBullets: true,
                    }"
                    :modules="modules"
                    class="mySwiper">
                      <swiper-slide>
                        <div class="prop-img">
                          <img src="@images/img/property/slide1.png" alt="">
                        </div>
                      </swiper-slide>
                      <swiper-slide>
                          <img src="@images/img/property/slide1.png" alt="">
                      </swiper-slide>
                      <swiper-slide>
                          <img src="@images/img/property/slide1.png" alt="">
                      </swiper-slide>
                    </swiper>
                  </div>
                  <div class="content">
                    <h2>18474 Glenmore St Redford, MI 48240</h2>
                    <ul>
                      <li>
                        <div class="list-dat">Available Unit</div><span>188</span>
                      </li>
                      <li>
                        <div class="list-dat rat">Rating :</div><span><v-icon size="16" class="mr-1"> mdi-star </v-icon>4.5</span>
                      </li>
                      <li>
                        <div class="list-dat">Capital ROI :</div><span>+11.84 %</span>
                      </li>
                    </ul>
                  </div>
                  <div class="footer_card">
                    <span class="token">$65/token</span>
                    <span class="units">43 Tokens Left</span>
                  </div>
              </div>
            </v-col>
            <v-col lg="3">
              <div class="property-card">
                <div class="prop-img">
                  <div class="tag_prop">New Listing</div>
                  <div class="wishlist"><v-icon size="24" class="ml-2"> mdi-heart-outline  </v-icon></div>
                    <swiper
                    :pagination="{
                      dynamicBullets: true,
                    }"
                    :modules="modules"
                    class="mySwiper">
                      <swiper-slide>
                        <div class="prop-img">
                          <img src="@images/img/property/slide1.png" alt="">
                        </div>
                      </swiper-slide>
                      <swiper-slide>
                          <img src="@images/img/property/slide1.png" alt="">
                      </swiper-slide>
                      <swiper-slide>
                          <img src="@images/img/property/slide1.png" alt="">
                      </swiper-slide>
                    </swiper>
                  </div>
                  <div class="content">
                    <h2>18474 Glenmore St Redford, MI 48240</h2>
                    <ul>
                      <li>
                        <div class="list-dat">Available Unit</div><span>188</span>
                      </li>
                      <li>
                        <div class="list-dat rat">Rating :</div><span><v-icon size="16" class="mr-1"> mdi-star </v-icon>4.5</span>
                      </li>
                      <li>
                        <div class="list-dat">Capital ROI :</div><span>+11.84 %</span>
                      </li>
                    </ul>
                  </div>
                  <div class="footer_card">
                    <span class="token">$65/token</span>
                    <span class="units">43 Tokens Left</span>
                  </div>
              </div>
            </v-col>
          </v-row>
        </div>
      </v-container>
    </div>
    <!--==========================================-->
    <FooterComp/>
    <!--==========================================-->
  </div>
</template>

<!-- <script>
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/pagination";
import { Pagination } from "swiper";

import HeaderComp from "../components/header.vue";
import FooterComp from "../components/footer.vue";
export default {
  components: {
    Swiper,
    SwiperSlide,
    HeaderComp,
    FooterComp
  },
  setup() {
    return {
      modules: [Pagination],
      dialog: false,
    };
  },
}
</script> -->
<script lang="ts" setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/pagination";
import { Pagination } from "swiper";

import HeaderComp from "../components/header.vue";
import FooterComp from "../components/footer.vue";

const isDialogVisible = ref(false)
const isDialogTwoShow = ref(false)
const modules = [Pagination]
</script>

