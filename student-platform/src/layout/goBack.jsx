import React from 'react';
import { useNavigate } from 'react-router-dom';

export default function GoBack () {
    const navigate = useNavigate()
    return(
        <div dir='rtl' className='flex text-brandRed font-semibold items-center gap-4 cursor-pointer' onClick={()=>navigate(-1)}>
            <img src="/images/arrow.svg" alt="arrow"/>
            <p>العودة إلى الصفحة السابقة</p>
        </div>
    )
}