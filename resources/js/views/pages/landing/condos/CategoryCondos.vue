<template>
  <div class="condos_listing property_list real_Section">
    <div class="container">
      <div v-if="props.condos.length > 0">
        <VRow>
          <VCol lg="4" v-for="(condo, index) in condosFilter(props.condos)" :key="index">
            <div class="property-card">
              <div class="prop-img">
                <div class="property_tags">
                  <div class="hot_tag" v-if="condo.category == 'Hot'">
                    <v-icon size="24"> mdi-fire</v-icon>
                  </div>
                  <div :class="`${getCategory(condo.category)}`">
                    {{ condo.category }}
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
                    {{ condo.location }}</span>
                  <span class="dev_tag"><v-icon size="16" class=""> mdi-office-building </v-icon>Aspen Ridge</span>
                </div>
                <div class="prop-img">
                  <img src="@images/img/condos/condo14.jpg" alt="" />
                </div>
              </div>
              <div class="property_body">
                <h2>
                  <RouterLink :to="{
                    name: 'landing-condos-preview-detail',
                    params: { detail: condo.uuid },
                  }">
                    {{ condo.title }}
                  </RouterLink>
                </h2>
                <div class="property_price">
                  <p>Chicago, IL 60610</p>
                  <h3><span>$</span> {{ condo.price }}</h3>
                </div>
                <div class="property_short_desc">
                  <p>
                    {{ condo.description }}
                  </p>
                </div>
              </div>
              <VDivider/>
              <div class="footer_card">
                <ul>
                  <li>
                    <div class="property_card_info">
                      <v-icon size="16" class="mr-1"> mdi-shape-square-plus </v-icon>
                      <span>{{ condo?.area_size }} Sqft</span>
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
      <VCol v-else>Not Record Found</VCol>
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  category: {
    type: Boolean,
    required: false,
  },
  condos: {
    type: Object,
    required: true,
  },
});

const getCategory = (category) => {
  if (category === "Featured") {
    return "blue_tag tag featured_tag";
  } else if (category === "New Listing") {
    return "green_tag tag featured_tag";
  } else if (category === "Coming Soon" || category === "Sold Out") {
    return "danger_tag tag sold_tag";
  }
};

const condosFilter = (condos) => {
  if (props.category != "all") {
    const list = condos.filter((x) => {
      return x.category === props.category;
    });
    return list;
  } else {
    return condos;
  }
};
</script>
