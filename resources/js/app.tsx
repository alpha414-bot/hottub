import Alpine from "alpinejs";
import "flowbite";
import mixitup from "mixitup";
import React from "react";
import ReactDOM from "react-dom";
import Gallery from "./components/Gallery";
import mixitupmultifilter from "mixitup-multifilter";
import mixitupPagination from "mixitup-pagination";
import "lightgallery/css/lg-thumbnail.css";
import "lightgallery/css/lg-zoom.css";
import "lightgallery/css/lightgallery.css";

declare global {
    interface Window {
        mixitup: typeof mixitup;
    }
}
mixitup.use(mixitupmultifilter);
mixitup.use(mixitupPagination);
window.mixitup = mixitup;
Alpine.start();
if (document.getElementById("product-image-gallery")) {
    const element = document.getElementById("product-image-gallery");
    const img = element?.getAttribute("data-images");
    const directory = element?.getAttribute("data-directory");
    const thumbnailPosition = (element?.getAttribute(
        "data-thumbnail-position"
    ) || "bottom") as any;
    const lightbox = element?.getAttribute("data-lightbox") || false;
    ReactDOM.render(
        <Gallery {...{ img, directory, thumbnailPosition, lightbox }} />,
        document.getElementById("product-image-gallery")
    );
}
