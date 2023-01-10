import jwtDefaultConfig from './jwtDefaultConfig'
import router from '@/router'
import store from '@/store'


export default class JwtService {
  // Will be used by this service for making API calls
  axiosIns = null

  // jwtConfig <= Will be used by this service
  jwtConfig = { ...jwtDefaultConfig }

  // For Refreshing Token
  isAlreadyFetchingAccessToken = false

  // For Refreshing Token
  subscribers = []

  constructor(axiosIns, jwtOverrideConfig) {
    this.axiosIns = axiosIns
    this.jwtConfig = { ...this.jwtConfig, ...jwtOverrideConfig }

    // Request Interceptor
    this.axiosIns.interceptors.request.use(
      config => {
        // Get token from localStorage
        const accessToken = this.getToken()

        // If token is present add it to request's Authorization Header
        if (accessToken) {
          // eslint-disable-next-line no-param-reassign
          config.headers.Authorization = `${this.jwtConfig.tokenType} ${accessToken}`
        }
        return config
      },
      error => Promise.reject(error),
    )

    // Add request/response interceptor
    this.axiosIns.interceptors.response.use(
      response => response,
      error => {
        const { config, response } = error
        const originalRequest = config


        if (response && response.status === 401) {
        //   store.commit('app/UPDATE_IS_LOGOUT_ON_401', true)
          this.logoutFromLocal()

          // if (!this.isAlreadyFetchingAccessToken) {
          //   this.isAlreadyFetchingAccessToken = true
          //   this.refreshToken().then(r => {
          //     this.isAlreadyFetchingAccessToken = false

          //     // Update accessToken in localStorage
          //     this.setToken(r.data.accessToken)
          //     this.setRefreshToken(r.data.refreshToken)

          //     this.onAccessTokenFetched(r.data.accessToken)
          //   })
          // }
          // const retryOriginalRequest = new Promise(resolve => {
          //   this.addSubscriber(accessToken => {
          //     // Make sure to assign accessToken according to your response.
          //     // Check: https://pixinvent.ticksy.com/ticket/2413870
          //     // Change Authorization header
          //     originalRequest.headers.Authorization = `${this.jwtConfig.tokenType} ${accessToken}`
          //     resolve(this.axiosIns(originalRequest))
          //   })
          // })
          // return retryOriginalRequest
        }
        return Promise.reject(error)
      },
    )
  }

  onAccessTokenFetched(accessToken) {
    this.subscribers = this.subscribers.filter(callback => callback(accessToken))
  }

  addSubscriber(callback) {
    this.subscribers.push(callback)
  }

  getToken() {
    return localStorage.getItem(this.jwtConfig.storageTokenKeyName)
  }

  getRememberMe() {
    return JSON.parse(localStorage.getItem('rememberMe'))
  }

  setToken(value) {
    console.log('token set now------------------')
    console.log(value)
    localStorage.setItem(this.jwtConfig.storageTokenKeyName, value)
  }

  login(...args) {
    return this.axiosIns.post(this.jwtConfig.loginEndpoint, ...args)
  }

  register(...args) {
    return this.axiosIns.post(this.jwtConfig.registerEndpoint, ...args)
  }

  forgotPassword(...args) {
    return this.axiosIns.post(this.jwtConfig.forgotPasswordEndpoint, ...args)
  }
  resetPassword(...args) {
    return this.axiosIns.post(this.jwtConfig.resetPasswordEndpoint, ...args)
  }
  async logout(...args) {
    await this.axiosIns.post(this.jwtConfig.logoutEndpoint, ...args)
    this.logoutFromLocal()

  }
  logoutFromLocal() {
    console.log('this is the logut from local==========')
    // return true
    localStorage.clear()

    // localStorage.removeItem(this.jwtConfig.storageTokenKeyName)
    // localStorage.removeItem(this.jwtConfig.storageRefreshTokenKeyName)
    // localStorage.removeItem('role')
    // localStorage.removeItem('hash')
    // localStorage.removeItem('step')
    // localStorage.removeItem('isVerified2fa')

    // localStorage.removeItem('id')
    // localStorage.removeItem('acountHealth')

    // // Remove userData from localStorage
    // localStorage.removeItem('userData')

    // // Redirect to login page
    router.push({ name: 'auth-login' })
  }
}
