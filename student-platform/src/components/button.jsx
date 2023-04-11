import React from 'react';

export default function Button ({value, event}) {
    return (
        <button
            className='bg-brandRed rounded-xl py-1 px-4 text-lg text-white font-semibold sm:px-8 sm:py-2 sm:text-2xl'
            onClick={event}
        >
            {value}
        </button>
    )
}