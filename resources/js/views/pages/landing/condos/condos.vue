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
            <CategoryCondos category="all" :condos="condos" />

            <!-- <VDivider />

            <VCardText class="d-flex align-center flex-wrap gap-4 py-3">

              <span class="text-sm text-disabled">
                {{ paginationData }}
              </span>

              <VSpacer />

              <VPagination
                v-model="currentPage"
                size="small"
                :total-visible="2"
                :length="totalPage"
              />
            </VCardText> -->
          </VWindowItem>
          <!--====================================================================-->
          <!--====================================================================-->
          <!--====================================================================-->
          <VWindowItem>
            <CategoryCondos category="Hot" :condos="condos" />
          </VWindowItem>
          <!--====================================================================-->
          <!--====================================================================-->
          <!--====================================================================-->
          <VWindowItem>
            <CategoryCondos category="Featured" :condos="condos" />
          </VWindowItem>
          <!--====================================================================-->
          <!--====================================================================-->
          <!--====================================================================-->
          <VWindowItem>
            <CategoryCondos category="New Listing" :condos="condos" />
          </VWindowItem>
          <!--====================================================================-->
          <!--====================================================================-->
          <!--====================================================================-->
          <VWindowItem>
            <CategoryCondos category="Coming Soon" :condos="condos" />
          </VWindowItem>
          <!--====================================================================-->
          <!--====================================================================-->
          <!--====================================================================-->
          <VWindowItem>
            <CategoryCondos category="Sold Out" :condos="condos" />
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
import CategoryCondos from "./CategoryCondos.vue";
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
const selectedRows = ref([]);
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
      totalPage.value = response.data.data.perPage;
      totalCondos.value = response.data.data.condos.total;
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

watchEffect(fetchCondos);
watchEffect(() => {
  if (currentPage.value > totalPage.value) currentPage.value = totalPage.value;
});

// 👉 Computing pagination data
/* const paginationData = computed(() => {
  const firstIndex = condos.value.length
    ? (currentPage.value - 1) * rowPerPage.value + 1
    : 0;
  const lastIndex =
    condos.value.length + (currentPage.value - 1) * rowPerPage.value;

  return `Showing ${firstIndex} to ${lastIndex} of ${totalCondos.value} entries`;
}); */
</script>
