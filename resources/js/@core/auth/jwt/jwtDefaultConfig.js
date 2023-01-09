export default {
    // Endpoints
    loginEndpoint: '/login',
    registerEndpoint: '/register',
    logoutEndpoint: '/logout',
    forgotPasswordEndpoint: '/forgot-password',
    resetPasswordEndpoint: '/reset-password',
  
    // This will be prefixed in authorization header with token
    // e.g. Authorization: Bearer <token>
    tokenType: 'Bearer',
  
    // Value of this property will be used as key to store JWT token in storage
    storageTokenKeyName: 'accessToken',
  }
  