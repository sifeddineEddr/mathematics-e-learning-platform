import React from 'react';
import Logo from '../layout/logo';
import GoBack from '../layout/goBack';
import Card from '../components/card';

export default function Lesson () {
    return(
        <div dir='rtl' className='w-full h-screen bg-brandSoftBrown p-8 px-4'>
            <Logo />
            <div  className='pt-16'>
            <GoBack/>
            <div className="flex flex-col items-center gap-12 justify-center mt-8 sm:flex-row sm:gap-40">
            <Card imageSrc={"/images/video-player.svg"} text={"أكتشف الدرس"}/>
            <Card imageSrc={"/images/exercises-explorer.svg"} text={"أقوم مكتسباتي"}/>
            </div>
            </div>
        </div>
    )
}