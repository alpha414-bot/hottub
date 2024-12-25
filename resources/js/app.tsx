import Alpine from "alpinejs";
import "flowbite";

import React from "react";
import ReactDOM from "react-dom";
import Gallery from "./components/Gallery";

// window.Alpine = Alpine;

Alpine.start();
if (document.getElementById("product-image-gallery")) {
    const element = document.getElementById("product-image-gallery");
    const img = element?.getAttribute("data-images");
    const directory = element?.getAttribute("data-directory");
    ReactDOM.render(
        <Gallery {...{ img, directory }} />,
        document.getElementById("product-image-gallery")
    );
}