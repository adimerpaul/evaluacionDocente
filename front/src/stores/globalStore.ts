import { defineStore } from 'pinia'

export const globalStore = defineStore('global', {
  state: () => ({
    counter: 0,
    user: {},
    eventNumber: 0,
    isLoggedIn: !!localStorage.getItem('tokenEnc'),

    booluser: false,
    booldoc: false,
    boolmat: false,
    boolasig: false,
    boolest: false,
    boolimp: false
  }),
  getters: {
    doubleCount: (state) => state.counter * 2
  },
  actions: {
    increment () {
      this.counter++
    }
  }
})
