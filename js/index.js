import {
    initializeNavbarResponsive,
    navbarLinksActive,
} from "./module/navbarModule.js";
import { initializeSwipersIndex } from "./module/swiperModule.js";
import { belanjaModule, deleteOrder } from "./module/belanjaModule.js";

initializeNavbarResponsive();

navbarLinksActive();

initializeSwipersIndex();

belanjaModule();

deleteOrder();

// this is no longer used
// sendOrder();
