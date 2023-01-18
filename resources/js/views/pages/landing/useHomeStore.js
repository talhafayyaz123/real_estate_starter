import axios from '@axios'
import { defineStore } from 'pinia'

export const useHomeStore = defineStore('HomeStore', {
  actions: {
    // 👉 Fetch users data
    fetchUsers(params) { return axios.get('/apps/users/list', { params }) },
    fetchProperty(params) { return axios.get('/api/get-properties', { params }) },
    fetchCondos(params) { return axios.get('/api/get-condos', { params }) },
    // 👉 Add User
    addUser(userData) {


      return new Promise((resolve, reject) => {
        axios.post('/apps/users/user', {
          user: userData,
        }).then(response => resolve(response))
          .catch(error => reject(error))
      })
    },
    addProperty(params) {

      return new Promise((resolve, reject) => {
        axios
          .post(`/api/store-property`, params)
          .then((response) => {
            resolve(response);
          })
          .catch((error) => reject(error))
          .finally(() => {
          });
      });
    },
    searchProperty(name) {

      return new Promise((resolve, reject) => {
        axios.get(`/search/properties/${name}`).then(response => resolve(response)).catch(error => reject(error))
      })
    },

    // 👉 fetch single user
    fetchUser(id) {
      return new Promise((resolve, reject) => {
        axios.get(`/apps/users/${id}`).then(response => resolve(response)).catch(error => reject(error))
      })
    },
  },
})
