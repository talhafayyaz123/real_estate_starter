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
                  <VSelect
                    v-model="market"
                    label="Market"
                    :items="['All Market', 'UAE', 'Canada', 'USA', 'KSA']"
                  />
                </v-col>
                <v-col sm="3">
                  <VSelect
                    v-model="land"
                    label="Land"
                    :items="['Residential', 'Commercial', 'Industrial']"
                  />
                </v-col>
                <v-col sm="3">
                  <VSelect
                    v-model="type"
                    label="Type"
                    :items="['Plaza', 'Office', 'Hotel', 'Apartment', 'Condo']"
                  />
                </v-col>

                <v-col sm="1">
                  <v-btn @click="fetchUsers">Find</v-btn>
                </v-col>
              </v-row>
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
            <v-col
              xl="3"
              lg="4"
              md="4"
              v-for="(property, index) in users"
              v-if="users.length"
            >
              <div class="property_card">
                <div class="propCard_header">
                  <img src="@images/img/33.png" alt="" />
                  <div class="overlay"></div>
                  <div class="featured_tag">
                    <span>Featured</span>
                  </div>
                  <div class="newListing_tag">
                    <span> {{ property.land }}</span>
                  </div>
                </div>
                <div class="propCard_body">
                  <div>
                    <h2>{{ property.area_size }} (sq.ft)</h2>
                    <p>{{ property.market }}</p>
                  </div>
                  <div>
                    <span>{{ property.type }}</span>
                  </div>
                </div>
                <div class="propCard_footer">
                  <span>Available : ${{ property.price }}</span>
                </div>
              </div>
            </v-col>

            <v-col v-else>Not Record Found</v-col>
          </v-row>
        </div>
      </v-container>
    </section>
  </div>
</template>

<script setup>
import { useHomeStore } from "../useHomeStore";
import HeaderComp from "./components/header.vue";

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

// 👉 Fetching users
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
</script>
