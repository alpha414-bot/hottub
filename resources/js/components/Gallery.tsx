import _ from "lodash";
import React, { FC, useMemo } from "react";
import ImageGallery from "react-image-gallery";
import "react-image-gallery/styles/css/image-gallery.css";

const Gallery: FC<{
    img: any;
    directory: any;
}> = ({ img, directory }) => {
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

    return (
        <div className="container mx-auto">
            <ImageGallery
                items={images}
                useBrowserFullscreen={false}
                showFullscreenButton={false}
                showPlayButton={false}
                thumbnailPosition="left"
                renderItem={({ original }) => (
                    <div className="relative flex items-start justify-start md:mx-6">
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
        </div>
    );
};

export default Gallery;