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
              :to="{ name: 'condo-finder' }"
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
              :to="{ name: 'blogs' }"
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
            <RouterLink :to="{ name: 'login' }" v-if="!isLoggedIn" class="">
              login
            </RouterLink>
            <RouterLink :to="{name: 'register'}" v-if="!isLoggedIn" class="sign_btn">Signup</RouterLink>
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
                :to="{ name: 'brokers' }"
                class="realestate_nav_link"
                >Agents</RouterLink
              >
            </li>
            <li class="realestate_nav_item">|</li>
            <li class="realestate_nav_item">
              <RouterLink
                class-active="active"
                :to="{ name: 'contact' }"
                class="realestate_nav_link"
                >Contact</RouterLink
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
