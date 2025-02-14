import './bootstrap';
import '../css/app.css';
import { createApp, h } from 'vue'
import { createInertiaApp, Head, Link } from '@inertiajs/vue3'
import PrimeVue from 'primevue/config';
import Layout from "./Layouts/Layout.vue";
import { ZiggyVue } from '../../vendor/tightenco/ziggy';


import Aura from '@primevue/themes/aura';
// import Lara from "@/presets/lara"


createInertiaApp({
  title:(title) => `E-report | ${title}`,
  resolve: (name) => {
    const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
    // let page = pages[`./Pages/${name}.vue`];
    // page.default.layout = pages.default.layout || Layout;
    // return page;
    // const page = pages[`./Pages/${name}.vue`];

    // Ensure page and page.default exist before setting layout
    // if (page && page.default) {
    //   page.default.layout = page.default.layout || Layout;
    // }

    // return page;
    return pages[`./Pages/${name}.vue`]
  },

  
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(PrimeVue,{
        theme: {
          preset: Aura,
          options: {
            darkModeSelector: '[data-theme="light"]',
            cssLayer:false
        }
      }
      })
      .use(ZiggyVue)
      .use(plugin)
      .component('Head', Head)
      .component('Link', Link)
      .mount(el)
  },
  progress: {
    color:"red",
    includeCSS: true,
    showSpinner: true
  }
})