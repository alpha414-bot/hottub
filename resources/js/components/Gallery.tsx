import FsLightbox from "fslightbox-react";
import _ from "lodash";
import React, { FC, useEffect, useMemo, useState } from "react";
import ImageGallery from "react-image-gallery";
import "react-image-gallery/styles/css/image-gallery.css";

interface GalleryInterface {
    img: any;
    directory: any;
    thumbnailPosition?: "top" | "right" | "bottom" | "left" | undefined;
    lightbox?: any;
}

const Gallery: FC<GalleryInterface> = ({
    img,
    directory,
    thumbnailPosition,
    lightbox,
}) => {
    const [toggler, setToggler] = useState(false);
    const [visible, setVisible] = useState(false);

    const images = useMemo(() => {
        const parse_data = JSON.parse(img);
        if (directory) {
            return _.map(parse_data, (img) => ({
                original: `${directory}/${img}`,
                thumbnail: `${directory}/${img}`,
            }));
        }
        return parse_data;
    }, [img, directory]);

    useEffect(() => {
        const element = document.querySelectorAll(".mynavbar");
        if (element) {
            if (visible) {
                element.forEach((el) => {
                    el.classList.remove("z-40");
                });
            } else {
                element.forEach((el) => {
                    el.classList.add("z-40");
                });
            }
        }
    }, [visible]);

    return (
        <div className="container mx-auto">
            <ImageGallery
                {...{
                    items: images,
                    useBrowserFullscreen: false,
                    showFullscreenButton: false,
                    showPlayButton: false,
                    thumbnailPosition,
                }}
                renderItem={({ original }) => (
                    <div
                        onClick={() => {
                            setToggler(!toggler);
                        }}
                        className="relative flex items-start justify-start md:mx-6"
                    >
                        <img src={original} alt="" className="w-full" />
                    </div>
                )}
                renderRightNav={(onClick, disabled) => (
                    <button
                        type="button"
                        onClick={onClick}
                        disabled={disabled}
                        className="bg-white absolute top-2/4 right-4 z-20 bg-zenos-500/60 rounded-full inline !w-auto !p-0 shadow-lg disabled:hidden"
                    >
                        <svg
                            className="w-10 h-10 text-gray-800"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="currentColor"
                                strokeLinecap="round"
                                strokeLinejoin="round"
                                strokeWidth="1.2"
                                d="m10 16 4-4-4-4"
                            />
                        </svg>
                    </button>
                )}
                renderLeftNav={(onClick, disabled) => (
                    <button
                        type="button"
                        onClick={onClick}
                        disabled={disabled}
                        className="bg-white absolute top-2/4 left-4 z-20 bg-zenos-500/60 rounded-full inline !w-auto !p-0 shadow-lg disabled:hidden"
                    >
                        <svg
                            className="w-10 h-10 text-gray-800"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="currentColor"
                                strokeLinecap="round"
                                strokeLinejoin="round"
                                strokeWidth="1.2"
                                d="m14 8-4 4 4 4"
                            />
                        </svg>
                    </button>
                )}
            />
            {lightbox && (
                <div className="relative z-50">
                    <FsLightbox
                        toggler={!!toggler}
                        onOpen={() => setVisible(true)}
                        onClose={() => setVisible(false)}
                        sources={_.map(images, "original")}
                        thumbs={_.map(images, "thumbnail")}
                    />
                </div>
            )}
        </div>
    );
};

export default Gallery;
