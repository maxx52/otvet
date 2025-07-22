import { createRouter, createWebHistory } from 'vue-router';
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

const baseUrl = import.meta.env ? import.meta.env.BASE_URL : '/';

const router = createRouter({
  history: createWebHistory(baseUrl),
  routes
});

export default router;