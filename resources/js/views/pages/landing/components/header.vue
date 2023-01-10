<template>
  <div class="realestate_upper_header">
    <div class="container">
      <div class="up_head">
        <ul class="upper_nav">
          <li class="upper_nav_item">
            <RouterLink
              :to="{ name: 'property' }"
              class-active="active"
              class="upper_nav_link"
            >
              Properties
            </RouterLink>
          </li>
          <li class="upper_nav_item">
            <RouterLink
              :to="{ name: 'login' }"
              class-active="active"
              class="upper_nav_link"
            >
              Condo Finder
            </RouterLink>
          </li>
          <li class="upper_nav_item">
            <RouterLink
              :to="{ name: 'login' }"
              class-active="active"
              class="upper_nav_link"
            >
              Area Guides
            </RouterLink>
          </li>
          <li class="upper_nav_item">
            <RouterLink
              :to="{ name: 'login' }"
              class-active="active"
              class="upper_nav_link"
            >
              Blog
            </RouterLink>
          </li>
          <li class="upper_nav_item">
            <RouterLink
              :to="{ name: 'login' }"
              class-active="active"
              class="upper_nav_link"
            >
              Maps
            </RouterLink>
          </li>
          <li class="upper_nav_item">
            <RouterLink
              :to="{ name: 'login' }"
              class-active="active"
              class="upper_nav_link"
            >
              Tools
            </RouterLink>
          </li>
        </ul>

        <div class="right_upper_side">
          <div class="user_auth_nav">
            <RouterLink :to="{ name: 'login' }" v-if="!isLoggedIn">
              <svg style="width: 24px; height: 24px" viewBox="0 0 24 24">
                <path
                  fill="currentColor"
                  d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z"
                />
              </svg>
            </RouterLink>
            <RouterLink :to="{ name: 'dashboards-analytics' }" v-else> Dashboard </RouterLink>
          </div>
        </div>
      </div>
    </div>
  </div>
  <header class="realestate_head">
    <div class="container">
      <div class="realestate_header">
        <div class="realestate_brand">
          <RouterLink :to="{ name: 'home' }" class="realestate_logo">
            <img src="@images/img/logo.png" alt="" />
          </RouterLink>
        </div>
        <div class="realestate_nav">
          <ul class="realestate_navigation">
            <li class="realestate_nav_item realestate_has_sub_menu">
              <a class="realestate_nav_link"
                >Buy <v-icon size="14" class="ml-1"> mdi-menu-right </v-icon></a
              >
              <ul class="realestate_sub_menu">
                <li class="realestate_nav_item">
                  <RouterLink
                    class-active="active"
                    :to="{ name: 'home' }"
                    class="realestate_nav_link"
                    >Home</RouterLink
                  >
                </li>
              </ul>
            </li>
            <li class="realestate_nav_item">|</li>
            <li class="realestate_nav_item">
              <RouterLink
                class-active="active"
                :to="{ name: 'login' }"
                class="realestate_nav_link"
                >Rent</RouterLink
              >
            </li>
            <li class="realestate_nav_item">|</li>
            <li class="realestate_nav_item">
              <RouterLink
                class-active="active"
                :to="{ name: 'login' }"
                class="realestate_nav_link"
                >Agents</RouterLink
              >
            </li>
            <li class="realestate_nav_item">|</li>
            <li class="realestate_nav_item">
              <RouterLink
                class-active="active"
                :to="{ name: 'login' }"
                class="realestate_nav_link"
                >New Projects</RouterLink
              >
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>
</template>

<script setup>
import { isUserLoggedIn } from "../../../../router/utils";
const isLoggedIn = isUserLoggedIn();
</script>
