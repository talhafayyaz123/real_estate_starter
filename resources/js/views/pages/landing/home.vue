<template>
  <div>
    <!--==========================================-->
    <HeaderComp />
    <!--==========================================-->
    <section class="fut_banner">
      <div class="overlay"></div>
      <VContainer>
        <div class="fut_filters">
          <div class="mb-5">
            <v-btn class="mr-2">Buy</v-btn>
            <v-btn class="">Rent</v-btn>
          </div>
          <div class="filter">
            <div class="filter_header">
              <v-row class="align-end">
                <v-col sm="3">
                  <label for="">Location</label>
                  <v-select placeholder="City"></v-select>
                </v-col>
                <v-col sm="3">
                  <label for="">Area</label>
                  <input class="input" placeholder="Area" />
                </v-col>
                <v-col sm="3">
                  <label for="">Property</label>
                  <v-select placeholder="Property Type"></v-select>
                </v-col>
                <v-col sm="2">
                  <label for="">Square Footage</label>
                  <input class="input" placeholder="i.e 2600" />
                </v-col>
                <v-col sm="1">
                  <v-btn>Find</v-btn>
                </v-col>
              </v-row>
              <!-- <v-row class="mt-3">
                <v-col sm="6">
                  <label for="">Property</label>
                  <v-select placeholder="Property Type"></v-select>
                </v-col>
                <v-col sm="6">
                  <label for="">Square Footage</label>
                  <input class="input" placeholder="i.e 2600"/>
                </v-col>
              </v-row> -->
            </div>
          </div>
        </div>
      </VContainer>
    </section>
    <!--==========================================-->
    <section class="listing-property">
      <v-container>
        <div>
          <v-row>
            <v-col xl="3" lg="4" md="4">
              <div class="property_card">
                <div class="propCard_header">
                  <img src="@images/img/33.png" alt="" />
                  <div class="overlay"></div>
                  <div class="featured_tag">
                    <span>Featured</span>
                  </div>
                  <div class="newListing_tag">
                    <span>New Listing</span>
                  </div>
                </div>
                <div class="propCard_body">
                  <div>
                    <h2>1339 E 115th St</h2>
                    <p>Cleveland, OH 44106</p>
                  </div>
                  <div>
                    <span>8.8% IRR</span>
                    <h2>8.8% CoC</h2>
                  </div>
                </div>
                <div class="propCard_footer">
                  <span>Available: 1,998 tokens at $50</span>
                </div>
              </div>
            </v-col>
          </v-row>
        </div>
      </v-container>
    </section>
  </div>
</template>

<script>
import HeaderComp from "./components/header.vue";
export default {
  components: {
    HeaderComp,
  },
};
</script>
