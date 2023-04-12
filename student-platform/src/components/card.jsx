import React from 'react';

export default function Card({imageSrc, text}) {
    return(
        <div className="flex flex-col items-center gap-14 max-w-sm px-6 py-16 bg-white border border-gray-200 rounded-lg cursor-pointer shadow hover:bg-gray-100">
            <img src= {imageSrc} alt="icon" />
            <p className='font-black text-4xl'>{text}</p>
        </div>
    )
}