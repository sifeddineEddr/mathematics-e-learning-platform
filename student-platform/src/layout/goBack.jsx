import React from 'react';

export default function GoBack () {
    return(
        <div dir='rtl' className='flex text-brandRed font-semibold items-center gap-4 cursor-pointer'>
            <img src="/images/arrow.svg" alt="arrow"/>
            <p>العودة إلى الصفحة السابقة</p>
        </div>
    )
}