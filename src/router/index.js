import {createRouter, createWebHashHistory, createWebHistory} from 'vue-router';
import HomeView from '../views/HomeView.vue';
import PolicyView from '@/views/PolicyView.vue';
import OfferView from '@/views/OfferView.vue';

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/policy',
    name: 'policy',
    component: PolicyView
  },
  {
    path: '/offer',
    name: 'offer',
    component: OfferView
  }
];

const router = createRouter({
  history: createWebHashHistory(process.env.BASE_URL),
  routes
});

export default router;