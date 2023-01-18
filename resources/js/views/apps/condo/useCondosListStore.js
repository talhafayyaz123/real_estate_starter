import axios from '@axios'
import { defineStore } from 'pinia'

export const CondosListStore = defineStore('CondosListStore', {
  actions: {
    // 👉 Fetch users data
    fetchUsers(params) { return axios.get('/apps/users/list', { params }) },
    fetchCondos(params) { return axios.get('/api/condos', { params }) },

    // 👉 Add User
    addUser(userData) {


      return new Promise((resolve, reject) => {
        axios.post('/apps/users/user', {
          user: userData,
        }).then(response => resolve(response))
          .catch(error => reject(error))
      })
    },
    addCondo(params) {

      return new Promise((resolve, reject) => {
        axios
          .post(`/api/condos`, params)
          .then((response) => {
            resolve(response);
          })
          .catch((error) => reject(error))
          .finally(() => {
          });
      });
    },
    deleteCondo(uuid) {
      return new Promise((resolve, reject) => {
        axios
          .delete(`/api/condos/${uuid}`)
          .then((response) => {
            resolve(response);
          })
          .catch((error) => reject(error))
          .finally(() => {
          });
      });
    },
    CondoStatusChange(params) {

      return new Promise((resolve, reject) => {
        axios
          .post(`/api/update-condo-status`, params)
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
