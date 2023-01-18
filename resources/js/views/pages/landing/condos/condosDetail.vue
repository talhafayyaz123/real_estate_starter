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
                <h5>Address</h5>
                <span>241 Church St Toronto, ON</span>
              </li>
              <li>
                <h5>Prices</h5>
                <h4>$ 595,990+</h4>
              </li>
              <li>
                <h5>Occupancy</h5>
                <span>2027</span>
              </li>
              <li>
                <h5>Developer</h5>
                <span><a href="">Graywood Developments</a></span>
              </li>
              <li>
                <h5>2 Bed Starting</h5>
                <span>$999,990</span>
              </li>
              <li>
                <h5>1 Bed Starting</h5>
                <span>$624,990</span>
              </li>
            </ul>
          </div>
        </VCol>
        <VCol md="6">
          <div class="condos_images">
            <swiper :navigation="true" :pagination="true" :autoplay="{ delay: 5000, disableOnInteraction: false, }"
              :modules="modules" class="property_img_slider">
              <swiper-slide>
                <img src="@images/img/condos/condo2.jpg" alt="">
              </swiper-slide>
              <swiper-slide>
                <img src="@images/img/condos/condo3.jpg" alt="">
              </swiper-slide>
              <swiper-slide>
                <img src="@images/img/condos/condo4.jpg" alt="">
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
                </VWindowItem>
                <VWindowItem>
                  <div class="condos_about">
                    <h2>About The Essery Condos Development</h2>
                    <p>The‌ ‌Essery Condos by‌ Aspen Ridge Homes is‌ ‌a‌ ‌new condo development ‌at‌ 109 Niagara St, Toronto, Ontario, M5v 1c3.‌ ‌This‌ project ‌offers‌ ‌a‌ ‌low-rise‌ ‌building ‌of ‌4 storeys.‌ ‌The‌ ‌property is currently under pre-construction status and will also be completed by 2025.</p>
                    <p>The  Essery Condos has CORE Architects & Bernard Watt Architect as its architects and interior designers. This new condo project will reside in the central junction of Tecumseth Street and Wellington Street West. Thus, buyers will get all the amenities in just a short walk due to downtown Toronto nearby. So, what are you waiting for?</p>
                    <p>Contact our real estate professionals to know everything about the Essery condos. Also, explore the condo completion date, unit price list, latest market listings, average sale price per suite rent per unit, floor plans, number of units, and additional information.</p>
                    <h2>Features and Amenities</h2>
                    <p>Buyers of the Essery at 109 Niagara Street will receive floor plans from one-bedroom, two-bedroom, and three-bedroom options.</p>
                    <p>Moreover, this new project will have all the beautiful amenities and finishes that a modern property must-have. You can request to receive the complete features and amenities of the Essery condos</p>
                    <p>So, what are you waiting for? Send us a request to get the most up-to-date knowledge on the Essery condos highlights. Further, know the maintenance prices, apartment sold history, parking charges, security fees, and other details.</p>
                    <h2>Location and Neighbourhood</h2>
                    <p>Located in Toronto’s Niagara area, the Essery condos provide potential homeowners with a wide range of amenities and settings. You will now be in the fashion district of Toronto. The Rogers Centre, Roy Thompson Hall, and Bell Lightbox are within walking distance of this lovely site.</p>
                    <p>Students may readily access classes at the University of Toronto, only a 10-minute drive away. Shops such as Gotstyle, Urban Mode, Loblaws, Bulk Barn, and Sobeys are nearby. Stanley Park, Coronation Park, Victoria Square Park, and Waterfront Children’s Garden are the closest to spending time.</p>
                    <p>Likewise, for entertainment, there is CN TOWER, Skydome, The Princess of Whales Theatre and Creative Blueprint. And for the schools, there are Odgen Junior Public School, Ryerson Community School, and Heydon Park Secondary School.</p>
                    <h2>Accessibility and Highlights</h2>
                    <p>The location of Essery development has an excellent 90/100 walk score and a 96/100 bike score. Several bus lines and rail lines are available within one kilometre from m5v 1c3. And, drivers have their Gardiner Expressway to move in and out of the city.</p>
                    <h2>About the Developer</h2>
                    <p>Aspen Ridge Homes is one of the most excellent condominium builders in the Greater Toronto area. This Toronto real estate developer has extensive experience in contemporary condominiums and resale properties.</p>
                    <p>The group has maintained a competitive edge in the market through its wide network of developers and agents.</p>
                    <p>Through its close connections, Aspen can maintain its quality in its services, thus offering the best of works. Apart from being the Essery condos developer, the firm has also constructed Anchor Woods, New Seaton, and Crest at Crosstown.</p>
                    <p>Are you interested in other condominium projects in Toronto, Ontario, or nearby cities? Register on our site or send a request to get all the details today!</p>
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
            <p>Your email address will not be published. Required fields are marked *</p>
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
                  <VBtn type="submit">
                    Submit
                  </VBtn>
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
                  <VSelect :items="items" :rules="[requiredValidator]" label="Are you a Realtor?" name="select"/>
                </VCol>

                <VCol cols="12" class="text-center">
                  <VBtn type="submit">
                    Send
                  </VBtn>
                </VCol>
              </VRow>
            </VForm>
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
/////////////////////////////////////////////////////////////////////
import HeaderComp from '../components/header.vue';
import FooterComp from '../components/footer.vue';
import breadcrumpHeader from '../components/breadcrumpHeader.vue';
/////////////////////////////////////////////////////////////////////
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import { Pagination, Navigation, Autoplay } from "swiper";
const modules = [Pagination, Navigation, Autoplay];
/////////////////////////////////////////////////////////////////////
const CondosTab = ref(0);
const items = ['Yes', 'No']
/////////////////////////////////////////////////////////////////////

</script>
