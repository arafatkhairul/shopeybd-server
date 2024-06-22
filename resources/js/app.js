import './bootstrap';
// import './assets/css/style.css'
import '../css/app.css';
// import '../css/editor.css;

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import { createPinia } from "pinia";
import AppLayout from './Layouts/AppLayout.vue';
import Table from '@/components/Table/Table.vue';
import Box from '@/components/Box.vue';
import ActionMenu from '@/components/ActionMenu.vue';
import { DropdownMenuItem } from '@/components/ui/dropdown-menu'
import { Button } from '@/components/ui/button'



const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .component('AppLayout',AppLayout)
            .component('Table',Table)
            .component('Box',Box)
            .component('ActionMenu',ActionMenu)
            .component('ActionMenuItem',DropdownMenuItem)
            .component('Button',Button)
            .use(ZiggyVue)
            .use(createPinia())
            .mount(el);
    },
    progress: {
        color: 'red',
    },
});
