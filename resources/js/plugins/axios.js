import axios from 'axios'

const axiosIns = axios.create({
// You can add your headers here
// ================================
 //baseURL: 'http://127.0.0.1:8000/',
 baseURL: 'https://future-estate.talhafayyaz.com/',
 // timeout: 1000,
// headers: {'X-Custom-Header': 'foobar'}
})
axiosIns.interceptors.request.use( function (config) {

    const token = localStorage.getItem('accessToken');
    const tokenType = "Bearer"


    if (token) {
      config.headers['Authorization'] = `${tokenType} ${token}`;
    }

    return config;
  },

  (error) => {
    return Promise.reject(error);
  }
);

export default axiosIns
