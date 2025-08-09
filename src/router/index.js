import {createRouter, createWebHashHistory, createWebHistory} from 'vue-router';
import HomeView from '../views/HomeView.vue';
import PolicyView from '@/views/PolicyView.vue';
import OfferView from '@/views/OfferView.vue';
import Reports from "@/components/pages/Reports.vue";
import Docs from '@/components/pages/Docs.vue';
import Help from '@/components/pages/help/Help.vue';
import News from "@/components/pages/News.vue";
import Wards from "@/components/pages/Wards.vue";

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
  },
  {
    path: '/reports',
    name: 'reports',
    component: Reports
  },
  {
    path: '/docs',
    name: 'docs',
    component: Docs
  },
  {
    path: '/help',
    name: 'help',
    component: Help
  },
  {
    path: '/news',
    name: 'news',
    component: News
  },
  {
    path: '/wards',
    name: 'wards',
    component: Wards
  }
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
});

export default router;