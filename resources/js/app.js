import './bootstrap';

import '@purge-icons/generated'
//Swiper
import Swiper from 'swiper/bundle';
window.Swiper = Swiper

window.emailjs = emailjs
  emailjs.init("_B3jA8cUozGsY08Lz");

//Alpine and plugins import
import Alpine from 'alpinejs'
import intersect from '@alpinejs/intersect'
import persist from '@alpinejs/persist'
import emailjs from '@emailjs/browser'
import { insertBgImages } from './utils/bg'

import './components'
import './pages'

window.Alpine = Alpine
//Init intersect plugin
Alpine.plugin(intersect)
//Init persist plugin
Alpine.plugin(persist)
//Init Alpine store
Alpine.store('app', {
    init() {
        this.isDark = window.matchMedia('(prefers-color-scheme: dark)').matches
    },
    isDark: Alpine.$persist(false),
    activeApp: Alpine.$persist('dashboard'),
    isSidebarActive: false,
    isSidebarMobileActive: false
})
//Start Alpine
Alpine.start()

document.onreadystatechange = function () {
  if (document.readyState == 'complete') {
    // Replace bg images
    insertBgImages()
  }
}