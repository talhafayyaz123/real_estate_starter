<template>
  <div>
    <!--==========================================-->
    <HeaderComp />
    <!--==========================================-->
    <section class="fut_banner">
      <div class="overlay"></div>
      <img class="banner-img" src="@images/img/digital.png" alt="">
        <div class="fut_filters">
          <h1>Find  Real Estate and Get Your <br> Dream Space</h1>
          <p>We are a real estate agency that will help you find the best residence you dream of, let’s <br> discuss for your dream house?</p>
          <div class="filter">
            <div class="filter_header">
              <v-btn class="filter_tab_btn active">Sell</v-btn>
              <v-btn class="filter_tab_btn">Rent</v-btn>
            </div>
            <div class="filter_body">
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
          </div>

        </div>
    </section>
    <!--==========================================-->
    <section class="explore_more">
      <div class="container">
        <div class="section_heading">
          <h2>Explore More</h2>
        </div>
        <v-row>
          <v-col lg="3" md="6">
            <a href="">
              <div class="explore_box yellow">
                <div class="ex_icon_box ">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42"><g data-name="Group 36569"><path fill="none" d="M0 0h42v42H0z"/><path fill="#f5ca71" d="M40.4 38V18.7a1.2 1.2 0 0 0-1.1-1.3h-3.8a1.2 1.2 0 0 0-1.2 1.2v8.9h-4.4l-3.8-4h-3.8a.9.9 0 0 0-1 1V38h-7V11.3a1.4 1.4 0 0 0 1.5-1.3h13v3.2a.7.7 0 0 0 .6.7h1a.7.7 0 0 0 .7-.7V10h4a.9.9 0 0 0 .6-1.5l-5-5a2.7 2.7 0 0 0-2-.8h-13v-.2a1.2 1.2 0 0 0-1-1.2H7a1.2 1.2 0 0 0-1.2 1.2v.2H2.3A1.5 1.5 0 0 0 .8 4.2v4A1.5 1.5 0 0 0 2.3 10h3.5A1.4 1.4 0 0 0 7 11.3V38H.9a.5.5 0 0 0-.5.5V40a.5.5 0 0 0 .5.5h40.3a.5.5 0 0 0 .5-.5v-1.3a.6.6 0 0 0-.6-.6zM29 5l2.4 2.5h-4.9zm-3.5 0l-2.2 2.5L20.9 5zm-9.7 0h1.5l2.4 2.5h-4zm-10 2.5H3.2V5h2.6zM12 38H9.6v-5.6H12zm0-8H9.6v-5.5H12zm0-8H9.6v-5.4H12zm0-8H9.6v-2.8H12zm16.9 21.7h-2.4V32h2.4zm7.4 0h-2.4V32h2.4z"/></g></svg>
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
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42"><g data-name="Group 36567"><path fill="none" d="M0 0h42v42H0z"/><g fill="#fab0a2"><path d="M39.54 36.83L36.6 33.9a9.58 9.58 0 1 0-2.7 2.7l2.95 2.94a1.91 1.91 0 1 0 2.7-2.7zm-16.63-8.2a5.73 5.73 0 1 1 5.73 5.73 5.73 5.73 0 0 1-5.73-5.73z"/><path d="M17.18 28.64a11.4 11.4 0 0 1 13.37-11.3v-2.11a1.87 1.87 0 0 0 1.55-.76 1.91 1.91 0 0 0-.44-2.67L18.3 2.26a1.91 1.91 0 0 0-2.22 0L2.7 11.8a1.91 1.91 0 0 0 1.1 3.46v15.29a1.91 1.91 0 0 0 1.92 1.9h12.13a11.38 11.38 0 0 1-.67-3.81zm-3.82-15.28a1.91 1.91 0 0 1 1.9-1.91h3.83a1.91 1.91 0 0 1 0 3.82h-3.82a1.91 1.91 0 0 1-1.9-1.91z"/></g></g></svg>
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
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42"><g data-name="Group 34707"><g data-name="Group 36663"><path fill="none" d="M0 0h42v42H0z"/><g data-name="Group 36662"><path fill="none" d="M2 2h38v38H2z"/><path fill="#7ad0c9" d="M19.54 16.61V4.92A2.92 2.92 0 0 0 16.6 2H4.92A2.92 2.92 0 0 0 2 4.92v11.7a2.92 2.92 0 0 0 2.92 2.92h11.7a2.92 2.92 0 0 0 2.92-2.93zm-11.7-7.3l5.85.03a1.46 1.46 0 1 1 0 2.93H7.85a1.46 1.46 0 0 1 0-2.92zm8.77 13.16H4.92A2.92 2.92 0 0 0 2 25.38v11.7A2.92 2.92 0 0 0 4.92 40h11.7a2.92 2.92 0 0 0 2.92-2.93v-11.7a2.92 2.92 0 0 0-2.94-2.91zM14.72 35.2a1.46 1.46 0 0 1-2.06 0l-1.9-1.9-1.88 1.9a1.46 1.46 0 1 1-2.07-2.07l1.9-1.9-1.86-1.88a1.46 1.46 0 1 1 2.07-2.07l1.9 1.9 1.88-1.89a1.46 1.46 0 1 1 2.04 2.07l-1.9 1.9 1.9 1.88a1.46 1.46 0 0 1 0 2.07zm7.74-9.82v11.7A2.92 2.92 0 0 0 25.38 40h11.7A2.92 2.92 0 0 0 40 37.07v-11.7a2.92 2.92 0 0 0-2.94-2.91H25.38a2.92 2.92 0 0 0-2.92 2.92zm11.7 8.77H28.3a1.46 1.46 0 1 1 0-2.92h5.85a1.46 1.46 0 1 1 0 2.92zm0-4.38H28.3a1.46 1.46 0 0 1 0-2.93h5.85a1.46 1.46 0 1 1 0 2.93zm-8.78-10.23h11.7A2.92 2.92 0 0 0 40 16.62V4.92A2.92 2.92 0 0 0 37.06 2H25.38a2.92 2.92 0 0 0-2.92 2.92v11.7a2.92 2.92 0 0 0 2.92 2.92zM28.3 9.31l1.46.03V7.86a1.46 1.46 0 0 1 2.92 0v1.46h1.46a1.46 1.46 0 1 1 0 2.93H32.7v1.46a1.46 1.46 0 1 1-2.92 0v-1.47h-1.46a1.46 1.46 0 1 1 0-2.92z"/></g></g></g></svg>
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
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.73 22.73"><g data-name="Group 48552"><path fill="none" d="M.37 11.37a11 11 0 1 1 22 0 11 11 0 0 1-22 0z"/><path fill="#8775ad" d="M15.38 7.29l2.38 2.32-5.07 4.94L8.5 10.5.82 18l1.49 1.42 6.23-6.07 4.15 4.05 6.54-6.37 2.38 2.32V7.3z"/><path fill="none" d="M0 0h22.73v22.73H0z"/></g></svg>
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
    <!--==========================================-->
    <section class="listing-property">
      <div class="container">
        <div class="section_heading">
          <h2>Hot Projects</h2>
        </div>
        <v-row>
          <v-col lg="4">
            <div class="listing_card">
              <div class="listing_header">
                <img src="@images/img/11.png" alt="">
                <div class="overlay"></div>
                <div class="listing_heading">
                  <h2>The Landing at One Chestnut</h2>
                  <p>1 Chestnut Street, Nashua, NH 03060</p>
                  <div class="invest">Invest</div>
                </div>
              </div>
              <div class="listing_body">
                <div class="listing_price">$250.00 / Sp.f</div>
                <ul class="listing_detail">
                  <li class="">
                    <span>Valuation</span>
                    <span>$17.8M</span>
                  </li>
                  <li class="">
                    <span>Asset Type</span>
                    <span>Mixed-Use Industrial</span>
                  </li>
                  <li class="">
                    <span>Year Built</span>
                    <span>1915</span>
                  </li>
                  <li class="">
                    <span>Sponsor</span>
                    <span>Manzo Freeman Development</span>
                  </li>
                  <li class="">
                    <span>Leasable Area</span>
                    <span>430,804 SF</span>
                  </li>
                </ul>
              </div>
            </div>
          </v-col>
          <v-col lg="4">
            <div class="listing_card">
              <div class="listing_header">
                <img src="@images/img/22.png" alt="">
                <div class="overlay"></div>
                <div class="listing_heading">
                  <h2>The Landing at One Chestnut</h2>
                  <p>1 Chestnut Street, Nashua, NH 03060</p>
                  <div class="invest">Invest</div>
                </div>
              </div>
              <div class="listing_body">
                <div class="listing_price">$250.00 / Sp.f</div>
                <ul class="listing_detail">
                  <li class="">
                    <span>Valuation</span>
                    <span>$17.8M</span>
                  </li>
                  <li class="">
                    <span>Asset Type</span>
                    <span>Mixed-Use Industrial</span>
                  </li>
                  <li class="">
                    <span>Year Built</span>
                    <span>1915</span>
                  </li>
                  <li class="">
                    <span>Sponsor</span>
                    <span>Manzo Freeman Development</span>
                  </li>
                  <li class="">
                    <span>Leasable Area</span>
                    <span>430,804 SF</span>
                  </li>
                </ul>
              </div>
            </div>
          </v-col>
          <v-col lg="4">
            <div class="listing_card">
              <div class="listing_header">
                <img src="@images/img/33.png" alt="">
                <div class="overlay"></div>
                <div class="listing_heading">
                  <h2>The Landing at One Chestnut</h2>
                  <p>1 Chestnut Street, Nashua, NH 03060</p>
                  <div class="invest">Invest</div>
                </div>
              </div>
              <div class="listing_body">
                <div class="listing_price">$250.00 / Sp.f</div>
                <ul class="listing_detail">
                  <li class="">
                    <span>Valuation</span>
                    <span>$17.8M</span>
                  </li>
                  <li class="">
                    <span>Asset Type</span>
                    <span>Mixed-Use Industrial</span>
                  </li>
                  <li class="">
                    <span>Year Built</span>
                    <span>1915</span>
                  </li>
                  <li class="">
                    <span>Sponsor</span>
                    <span>Manzo Freeman Development</span>
                  </li>
                  <li class="">
                    <span>Leasable Area</span>
                    <span>430,804 SF</span>
                  </li>
                </ul>
              </div>
            </div>
          </v-col>
        </v-row>
      </div>
    </section>
    <!--==========================================-->
    <section class="listing-property">
      <div class="container">
        <div class="section_heading">
          <h2>Hot Projects</h2>
        </div>
        <v-row>
          <v-col lg="4" md="4">
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
          <v-col lg="4" md="4">
            <div class="property_card">
              <div class="propCard_header">
                <img src="@images/img/11.png" alt="" />
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
          <v-col lg="4" md="4">
            <div class="property_card">
              <div class="propCard_header">
                <img src="@images/img/44.png" alt="" />
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
    </section>
    <!--==========================================-->
    <section class="listing-property">
      <div class="container">
        <div>
          <v-row>
            <v-col
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
      </div>
    </section>
    <!--==========================================-->
    <section class="our-property">
      <div class="container">
        <div class="section_heading">
          <h2>Our Partners</h2>
        </div>
        <div class="partners">
            <a href="">
              <img src="@images/img/partner1.png" alt=""/>
            </a>
            <a href="">
              <img src="@images/img/partner5.png" alt=""/>
            </a>
            <a href="">
              <img src="@images/img/partner2.png" alt=""/>
            </a>
            <a href="">
              <img src="@images/img/partner3.png" alt=""/>
            </a>
            <a href="">
              <img src="@images/img/partner4.png" alt=""/>
            </a>
        </div>
      </div>
    </section>
    <!--==========================================-->
    <FooterComp/>
    <!--==========================================-->
  </div>
</template>

<script setup>
import { useHomeStore } from "../useHomeStore";
import HeaderComp from "../components/header.vue";
import FooterComp from "../components/footer.vue";

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
