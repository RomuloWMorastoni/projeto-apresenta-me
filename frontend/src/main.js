import { createApp } from 'vue'
import router from './router'
import App from './app.vue'
import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap"


createApp(App)
  .use(router)
  .mount('#app')