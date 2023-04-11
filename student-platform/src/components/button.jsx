import React from 'react';

export default function Button ({value, event}) {
    return (
        <button className='bg-brandRed rounded-xl py-2 px-8 text-3xl text-white font-semibold' onClick={event}>{value}</button>
    )
}