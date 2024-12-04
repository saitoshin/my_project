import * as Vue from "vue";
import { ref } from "vue";

const application = {
    setup() {
        console.log("vue initialized.");
        return {};
    },
};

try {
    let mainElement = document.getElementsByTagName("main")[0];
    Vue.createApp(application).mount(mainElement);
} catch (e) {}