import { createMemoryHistory, createRouter } from 'vue-router'

import Login from './components/LoginComponent.vue'
import Dashboard from './components/DashboardComponent.vue'
import Inclusao from './components/Inclusao.vue'

const routes = [
  { path: '/', name: 'login', component: Login },
  { path: '/dashboard', name: 'dashboard', component: Dashboard },
  { path: '/inclusao', name: 'inclusao', component: Inclusao },
]

const router = createRouter({
  history: createMemoryHistory(),
  routes,
})

export default router