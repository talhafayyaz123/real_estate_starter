import { canNavigate } from '@layouts/plugins/casl'
import { setupLayouts } from 'virtual:generated-layouts'
import { createRouter, createWebHistory } from 'vue-router'
import routes from '~pages'
import { isUserLoggedIn } from './utils'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [

    {
      path: '/',
      redirect: to => {
        const userData = JSON.parse(localStorage.getItem('userData') || '{}')
        const userRole = userData && userData.role ? userData.role : null

        if (userRole === 'admin' || userRole === 'owner'|| userRole === 'dealer')
          return { name: 'dashboards-analytics' }
        if (userRole === 'client')
          return { name: 'access-control' }

        return { name: 'login', query: to.query }
      },
    },
    {
      path: '/home',
      name: 'home',
      component: () => import("@/views/pages/landing/home/index.vue"),
    },
    {
      path: '/home-2',
      name: 'home-2',
      component: () => import("@/views/pages/landing/home/home-2.vue"),
    },
    {
      path: '/home-3',
      name: 'home-3',
      component: () => import("@/views/pages/landing/home/home-3.vue"),
    },
    {
      path: '/property',
      name: 'property',
      component: () => import("@/views/pages/landing/property/property.vue"),
    },
    {
      path: '/property-deal',
      name: 'property-deal',
      component: () => import("@/views/pages/landing/property/propertyDeal.vue"),
    },

    ...setupLayouts(routes),
  ],
})


// Docs: https://router.vuejs.org/guide/advanced/navigation-guards.html#global-before-guards
router.beforeEach(to => {
  const isLoggedIn = isUserLoggedIn()


  if (canNavigate(to)) {
    if (to.meta.redirectIfLoggedIn && isLoggedIn)
      return '/'
  }
  // else {
  //   if (isLoggedIn)
  //     return { name: 'not-authorized' }
  //   else if(to.name !='home')
  //     return { name: 'login', query: { to: to.name !== 'index' ? to.fullPath : undefined } }
  // }
})
export default router
