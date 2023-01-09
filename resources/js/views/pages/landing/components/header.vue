<template>
  <div class="realestate_upper_header">
    <div class="container">
      <div class="up_head">
        <ul class="upper_nav">
          <li  class="upper_nav_item">
            <RouterLink :to="{ name: 'property' }" class="upper_nav_link active"> Properties </RouterLink>
          </li>
          <li  class="upper_nav_item">
            <RouterLink :to="{ name: 'login' }"  class="upper_nav_link"> Condo Finder </RouterLink>
          </li>
          <li  class="upper_nav_item">
            <RouterLink :to="{ name: 'login' }" class="upper_nav_link"> Area Guides </RouterLink>
          </li>
          <li  class="upper_nav_item">
            <RouterLink :to="{ name: 'login' }" class="upper_nav_link"> Blog </RouterLink>
          </li>
        </ul>
        <div class="right_upper_side">
          <div class="search_field mr-2">
            <VTextField append-inner-icon="mdi-magnify" placeholder="Property ID"  />
          </div>
          <div class="add_btn_prop mr-2">
            <v-btn add_btn_prop>+ Add Property</v-btn>
          </div>
          <div class="user_auth_nav">
            <RouterLink :to="{ name: 'login' }">
              <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" />
              </svg>
              <RouterLink :to="{ name: 'login' }" class="sign_btn"> Signup </RouterLink>
            </RouterLink>
          </div>
        </div>
      </div>
    </div>
  </div>
  <header class="realestate_head">
    <div class="container">
      <div class="realestate_header">
        <div class="realestate_brand">
          <a href="" class="realestate_logo">
            <img src="@images/img/logo.png" alt="">
          </a>
        </div>
        <div class="realestate_nav">
          <ul class="realestate_navigation">
            <li class="realestate_nav_item realestate_has_sub_menu">
              <a href="" class="realestate_nav_link">Buy <v-icon size="14" class="ml-1"> mdi-menu-right </v-icon></a>
              <ul class="realestate_sub_menu">
                <li class="realestate_nav_item">
                  <a href="" class="realestate_nav_link">COndo’s</a>
                </li>
                <li class="realestate_nav_item">
                  <a href="" class="realestate_nav_link">Home</a>
                </li>
                <li class="realestate_nav_item">
                  <a href="" class="realestate_nav_link">Commercial</a>
                </li>
              </ul>
            </li>
            <li class="realestate_nav_item">|</li>
            <li class="realestate_nav_item">
              <a href="" class="realestate_nav_link">Rent</a>
            </li>
            <li class="realestate_nav_item">|</li>
            <li class="realestate_nav_item">
              <a href="" class="realestate_nav_link">Agents</a>
            </li>
            <li class="realestate_nav_item">|</li>
            <li class="realestate_nav_item">
              <a href="" class="realestate_nav_link">New Projects</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  
};
</script>
